<?php
// Define configuration constants
define('APP_ROOT', dirname(__DIR__));
define('UPLOADS_DIR', APP_ROOT . '/uploads');
define('LOGS_DIR', APP_ROOT . '/logs');
define('CACHE_DIR', APP_ROOT . '/cache');
define('TEMPLATES_DIR', APP_ROOT . '/templates');

// Ensure these directories exist
$dirs = [UPLOADS_DIR, LOGS_DIR, CACHE_DIR];
foreach ($dirs as $dir) {
    if (!is_dir($dir) && !@mkdir($dir, 0755, true)) {
        error_log("Failed to create directory: $dir");
    }
}

// Load ConfigManager after directory setup
require_once __DIR__ . '/../classes/ConfigManager.php';

// Load configuration
ConfigManager::load();

// Define constants from configuration
$ADVERTISING_EMAIL_ADDRESS = ConfigManager::get('email.advertising');
$INFO_EMAIL_ADDRESS = ConfigManager::get('email.info');
$PRIVACY_EMAIL_ADDRESS = ConfigManager::get('email.privacy');
?>
