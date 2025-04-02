<?php
$pageTitle = "Search Results - HOTA";
$pageDescription = "Search results for the Houses on the Air website.";

// Handle the search query
$query = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';
$searchResults = [];

if (!empty($query)) {
    // Get the search service
    $searchResults = searchSite($query);
}

/**
 * Search the site content based on a query
 *
 * @param string $query The search query
 * @return array Search results
 */
function searchSite($query) {
    $results = [];
    $pages = getPagesList();

    foreach ($pages as $pageId => $pageInfo) {
        // Skip the search results page itself
        if ($pageId === 'search-results') {
            continue;
        }

        $filePath = __DIR__ . '/' . $pageId . '.php';

        if (file_exists($filePath)) {
            $pageContent = file_get_contents($filePath);

            // Strip PHP tags for searching
            $pageContent = preg_replace('/<\?php.*?\?>/s', '', $pageContent);
            // Strip HTML tags to search only visible content
            $plainText = strip_tags($pageContent);

            // Check if the query is in the title, description or content
            $titleMatch = stripos($pageInfo['title'], $query) !== false;
            $descMatch = stripos($pageInfo['description'], $query) !== false;
            $contentMatch = stripos($plainText, $query) !== false;

            if ($titleMatch || $descMatch || $contentMatch) {
                $excerpt = getExcerpt($plainText, $query);

                $results[] = [
                    'id' => $pageId,
                    'title' => $pageInfo['title'],
                    'description' => $pageInfo['description'],
                    'excerpt' => $excerpt,
                    'url' => '?page=' . $pageId,
                    'relevance' => calculateRelevance($titleMatch, $descMatch, $contentMatch)
                ];
            }
        }
    }

    // Sort by relevance
    usort($results, function($a, $b) {
        return $b['relevance'] - $a['relevance'];
    });

    return $results;
}

/**
 * Calculate the search result relevance
 *
 * @param bool $titleMatch Whether the query matched in the title
 * @param bool $descMatch Whether the query matched in the description
 * @param bool $contentMatch Whether the query matched in the content
 * @return int Relevance score
 */
function calculateRelevance($titleMatch, $descMatch, $contentMatch) {
    $score = 0;

    if ($titleMatch) $score += 10;
    if ($descMatch) $score += 5;
    if ($contentMatch) $score += 1;

    return $score;
}

/**
 * Get an excerpt of text surrounding the search term
 *
 * @param string $text The text to extract from
 * @param string $query The search query
 * @return string The excerpt
 */
function getExcerpt($text, $query) {
    // Find position of the query in the text
    $pos = stripos($text, $query);

    if ($pos !== false) {
        // Get a portion of text before and after the query
        $start = max(0, $pos - 50);
        $length = strlen($query) + 100; // Show the query plus some context

        $excerpt = substr($text, $start, $length);
        $excerpt = '...' . $excerpt . '...';

        // Highlight the search term
        $excerpt = str_ireplace($query, '<strong>' . $query . '</strong>', $excerpt);

        return $excerpt;
    }

    // If the query is not found directly, return the beginning of the content
    return substr($text, 0, 150) . '...';
}

/**
 * Get list of all pages with their titles and descriptions
 *
 * @return array List of pages
 */
function getPagesList() {
    $pages = [];
    $directory = __DIR__;

    // Scan the pages directory
    $files = scandir($directory);

    foreach ($files as $file) {
        // Skip directories and non-PHP files
        if (is_dir($file) || pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
            continue;
        }

        $pageId = pathinfo($file, PATHINFO_FILENAME);
        $filePath = $directory . '/' . $file;

        // Extract title and description from the file
        $content = file_get_contents($filePath);

        $title = 'Unknown Page';
        $description = '';

        // Extract $pageTitle variable if it exists
        if (preg_match('/\$pageTitle\s*=\s*["\'](.+?)["\']\s*;/i', $content, $matches)) {
            $title = $matches[1];
        }

        // Extract $pageDescription variable if it exists
        if (preg_match('/\$pageDescription\s*=\s*["\'](.+?)["\']\s*;/i', $content, $matches)) {
            $description = $matches[1];
        }

        $pages[$pageId] = [
            'title' => $title,
            'description' => $description
        ];
    }

    return $pages;
}
?>

<div class="container">
    <h1>Search Results</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Search Results</li>
        </ul>
    </div>

    <!-- Search Form -->
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Search</span>
                    <form action="?page=search-results" method="get">
                        <div class="input-field">
                            <input id="search-page" type="text" name="query" value="<?= $query ?>" required>
                            <label for="search-page">Enter search terms</label>
                            <input type="hidden" name="page" value="search-results">
                        </div>
                        <button type="submit" class="btn waves-effect waves-light blue-grey darken-1">
                            <i class="material-icons left">search</i>Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($query)): ?>
        <!-- Search Results -->
        <div class="row">
            <div class="col s12">
                <h2>Results for "<?= $query ?>"</h2>

                <?php if (empty($searchResults)): ?>
                    <div class="card-panel amber lighten-4">
                        <p>No results found for your search. Please try different terms or check your spelling.</p>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Suggestions</span>
                            <ul class="browser-default">
                                <li>Try using more general keywords</li>
                                <li>Check your spelling</li>
                                <li>Try related terms</li>
                                <li>Browse our <a href="?page=sitemap">sitemap</a> to find what you're looking for</li>
                            </ul>
                        </div>
                    </div>
                <?php else: ?>
                    <p>Found <?= count($searchResults) ?> result(s)</p>

                    <?php foreach ($searchResults as $result): ?>
                        <div class="card search-result">
                            <div class="card-content">
                                <span class="card-title">
                                    <a href="<?= $result['url'] ?>"><?= $result['title'] ?></a>
                                </span>
                                <p class="search-description"><?= $result['description'] ?></p>
                                <div class="search-excerpt">
                                    <?= $result['excerpt'] ?>
                                </div>
                            </div>
                            <div class="card-action">
                                <a href="<?= $result['url'] ?>">View Page</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col s12">
                <div class="card-panel blue-grey lighten-5">
                    <p>Enter search terms above to find content throughout the HOTA website.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Popular Searches -->
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey lighten-5">
                <div class="card-content">
                    <span class="card-title">Common Topics</span>
                    <div class="collection">
                        <a href="?page=search-results&query=award" class="collection-item">Award Information</a>
                        <a href="?page=search-results&query=certificate" class="collection-item">Certificates</a>
                        <a href="?page=search-results&query=log" class="collection-item">Logging</a>
                        <a href="?page=search-results&query=antenna" class="collection-item">Antennas</a>
                        <a href="?page=search-results&query=activation" class="collection-item">Activations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.search-result .card-title {
    margin-bottom: 10px;
}

.search-description {
    color: #2e7d32; /* green darken-3 */
    margin-bottom: 15px;
}

.search-excerpt {
    color: #616161; /* grey darken-2 */
    font-size: 0.95rem;
}

.search-excerpt strong {
    background-color: #fff59d; /* yellow lighten-3 */
    padding: 2px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-focus the search input
    var searchInput = document.getElementById('search-page');
    if (searchInput) {
        searchInput.focus();
    }
});
</script>
