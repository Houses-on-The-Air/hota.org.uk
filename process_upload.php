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
    $uniqueAddresses = processAdif($fileContent);

    // Determine award tier
    $awardTier = "No award";
    if ($uniqueAddresses >= 1000000) {
        $awardTier = "Gold";
    } elseif ($uniqueAddresses >= 1000) {
        $awardTier = "Silver";
    } elseif ($uniqueAddresses >= 100) {
        $awardTier = "Bronze";
    }

    // Return JSON response
    echo json_encode([
        "unique_addresses" => $uniqueAddresses,
        "award_tier" => $awardTier
    ]);
    exit;
}

echo json_encode(["error" => "Invalid request."]);
?>
