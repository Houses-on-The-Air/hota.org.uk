<?php
/**
 * Utility functions for handling links on the HOTA website
 */

/**
 * Create a properly secured external link with appropriate rel attributes
 * and ensure British English spelling in the link text
 *
 * @param string $url The external URL
 * @param string $text The link text
 * @param string $class Optional CSS classes
 * @param array $additionalAttributes Optional additional HTML attributes
 * @return string HTML anchor tag
 */
function secure_external_link($url, $text, $class = '', $additionalAttributes = []) {
    // Convert link text to British English
    if (function_exists('convert_to_uk_spelling')) {
        $text = convert_to_uk_spelling($text);
    }

    $classAttr = $class ? ' class="' . htmlspecialchars($class) . '"' : '';

    // Always include nofollow and noopener for security
    $relAttr = ' rel="nofollow noopener"';

    // Build additional attributes string
    $attrStr = '';
    foreach ($additionalAttributes as $attr => $value) {
        $attrStr .= ' ' . htmlspecialchars($attr) . '="' . htmlspecialchars($value) . '"';
    }

    return '<a href="' . htmlspecialchars($url) . '" target="_blank"' . $relAttr . $classAttr . $attrStr . '>' . $text . '</a>';
}

/**
 * Determine if a URL is external to the site
 *
 * @param string $url The URL to check
 * @return boolean True if the URL is external
 */
function is_external_url($url) {
    // If the URL is relative, it's internal
    if (strpos($url, '://') === false && strpos($url, '//') !== 0) {
        return false;
    }

    // Get the host of the current site
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

    // Parse the URL
    $urlParts = parse_url($url);

    // If the host matches the current site, it's internal
    if (isset($urlParts['host']) && $urlParts['host'] === $host) {
        return false;
    }

    return true;
}

/**
 * Process HTML content and ensure all external links have rel="nofollow"
 *
 * @param string $html The HTML content
 * @return string Processed HTML with secure external links
 */
function secure_external_links_in_html($html) {
    // Define a callback function for the regular expression
    $callback = function($matches) {
        $url = $matches[2];

        // If this is an external URL
        if (is_external_url($url)) {
            $rel = isset($matches[1]) ? $matches[1] : '';

            // Check if rel attribute already exists
            if (strpos($rel, 'rel=') !== false) {
                // Check if nofollow is already included
                if (strpos($rel, 'nofollow') === false) {
                    $rel = preg_replace('/rel=(["\'])(.*?)(["\'])/', 'rel=$1$2 nofollow$3', $rel);
                }

                // Check if noopener is already included
                if (strpos($rel, 'noopener') === false) {
                    $rel = preg_replace('/rel=(["\'])(.*?)(["\'])/', 'rel=$1$2 noopener$3', $rel);
                }
            } else {
                $rel .= ' rel="nofollow noopener"';
            }

            // Add target="_blank" if not present
            if (strpos($rel, 'target=') === false) {
                $rel .= ' target="_blank"';
            }

            return '<a' . $rel . ' href="' . $url . '"';
        }

        // If internal link, return unchanged
        return $matches[0];
    };

    // Regular expression to find links
    $pattern = '/<a(.*?)href=["\'](https?:\/\/[^"\']+)["\']([^>]*)>/i';
    $processed = preg_replace_callback($pattern, $callback, $html);

    return $processed;
}
?>
