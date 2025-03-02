<?php

class PageRenderer {
    private $page;
    private $cacheDir;

    public function __construct($page = 'home', $cacheDir = __DIR__ . '/../cache/') {
        $this->page = $page;
        $this->cacheDir = $cacheDir;
    }

    public function render() {
        $cacheFile = $this->cacheDir . md5($this->page) . '.html.gz';

        if (file_exists($cacheFile)) {
            if ((time() - filemtime($cacheFile)) < 3600) {
                // Serve cached content if it exists and is less than 1 hour old
                echo gzdecode(file_get_contents($cacheFile));
                return;
            } else {
                // Delete the cache file if it is over an hour old
                unlink($cacheFile);
            }
        }

        ob_start(); // Start output buffering
        include __DIR__ . '/../partials/header.php';
        $this->renderPage();
        include __DIR__ . '/../partials/footer.php';
        $content = ob_get_clean(); // Get the buffered content and clean the buffer

        // Minify the content
        $minifiedContent = $this->minify($content);

        // Compress and save the minified content to cache
        file_put_contents($cacheFile, gzencode($minifiedContent));

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
        // Remove whitespace, newlines, and comments from HTML
        $content = preg_replace('/\s+/', ' ', $content);
        $content = preg_replace('/<!--.*?-->/', '', $content);
        // Remove spaces between tags
        $content = preg_replace('/>\s+</', '><', $content);

        // Minify inline CSS
        $content = preg_replace_callback('/<style\b[^>]*>(.*?)<\/style>/is', function($matches) {
            return '<style>' . $this->minifyCSS($matches[1]) . '</style>';
        }, $content);

        return $content;
    }

    private function minifyCSS($css) {
        // Remove comments, whitespace, and newlines from CSS
        $css = preg_replace('/\/\*.*?\*\//s', '', $css);
        $css = preg_replace('/\s+/', ' ', $css);
        $css = preg_replace('/\s*([{}|:;,])\s*/', '$1', $css);
        $css = preg_replace('/;}/', '}', $css);
        return $css;
    }
}

?>
