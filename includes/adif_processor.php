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
    $callsign = '';

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

    // Extract address fields from QSO records
    if (preg_match_all('/<ADDRESS:(\d+)>([^<]+)/i', $fileContent, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $addressLength = (int)$match[1];
            $address = trim(substr($match[2], 0, $addressLength));

            // Store only non-empty addresses
            if (!empty($address)) {
                $uniqueAddresses[$address] = true;
            }
        }
    }

    // If no addresses found, try an alternative approach - look for QTH fields
    if (empty($uniqueAddresses)) {
        if (preg_match_all('/<QTH:(\d+)>([^<]+)/i', $fileContent, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $qthLength = (int)$match[1];
                $qth = trim(substr($match[2], 0, $qthLength));

                // Store only non-empty QTH values as addresses
                if (!empty($qth)) {
                    $uniqueAddresses[$qth] = true;
                }
            }
        }
    }

    // Validate that we found some addresses
    if (empty($uniqueAddresses)) {
        return [
            'error' => 'No address fields found in the ADIF file. Please ensure your file includes ADDRESS or QTH fields.'
        ];
    }

    return [
        'uniqueAddressCount' => count($uniqueAddresses),
        'callsign' => $callsign ?: 'Unknown',
        'addresses' => array_keys($uniqueAddresses) // For potential future use
    ];
}
?>
