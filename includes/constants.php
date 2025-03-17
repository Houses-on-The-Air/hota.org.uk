<?php
/**
 * Constants definitions for HOTA
 */

// Application root path
define('APP_ROOT', dirname(__DIR__));

// Directory paths
define('UPLOADS_DIR', APP_ROOT . '/uploads');
define('TEMPLATES_DIR', APP_ROOT . '/templates');
define('CACHE_DIR', APP_ROOT . '/cache');
define('LOG_DIR', APP_ROOT . '/logs');

// Ensure these directories exist
$dirs = [UPLOADS_DIR, LOG_DIR, CACHE_DIR];
foreach ($dirs as $dir) {
    if (!is_dir($dir) && !@mkdir($dir, 0755, true)) {
        error_log("Failed to create directory: $dir");
    }
}

// Initialize ConfigManager if available - with error handling
try {
    if (!class_exists('ConfigManager')) {
        require_once APP_ROOT . '/classes/ConfigManager.php';
    }
    ConfigManager::load();
} catch (Exception $e) {
    // Log error but don't crash the application
    error_log('Error loading ConfigManager: ' . $e->getMessage());

    // Define essential constants that would normally come from ConfigManager
    if (!defined('APP_DEBUG')) {
        define('APP_DEBUG', false);
    }

    if (!defined('APP_ENV')) {
        define('APP_ENV', 'production');
    }
}

// Define additional constants
define('IS_PRODUCTION', (!defined('APP_ENV') || APP_ENV === 'production'));
define('SITE_URL', ConfigManager::get('app.url', 'https://hota.org.uk'));
define('SITE_NAME', ConfigManager::get('app.name', 'Houses On The Air'));

// File upload constants
define('MAX_UPLOAD_SIZE', ConfigManager::get('app.upload_max_size', 5242880)); // 5MB default

// Log file paths
define('ERROR_LOG', LOG_DIR . '/error_' . date('Y-m-d') . '.log');
define('APP_LOG', LOG_DIR . '/app_' . date('Y-m-d') . '.log');

// Define constants from configuration
$ADVERTISING_EMAIL_ADDRESS = ConfigManager::get('email.advertising');
$INFO_EMAIL_ADDRESS = ConfigManager::get('email.info');
$PRIVACY_EMAIL_ADDRESS = ConfigManager::get('email.privacy');
?>
