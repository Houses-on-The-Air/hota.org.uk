<?php

function processAdif($fileContent) {
    $uniqueAddresses = [];

    // Extract address fields
    $lines = explode("\n", $fileContent);
    foreach ($lines as $line) {
        if (preg_match('/<ADDRESS:([0-9]+)>([^<]+)/i', $line, $matches)) {
            $uniqueAddresses[$matches[2]] = true;
        }
    }

    return count($uniqueAddresses);
}

?>
