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
    <!-- Critical hero styles as fallback -->
    <style>
        /* Essential hero styles fallback - will be overridden by hero.css if loaded */
        .hero {position:relative; width:100%; padding:80px 0; background-color:#455a64; color:white; text-align:center; overflow:hidden;}
        .hero-content {position:relative; z-index:2; max-width:800px; margin:0 auto; padding:0 20px;}
        .hero h1 {font-size:3rem; margin-bottom:1rem; color:white!important; text-shadow:0 1px 3px rgba(0,0,0,0.2);}
        .hero-container {position:relative; min-height:400px; display:flex; align-items:center; justify-content:center;}
        .hero-overlay {position:absolute; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:1;}
        .hero-content {position:relative; z-index:2;}
        .hero-content h1, .hero-content p {color:white!important;}
    </style>
    <?php if(isset($pageDescription)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <?php else: ?>
    <meta name="description" content="Houses on The Air - Amateur radio activities from house locations">
    <?php endif; ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2002090586659609"
     crossorigin="anonymous"></script>
</head>
<body>
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header>
        <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo">HOTA</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>

                    <!-- About dropdown -->
                    <li><a class="dropdown-trigger" href="?page=about" data-target="dropdown-about">About<i class="material-icons right">arrow_drop_down</i></a></li>
                    <ul id="dropdown-about" class="dropdown-content">
                        <li><a href="?page=about">About HOTA</a></li>
                        <li><a href="?page=team">Our Team</a></li>
                        <li><a href="?page=join-our-team">Join Our Team</a></li>
                        <li class="divider"></li>
                        <li><a href="?page=rules">Rules</a></li>
                        <li><a href="?page=faq">FAQ</a></li>
                        <li><a href="?page=glossary">Glossary</a></li>
                    </ul>

                    <!-- Participate dropdown -->
                    <li><a class="dropdown-trigger" href="?page=participate" data-target="dropdown-participate">Participate<i class="material-icons right">arrow_drop_down</i></a></li>
                    <ul id="dropdown-participate" class="dropdown-content">
                        <li><a href="?page=participate">How to Participate</a></li>
                        <li><a href="?page=get-licenced">Get Licenced</a></li>
                        <li><a href="?page=house-activations">House Activations</a></li>
                        <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
                        <li><a href="?page=log-entry">Log Entry</a></li>
                        <li class="divider"></li>
                        <li><a href="?page=contests">Contests</a></li>
                        <li><a href="?page=community-events">Community Events</a></li>
                        <li><a href="?page=nets">Net Schedule</a></li>
                    </ul>

                    <li><a href="?page=awards">Awards</a></li>

                    <!-- Resources dropdown -->
                    <li><a class="dropdown-trigger" href="?page=resources" data-target="dropdown-resources">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
                    <ul id="dropdown-resources" class="dropdown-content">
                        <li><a href="?page=resources">Resource Library</a></li>
                        <li><a href="?page=band-plans">Band Plans</a></li>
                        <li><a href="?page=discord">Discord Community</a></li>
                        <li><a href="?page=tgif">TGIF Talkgroup</a></li>
                        <li><a href="?page=appicons">App Icons</a></li>
                    </ul>

                    <li><a href="?page=store">Shop</a></li>
                    <li><a href="?page=contact">Contact</a></li>
                </ul>

                <!-- Add search icon to the right side of the navbar for mobile -->
                <ul class="right hide-on-med-and-up">
                    <li>
                        <a href="#" data-target="search-modal" class="modal-trigger">
                            <i class="material-icons">search</i>
                        </a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Add search form for desktop -->
                    <li>
                        <form action="?page=search-results" method="get" class="search-form">
                            <div class="input-field">
                                <input id="search" type="search" name="query" placeholder="Search..." required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                                <input type="hidden" name="page" value="search-results">
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Mobile navigation -->
        <ul class="sidenav" id="mobile-nav">
            <li><a href="/">Home</a></li>
            <li class="divider"></li>

            <!-- About section -->
            <li><a href="?page=about">About HOTA</a></li>
            <li class="pl-4"><a href="?page=team">Our Team</a></li>
            <li class="pl-4"><a href="?page=join-our-team">Join Our Team</a></li>
            <li class="pl-4"><a href="?page=rules">Rules</a></li>
            <li class="pl-4"><a href="?page=faq">FAQ</a></li>
            <li class="pl-4"><a href="?page=glossary">Glossary</a></li>
            <li class="divider"></li>

            <!-- Participate section -->
            <li><a href="?page=participate">Participate</a></li>
            <li class="pl-4"><a href="?page=get-licenced">Get Licenced</a></li>
            <li class="pl-4"><a href="?page=house-activations">House Activations</a></li>
            <li class="pl-4"><a href="?page=operating-guidelines">Operating Guidelines</a></li>
            <li class="pl-4"><a href="?page=log-entry">Log Entry</a></li>
            <li class="pl-4"><a href="?page=contests">Contests</a></li>
            <li class="pl-4"><a href="?page=community-events">Community Events</a></li>
            <li class="pl-4"><a href="?page=nets">Net Schedule</a></li>
            <li class="divider"></li>

            <li><a href="?page=awards">Awards</a></li>
            <li class="divider"></li>

            <!-- Resources section -->
            <li><a href="?page=resources">Resources</a></li>
            <li class="pl-4"><a href="?page=band-plans">Band Plans</a></li>
            <li class="pl-4"><a href="?page=discord">Discord Community</a></li>
            <li class="pl-4"><a href="?page=tgif">TGIF Talkgroup</a></li>
            <li class="pl-4"><a href="?page=appicons">App Icons</a></li>
            <li class="divider"></li>

            <li><a href="?page=store">Shop</a></li>
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </header>

    <main id="main-content">
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

    <!-- Add search modal for mobile -->
    <div id="search-modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Search HOTA</h4>
            <form action="?page=search-results" method="get">
                <div class="input-field">
                    <input id="mobile-search" type="search" name="query" placeholder="Enter search terms..." required>
                    <label for="mobile-search">Search</label>
                    <input type="hidden" name="page" value="search-results">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-close waves-effect waves-green btn-flat">Search</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
