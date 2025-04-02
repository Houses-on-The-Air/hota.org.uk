<?php
$pageTitle = "Site Map - HOTA";
$pageDescription = "A comprehensive listing of all pages on the Houses on the Air website to help you find what you're looking for.";

// Function to get all available pages
function getAllPages() {
    $pages = [];
    $pagesDir = __DIR__;
    $files = scandir($pagesDir);

    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
            $pageId = pathinfo($file, PATHINFO_FILENAME);

            // Skip certain utility pages
            if (in_array($pageId, ['404', '500'])) {
                continue;
            }

            // Get page title
            $content = file_get_contents($pagesDir . '/' . $file);
            $title = 'Untitled Page';

            if (preg_match('/\$pageTitle\s*=\s*["\'](.+?)["\']/i', $content, $matches)) {
                $title = $matches[1];
            } else {
                // Use formatted page ID as fallback
                $title = ucwords(str_replace('-', ' ', $pageId));
            }

            $pages[$pageId] = [
                'id' => $pageId,
                'title' => $title,
                'url' => '?page=' . $pageId
            ];
        }
    }

    return $pages;
}

// Get all pages and organize them by category
$allPages = getAllPages();

// Define page categories
$categories = [
    'main' => [
        'title' => 'Main Pages',
        'pages' => ['home', 'about', 'participate', 'awards', 'resources', 'store', 'contact']
    ],
    'about' => [
        'title' => 'About HOTA',
        'pages' => ['about', 'team', 'join-our-team', 'rules', 'faq', 'glossary']
    ],
    'participate' => [
        'title' => 'Participation',
        'pages' => ['participate', 'get-licenced', 'house-activations', 'operating-guidelines', 'log-entry', 'contests', 'community-events', 'nets']
    ],
    'awards' => [
        'title' => 'Awards & Certificates',
        'pages' => ['awards', 'award-tiers', 'award-years', 'certificates', 'certificate-gallery']
    ],
    'resources' => [
        'title' => 'Resources',
        'pages' => ['resources', 'band-plans', 'discord', 'tgif', 'logging-software', 'appicons']
    ],
    'antennas' => [
        'title' => 'Antenna Guides',
        'pages' => ['wire-antennas', 'vertical-antennas', 'loop-antennas', 'multiband-antennas', 'portable-antennas', 'mobile-antennas']
    ],
    'technical' => [
        'title' => 'Technical Guides',
        'pages' => ['adif-format', 'adif-guide', 'portable-power', 'online-training']
    ],
    'community' => [
        'title' => 'Community',
        'pages' => ['discord', 'activity-weekend', 'support-us', 'mailing-list']
    ],
    'legal' => [
        'title' => 'Legal & Information',
        'pages' => ['privacy', 'cookies', 'gdpr', 'terms', 'modern-slavery', 'opensource', 'advertising']
    ]
];

// Function to render page link if it exists
function pageLink($pageId, $allPages) {
    if (array_key_exists($pageId, $allPages)) {
        return '<a href="' . $allPages[$pageId]['url'] . '">' . $allPages[$pageId]['title'] . '</a>';
    }
    return '';
}
?>

<div class="container">
    <h1>Site Map</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Site Map</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <p class="flow-text">This page provides a complete list of all content available on the HOTA website, organized by section.</p>
            </div>
        </div>
    </div>

    <!-- Main Pages -->
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Main Pages</span>
                    <div class="collection">
                        <?php foreach($categories['main']['pages'] as $pageId): ?>
                            <?php if ($link = pageLink($pageId, $allPages)): ?>
                                <a href="<?= $allPages[$pageId]['url'] ?>" class="collection-item"><?= $allPages[$pageId]['title'] ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorized Pages -->
    <div class="row">
        <?php
        // Skip 'main' as it's already displayed
        $categoriesToDisplay = array_filter($categories, function($key) {
            return $key != 'main';
        }, ARRAY_FILTER_USE_KEY);

        foreach($categoriesToDisplay as $categoryId => $category):
        ?>
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?= $category['title'] ?></span>
                        <ul class="collection">
                            <?php foreach($category['pages'] as $pageId): ?>
                                <?php if (array_key_exists($pageId, $allPages)): ?>
                                    <a href="<?= $allPages[$pageId]['url'] ?>" class="collection-item"><?= $allPages[$pageId]['title'] ?></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Uncategorized Pages -->
    <?php
    $categorizedPages = [];
    foreach($categories as $category) {
        $categorizedPages = array_merge($categorizedPages, $category['pages']);
    }

    $uncategorizedPages = array_filter($allPages, function($page) use ($categorizedPages) {
        return !in_array($page['id'], $categorizedPages);
    });

    if (!empty($uncategorizedPages)):
    ?>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Other Pages</span>
                    <div class="row">
                        <?php
                        $chunkedPages = array_chunk($uncategorizedPages, ceil(count($uncategorizedPages) / 3), true);
                        foreach($chunkedPages as $chunk):
                        ?>
                            <div class="col s12 m4">
                                <ul class="collection">
                                    <?php foreach($chunk as $page): ?>
                                        <a href="<?= $page['url'] ?>" class="collection-item"><?= $page['title'] ?></a>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Special Links -->
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey lighten-5">
                <div class="card-content">
                    <span class="card-title">Special Links</span>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="center-align">
                                <i class="material-icons medium">search</i>
                                <h5>Search</h5>
                                <p>Looking for something specific? Try our search feature.</p>
                                <a href="?page=search-results" class="btn blue-grey waves-effect waves-light">Search Site</a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="center-align">
                                <i class="material-icons medium">send</i>
                                <h5>Contact Us</h5>
                                <p>Questions, suggestions, or need help? Get in touch.</p>
                                <a href="?page=contact" class="btn blue-grey waves-effect waves-light">Contact</a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="center-align">
                                <i class="material-icons medium">help</i>
                                <h5>FAQ</h5>
                                <p>Find answers to frequently asked questions.</p>
                                <a href="?page=faq" class="btn blue-grey waves-effect waves-light">View FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.sitemap-list li {
    padding: 6px 0;
    border-bottom: 1px solid #f0f0f0;
}

.sitemap-list li:last-child {
    border-bottom: none;
}

.card-content .card-title {
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

.contact-box {
    padding: 20px;
    text-align: center;
}

.contact-box i {
    color: #455a64;
    margin-bottom: 10px;
}

.contact-box h5 {
    margin-bottom: 20px;
}

@media only screen and (max-width: 992px) {
    .contact-box {
        padding: 10px;
        margin-bottom: 20px;
    }
}
</style>
