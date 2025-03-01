<?php

class PageRenderer {
    private $page;
    private $cacheDir;

    public function __construct($page = 'home', $cacheDir = __DIR__ . '/../cache/') {
        $this->page = $page;
        $this->cacheDir = $cacheDir;
    }

    public function render() {
        $cacheFile = $this->cacheDir . md5($this->page) . '.html';

        if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < 3600) {
            // Serve cached content if it exists and is less than 1 hour old
            echo file_get_contents($cacheFile);
            return;
        }

        ob_start(); // Start output buffering
        include __DIR__ . '/../partials/header.php';
        $this->renderPage();
        include __DIR__ . '/../partials/footer.php';
        $content = ob_get_clean(); // Get the buffered content and clean the buffer

        // Minify the content
        $minifiedContent = $this->minify($content);

        // Save the minified content to cache
        file_put_contents($cacheFile, $minifiedContent);

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
