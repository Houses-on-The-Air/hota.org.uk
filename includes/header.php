<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Houses on The Air - HOTA'; ?></title>

    <!-- Meta tags -->
    <meta name="description" content="Houses on The Air (HOTA) - Amateur radio activity focused on operating from unique house locations around the world">
    <meta name="keywords" content="ham radio, amateur radio, HOTA, houses on the air">
    <meta name="author" content="HOTA Team">

    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/stylesheets/custom.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- jQuery - Must load before Materialize -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="blue-grey darken-2">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">
                <img src="/images/hota-singlecolor.svg" alt="HOTA Logo" height="50">
                HOTA
            </a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=rules">Rules</a></li>
                <li><a href="?page=awards">Awards</a></li>
                <li><a href="?page=house-activations">Activations</a></li>
                <li>
                    <a class="dropdown-trigger" href="?page=participate" data-target="participate-dropdown">
                        Participate <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a href="?page=resources">Resources</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Participation Dropdown Structure - Outside of nav for proper positioning -->
    <ul id="participate-dropdown" class="dropdown-content">
        <li><a href="?page=log-entry">Log Entry</a></li>
        <li><a href="?page=get-started">Get Started</a></li>
        <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
        <li class="divider"></li>
        <li><a href="?page=contests">Contests</a></li>
        <li><a href="?page=community-events">Community Events</a></li>
    </ul>

    <!-- Mobile Navigation -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="/">Home</a></li>
        <li><a href="?page=about">About</a></li>
        <li><a href="?page=rules">Rules</a></li>
        <li><a href="?page=awards">Awards</a></li>
        <li><a href="?page=house-activations">Activations</a></li>
        <li class="divider"></li>
        <li><div class="subheader">Participate</div></li>
        <li><a href="?page=participate">Participate Overview</a></li>
        <li><a href="?page=log-entry" class="pl-4">- Log Entry</a></li>
        <li><a href="?page=get-started" class="pl-4">- Get Started</a></li>
        <li><a href="?page=operating-guidelines" class="pl-4">- Operating Guidelines</a></li>
        <li><a href="?page=contests" class="pl-4">- Contests</a></li>
        <li><a href="?page=community-events" class="pl-4">- Community Events</a></li>
        <li class="divider"></li>
        <li><a href="?page=resources">Resources</a></li>
        <li><a href="?page=contact">Contact</a></li>
    </ul>

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

    <!-- Main content starts -->
    <main>
