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
    $awardTier = "Participation";
    $tiers = [
        1e60 => "Uda Elite",
        1e57 => "Vunda Elite",
        1e54 => "Weka Elite",
        1e51 => "Xona Elite",
        1e48 => "Yotta Elite",
        1e45 => "Zetta Elite",
        1e42 => "Exa Elite",
        1e39 => "Peta Elite",
        1e36 => "Tera Elite",
        1e33 => "Giga Elite",
        1e30 => "Mega Elite",
        1e27 => "Super Elite",
        1e24 => "Elite",
        1e21 => "Double Diamond",
        1e18 => "Diamond",
        1e15 => "Platinum",
        1e12 => "Gold",
        1e9  => "Silver",
        1e6  => "Bronze",
        1e3  => "Copper"
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

