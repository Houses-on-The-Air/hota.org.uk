<?php

/**
 * Houses on the Air - Main entry point
 *
 * This file serves as the main entry point for the HOTA website,
 * handling page routing and rendering.
 */

// Start output buffering for better performance and error handling
ob_start();

// Load required files
require_once __DIR__ . '/includes/constants.php';
require_once __DIR__ . '/includes/autoload.php';

// Set error reporting based on environment
$isProduction = ConfigManager::get('app.environment', 'production') === 'production';

// Initialize logger
Logger::init(
    __DIR__ . '/logs/app_' . date('Y-m-d') . '.log',
    $isProduction ? 'INFO' : 'DEBUG'
);

// Initialize error handler
$errorHandler = new ErrorHandler(
    __DIR__ . '/logs/error_' . date('Y-m-d') . '.log',
    !$isProduction,
    !$isProduction
);

// Set default timezone
date_default_timezone_set(ConfigManager::get('app.timezone', 'UTC'));

try {
    Logger::info('Request started: ' . $_SERVER['REQUEST_URI']);

    // Get requested page with validation
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS) ?: 'home';

    // Create page renderer and render the page
    $renderer = new PageRenderer($page);
    $renderer->render();

    Logger::info('Request completed: ' . $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    // Log the error
    Logger::error('Error rendering page: ' . $e->getMessage(), [
        'uri' => $_SERVER['REQUEST_URI'],
        'trace' => $e->getTraceAsString()
    ]);

    // Clear the output buffer
    ob_clean();

    // Set appropriate HTTP status code
    http_response_code(500);

    // Display error page
    $errorHandler->displayErrorPage('500', [
        'code' => 500,
        'message' => $isProduction
            ? 'We\'re sorry, but an unexpected error has occurred. Please try again later.'
            : $e->getMessage()
    ]);
}

// Flush the output buffer
ob_end_flush();
?>
