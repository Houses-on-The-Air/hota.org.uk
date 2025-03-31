<?php

/**
 * Process an ADIF file to extract unique addresses and callsign
 *
 * @param string $fileContent The content of the ADIF file
 * @return array Associative array with error message or processed data
 */
function processAdif($fileContent) {
    // Validate input
    if (empty($fileContent)) {
        return [
            'error' => 'Empty file content'
        ];
    }

    // Normalize line endings
    $fileContent = str_replace(["\r\n", "\r"], "\n", $fileContent);

    // Check if the file has ADIF header markers
    $hasEoh = (stripos($fileContent, '<EOH>') !== false);
    $hasEor = (stripos($fileContent, '<EOR>') !== false);

    if (!$hasEoh && !$hasEor) {
        return [
            'error' => 'Invalid ADIF file format: missing EOH/EOR markers'
        ];
    }

    $uniqueAddresses = [];
    $specialHouses = [];
    $callsign = '';
    $qsoCount = 0;
    $activations = [];
    $dateRange = ['start' => null, 'end' => null];

    // Extract STATION_CALLSIGN or MY_CALLSIGN field - typically only appears once in the file
    if (preg_match('/<STATION_CALLSIGN:(\d+)>([^<\s]+)/i', $fileContent, $matches)) {
        $callsignLength = (int)$matches[1];
        $callsign = trim(substr($matches[2], 0, $callsignLength));
    } elseif (preg_match('/<MY_CALLSIGN:(\d+)>([^<\s]+)/i', $fileContent, $matches)) {
        $callsignLength = (int)$matches[1];
        $callsign = trim(substr($matches[2], 0, $callsignLength));
    }

    // If we couldn't find callsign from file metadata, try to get it from individual QSOs
    if (empty($callsign) && preg_match_all('/<OPERATOR:(\d+)>([^<\s]+)/i', $fileContent, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $opLength = (int)$match[1];
            $callsign = trim(substr($match[2], 0, $opLength));
            if (!empty($callsign)) break;
        }
    }

    // Extract QSO records for processing
    $qsoPattern = '/<(EOR|EOT)>.*?<(EOR|EOT)>/is';
    preg_match_all($qsoPattern, $fileContent, $qsoMatches);

    // If no matches found using the above pattern, try an alternative approach
    if (empty($qsoMatches[0])) {
        // Split the file content by EOR/EOT markers
        $qsoBlocks = preg_split('/<(EOR|EOT)>/i', $fileContent);
        // Remove header block if it exists
        if ($hasEoh) {
            $headerSplit = explode('<EOH>', $fileContent, 2);
            if (count($headerSplit) > 1) {
                $qsoBlocks = preg_split('/<(EOR|EOT)>/i', $headerSplit[1]);
            }
        }
    } else {
        $qsoBlocks = $qsoMatches[0];
    }

    // Track dates for certificate validity
    $earliestDate = null;
    $latestDate = null;

    // Process each QSO block
    foreach ($qsoBlocks as $qso) {
        if (empty(trim($qso))) continue;

        $qsoCount++;

        // Extract address information
        $address = extractFieldFromQso($qso, 'ADDRESS');

        // If no address found, try QTH field
        if (empty($address)) {
            $address = extractFieldFromQso($qso, 'QTH');
        }

        // If we have a valid address, process it
        if (!empty($address)) {
            // Normalize address format
            $address = normalizeAddress($address);

            // Check for special house types/categories
            $houseTypes = detectHouseTypes($address);

            if (!empty($houseTypes)) {
                foreach ($houseTypes as $type) {
                    if (!isset($specialHouses[$type])) {
                        $specialHouses[$type] = [];
                    }
                    $specialHouses[$type][$address] = true;
                }
            }

            // Store only non-empty addresses
            $uniqueAddresses[$address] = true;
        }

        // Check for date information for certificate validity
        $qsoDate = extractFieldFromQso($qso, 'QSO_DATE');
        if ($qsoDate) {
            $dateObj = DateTime::createFromFormat('Ymd', $qsoDate);
            if ($dateObj) {
                $dateFormatted = $dateObj->format('Y-m-d');

                if ($earliestDate === null || $dateFormatted < $earliestDate) {
                    $earliestDate = $dateFormatted;
                }

                if ($latestDate === null || $dateFormatted > $latestDate) {
                    $latestDate = $dateFormatted;
                }
            }
        }

        // Check if this is an activation (HOTA_ACTIVATION field or based on COMMENT/NOTES)
        $isActivation = false;
        $activationAddress = null;

        // Check for explicit HOTA_ACTIVATION field
        $hotaActivation = extractFieldFromQso($qso, 'HOTA_ACTIVATION');
        if ($hotaActivation && strtolower($hotaActivation) === 'true') {
            $isActivation = true;
            $activationAddress = $address;
        }

        // Check COMMENT/NOTES fields for activation indicators
        if (!$isActivation) {
            $comment = extractFieldFromQso($qso, 'COMMENT');
            if (empty($comment)) {
                $comment = extractFieldFromQso($qso, 'NOTES');
            }

            if ($comment && preg_match('/(hota\s+activat|activating\s+hota)/i', $comment)) {
                $isActivation = true;
                $activationAddress = $address;
            }
        }

        // If this is an activation, add to activations list
        if ($isActivation && !empty($activationAddress)) {
            if (!isset($activations[$activationAddress])) {
                $activations[$activationAddress] = 1;
            } else {
                $activations[$activationAddress]++;
            }
        }
    }

    // Validate that we found some addresses
    if (empty($uniqueAddresses)) {
        return [
            'error' => 'No address fields found in the ADIF file. Please ensure your file includes ADDRESS or QTH fields.'
        ];
    }

    // Set date range if found
    if ($earliestDate !== null && $latestDate !== null) {
        $dateRange = [
            'start' => $earliestDate,
            'end' => $latestDate
        ];
    }

    // Calculate awards and certificates eligible for
    $awards = calculateAwards(count($uniqueAddresses), $specialHouses, $activations);

    return [
        'uniqueAddressCount' => count($uniqueAddresses),
        'callsign' => $callsign ?: 'Unknown',
        'addresses' => array_keys($uniqueAddresses), // For potential future use
        'qsoCount' => $qsoCount,
        'specialHouses' => $specialHouses,
        'activations' => $activations,
        'dateRange' => $dateRange,
        'awards' => $awards
    ];
}

