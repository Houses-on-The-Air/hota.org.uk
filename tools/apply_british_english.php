<?php
/**
 * Apply British English Spelling Tool
 *
 * This script applies British English spellings to files across the website.
 *
 * Usage: php apply_british_english.php [file_or_directory] [--dry-run]
 */

require_once __DIR__ . '/../includes/helper.php';

// Parse command line arguments
$targetPath = isset($argv[1]) ? $argv[1] : null;
$dryRun = in_array('--dry-run', $argv) || in_array('-d', $argv);

// Check if target path is provided
if (!$targetPath) {
    echo "Usage: php apply_british_english.php [file_or_directory] [--dry-run]\n";
    echo "  --dry-run, -d: Show changes without applying them\n";
    exit(1);
}

// Resolve target path
$targetPath = realpath($targetPath) ?: $targetPath;

if (!file_exists($targetPath)) {
    echo "Error: File or directory not found: $targetPath\n";
    exit(1);
}

// Count variables
$filesScanned = 0;
$filesModified = 0;
$changesApplied = 0;

// File extensions to process
$extensionsToProcess = ['php', 'html', 'htm', 'js', 'css', 'md', 'txt'];

echo "Target: $targetPath\n";
echo "Mode: " . ($dryRun ? "Dry run (no changes will be applied)" : "Live run (changes will be applied)") . "\n\n";

// Start the processing
if (is_dir($targetPath)) {
    processDirectory($targetPath);
} else {
    processFile($targetPath);
}

// Summary
echo "\nProcessing complete!\n";
echo "Files scanned: $filesScanned\n";
echo "Files " . ($dryRun ? "that would be" : "were") . " modified: $filesModified\n";
echo "Changes " . ($dryRun ? "that would be" : "were") . " applied: $changesApplied\n";

/**
 * Recursively process directory
 *
 * @param string $dir The directory to process
 */
function processDirectory($dir) {
    global $extensionsToProcess;

    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            // Skip vendor directories and some common directories to ignore
            if (in_array($file, ['vendor', 'node_modules', '.git'])) continue;

            processDirectory($path);
        } else {
            // Check if file has extension we want to process
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($extension, $extensionsToProcess)) {
                processFile($path);
            }
        }
    }
}

/**
 * Process a single file
 *
 * @param string $file The file to process
 */
function processFile($file) {
    global $filesScanned, $filesModified, $changesApplied, $dryRun;

    echo "Processing: $file\n";
    $filesScanned++;

    $content = file_get_contents($file);

    // Don't process binary files or very large files
    if (!is_string($content) || strlen($content) > 1000000) {
        echo "  Skipping: File too large or binary\n";
        return;
    }

    // Apply British English conversion
    $newContent = convert_to_uk_spelling($content);

    // Check if content has changed
    if ($content !== $newContent) {
        $filesModified++;

        // Count the changes
        $changeCount = countChanges($content, $newContent);
        $changesApplied += $changeCount;

        echo "  Changes found: $changeCount spelling corrections\n";

        // Write the changes if not in dry run mode
        if (!$dryRun) {
            file_put_contents($file, $newContent);
            echo "  Applied changes to file\n";
        } else {
            echo "  (Dry run: changes not applied)\n";
        }
    } else {
        echo "  No changes needed\n";
    }
}

/**
 * Count the number of changes between two strings
 *
 * @param string $original Original content
 * @param string $modified Modified content
 * @return int Number of changes
 */
function countChanges($original, $modified) {
    // Simple approach: count the number of different characters
    // A more sophisticated approach would count actual word replacements
    $diff = 0;
    $len = max(strlen($original), strlen($modified));

    for ($i = 0; $i < $len; $i++) {
        $charOriginal = isset($original[$i]) ? $original[$i] : '';
        $charModified = isset($modified[$i]) ? $modified[$i] : '';

        if ($charOriginal !== $charModified) {
            $diff++;
        }
    }

    return $diff;
}
?>
