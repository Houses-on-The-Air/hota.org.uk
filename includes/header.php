<?php
// Check if page title is set, otherwise use default
if (!isset($pageTitle)) {
    $pageTitle = "Houses on the Air";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> - HOTA</title>
    <!-- CSS and meta tags -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/stylesheets/custom.css">
    <link rel="stylesheet" href="/stylesheets/hero.css">
    <?php if(isset($pageDescription)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <?php else: ?>
    <meta name="description" content="Houses on The Air - Amateur radio activities from house locations">
    <?php endif; ?>
</head>
<body>
    <header>
        <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo">HOTA</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="?page=about">About</a></li>
                    <li><a href="?page=participate">Participate</a></li>
                    <li><a href="?page=awards">Awards</a></li>
                    <li><a href="?page=contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-nav">
            <li><a href="/">Home</a></li>
            <li><a href="?page=about">About</a></li>
            <li><a href="?page=participate">Participate</a></li>
            <li><a href="?page=awards">Awards</a></li>
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </header>

    <main>
    <!-- Main content will be included here -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize sidenav
        var sidenavElems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenavElems);

        // Initialize dropdown with explicit options
        var dropdownElems = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdownElems, {
            coverTrigger: false,
            constrainWidth: false,
            hover: false,
            alignment: 'left'
        });
    });
    </script>
</body>
</html>
