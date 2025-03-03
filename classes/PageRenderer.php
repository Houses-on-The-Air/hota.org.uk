<?php

class PageRenderer {
    private $page;
    private $cacheDir;

    public function __construct($page = 'home', $cacheDir = __DIR__ . '/../cache/') {
        $this->page = $page;
        $this->cacheDir = $cacheDir;
    }

    public function render() {
        $cacheFile = $this->getCacheFilePath();
        if ($this->isCacheValid($cacheFile)) {
            $output = file_get_contents($cacheFile);
        } else {
            ob_start();
            include __DIR__ . '/../partials/header.php';
            $this->renderPage();
            include __DIR__ . '/../partials/footer.php';
            $output = ob_get_clean();
            $minifiedOutput = $this->minifyHtml($output);
            file_put_contents($cacheFile, $minifiedOutput);
            $output = $minifiedOutput;
        }

        $gzippedOutput = gzencode($output);
        header('Content-Encoding: gzip');
        header('Content-Length: ' . strlen($gzippedOutput));
        echo $gzippedOutput;
    }

    private function renderPage() {
        $pagePath = __DIR__ . '/../pages/' . $this->page . '.php';
        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            include __DIR__ . '/../pages/404.php';
        }
    }

    private function getCacheFilePath() {
        return $this->cacheDir . md5($this->page) . '.html';
    }

    private function isCacheValid($cacheFile) {
        $cacheTime = 86400; // One day
        if (file_exists($cacheFile)) {
            if (time() - filemtime($cacheFile) < $cacheTime) {
                return true;
            } else {
                unlink($cacheFile);
            }
        }
        return false;
    }

    private function minifyHtml($html) {
        $search = [
            '/\>[^\S ]+/s',  // Remove whitespaces after tags, except space
            '/[^\S ]+\</s',  // Remove whitespaces before tags, except space
            '/(\s)+/s'       // Shorten multiple whitespace sequences
        ];
        $replace = [
            '>',
            '<',
            '\\1'
        ];
        return preg_replace($search, $replace, $html);
    }
}

?>
