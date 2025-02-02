<?php

require_once __DIR__ . '/includes/autoload.php';

$page = isset($_GET['page']) ? preg_replace('/[^a-z0-9_-]/i', '', $_GET['page']) : 'home';

try {
    $renderer = new PageRenderer($page);
    $renderer->render();
} catch (Throwable $e) {
    error_log("Error: " . $e->getMessage());
    http_response_code(500);
    echo "An unexpected error occurred. Please try again later.";
}

?>
