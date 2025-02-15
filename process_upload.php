<?php

require_once __DIR__ . '/includes/autoload.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['adif_file'])) {
    $file = $_FILES['adif_file'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(["error" => "File upload failed."]);
        exit;
    }

    $fileContent = file_get_contents($file['tmp_name']);

    require_once __DIR__ . '/includes/adif_processor.php';
    $result = processAdif($fileContent);

    $uniqueAddresses = $result['uniqueAddressCount'];
    $callsign = $result['callsign'];

    // Determine award tier
    $awardTier = "Cardboard Box";
    $tiers = [
        1000000 => "Mansion",
        500000 => "Victorian Villa",
        250000 => "Country Cottage",
        100000 => "Townhouse",
        10000 => "Detached House",
        1000  => "Semi-Detached House",
        500  => "Terraced House",
        100  => "Bedsit"
    ];

    foreach ($tiers as $threshold => $tier) {
        if ($uniqueAddresses >= $threshold) {
            $awardTier = $tier;
            break;
        }
    }

    // Return JSON response
    echo json_encode([
        "unique_addresses" => $uniqueAddresses,
        "award_tier" => $awardTier,
        "callsign" => $callsign
    ]);
    // Save the uploaded ADIF file to the uploads directory
    $uploadsDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0777, true);
    }

    $filename = $callsign . '_' . date('Ymd_His') . '.adif';
    $filePath = $uploadsDir . $filename;

    file_put_contents($filePath, $fileContent);
    exit;
}

