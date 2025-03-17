<?php
$pageTitle = "Page Not Found - HOTA";
$pageDescription = "Sorry, we couldn't find the page you were looking for on the Houses on the Air (HOTA) website.";
?>

<div class="container">
    <div class="error-page center-align">
        <h1>404 - Page Not Found</h1>

        <div class="error-img">
            <img src="/images/errors/404-house.svg" alt="House Not Found Illustration" class="responsive-img" style="max-width: 300px;">
        </div>

        <p class="flow-text">Sorry, we couldn't find the address you were looking for.</p>
        <p>The page may have been moved or no longer exists. Please check the spelling of the URL or navigate using the links below.</p>

        <div class="row mt-4">
            <div class="col s12 m6 offset-m3">
                <div class="card-panel">
                    <h4>Try These Popular Pages</h4>
                    <ul class="browser-default">
                        <li><a href="/">Home Page</a></li>
                        <li><a href="?page=participate">How to Participate</a></li>
                        <li><a href="?page=awards">Awards Programme</a></li>
                        <li><a href="?page=house-activations">House Activation Guide</a></li>
                        <li><a href="?page=resources">Resources</a></li>
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

<style>
.error-page {
    padding: 50px 0;
}

.error-page h1 {
    color: #607d8b;
}

.error-img {
    margin: 40px 0;
    animation: float 4s ease-in-out infinite;
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
    100% {
        transform: translateY(0px);
    }
}
</style>

<?php include_footer(); ?>
