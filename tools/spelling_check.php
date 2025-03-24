<?php
/**
 * British English Spelling Check Tool
 *
 * This script scans the website files for American English spellings
 * and suggests British English alternatives.
 *
 * Usage: php spelling_check.php [directory]
 */

require_once __DIR__ . '/../includes/helper.php';

// Get the directory to scan from command line argument or use project root
$scanDirectory = isset($argv[1]) ? $argv[1] : __DIR__ . '/..';

// Define common American to British English spelling conversions
$usToUk = [
    // Words ending with -ize/-ization (US) vs -ise/-isation (UK)
    'realize' => 'realise',
    'realize' => 'realise',
    'realize' => 'realise',
    'organization' => 'organisation',
    'specialized' => 'specialised',
    'specialization' => 'specialisation',
    'standardize' => 'standardise',

    // Words ending with -or (US) vs -our (UK)
    'color' => 'colour',
    'favor' => 'favour',
    'humor' => 'humour',
    'neighbor' => 'neighbour',

    // Words ending with -er (US) vs -re (UK)
    'center' => 'centre',
    'meter' => 'metre', // measurement unit
    'theater' => 'theatre',

    // Words with -l- vs -ll-
    'traveled' => 'travelled',
    'traveling' => 'travelling',
    'labeled' => 'labelled',
    'modeling' => 'modelling',

    // Specific word differences
    'license' => 'licence', // noun form
    'practice' => 'practise', // verb form
    'program' => 'programme', // except in computer context
    'catalog' => 'catalogue',
    'dialog' => 'dialogue',
    'analog' => 'analogue',
    'gray' => 'grey',
    'plow' => 'plough',
    'check' => 'cheque', // banking context
];

// Count variables
$filesScanned = 0;
$potentialIssues = 0;

// File extensions to scan
$extensionsToScan = ['php', 'html', 'htm', 'js', 'css', 'md', 'txt'];

echo "Scanning directory: $scanDirectory\n";
echo "Looking for American English spellings...\n\n";

// Start the scan
scanDirectory($scanDirectory);

// Summary
echo "\nScan complete!\n";
echo "Files scanned: $filesScanned\n";
echo "Potential spelling issues found: $potentialIssues\n";

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
                checkFileForSpelling($path);
                $filesScanned++;
            }
        }
    }
}

/**
 * Check a file for American English spellings
 *
 * @param string $file The file to check
 */
function checkFileForSpelling($file) {
    global $usToUk, $potentialIssues;

    $content = file_get_contents($file);

    // Don't check binary files or very large files
    if (!is_string($content) || strlen($content) > 1000000) return;

    $issuesInFile = 0;

    // Look for each US spelling
    foreach ($usToUk as $us => $uk) {
        // Check for the US spelling with word boundaries to avoid partial matches
        $pattern = '/\b' . preg_quote($us, '/') . '\b/i';

        // Count matches
        $matches = preg_match_all($pattern, $content, $found);

        if ($matches > 0) {
            if ($issuesInFile === 0) {
                echo "File: $file\n";
            }

            $issuesInFile += $matches;
            $potentialIssues += $matches;

            echo "  Found \"$us\" - suggest replacing with \"$uk\" ($matches occurrences)\n";

            // Show a context snippet for the first occurrence
            $pos = stripos($content, $us);
            if ($pos !== false) {
                $start = max(0, $pos - 30);
                $length = min(strlen($content) - $start, 60 + strlen($us));
                $context = substr($content, $start, $length);
                $context = str_replace($us, "\033[31m$us\033[0m", $context); // Highlight the word in red

                echo "  Context: \"..." . trim($context) . "...\"\n";
            }
        }
    }

    if ($issuesInFile > 0) {
        echo "  Total: $issuesInFile potential spelling issues in this file\n\n";
    }
}
?>
