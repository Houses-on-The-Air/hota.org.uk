<?php
/**
 * CLI tool to scan the HOTA website for external links without rel="nofollow" attribute
 *
 * Usage: php check_external_links.php [directory]
 * If directory is not specified, it will scan the entire project
 */

require_once __DIR__ . '/../includes/link_utilities.php';

// Get the directory to scan from command line argument or use project root
$scanDirectory = isset($argv[1]) ? $argv[1] : __DIR__ . '/..';

// Count variables
$filesScanned = 0;
$externalLinks = 0;
$unsecureLinks = 0;

// File extensions to scan
$extensionsToScan = ['php', 'html', 'htm'];

echo "Scanning directory: $scanDirectory\n";
echo "Looking for external links without rel=\"nofollow\" attribute...\n\n";

// Start the scan
scanDirectory($scanDirectory);

// Summary
echo "\nScan complete!\n";
echo "Files scanned: $filesScanned\n";
echo "External links found: $externalLinks\n";
echo "Unsecure links (missing rel=\"nofollow\"): $unsecureLinks\n";

/**
 * Recursively scan directory for files to check
 *
 * @param string $dir The directory to scan
 */
function scanDirectory($dir) {
    global $extensionsToScan, $filesScanned;

    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            // Skip vendor directories and some common directories to ignore
            if (in_array($file, ['vendor', 'node_modules', '.git'])) continue;

            scanDirectory($path);
        } else {
            // Check if file has extension we want to scan
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($extension, $extensionsToScan)) {
                checkFileForLinks($path);
                $filesScanned++;
            }
        }
    }
}

/**
 * Check a file for external links
 *
 * @param string $file The file to check
 */
function checkFileForLinks($file) {
    global $externalLinks, $unsecureLinks;

    $content = file_get_contents($file);

    // Regular expression to find links
    $pattern = '/<a(.*?)href=["\'](https?:\/\/[^"\']+)["\']([^>]*)>/i';

    if (preg_match_all($pattern, $content, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $url = $match[2];

            // Check if this is an external URL
            if (is_external_url($url)) {
                $externalLinks++;

                $attributes = $match[1] . $match[3];

                // Check if rel="nofollow" is present
                if (strpos($attributes, 'nofollow') === false) {
                    echo "File: $file\n";
                    echo "  Unsecure external link: $url\n";
                    echo "  Missing rel=\"nofollow\" attribute\n\n";
                    $unsecureLinks++;
                }
            }
        }
    }
}
?>
