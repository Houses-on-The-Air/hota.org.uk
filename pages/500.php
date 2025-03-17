<?php
// Don't show PHP errors on this page
error_reporting(0);
ini_set('display_errors', 0);

$pageTitle = "Server Error - HOTA";
$pageDescription = "We're experiencing technical difficulties on the Houses on the Air website. Our team is working to resolve the issue.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Error - Houses on The Air</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body { padding-top: 40px; }
        .error-container { margin: 0 auto; max-width: 800px; text-align: center; }
        .error-icon { font-size: 120px; color: #546e7a; }
        .error-divider { margin: 30px 0; }
        .error-page {
            padding: 50px 0;
        }

        .error-page h1 {
            color: #607d8b;
        }

        .error-img {
            margin: 40px 0;
            animation: shake 10s ease-in-out infinite;
            animation-delay: 2s;
        }

        @keyframes shake {
            0%, 90%, 100% {
                transform: translateX(0);
            }
            92%, 96% {
                transform: translateX(-5px);
            }
            94%, 98% {
                transform: translateX(5px);
            }
        }
    </style>
</head>
<body class="grey lighten-4">
    <div class="container">
        <div class="error-page center-align">
            <h1>500 - Server Error</h1>

            <div class="error-img">
                <img src="/images/errors/500-house.svg" alt="House Under Repair Illustration" class="responsive-img" style="max-width: 300px;">
            </div>

            <p class="flow-text">We're experiencing technical difficulties.</p>
            <p>Our team is working to resolve the issue. Please try again in a few moments, or use one of the links below to navigate to a different section of the site.</p>

            <div class="row mt-4">
                <div class="col s12 m6 offset-m3">
                    <div class="card-panel">
                        <h4>While You're Waiting</h4>
                        <p>You might like to visit these working sections:</p>
                        <ul class="browser-default">
                            <li><a href="/">Home Page</a></li>
                            <li><a href="?page=about">About HOTA</a></li>
                            <li><a href="?page=faq">Frequently Asked Questions</a></li>
                            <li><a href="?page=contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="/" class="btn blue-grey darken-1 waves-effect waves-light">
                    <i class="material-icons left">home</i>Return to Homepage
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
