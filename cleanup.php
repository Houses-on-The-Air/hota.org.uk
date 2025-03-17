<?php
/**
 * Cleanup script to manage files and resources
 * This script should be run via cron job every hour
 * Example cron: 0 * * * * php /path/to/cleanup.php
 */

// Define base path
$basePath = __DIR__;

// Set maximum age for files (in seconds)
$maxAge = 86400; // 24 hours

// Function to delete old files in a directory
function cleanDirectory($dir, $maxAge, $extensions = null) {
    if (!is_dir($dir)) {
        return;
    }

    $now = time();
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file == '.' || $file == '..' || $file == '.htaccess' || $file == 'index.html') {
            continue;
        }

        $path = $dir . '/' . $file;

        // Skip if directory
        if (is_dir($path)) {
            continue;
        }

        // Skip if not matching extension (if specified)
        if ($extensions !== null) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if (!in_array($ext, $extensions)) {
                continue;
            }
        }

        // Delete if older than max age
        if ($now - filemtime($path) > $maxAge) {
            @unlink($path);
        }
    }
}

// Clean log files > 7 days old
cleanDirectory($basePath . '/logs', 604800); // 7 days

// Clean PHP session files
$sessionPath = session_save_path();
if (!empty($sessionPath) && is_dir($sessionPath)) {
    cleanDirectory($sessionPath, 86400, ['sess']);
}

// Rebuild cache files if needed
if (file_exists($basePath . '/cache/config.cache.php')) {
    // Only rebuild if older than 24 hours
    if (time() - filemtime($basePath . '/cache/config.cache.php') > 86400) {
        // Include config rebuild logic here
        if (file_exists($basePath . '/classes/ConfigManager.php')) {
            include_once $basePath . '/classes/ConfigManager.php';
            if (method_exists('ConfigManager', 'rebuildCache')) {
                ConfigManager::rebuildCache();
            }
        }
    }
}

// Output result - useful for debugging cron jobs
echo "Cleanup completed: " . date('Y-m-d H:i:s') . "\n";
