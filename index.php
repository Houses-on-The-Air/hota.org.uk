<?php

require_once __DIR__ . '/includes/constants.php';
require_once __DIR__ . '/includes/autoload.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

try {
    $renderer = new PageRenderer($page);
    $renderer->render();
} catch (Throwable $e) {
    error_log("Error rendering page: " . $e->getMessage());
    http_response_code(500);
    echo "An unexpected error occurred. Please try again later.";
}

?>
