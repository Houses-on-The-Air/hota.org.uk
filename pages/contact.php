<?php
$pageTitle = "Contact - HOTA";
include_once('../includes/header.php');
?>

<section class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="card-panel">
                <h3>Contact Us</h3>
                <p>Have questions or feedback about Houses on The Air? We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>

                <form id="contact-form" class="mt-4">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">person</i>
                            <input id="name" type="text" class="validate" required>
                            <label for="name">Your Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">call_sign</i>
                            <input id="callsign" type="text" class="validate">
                            <label for="callsign">Callsign (if applicable)</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Your Email Address</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">label</i>
                            <select id="subject" required>
                                <option value="" disabled selected>Choose your subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="technical">Technical Support</option>
                                <option value="awards">Awards Question</option>
                                <option value="feedback">Website Feedback</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="subject">Subject</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea id="message" class="materialize-textarea" required></textarea>
                            <label for="message">Your Message</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="switch">
                                <label>
                                    <input type="checkbox" id="consent" required>
                                    <span class="lever"></span>
                                    I consent to HOTA storing my information for the purpose of responding to this inquiry
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn-large blue-grey darken-1 waves-effect waves-light" type="submit">
                                <i class="material-icons left">send</i>
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>

                <div id="form-success" class="card-panel green lighten-4 green-text text-darken-4" style="display:none;">
                    <h5><i class="material-icons left">check_circle</i> Message Sent!</h5>
                    <p>Thank you for contacting us. We'll get back to you as soon as possible.</p>
                </div>

                <div id="form-error" class="card-panel red lighten-4 red-text text-darken-4" style="display:none;">
                    <h5><i class="material-icons left">error</i> Error</h5>
                    <p>There was a problem sending your message. Please try again later or contact us directly at  <a href="mailto:<?= ConfigManager::get('email.info'); ?>"><?= ConfigManager::get('email.info'); ?></a>.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card-panel blue-grey lighten-4">
                <h4>Contact Information</h4>
                <ul class="collection contact-info">
                    <li class="collection-item">
                        <i class="material-icons left">email</i>
                        <span>General Inquiries:</span><br>
                        <a href="mailto:<?= ConfigManager::get('email.info'); ?>"><?= ConfigManager::get('email.info'); ?></a>
                    </li>
                    <li class="collection-item">
                        <i class="material-icons left">security</i>
                        <span>Privacy Concerns:</span><br>
                        <a href="mailto:<?= ConfigManager::get('email.privacy'); ?>"><?= ConfigManager::get('email.privacy'); ?></a>
                    </li>
                    <li class="collection-item">
                        <i class="material-icons left">business</i>
                        <span>Advertising:</span><br>
                        <a href="mailto:<?= ConfigManager::get('email.advertising'); ?>"><?= ConfigManager::get('email.advertising'); ?></a>
                    </li>
                    <li class="collection-item">
                        <i class="material-icons left">help_outline</i>
                        <span>Support:</span><br>
                        <a href="mailto:<?= ConfigManager::get('email.support'); ?>"><?= ConfigManager::get('email.support'); ?></a>
                    </li>
                </ul>
            </div>

            <div class="card-panel">
                <h4>Connect With Us</h4>
                <p>Join our community on Discord to chat with other HOTA operators.</p>
                <a href="?page=discord" class="btn blue-grey waves-effect waves-light">Join Discord</a>

                <div class="divider my-4"></div>

                <p>Follow us on social media for updates and news.</p>
                <div class="social-links">
                    <a href="<?= ConfigManager::get('social.facebook') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey">
                        <i class="material-icons">facebook</i>
                    </a>
                    <a href="<?= ConfigManager::get('social.twitter') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey">
                        <i class="material-icons">X</i>
                    </a>
                    <a href="<?= ConfigManager::get('social.reddit') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey">
                        <i class="material-icons">forum</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize select element
    var selects = document.querySelectorAll('select');
    M.FormSelect.init(selects);

    // Form submission handling
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get form data
        const formData = new FormData(this);

        // Show preloader
        const preloader = document.createElement('div');
        preloader.className = 'progress';
        preloader.innerHTML = '<div class="indeterminate"></div>';
        this.appendChild(preloader);

        // Disable form controls
        Array.from(this.elements).forEach(element => element.disabled = true);

        // In a real implementation, you would send the form data to a server endpoint
        // using fetch or XMLHttpRequest

        // Simulate AJAX request with setTimeout
        setTimeout(() => {
            // Remove preloader
            this.removeChild(preloader);

            // Show success message
            document.getElementById('contact-form').style.display = 'none';
            document.getElementById('form-success').style.display = 'block';
        }, 1500);
    });
});
</script>

<style>
.contact-info .collection-item {
    line-height: 1.6;
}

.contact-info i.left {
    margin-right: 1rem;
}

.social-links {
    display: flex;
    gap: 10px;
}

.my-4 {
    margin-top: 2rem;
    margin-bottom: 2rem;
}
</style>

<?php include_once('../includes/footer.php'); ?>
