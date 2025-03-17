<?php
/**
 * Helper functions for the HOTA website
 */

/**
 * Safe include function that handles paths correctly
 *
 * @param string $file File to include
 * @param array $vars Variables to extract into scope
 * @return bool True if file was included, false otherwise
 */
function include_file($file, $vars = []) {
    // Define the base path for includes
    $base_path = dirname(__DIR__);

    // If file doesn't start with a slash, assume it's relative to includes
    if (strpos($file, '/') !== 0) {
        $file = '/includes/' . $file;
    }

    // Build the full path
    $full_path = $base_path . $file;

    // Check if file exists
    if (!file_exists($full_path)) {
        error_log("Failed to include file: $full_path does not exist");
        return false;
    }

    // Extract variables into scope if provided
    if (!empty($vars) && is_array($vars)) {
        extract($vars);
    }

    // Include the file
    include $full_path;
    return true;
}

/**
 * Include the header template
 *
 * @param array $vars Variables to pass to the header (e.g. ['pageTitle' => 'Home'])
 * @return bool True if header was included
 */
function include_header($vars = []) {
    return include_file('header.php', $vars);
}

/**
 * Include the footer template
 *
 * @param array $vars Variables to pass to the footer
 * @return bool True if footer was included
 */
function include_footer($vars = []) {
    return include_file('footer.php', $vars);
}
