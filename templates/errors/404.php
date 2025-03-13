<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Houses on The Air</title>
    <link href="/node_modules/%40materializecss/materialize/dist/css/materialize.min.css" rel="stylesheet">
    <link href="/stylesheets/main.css" rel="stylesheet">
    <style>
        .error-container {
            text-align: center;
            padding: 50px 20px;
        }
        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #455a64;
            margin-bottom: 0;
        }
        .error-message {
            font-size: 24px;
            color: #78909c;
            margin-top: 0;
        }
        .error-image {
            max-width: 300px;
            margin: 30px auto;
        }
        .suggestions {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header class="blue-grey darken-1 white-text center-align py-3">
        <h1 style="display: flex; align-items: center; justify-content: center;">
            <a href="/" style="display: flex; align-items: center; color: white;">
                <img src="/images/hota-dualcolor.svg" alt="HOTA Logo" style="margin-right: 10px;" width="100" height="100">
                Houses on The Air (HOTA)
            </a>
        </h1>
    </header>

    <main class="container error-container">
        <h1 class="error-code">404</h1>
        <h2 class="error-message">Page Not Found</h2>

        <div class="error-image">
            <img src="/images/404.png" alt="Radio with 404 display" class="responsive-img">
        </div>

        <p>We couldn't find the page you were looking for. The frequency might be out of range or the signal lost.</p>

        <div class="suggestions">
            <h4>You might want to try:</h4>
            <div class="collection">
                <a href="/" class="collection-item">Return to the homepage</a>
                <a href="/?page=rules" class="collection-item">Check the HOTA rules</a>
                <a href="/?page=upload" class="collection-item">Upload your ADIF file</a>
                <a href="/?page=contact" class="collection-item">Contact us for help</a>
            </div>
        </div>
    </main>

    <footer class="page-footer blue-grey">
        <div class="footer-copyright">
            <div class="container center-align">
                © <?php echo date('Y'); ?> Houses on The Air
            </div>
        </div>
    </footer>

    <script src="node_modules/%40materializecss/materialize/dist/js/materialize.min.js"></script>
</body>
</html>
