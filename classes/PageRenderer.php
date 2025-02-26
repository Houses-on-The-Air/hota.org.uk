<?php

class PageRenderer {
    private $page;

    public function __construct($page = 'home') {
        $this->page = $page;
    }

    public function render() {
        ob_start(); // Start output buffering
        include __DIR__ . '/../partials/header.php';
        $this->renderPage();
        include __DIR__ . '/../partials/footer.php';
        $content = ob_get_clean(); // Get the buffered content and clean the buffer

        // Minify the content
        $minifiedContent = $this->minify($content);

        echo $minifiedContent; // Output the minified content
    }

    private function renderPage() {
        $pagePath = __DIR__ . '/../pages/' . $this->page . '.php';

        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            include __DIR__ . '/../pages/404.php';  // A fallback for unknown pages
        }
    }

    private function minify($content) {
        // Remove whitespace, newlines, and comments
        $content = preg_replace('/\s+/', ' ', $content);
        $content = preg_replace('/<!--.*?-->/', '', $content);
        return $content;
    }
}

?>
