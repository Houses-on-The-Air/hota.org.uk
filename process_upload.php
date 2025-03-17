<?php

require_once __DIR__ . '/includes/autoload.php';

// Set maximum execution time for processing large files
ini_set('max_execution_time', 300); // 5 minutes
ini_set('memory_limit', '256M'); // Increase memory limit

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

// Include error handler
require_once __DIR__ . '/classes/ErrorHandler.php';

// Process the file upload
header('Content-Type: application/json');

try {
    // Check if file was uploaded
    if (!isset($_FILES['adif_file']) || $_FILES['adif_file']['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('File upload failed or no file was uploaded.');
    }

    $file = $_FILES['adif_file'];

    // Validate file extension
    $allowedExtensions = ['adi', 'adif'];
    $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExt, $allowedExtensions)) {
        throw new Exception('Only .adi and .adif files are allowed.');
    }

    // Validate file size (5MB max)
    $maxSize = 5 * 1024 * 1024; // 5 MB
    if ($file['size'] > $maxSize) {
        throw new Exception('File size exceeds the maximum limit of 5MB.');
    }

    // Create upload directory if it doesn't exist
    $uploadDir = __DIR__ . '/uploads';
    if (!file_exists($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            throw new Exception('Failed to create upload directory.');
        }
    }

    // Generate unique filename to prevent overwrites
    $uniqueFilename = uniqid() . '_' . $file['name'];
    $uploadFilePath = $uploadDir . '/' . $uniqueFilename;

    // Move uploaded file
    if (!move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
        throw new Exception('Failed to save the uploaded file.');
    }

    // Process the ADIF file (parse and count unique addresses)
    $adifContent = file_get_contents($uploadFilePath);

    // Simple check to validate it's an ADIF file
    if (strpos($adifContent, '<ADIF_VER') === false && strpos($adifContent, '<EOH>') === false) {
        unlink($uploadFilePath); // Clean up invalid file
        throw new Exception('The uploaded file is not a valid ADIF file.');
    }

    // Parse the file to extract addresses
    $uniqueAddresses = [];
    $pattern = '/<ADDRESS:(\d+)>([^<]+)/i';

    if (preg_match_all($pattern, $adifContent, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $addressLength = intval($match[1]);
            $address = trim(substr($match[2], 0, $addressLength));

            if (!empty($address)) {
                $uniqueAddresses[$address] = true;
            }
        }
    }

    $uniqueAddressCount = count($uniqueAddresses);

    // Determine award tier based on unique address count
    $awardTier = 'Cardboard Box';
    if ($uniqueAddressCount >= 1000000) {
        $awardTier = 'Mansion';
    } elseif ($uniqueAddressCount >= 500000) {
        $awardTier = 'Victorian Villa';
    } elseif ($uniqueAddressCount >= 250000) {
        $awardTier = 'Country Cottage';
    } elseif ($uniqueAddressCount >= 100000) {
        $awardTier = 'Townhouse';
    } elseif ($uniqueAddressCount >= 10000) {
        $awardTier = 'Detached House';
    } elseif ($uniqueAddressCount >= 1000) {
        $awardTier = 'Semi-Detached House';
    } elseif ($uniqueAddressCount >= 500) {
        $awardTier = 'Terraced House';
    } elseif ($uniqueAddressCount >= 100) {
        $awardTier = 'Bedsit';
    }

    // Clean up files older than 1 hour in uploads directory
    $now = time();
    foreach (glob($uploadDir . '/*.*') as $file) {
        if (is_file($file) && $now - filemtime($file) > 3600) {
            @unlink($file);
        }
    }

    // Return success response
    echo json_encode([
        'success' => true,
        'unique_addresses' => $uniqueAddressCount,
        'award_tier' => $awardTier,
        'file_id' => basename($uploadFilePath, '.' . $fileExt)
    ]);

} catch (Exception $e) {
    // Return error response
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);

    // Log the error
    error_log("Upload error: " . $e->getMessage() . " - " . date('Y-m-d H:i:s'));
}

