<?php

class PageRenderer {
    private $page;

    public function __construct($page = 'home') {
        $this->page = $page;
    }

    public function render() {
        include __DIR__ . '/../partials/header.php';
        $this->renderPage();
        include __DIR__ . '/../partials/footer.php';
    }

    private function renderPage() {
        $pagePath = __DIR__ . '/../pages/' . $this->page . '.php';

        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            include __DIR__ . '/../pages/404.php';  // A fallback for unknown pages
        }
    }
}

?>
