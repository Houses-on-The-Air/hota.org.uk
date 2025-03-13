<?php

/**
 * Process an ADIF file to extract unique addresses and callsign
 *
 * @param string $fileContent The content of the ADIF file
 * @return array Associative array with error message or processed data
 */
function processAdif($fileContent) {
    // Check if the file contains the ADIF header
    if (stripos($fileContent, '<EOH>') === false) {
        return [
            'error' => 'Invalid ADIF file'
        ];
    }

    $uniqueAddresses = [];
    $callsign = '';

    // Extract address fields and callsign
    $lines = explode("\n", $fileContent);
    foreach ($lines as $line) {
        // Extract address field
        if (preg_match('/<ADDRESS:([0-9]+)>([^<]+)/i', $line, $matches)) {
            $uniqueAddresses[trim($matches[2])] = true;
        }
        // Extract callsign field
        if (empty($callsign) && preg_match('/<STATION_CALLSIGN:([0-9]+)>([^<]+)/i', $line, $matches)) {
            $callsign = trim($matches[2]);
        }
    }

    return [
        'uniqueAddressCount' => count($uniqueAddresses),
        'callsign' => $callsign ?: 'Unknown'
    ];
}
?>
