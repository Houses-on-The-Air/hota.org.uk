<?php

require_once __DIR__ . '/includes/autoload.php';

header('Content-Type: application/json');

// Error reporting for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Make sure ConfigManager is loaded
if (!class_exists('ConfigManager')) {
    error_log("ConfigManager class not found. Check autoload.php");
    http_response_code(500);
    echo json_encode(["error" => "ConfigManager class not found. Check autoload.php"]);
    exit;
}

// Ensure ConfigManager is initialized
ConfigManager::load();

/**
 * Determine award tier based on unique address count
 *
 * @param int $uniqueAddresses Number of unique addresses
 * @return string Award tier name
 */
function determineAwardTier($uniqueAddresses) {
    // Use tiers from ConfigManager instead of hardcoding
    $tiers = ConfigManager::get('award_tiers');

    // If tiers aren't available, use default fallback
    if (empty($tiers)) {
        $tiers = [
            1000000 => "Mansion",
            500000 => "Victorian Villa",
            250000 => "Country Cottage",
            100000 => "Townhouse",
            10000 => "Detached House",
            1000 => "Semi-Detached House",
            500 => "Terraced House",
            100 => "Bedsit",
            0 => "Cardboard Box"
        ];
    }

    // Sort tiers by threshold in descending order to ensure proper evaluation
    krsort($tiers);

    foreach ($tiers as $threshold => $tier) {
        if ($uniqueAddresses >= $threshold) {
            return $tier;
        }
    }

    // Default tier (should never reach here since we have a 0 threshold)
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

    // Create directory if it doesn't exist
    if (!is_dir($uploadsDir) && !mkdir($uploadsDir, 0755, true)) {
        error_log("Failed to create uploads directory: $uploadsDir");
        return false;
    }

    // Sanitize callsign for filename
    $sanitizedCallsign = preg_replace('/[^a-zA-Z0-9]/', '', $callsign);
    $filename = $sanitizedCallsign . '_' . date('Ymd_His') . '.adif';
    $filePath = $uploadsDir . $filename;

    // Write file with exclusive lock
    if (file_put_contents($filePath, $content, LOCK_EX) === false) {
        error_log("Failed to write file: $filePath");
        return false;
    }

    return $filePath;
}

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["error" => "Only POST method is allowed"]);
    exit;
}

// Check if file was uploaded
if (!isset($_FILES['adif_file'])) {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "No file uploaded"]);
    exit;
}

// Get file information
$file = $_FILES['adif_file'];

// Check for file upload errors
if ($file['error'] !== UPLOAD_ERR_OK) {
    $errorMessages = [
        UPLOAD_ERR_INI_SIZE => "File exceeds upload_max_filesize directive in php.ini",
        UPLOAD_ERR_FORM_SIZE => "File exceeds MAX_FILE_SIZE directive in the HTML form",
        UPLOAD_ERR_PARTIAL => "File was only partially uploaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded",
        UPLOAD_ERR_NO_TMP_DIR => "Missing temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
    ];

    $errorMessage = isset($errorMessages[$file['error']])
        ? $errorMessages[$file['error']]
        : "Unknown upload error code: " . $file['error'];

    http_response_code(400);
    echo json_encode(["error" => $errorMessage]);
    exit;
}

// Validate file size (5MB max)
$maxFileSize = 5 * 1024 * 1024; // 5MB in bytes
if ($file['size'] > $maxFileSize) {
    http_response_code(400);
    echo json_encode(["error" => "File size exceeds the limit of 5MB"]);
    exit;
}

// Validate file type
$allowedTypes = ['application/octet-stream', 'text/plain', ''];
$fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if (!in_array($file['type'], $allowedTypes) && !in_array($fileExtension, ['adi', 'adif'])) {
    http_response_code(400);
    echo json_encode(["error" => "Only ADIF files (.adi, .adif) are allowed"]);
    exit;
}

try {
    // Get file content
    $fileContent = file_get_contents($file['tmp_name']);
    if ($fileContent === false) {
        throw new Exception("Failed to read file content");
    }

    // Check if file is empty
    if (empty($fileContent)) {
        throw new Exception("File is empty");
    }

    // Process the ADIF file
    require_once __DIR__ . '/includes/adif_processor.php';
    $result = processAdif($fileContent);

    if (isset($result['error'])) {
        throw new Exception($result['error']);
    }

    if (!isset($result['uniqueAddressCount'])) {
        throw new Exception("Processing failed: No unique addresses found");
    }

    $uniqueAddresses = $result['uniqueAddressCount'];
    $callsign = $result['callsign'] ?: 'Unknown';
    $awardTier = determineAwardTier($uniqueAddresses);

    // Save the file
    $filePath = saveUploadedFile($fileContent, $callsign);

    // Return JSON response
    echo json_encode([
        "unique_addresses" => $uniqueAddresses,
        "award_tier" => $awardTier,
        "callsign" => $callsign,
        "file_saved" => $filePath !== false
    ]);

} catch (Exception $e) {
    error_log("ADIF processing error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}

