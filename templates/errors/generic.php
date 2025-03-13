<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?php echo isset($code) ? "($code)" : ''; ?> - Houses on The Air</title>
    <link href="/node_modules/%40materializecss/materialize/dist/css/materialize.min.css" rel="stylesheet">
    <link href="/stylesheets/main.css" rel="stylesheet">
    <style>
        .error-container {
            text-align: center;
            padding: 50px 20px;
        }
        .error-code {
            font-size: 80px;
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
            max-width: 200px;
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
        <?php if (isset($code)): ?>
            <h1 class="error-code"><?php echo htmlspecialchars($code); ?></h1>
        <?php endif; ?>

        <h2 class="error-message">
            <?php echo isset($title) ? htmlspecialchars($title) : 'An Error Occurred'; ?>
        </h2>

        <div class="error-image">
            <img src="/images/radio-generic-error.svg" alt="Radio with error" class="responsive-img">
        </div>

        <p><?php echo isset($message) ? htmlspecialchars($message) : 'Something went wrong. Please try again later.'; ?></p>

        <div class="suggestions">
            <div class="collection">
                <a href="/" class="collection-item">Return to the homepage</a>
                <a href="javascript:history.back()" class="collection-item">Go back to previous page</a>
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
