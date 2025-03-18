<?php
$pageTitle = "Contact - HOTA";
$pageDescription = "Get in touch with the Houses on The Air team. Send us your questions, feedback, or suggestions through our contact form or other available channels.";
include_once('../includes/header.php');
?>

<section class="container">
    <h1>Contact Us</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Contact</li>
        </ul>
    </div>

    <p class="flow-text">Have questions, feedback, or need assistance with Houses on The Air? We'd love to hear from you! Choose the method that works best for you.</p>

    <div class="row">
        <!-- Contact Form -->
        <div class="col s12 m8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        <i class="material-icons left">email</i>
                        Send Us a Message
                    </span>
                    <p>Fill out this form and we'll get back to you as soon as possible.</p>

                    <form id="contact-form" class="mt-4" data-ajax="true" data-result-container="#form-result">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">person</i>
                                <input id="name" name="name" type="text" class="validate" required>
                                <label for="name">Your Name*</label>
                                <span class="helper-text" data-error="Please enter your name"></span>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">call_sign</i>
                                <input id="callsign" name="callsign" type="text" class="validate">
                                <label for="callsign">Callsign (if applicable)</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Email Address*</label>
                                <span class="helper-text" data-error="Please enter a valid email address"></span>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">label</i>
                                <select id="subject" name="subject" required>
                                    <option value="" disabled selected>Choose a topic</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="technical">Technical Support</option>
                                    <option value="awards">Awards & Certificates</option>
                                    <option value="activation">Activation Questions</option>
                                    <option value="log">Log Submission Help</option>
                                    <option value="feedback">Website Feedback</option>
                                    <option value="partnership">Partnership Opportunity</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="subject">Subject*</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">message</i>
                                <textarea id="message" name="message" class="materialize-textarea" required minlength="10" data-length="2000"></textarea>
                                <label for="message">Your Message*</label>
                                <span class="helper-text" data-error="Please enter your message (min 10 characters)"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" id="newsletter" name="newsletter">
                                        <span class="lever"></span>
                                        Subscribe to our newsletter for HOTA updates
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 center-align">
                                <button type="submit" class="btn-large blue-grey darken-1 waves-effect waves-light" data-loading-text="Sending...">
                                    <i class="material-icons left">send</i>Send Message
                                </button>
                                <p class="small-text mt-2">* Required fields</p>
                            </div>
                        </div>
                    </form>

                    <div id="form-result" style="display:none;"></div>
                </div>
            </div>
        </div>

        <!-- Contact Information Sidebar -->
        <div class="col s12 m4">
            <!-- Direct Contact Info -->
            <div class="card blue-grey lighten-5">
                <div class="card-content">
                    <span class="card-title">
                        <i class="material-icons left">contact_phone</i>
                        Direct Contact
                    </span>
                    <ul class="collection contact-info z-depth-1">
                        <li class="collection-item">
                            <i class="material-icons left">email</i>
                            <span>General Inquiries:</span><br>
                            <a href="mailto:<?= ConfigManager::get('email.info'); ?>"><?= ConfigManager::get('email.info'); ?></a>
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">security</i>
                            <span>Privacy Matters:</span><br>
                            <a href="mailto:<?= ConfigManager::get('email.privacy'); ?>"><?= ConfigManager::get('email.privacy'); ?></a>
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">business</i>
                            <span>Advertising:</span><br>
                            <a href="mailto:<?= ConfigManager::get('email.advertising'); ?>"><?= ConfigManager::get('email.advertising'); ?></a>
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">help_outline</i>
                            <span>Technical Support:</span><br>
                            <a href="mailto:<?= ConfigManager::get('email.support'); ?>"><?= ConfigManager::get('email.support'); ?></a>
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">web</i>
                            <span>Website Issues:</span><br>
                            <a href="mailto:<?= ConfigManager::get('email.webmaster'); ?>"><?= ConfigManager::get('email.webmaster'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Social Connections -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        <i class="material-icons left">groups</i>
                        Connect with Us
                    </span>
                    <p>Join our community for real-time discussions and updates:</p>

                    <div class="social-connect-buttons">
                        <a href="?page=discord" class="btn blue-grey waves-effect waves-light full-width-btn">
                            <i class="material-icons left">forum</i>Join Discord
                        </a>

                        <div class="social-grid">
                            <?php
                            $socials = [
                                'facebook' => 'Facebook',
                                'twitter' => 'X/Twitter',
                                'bluesky' => 'Bluesky',
                                'reddit' => 'Reddit',
                                'patreon' => 'Patreon'
                            ];

                            foreach ($socials as $key => $label) {
                                if ($url = ConfigManager::get("social.$key")) {
                                    echo "<a href=\"$url\" target=\"_blank\" rel=\"nofollow noopener\" class=\"btn social-btn\">$label</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Response Times -->
            <div class="card-panel">
                <h5><i class="material-icons left">schedule</i>Response Times</h5>
                <p>We aim to respond to all inquiries within:</p>
                <ul class="browser-default">
                    <li><strong>General inquiries:</strong> 1-2 business days</li>
                    <li><strong>Technical support:</strong> 1-3 business days</li>
                    <li><strong>Award questions:</strong> 3-5 business days</li>
                </ul>
                <p class="small-text">For urgent matters, please contact us through Discord for faster assistance.</p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title">
                <i class="material-icons left">help_outline</i>
                Frequently Asked Questions
            </span>
            <p>Before contacting us, check if your question has already been answered:</p>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>How do I submit my logs for HOTA awards?</div>
                    <div class="collapsible-body">
                        <p>You can submit your logs through our <a href="?page=log-entry">log submission system</a>. Make sure your logs are in ADIF format with the ADDRESS field properly populated. See our <a href="?page=adif-guide">ADIF guide</a> for detailed instructions.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>When will I receive my certificate?</div>
                    <div class="collapsible-body">
                        <p>Digital certificates are typically processed within 2-3 weeks of log submission. Physical certificates (for higher award tiers) may take 4-6 weeks for printing and shipping. You'll receive an email notification when your certificate is ready.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>How can I join the HOTA team?</div>
                    <div class="collapsible-body">
                        <p>We're always looking for enthusiastic volunteers! Check our <a href="?page=join-our-team">Join Our Team</a> page for current opportunities and application details.</p>
                    </div>
                </li>
            </ul>

            <div class="center-align mt-3">
                <a href="?page=faq" class="btn blue-grey waves-effect waves-light">
                    <i class="material-icons left">list</i>View All FAQs
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.contact-info .collection-item {
    line-height: 1.6;
    border-left: none;
    border-right: none;
}

.contact-info i.left {
    margin-right: 1rem;
}

.social-connect-buttons {
    margin-top: 20px;
}

.social-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    gap: 10px;
    margin-top: 15px;
}

.social-btn {
    padding: 0 10px;
    font-size: 0.8rem;
    height: 32px;
    line-height: 32px;
}

.full-width-btn {
    width: 100%;
    margin: 10px 0;
}

.small-text {
    font-size: 0.8rem;
    color: #757575;
}

.mt-2 {
    margin-top: 10px;
}

.mt-3 {
    margin-top: 15px;
}

.mt-4 {
    margin-top: 20px;
}

/* High contrast focus indicator for better accessibility */
input:focus, textarea:focus {
    outline: 2px solid #607d8b !important;
}

/* Fix for select dropdown positioning */
.select-dropdown {
    max-height: 300px !important;
}

@media only screen and (max-width: 600px) {
    .card-title i.left {
        margin-right: 5px;
    }

    .social-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize select elements
    var selects = document.querySelectorAll('select');
    M.FormSelect.init(selects);

    // Initialize character counter for textarea
    var textareas = document.querySelectorAll('[data-length]');
    M.CharacterCounter.init(textareas);

    // Initialize collapsible elements
    var collapsibles = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsibles);

    // Form validation enhancement
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        const requiredFields = this.querySelectorAll('[required]');
        let hasErrors = false;

        requiredFields.forEach(field => {
            if (!field.validity.valid) {
                M.updateTextFields();
                hasErrors = true;

                // Add shake animation to invalid fields
                field.closest('.input-field').classList.add('shake');
                setTimeout(() => {
                    field.closest('.input-field').classList.remove('shake');
                }, 800);
            }
        });

        if (hasErrors) {
            e.preventDefault();
            // Show toast for invalid form
            M.toast({html: 'Please fill in all required fields correctly', classes: 'red'});
        }
    });

    // Initialize AJAX form handling - already handled in main.js
});
</script>

<style>
/* Additional animation for form validation */
@keyframes shake {
    0%, 100% { transform: translateX(0); }
    10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
    20%, 40%, 60%, 80% { transform: translateX(5px); }
}

.shake {
    animation: shake 0.8s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
}
</style>

<?php include_once('../includes/footer.php'); ?>
