<?php include __DIR__ . '/head.php'; ?>
<body>
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <?php include __DIR__ . '/nav.php'; ?>

    <?php if (!empty($_GET['page']) && $_GET['page'] !== 'home'): ?>
    <!-- Breadcrumb navigation for inner pages -->
    <div class="breadcrumb-wrapper hide-on-small-only">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <?php
                $page = htmlspecialchars($_GET['page']);
                $pageTitle = ucwords(str_replace('-', ' ', $page));
                echo "<li>$pageTitle</li>";
                ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>

    <!-- Hero banner for homepage only -->
    <?php if (empty($_GET['page']) || $_GET['page'] === 'home'): ?>
    <div class="hero-banner blue-grey darken-2">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col s12 m8 white-text">
                    <h1>Houses on The Air</h1>
                    <p class="flow-text">An amateur radio activity encouraging operators to set up and operate from various house locations.</p>
                    <div class="hero-actions">
                        <a href="#about" class="btn-large white blue-grey-text text-darken-2 waves-effect waves-light">Learn More</a>
                        <a href="#upload" class="btn-large orange darken-2 waves-effect waves-light">Upload ADIF</a>
                    </div>
                </div>
                <div class="col m4 hide-on-small-only">
                    <img src="/images/hota-dualcolor.svg" alt="HOTA Logo" class="responsive-img">
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php include __DIR__ . '/under-nav-ad.php'; ?>

    <main id="main-content">
        <?php if (!empty($_GET['page']) && $_GET['page'] !== 'home'): ?>
        <div class="container">
            <h1 class="page-title"><?php echo $pageTitle; ?></h1>
        </div>
        <?php endif; ?>
<?php include __DIR__ . '/google-search.php'; ?>
