<?php

/**
 * Houses on the Air - Main entry point
 *
 * This file serves as the main entry point for the HOTA website,
 * handling page routing and rendering.
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/php_errors.log');

// Ensure the logs directory exists
if (!file_exists(__DIR__ . '/logs')) {
    mkdir(__DIR__ . '/logs', 0755, true);
}

// Session cleanup - prevent session files from accumulating
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 1440); // 24 minutes

// Start session if needed
session_start();

// Start output buffering for better performance and error handling
ob_start();

// Load required files - constants first, then autoloader
require_once __DIR__ . '/includes/constants.php';
require_once __DIR__ . '/includes/autoload.php';
require_once __DIR__ . '/includes/helper.php';

try {
    // Get requested page name with validation
    $page = isset($_GET['page']) ? filter_var($_GET['page'], FILTER_SANITIZE_SPECIAL_CHARS) : 'home';
    $page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);

    // Define file path
    $filePath = __DIR__ . '/pages/' . $page . '.php';

    // Check if file exists, otherwise use 404
    if (!file_exists($filePath)) {
        $page = '404';
        $filePath = __DIR__ . '/pages/404.php';
        http_response_code(404);
    }

    // Include header with proper variables
    include __DIR__ . '/includes/header.php';

    // Include the requested page content
    include $filePath;

    // Include footer
    include __DIR__ . '/includes/footer.php';

} catch (Exception $e) {
    // Log the error
    error_log('Error rendering page: ' . $e->getMessage());

    // Clear the output buffer
    ob_clean();

    // Set appropriate HTTP status code
    http_response_code(500);

    // Display error page
    include __DIR__ . '/pages/500.php';
}

// Flush the output buffer
ob_end_flush();
?>
