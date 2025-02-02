<?php
class PageRenderer {
    public function render() {
        include 'partials/head.php';
        echo "<body>";
        include 'partials/header.php';
        include 'partials/nav.php';
        include 'partials/main.php';
        include 'partials/footer.php';
        include 'partials/scripts.php';
        echo "</body></html>";
    }
}
?>
