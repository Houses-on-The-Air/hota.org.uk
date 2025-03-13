<?php

/**
 * Security - Security-related utility methods
 */
class Security {
    /**
     * Generate a CSRF token
     *
     * @param string $formName Form identifier
     * @return string CSRF token
     */
    public static function generateCsrfToken($formName = 'default') {
        if (!isset($_SESSION)) {
            session_start();
        }

        // Generate random token if it doesn't exist
        if (!isset($_SESSION['csrf_tokens'])) {
            $_SESSION['csrf_tokens'] = [];
        }

        if (!isset($_SESSION['csrf_tokens'][$formName])) {
            $_SESSION['csrf_tokens'][$formName] = bin2hex(random_bytes(32));
        }

        return $_SESSION['csrf_tokens'][$formName];
    }

    /**
     * Validate a CSRF token
     *
     * @param string $token Token to validate
     * @param string $formName Form identifier
     * @return bool Whether token is valid
     */
    public static function validateCsrfToken($token, $formName = 'default') {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['csrf_tokens'][$formName])) {
            return false;
        }

        // Use timing-safe comparison
        return hash_equals($_SESSION['csrf_tokens'][$formName], $token);
    }

    /**
     * Sanitize input data
     *
     * @param mixed $input Input data to sanitize
     * @param string $type Type of sanitization
     * @return mixed Sanitized data
     */
    public static function sanitize($input, $type = 'text') {
        switch ($type) {
            case 'text':
                return is_array($input)
                    ? array_map([self::class, 'sanitizeText'], $input)
                    : self::sanitizeText($input);

            case 'html':
                return is_array($input)
                    ? array_map([self::class, 'sanitizeHtml'], $input)
                    : self::sanitizeHtml($input);

            case 'email':
                return filter_var($input, FILTER_SANITIZE_EMAIL);

            case 'url':
                return filter_var($input, FILTER_SANITIZE_URL);

            case 'int':
                return filter_var($input, FILTER_SANITIZE_NUMBER_INT);

            case 'float':
                return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            case 'filename':
                return self::sanitizeFilename($input);

            default:
                return $input;
        }
    }

    /**
     * Sanitize text
     *
     * @param string $text Text to sanitize
     * @return string Sanitized text
     */
    private static function sanitizeText($text) {
        return trim(strip_tags($text));
    }

    /**
     * Sanitize HTML
     *
     * @param string $html HTML to sanitize
     * @return string Sanitized HTML
     */
    private static function sanitizeHtml($html) {
        // This is a very basic HTML sanitizer
        // For production, use a proper HTML purifier library
        $allowedTags = [
            'a', 'b', 'blockquote', 'br', 'code', 'div', 'em', 'h1', 'h2', 'h3',
            'h4', 'h5', 'h6', 'i', 'li', 'ol', 'p', 'pre', 'span', 'strong',
            'table', 'tbody', 'td', 'th', 'thead', 'tr', 'ul'
        ];

        $allowedAttrs = [
            'href', 'title', 'class', 'id', 'style', 'target'
        ];

        // Convert to string if not already
        if (!is_string($html)) {
            $html = (string)$html;
        }

        // Remove all tags not in the allowed list
        $html = strip_tags($html, '<' . implode('><', $allowedTags) . '>');

        // Remove all attributes not in the allowed list
        $dom = new DOMDocument();

        // Suppress warnings during loading
        libxml_use_internal_errors(true);
        $dom->loadHTML('<div>' . $html . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $xpath = new DOMXPath($dom);
        $nodes = $xpath->query('//*/@*');

        foreach ($nodes as $node) {
            if (!in_array($node->nodeName, $allowedAttrs)) {
                $node->parentNode->removeAttribute($node->nodeName);
            }
        }

        // Extract the sanitized HTML from the div wrapper
        $body = $dom->getElementsByTagName('div')->item(0);
        $html = '';

        foreach ($body->childNodes as $child) {
            $html .= $dom->saveHTML($child);
        }

        return $html;
    }

    /**
     * Sanitize filename
     *
     * @param string $filename Filename to sanitize
     * @return string Sanitized filename
     */
    private static function sanitizeFilename($filename) {
        // Replace non-alphanumeric characters (except for period, underscore, and dash)
        $filename = preg_replace('/[^a-zA-Z0-9._-]/', '', $filename);

        // Remove multiple dots
        $filename = preg_replace('/\.+/', '.', $filename);

        // Remove leading and trailing dots
        $filename = trim($filename, '.');

        return $filename;
    }

    /**
     * Check if a request is AJAX
     *
     * @return bool Whether the request is AJAX
     */
    public static function isAjax() {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
               strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    /**
     * Get real client IP address
     *
     * @return string Client IP address
     */
    public static function getClientIp() {
        // Check for proxy server headers
        $ipHeaders = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR'
        ];

        foreach ($ipHeaders as $header) {
            if (isset($_SERVER[$header]) && filter_var($_SERVER[$header], FILTER_VALIDATE_IP)) {
                return $_SERVER[$header];
            }
        }

        return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }
}
