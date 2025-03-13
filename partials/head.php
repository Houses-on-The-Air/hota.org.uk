<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3WD4P1KRRE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3WD4P1KRRE');
    </script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="fa1072f7-4400-4afa-9791-4a7415340d9b" type="text/javascript" async></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Improve SEO with better meta description -->
    <meta name="description" content="Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses">

    <!-- Open Graph tags for social sharing -->
    <meta property="og:title" content="Houses on The Air (HOTA) - Amateur Radio Activity">
    <meta property="og:description" content="<?php include __DIR__ . '/description.php'; ?>">
    <meta property="og:image" content="<?= ConfigManager::get('app.url') ?>/images/hota-dualcolor.svg">
    <meta property="og:url" content="<?= ConfigManager::get('app.url') ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Houses on The Air (HOTA)">
    <meta name="twitter:description" content="<?php include __DIR__ . '/description.php'; ?>">
    <meta name="twitter:image" content="<?= ConfigManager::get('app.url') ?>/images/hota-dualcolor.svg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#455a64">
    <meta name="msapplication-TileColor" content="#455a64">
    <meta name="theme-color" content="#455a64">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/stylesheets/custom.css">

    <title>Houses on The Air - HOTA</title>

    <!-- Structured data for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Houses on The Air",
      "url": "<?= ConfigManager::get('app.url') ?>",
      "logo": "<?= ConfigManager::get('app.url') ?>/images/hota-dualcolor.svg",
      "sameAs": [
        "<?= ConfigManager::get('social.facebook') ?>",
        "<?= ConfigManager::get('social.twitter') ?>",
        "<?= ConfigManager::get('social.bluesky') ?>"
      ]
    }
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2002090586659609"
        crossorigin="anonymous"></script>
    <script src="node_modules/%40materializecss/materialize/dist/js/materialize.min.js"></script>
</head>
</html>