/**
 * Extract a specific field value from a QSO record
 *
 * @param string $qso The QSO record
 * @param string $fieldName The field name to extract
 * @return string|null The field value if found, null otherwise
 */
function extractFieldFromQso($qso, $fieldName) {
    if (preg_match("/<$fieldName:(\d+)>(.*?)</i", $qso, $matches)) {
        $fieldLength = (int)$matches[1];
        return trim(substr($matches[2], 0, $fieldLength));
    }
    return null;
}

/**
 * Normalize address format for consistent matching
 *
 * @param string $address The address string
 * @return string Normalized address
 */
function normalizeAddress($address) {
    // Remove extra whitespace and standardize format
    $address = trim(preg_replace('/\s+/', ' ', $address));

    // Convert to title case for consistency
    $address = ucwords(strtolower($address));

    return $address;
}

/**
 * Detect special house types from address string
 *
 * @param string $address The address string
 * @return array List of detected house types
 */
function detectHouseTypes($address) {
    $types = [];
    $addressLower = strtolower($address);

    // Check for special house types based on keywords
    $houseTypesKeywords = [
        'School House' => ['school house', 'schoolhouse'],
        'Mill House' => ['mill house', 'millhouse'],
        'Old House' => ['old house', 'the old house'],
        'White House' => ['white house', 'whitehouse'],
        'Stone House' => ['stone house', 'stonehouse'],
        'Clock House' => ['clock house', 'clockhouse'],
        'Farm House' => ['farm house', 'farmhouse'],
        'Hall House' => ['hall house', 'hallhouse'],
        'Manor House' => ['manor house', 'manorhouse'],
        'Lighthouse House' => ['lighthouse'],
        'Corner House' => ['corner house', 'cornerhouse'],
        'Bridge House' => ['bridge house', 'bridgehouse'],
        'Royal House' => ['royal', 'palace'],
        'Garden House' => ['garden house', 'gardenhouse'],
        'Gate House' => ['gate house', 'gatehouse'],
        'Ferry House' => ['ferry house', 'ferryhouse'],
        'Water House' => ['water house', 'waterhouse'],
        'Valley House' => ['valley house', 'valleyhouse'],
        'Lake House' => ['lake house', 'lakehouse'],
        'River House' => ['river house', 'riverhouse']
    ];

    foreach ($houseTypesKeywords as $type => $keywords) {
        foreach ($keywords as $keyword) {
            if (strpos($addressLower, $keyword) !== false) {
                $types[] = $type;
                break;
            }
        }
    }

    return $types;
}

