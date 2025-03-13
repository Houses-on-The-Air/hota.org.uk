<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Error - Houses on The Air</title>
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
            color: #c62828;
            margin-bottom: 0;
        }
        .error-message {
            font-size: 24px;
            color: #ef5350;
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
        <h1 class="error-code">500</h1>
        <h2 class="error-message">Server Error</h2>

        <div class="error-image">
            <img src="/images/radio-error.svg" alt="Radio with error display" class="responsive-img">
        </div>

        <p>We're experiencing some technical difficulties. Our team has been notified and is working on a fix.</p>
        <p><?php echo isset($message) ? htmlspecialchars($message) : 'Please try again later.'; ?></p>

        <div class="suggestions">
            <h4>While you wait:</h4>
            <div class="collection">
                <a href="/" class="collection-item">Return to the homepage</a>
                <a href="/?page=faq" class="collection-item">Check our FAQ</a>
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
