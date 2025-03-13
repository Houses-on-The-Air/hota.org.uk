<?php

require_once __DIR__ . '/includes/autoload.php';

header('Content-Type: application/json');

/**
 * Determine award tier based on unique address count
 *
 * @param int $uniqueAddresses Number of unique addresses
 * @return string Award tier name
 */
function determineAwardTier($uniqueAddresses) {
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
            return $tier;
        }
    }

    return "Cardboard Box";
}

/**
 * Save uploaded ADIF file with proper validation
 *
 * @param string $content File content
 * @param string $callsign Callsign for filename
 * @return string|bool Filepath on success, false on failure
 */
function saveUploadedFile($content, $callsign) {
    $uploadsDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadsDir)) {
        if (!mkdir($uploadsDir, 0777, true)) {
            return false;
        }
    }

    $sanitizedCallsign = preg_replace('/[^a-zA-Z0-9]/', '', $callsign);
    $filename = $sanitizedCallsign . '_' . date('Ymd_His') . '.adif';
    $filePath = $uploadsDir . $filename;

    return file_put_contents($filePath, $content) !== false ? $filePath : false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['adif_file'])) {
    $file = $_FILES['adif_file'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(["error" => "File upload failed with error code: " . $file['error']]);
        exit;
    }

    // Get file content
    $fileContent = file_get_contents($file['tmp_name']);
    if ($fileContent === false) {
        echo json_encode(["error" => "Failed to read file content."]);
        exit;
    }

    // Process the ADIF file
    require_once __DIR__ . '/includes/adif_processor.php';
    $result = processAdif($fileContent);

    if (isset($result['error'])) {
        echo json_encode(["error" => $result['error']]);
        exit;
    }

    $uniqueAddresses = $result['uniqueAddressCount'];
    $callsign = $result['callsign'];
    $awardTier = determineAwardTier($uniqueAddresses);

    // Save the file
    $fileSaved = saveUploadedFile($fileContent, $callsign);

    // Return JSON response
    echo json_encode([
        "unique_addresses" => $uniqueAddresses,
        "award_tier" => $awardTier,
        "callsign" => $callsign,
        "file_saved" => $fileSaved !== false
    ]);
    exit;
} else {
    echo json_encode(["error" => "Invalid request. POST method and ADIF file required."]);
    exit;
}