/**
 * Calculate eligible awards based on unique address count and special houses
 *
 * @param int $addressCount Number of unique addresses
 * @param array $specialHouses Special house categories
 * @param array $activations Activation data
 * @return array List of eligible awards and certificates
 */
function calculateAwards($addressCount, $specialHouses, $activations) {
    $awards = [];

    // Hunter awards based on unique address count
    $hunterTiers = [
        'Cardboard Box' => 10,
        'Bedsit' => 100,
        'Terraced House' => 500,
        'Semi-Detached House' => 1000,
        'Detached House' => 10000,
        'Townhouse' => 100000,
        'Country Cottage' => 250000,
        'Victorian Villa' => 500000,
        'Mansion' => 1000000
    ];

    // Check hunter awards
    foreach ($hunterTiers as $tier => $required) {
        if ($addressCount >= $required) {
            $awards['hunter'][] = [
                'name' => $tier,
                'count' => $addressCount,
                'required' => $required
            ];
        }
    }

    // Activator awards based on number of different locations activated
    $activatorTiers = [
        'House Explorer' => 5,
        'House Keeper' => 25,
        'House Steward' => 100,
        'Estate Manager' => 500
    ];

    $activationCount = count($activations);

    // Check activator awards
    if ($activationCount > 0) {
        foreach ($activatorTiers as $tier => $required) {
            if ($activationCount >= $required) {
                $awards['activator'][] = [
                    'name' => $tier,
                    'count' => $activationCount,
                    'required' => $required
                ];
            }
        }
    }

    // Specialist awards for special house types
    $specialistRequirements = [
        'School Scholar' => ['type' => 'School House', 'count' => 10],
        'Miller' => ['type' => 'Mill House', 'count' => 10],
        'Historian' => ['type' => 'Old House', 'count' => 20],
        'White Collector' => ['type' => 'White House', 'count' => 15],
        'Stone Mason' => ['type' => 'Stone House', 'count' => 10],
        'Time Keeper' => ['type' => 'Clock House', 'count' => 5],
        'Farmer' => ['type' => 'Farm House', 'count' => 25],
        'Hall Monitor' => ['type' => 'Hall House', 'count' => 15],
        'Lord of the Manor' => ['type' => 'Manor House', 'count' => 10],
        'Light Keeper' => ['type' => 'Lighthouse House', 'count' => 5],
        'Royal Visitor' => ['type' => 'Royal House', 'count' => 10],
        'Gardener' => ['type' => 'Garden House', 'count' => 10],
        'Gatekeeper' => ['type' => 'Gate House', 'count' => 5]
    ];

    // Check specialist awards
    foreach ($specialistRequirements as $award => $req) {
        $type = $req['type'];
        $requiredCount = $req['count'];

        if (isset($specialHouses[$type]) && count($specialHouses[$type]) >= $requiredCount) {
            $awards['specialist'][] = [
                'name' => $award,
                'type' => $type,
                'count' => count($specialHouses[$type]),
                'required' => $requiredCount
            ];
        }
    }

    // Certificate availability
    $certificates = [];

    // Basic certificate for all participants
    $certificates[] = [
        'type' => 'participation',
        'name' => 'HOTA Participation Certificate',
        'description' => 'For participating in the Houses on the Air program'
    ];

    // Hunter certificates
    if (isset($awards['hunter']) && count($awards['hunter']) > 0) {
        $highestHunterTier = end($awards['hunter']);
        $certificates[] = [
            'type' => 'hunter',
            'name' => $highestHunterTier['name'] . ' Hunter Certificate',
            'description' => 'For contacting ' . $highestHunterTier['count'] . ' unique house addresses'
        ];
    }

    // Activator certificates
    if (isset($awards['activator']) && count($awards['activator']) > 0) {
        $highestActivatorTier = end($awards['activator']);
        $certificates[] = [
            'type' => 'activator',
            'name' => $highestActivatorTier['name'] . ' Certificate',
            'description' => 'For activating ' . $highestActivatorTier['count'] . ' unique house addresses'
        ];
    }

    // Specialist certificates
    if (isset($awards['specialist']) && count($awards['specialist']) > 0) {
        foreach ($awards['specialist'] as $specialistAward) {
            $certificates[] = [
                'type' => 'specialist',
                'name' => $specialistAward['name'] . ' Certificate',
                'description' => 'For ' . $specialistAward['count'] . ' ' . $specialistAward['type'] . ' contacts'
            ];
        }
    }

    $awards['certificates'] = $certificates;

    return $awards;
}
?>
