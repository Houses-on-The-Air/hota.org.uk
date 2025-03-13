<?php
/**
 * Cleanup script to remove unused FPDF tutorial files
 */

// Files to be removed
$filesToRemove = [
    __DIR__ . '/fpdf/tutorial/tuto1.htm',
    __DIR__ . '/fpdf/tutorial/tuto3.php',
    __DIR__ . '/fpdf/tutorial/tuto5.htm',
    __DIR__ . '/fpdf/tutorial/tuto7.htm'
];

echo "Starting cleanup process...\n";

foreach ($filesToRemove as $file) {
    if (file_exists($file)) {
        if (unlink($file)) {
            echo "Removed: $file\n";
        } else {
            echo "Failed to remove: $file\n";
        }
    } else {
        echo "File not found: $file\n";
    }
}

// Also clean up any empty directories
$directoriesToCheck = [
    __DIR__ . '/fpdf/tutorial'
];

foreach ($directoriesToCheck as $dir) {
    if (is_dir($dir) && count(scandir($dir)) <= 2) { // Only . and .. entries
        if (rmdir($dir)) {
            echo "Removed empty directory: $dir\n";
        } else {
            echo "Failed to remove directory: $dir\n";
        }
    }
}

echo "Cleanup completed.\n";
