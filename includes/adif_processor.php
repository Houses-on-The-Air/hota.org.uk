<?php

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
        if (preg_match('/<ADDRESS:([0-9]+)>([^<]+)/i', $line, $matches)) {
            $uniqueAddresses[$matches[2]] = true;
        }
        if (preg_match('/<STATION_CALLSIGN:([0-9]+)>([^<]+)/i', $line, $matches)) {
            $callsign = $matches[2];
        }
    }

    return [
        'uniqueAddressCount' => count($uniqueAddresses),
        'callsign' => $callsign
    ];
}

?>
