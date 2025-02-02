<?php

require_once __DIR__ . '/includes/autoload.php';

try {
    $page = new PageRenderer();
    $page->render();
} catch (Throwable $e) {
    error_log($e->getMessage());
    http_response_code(500);
    echo "An unexpected error occurred. Please try again later.";
    echo $e->getMessage();
}

?>
