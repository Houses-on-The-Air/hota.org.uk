<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Houses on The Air - HOTA</title>

<!-- Meta tags -->
<meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Houses on The Air (HOTA) - Amateur Radio Activity'; ?>">
<meta name="keywords" content="ham radio, amateur radio, HOTA, houses on the air<?php echo isset($pageKeywords) ? ', ' . $pageKeywords : ''; ?>">
<meta name="author" content="HOTA Team">

<!-- Open Graph Tags -->
<meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Houses on The Air - HOTA'; ?>">
<meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Houses on The Air (HOTA) - Amateur Radio Activity'; ?>">
<meta property="og:image" content="<?php echo isset($ogImage) ? $ogImage : '/images/hota-banner.svg'; ?>">
<meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
<meta property="og:type" content="website">

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Houses on The Air - HOTA'; ?>">
<meta name="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Houses on The Air (HOTA) - Amateur Radio Activity'; ?>">
<meta name="twitter:image" content="<?php echo isset($ogImage) ? $ogImage : '/images/hota-banner.svg'; ?>">

<!-- Favicon -->
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<!-- Materialize CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="/stylesheets/custom.css">
<?php if(isset($pageSpecificCSS)): ?>
<link rel="stylesheet" href="<?php echo $pageSpecificCSS; ?>">
<?php endif; ?>

<!-- jQuery (required for Materialize) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Additional head elements can be added by setting $additionalHead variable before including this file -->
<?php echo isset($additionalHead) ? $additionalHead : ''; ?>
