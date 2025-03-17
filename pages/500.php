<?php
// Don't show PHP errors on this page
error_reporting(0);
ini_set('display_errors', 0);

$pageTitle = "Server Error - HOTA";
// Use a minimal header if possible or create a standalone page
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
    </style>
</head>
<body class="grey lighten-4">
    <div class="container">
        <div class="error-container">
            <i class="material-icons error-icon">error_outline</i>
            <h1 class="blue-grey-text text-darken-1">500 Server Error</h1>
            <p class="flow-text">Sorry, something went wrong on our server.</p>
            <p>We're working to fix the issue. Please try again in a few minutes.</p>

            <div class="error-divider divider"></div>

            <div class="row">
                <div class="col s12">
                    <h5>You can try:</h5>
                    <ul class="collection">
                        <li class="collection-item"><a href="/">Return to the homepage</a></li>
                        <li class="collection-item"><a href="javascript:location.reload()">Refresh this page</a></li>
                        <li class="collection-item"><a href="?page=contact">Contact us for help</a></li>
                    </ul>
                </div>
            </div>

            <p><a href="/" class="btn blue-grey darken-1 waves-effect waves-light">
                <i class="material-icons left">home</i>Back to Home
            </a></p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
