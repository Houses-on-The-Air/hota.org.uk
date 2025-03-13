<?php
$pageTitle = "Page Not Found - HOTA";
include_once('../includes/header.php');
?>

<section class="container">
    <div class="row">
        <div class="col s12 center">
            <h1 style="font-size: 120px; margin-bottom: 0;">404</h1>
            <h2 style="margin-top: 0;">Page Not Found</h2>

            <div style="margin: 40px 0;">
                <img src="images/hota-dualcolor.svg" alt="HOTA Logo" style="width: 200px;">
            </div>

            <p class="flow-text">We couldn't find the page you were looking for.</p>
            <p>The frequency might be out of range or the signal lost.</p>

            <div style="margin-top: 40px;">
                <h4>You might want to try:</h4>
                <div class="collection">
                    <a href="/" class="collection-item">Return to the homepage</a>
                    <a href="?page=rules" class="collection-item">Check the HOTA rules</a>
                    <a href="#upload" class="collection-item">Upload your ADIF file</a>
                    <a href="?page=contact" class="collection-item">Contact us for help</a>
                    <a href="?page=faq" class="collection-item">Read our FAQ</a>
                </div>
            </div>

            <div class="card-panel blue-grey lighten-4" style="margin-top: 30px;">
                <p>
                    If you believe this is an error, please
                    <a href="?page=contact">contact our team</a> and let us know what happened.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include_once('../includes/footer.php'); ?>
