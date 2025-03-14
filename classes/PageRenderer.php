<?php

/**
 * PageRenderer - Handles rendering of pages
 */
class PageRenderer {
    /**
     * @var string Page name
     */
    private $page;

    /**
     * @var array Allowed pages
     */
    private $allowedPages;

    /**
     * @var string Default page to render
     */
    private $defaultPage = 'home';

    /**
     * Constructor
     *
     * @param string $page Page name
     */
    public function __construct($page) {
        $this->page = $this->sanitizePage($page);
        $this->allowedPages = $this->getAllowedPages();
    }

    /**
     * Sanitize page name
     *
     * @param string $page Page name
     * @return string Sanitized page name
     */
    private function sanitizePage($page) {
        return preg_replace('/[^a-z0-9_-]/i', '', $page);
    }

    /**
     * Get allowed pages
     *
     * @return array List of allowed pages
     */
    private function getAllowedPages() {
        return [
            'home', 'about', 'awards', 'mailing-list', 'nets',
            'rules', 'faq', 'contact', 'advertising', 'community-events',
            'cookies', 'privacy', 'discord', 'get-licenced',
            'house-activations', 'join-our-team', 'operating-guidelines',
            'team', 'tgif', 'contests', 'store', 'appicons', 'resources',
            'terms', 'log-entry', 'gdpr', 'modern-slavery', 'glossary',
            'band-plans', 'opensource', 'support-us', '404', 'participate'
        ];
    }

    /**
     * Check if page exists
     *
     * @return bool True if page exists, false otherwise
     */
    private function pageExists() {
        if (in_array($this->page, $this->allowedPages)) {
            return file_exists(__DIR__ . '/../pages/' . $this->page . '.php');
        }
        return false;
    }

    /**
     * Render the page
     */
    public function render() {
        if (!$this->pageExists()) {
            // If page doesn't exist, render 404 page
            $this->page = '404';
            http_response_code(404);
        }

        include __DIR__ . '/../partials/header.php';
        include __DIR__ . '/../pages/' . $this->page . '.php';
        include __DIR__ . '/../partials/footer.php';
    }
}

?>
