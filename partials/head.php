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
    <?php
        switch ($_SERVER['REQUEST_URI']) {
            case '/':
                $secondTitle = 'Amateur Radio Activities';
                break;
            case '/?page=about':
                $secondTitle = 'About Us';
                break;
            case '/?page=contact':
                $secondTitle = 'Contact Us';
                break;
            case '/?page=rules':
                $secondTitle = 'Rules';
                break;
            case '/?page=advertising':
                $secondTitle = 'Advertise With Us';
                break;
            case '/?page=awards':
                $secondTitle = 'See Available Awards';
                break;
            case '/?page=community-events':
                $secondTitle = 'Community Events';
                break;
            case '/?page=cookies':
                $secondTitle = 'Cookies Policy';
                break;
            case '/?page=privacy':
                $secondTitle = 'Privacy Policy';
                break;
            case '/?page=discord':
                $secondTitle = 'Join Our Discord Server';
                break;
            case '/?page=faq':
                $secondTitle = 'Frequently Asked Questions';
                break;
            case '/?page=get-licenced':
                $secondTitle = 'Get a UK Amateur Radio License for Free';
                break;
            case '/?page=house-activations':
                $secondTitle = 'House Activations';
                break;
            case '/?page=join-our-team':
                $secondTitle = 'Join Our Team';
                break;
            case '/?page=operating-guidelines':
                $secondTitle = 'Operating Guidelines';
                break;
            case '/?page=team':
                $secondTitle = 'Meet The Team';
                break;
            case '/?page=tgif':
                $secondTitle = 'TGIF DMR Network';
                break;
            case '/?page=contests':
                $secondTitle = 'Amateur Radio Contests';
                break;
            case '/?page=store':
                $secondTitle = 'Merch Store';
                break;
            default:
                $secondTitle = 'Amateur Radio Activities';
            }
    ?>
    <title>Houses on The Air - <?php echo $secondTitle ?></title>
    <meta name="description" content="Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses.">
    <meta name="keywords" content="Houses on The Air, HOTA, amateur radio, house activations, radio contests, community events">
    <meta property="og:title" content="Houses on The Air - Amateur Radio Activities">
    <meta property="og:description" content="Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hota.org.uk">
    <meta property="og:image" content="https://hota.org.uk/images/hota-banner.png">
    <meta property="og:site_name" content="Houses on The Air">
    <meta property="og:locale" content="en_GB">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Houses on The Air - Amateur Radio Activities">
    <meta name="twitter:description" content="Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses.">
    <meta name="twitter:image" content="https://hota.org.uk/images/hota-banner.png">
    <meta name="twitter:creator" content="@hotaradio">
    <meta name="twitter:site" content="@hotaradio">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Houses on The Air">
    <meta name="referrer" content="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://hota.org.uk<?php echo ($_SERVER['REQUEST_URI']); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/hota-banner.png">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="stylesheets/materialize-v2.2.1/css/materialize.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2002090586659609"
        crossorigin="anonymous"></script>
</head>
