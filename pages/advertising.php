<?php
$pageTitle = "Advertising - HOTA";
$pageDescription = "Information about advertising opportunities on the Houses on The Air website. Learn about our advertising options, audience, and how to get started.";
?>

<div class="container">
    <h1>Advertising Opportunities</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Advertising</li>
        </ul>
    </div>

    <p class="flow-text">Thank you for your interest in advertising with Houses on The Air. We offer various advertising options to help you reach our engaged community of amateur radio enthusiasts.</p>

    <!-- Main Info Card -->
    <div class="card">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">campaign</i>Why Advertise with HOTA?</span>

            <div class="row">
                <div class="col s12 m8">
                    <ul class="audience-stats">
                        <li><i class="material-icons tiny">people</i> <strong>Growing Community</strong>: Reach thousands of amateur radio operators worldwide</li>
                        <li><i class="material-icons tiny">person_search</i> <strong>Targeted Audience</strong>: Connect with highly engaged radio enthusiasts</li>
                        <li><i class="material-icons tiny">repeat</i> <strong>Regular Traffic</strong>: Benefit from our active member base and recurring visitors</li>
                        <li><i class="material-icons tiny">public</i> <strong>Global Reach</strong>: Access radio operators across multiple countries</li>
                    </ul>
                </div>
                <div class="col s12 m4 center-align hide-on-small-only">
                    <i class="material-icons audience-icon">trending_up</i>
                </div>
            </div>
        </div>
    </div>

    <!-- Advertising Options -->
    <div class="card">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">view_carousel</i>Advertising Options</span>

            <div class="options-grid">
                <div class="option-item">
                    <h4><i class="material-icons left small">view_day</i>Banner Ads</h4>
                    <p>Premium placement banner advertisements throughout our website with options for different sizes and positions.</p>
                    <div class="option-details">Sizes: 728×90, 300×250, 160×600</div>
                </div>
                <div class="option-item">
                    <h4><i class="material-icons left small">article</i>Sponsored Content</h4>
                    <p>Present your products or services through informative articles crafted to engage our audience while highlighting your offerings.</p>
                    <div class="option-details">Includes promotion across our social platforms</div>
                </div>
                <div class="option-item">
                    <h4><i class="material-icons left small">mark_email_unread</i>Newsletter Features</h4>
                    <p>Reach our subscribers directly with advertisements or featured listings in our regular newsletters.</p>
                    <div class="option-details">Average open rate: 32%</div>
                </div>
                <div class="option-item">
                    <h4><i class="material-icons left small">event</i>Event Sponsorship</h4>
                    <p>Sponsor HOTA contests or special events with prominent brand placement and mentions.</p>
                    <div class="option-details">High visibility during peak participation periods</div>
                </div>
            </div>

            <div class="card-panel blue-grey lighten-5 mt-3">
                <p><strong>Custom Solutions:</strong> We're happy to discuss tailored advertising packages to meet your specific goals and budget. Contact us to explore possibilities.</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="card">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">contact_mail</i>Get Started</span>

            <div class="row">
                <div class="col s12 m6">
                    <h4>Contact Information</h4>
                    <p>To discuss advertising opportunities, please contact our advertising team:</p>
                    <ul class="contact-details">
                        <li><i class="material-icons left tiny">email</i> <a href="mailto:<?= ConfigManager::get('email.advertising'); ?>" rel="nofollow"><?= ConfigManager::get('email.advertising'); ?></a></li>
                        <li><i class="material-icons left tiny">schedule</i> Response time: 1-2 business days</li>
                    </ul>

                    <p>When contacting us, please include:</p>
                    <ul class="browser-default">
                        <li>Your name and organization</li>
                        <li>Preferred advertising options</li>
                        <li>Campaign timeframe</li>
                        <li>Budget range (if applicable)</li>
                        <li>Any specific questions or requirements</li>
                    </ul>
                </div>

                <div class="col s12 m6">
                    <h4>Quick Inquiry Form</h4>
                    <form id="advertising-form" data-ajax="true" data-result-container="#ad-form-result">
                        <div class="input-field">
                            <input id="ad-name" name="name" type="text" class="validate" required>
                            <label for="ad-name">Name*</label>
                        </div>
                        <div class="input-field">
                            <input id="ad-email" name="email" type="email" class="validate" required>
                            <label for="ad-email">Email*</label>
                        </div>
                        <div class="input-field">
                            <select id="ad-interest" name="interest" required>
                                <option value="" disabled selected>Select option</option>
                                <option value="banner">Banner Ads</option>
                                <option value="sponsored">Sponsored Content</option>
                                <option value="newsletter">Newsletter Feature</option>
                                <option value="event">Event Sponsorship</option>
                                <option value="custom">Custom Solution</option>
                            </select>
                            <label>I'm interested in:</label>
                        </div>
                        <div class="input-field">
                            <textarea id="ad-message" name="message" class="materialize-textarea"></textarea>
                            <label for="ad-message">Additional Information</label>
                        </div>
                        <button type="submit" class="btn blue-grey waves-effect waves-light">
                            <i class="material-icons left">send</i>Submit Inquiry
                        </button>
                    </form>
                    <div id="ad-form-result"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Policies Notice -->
    <div class="card-panel mt-4">
        <h3><i class="material-icons left">gavel</i>Advertising Policies</h3>
        <p>All advertisements must comply with our advertising policies and standards. We reserve the right to refuse any advertisement that does not align with our community values or that promotes prohibited products or services.</p>
        <p>For full details, please review our <a href="?page=terms">Terms of Service</a>.</p>
        <p class="right-align"><small>Last updated: <?= date('F j, Y'); ?></small></p>
    </div>
</div>

<style>
.audience-icon {
    font-size: 6rem;
    color: #607d8b;
    opacity: 0.8;
    margin-top: 20px;
}

.audience-stats li {
    margin-bottom: 12px;
    list-style-type: none;
    padding-left: 8px;
}

.audience-stats li i {
    color: #546e7a;
    vertical-align: middle;
    margin-right: 8px;
}

.options-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

.option-item {
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    padding: 15px;
    background-color: #f9f9f9;
}

.option-item h4 {
    color: #455a64;
    margin-top: 0;
    font-size: 1.2rem;
}

.option-details {
    color: #616161;
    font-size: 0.9rem;
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px dotted #e0e0e0;
}

.contact-details {
    margin-bottom: 20px;
}

.contact-details li {
    margin-bottom: 10px;
    list-style-type: none;
}

.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}

@media only screen and (max-width: 600px) {
    .options-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);
});
</script>
