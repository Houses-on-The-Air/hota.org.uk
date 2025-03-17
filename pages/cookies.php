<?php
$pageTitle = "Cookie Policy - Houses on The Air";
$pageDescription = "Learn how Houses on the Air (HOTA) uses cookies, what data we collect, and how to manage your cookie preferences.";
?>

<div class="container">
    <h1>Cookie Policy</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Cookie Policy</li>
        </ul>
    </div>

    <!-- Last Updated Information -->
    <div class="card-panel blue-grey lighten-5">
        <div class="row valign-wrapper">
            <div class="col s2 m1 center-align">
                <i class="material-icons medium">info</i>
            </div>
            <div class="col s10 m11">
                <p class="flow-text no-margin-top">Last Updated: <?= date('F j, Y'); ?></p>
                <p>This policy explains how Houses on The Air (HOTA) uses cookies and similar technologies on our website.</p>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions center-align">
        <button id="accept-all-cookies" class="btn-large green darken-2 waves-effect waves-light m-1">
            <i class="material-icons left">check_circle</i>Accept All Cookies
        </button>
        <button id="essential-only-cookies" class="btn-large blue-grey waves-effect waves-light m-1">
            <i class="material-icons left">settings</i>Essential Cookies Only
        </button>
        <button id="customize-cookies" class="btn waves-effect waves-light m-1">
            <i class="material-icons left">tune</i>Customize Settings
        </button>
    </div>

    <!-- What Are Cookies Section -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">cookie</i>What Are Cookies?</span>
            <p>Cookies are small text files stored on your device when you visit websites. They help sites remember your preferences and how you use them. Similar technologies like web beacons, local storage, and pixels also collect information about your browsing.</p>

            <div class="card-panel light-blue lighten-5 mt-3">
                <div class="row valign-wrapper">
                    <div class="col s2 m1">
                        <i class="material-icons medium light-blue-text">help</i>
                    </div>
                    <div class="col s10 m11">
                        <p class="no-margin"><strong>Why are we telling you this?</strong> Privacy laws require websites to obtain informed consent for certain types of cookies. We want to be transparent about how we use them.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cookie Categories -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">category</i>Types of Cookies We Use</span>

            <div class="cookie-types">
                <div class="cookie-type essential">
                    <div class="type-header">
                        <h4>Essential Cookies</h4>
                        <div class="switch disabled">
                            <label>
                                <input type="checkbox" checked disabled>
                                <span class="lever"></span>
                                Always On
                            </label>
                        </div>
                    </div>
                    <p>Required for the website's core functionality. You can't disable these cookies because our site can't function properly without them.</p>
                    <p><strong>Example:</strong> Remembering login status, maintaining security features.</p>
                    <p><strong>Duration:</strong> Session to 1 year</p>
                </div>

                <div class="cookie-type analytics">
                    <div class="type-header">
                        <h4>Analytics Cookies</h4>
                        <div class="switch">
                            <label>
                                Off
                                <input type="checkbox" id="analytics-cookies-switch" checked>
                                <span class="lever"></span>
                                On
                            </label>
                        </div>
                    </div>
                    <p>Help us understand how visitors interact with our website by collecting anonymous information. This allows us to improve user experience.</p>
                    <p><strong>Example:</strong> Pages visited, time spent, error encounters.</p>
                    <p><strong>Duration:</strong> Up to 2 years</p>
                </div>

                <div class="cookie-type functional">
                    <div class="type-header">
                        <h4>Functional Cookies</h4>
                        <div class="switch">
                            <label>
                                Off
                                <input type="checkbox" id="functional-cookies-switch" checked>
                                <span class="lever"></span>
                                On
                            </label>
                        </div>
                    </div>
                    <p>Enable enhanced functionality and personalization, such as remembering your preferences.</p>
                    <p><strong>Example:</strong> Language selection, display settings, previously viewed items.</p>
                    <p><strong>Duration:</strong> Session to 1 year</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Cookie Table -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">table_chart</i>Specific Cookies We Use</span>
            <div class="table-responsive">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Cookie Name</th>
                            <th>Purpose</th>
                            <th>Category</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>session_id</td>
                            <td>Manages user session and authentication</td>
                            <td>Essential</td>
                            <td>Session</td>
                        </tr>
                        <tr>
                            <td>csrf_token</td>
                            <td>Security token to prevent cross-site request forgery</td>
                            <td>Essential</td>
                            <td>Session</td>
                        </tr>
                        <tr>
                            <td>cookie_consent</td>
                            <td>Records your cookie preference choices</td>
                            <td>Essential</td>
                            <td>1 year</td>
                        </tr>
                        <tr>
                            <td>_ga, _gid</td>
                            <td>Google Analytics cookies that collect anonymous usage data</td>
                            <td>Analytics</td>
                            <td>2 years, 24 hours</td>
                        </tr>
                        <tr>
                            <td>display_mode</td>
                            <td>Remembers light/dark mode preferences</td>
                            <td>Functional</td>
                            <td>1 year</td>
                        </tr>
                        <tr>
                            <td>language</td>
                            <td>Stores your preferred language setting</td>
                            <td>Functional</td>
                            <td>1 year</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-3 small-text">For a complete list of cookies, you can use your browser's developer tools to view all cookies stored by our site.</p>
        </div>
    </div>

    <!-- Managing Cookie Preferences -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">settings</i>Managing Your Cookie Preferences</span>

            <div class="row">
                <div class="col s12 m6">
                    <h4>On Our Website</h4>
                    <p>You can adjust your preferences at any time:</p>
                    <ul class="browser-default">
                        <li>Using the cookie consent banner that appears when you first visit</li>
                        <li>Clicking the "Customize Settings" button at the top of this page</li>
                        <li>Using the floating cookie settings button at the bottom right of any page</li>
                    </ul>
                    <button id="show-cookie-settings" class="btn blue-grey darken-1 waves-effect waves-light">
                        <i class="material-icons left">settings</i>Adjust Cookie Settings
                    </button>
                </div>

                <div class="col s12 m6">
                    <h4>Browser Controls</h4>
                    <p>Most web browsers also allow you to manage cookies through their settings. Here's how to access cookie settings in popular browsers:</p>
                    <ul class="collapsible browser-controls">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">language</i>Google Chrome</div>
                            <div class="collapsible-body">
                                <p>Menu > Settings > Privacy and security > Cookies and other site data</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">language</i>Firefox</div>
                            <div class="collapsible-body">
                                <p>Menu > Options > Privacy & Security > Cookies and Site Data</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">language</i>Safari</div>
                            <div class="collapsible-body">
                                <p>Safari > Preferences > Privacy > Cookies and website data</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">language</i>Microsoft Edge</div>
                            <div class="collapsible-body">
                                <p>Menu > Settings > Cookies and site permissions > Cookies and site data</p>
                            </div>
                        </li>
                    </ul>
                    <p class="small-text mt-3"><strong>Note:</strong> Blocking all cookies will impact functionality on many websites, not just ours.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Policy Changes -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">update</i>Changes to This Cookie Policy</span>
            <p>We may update this Cookie Policy to reflect changes in our practices or for other operational, legal, or regulatory reasons. The "Last Updated" date at the top of this page indicates when this policy was last revised.</p>
            <p>Significant changes will be notified through a prominent notice on our website. We encourage you to periodically review this page to stay informed about our cookie practices.</p>
        </div>
    </div>

    <!-- Questions -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <div class="row valign-wrapper">
            <div class="col s12 m8">
                <h3 class="no-margin-top">Questions About Cookies?</h3>
                <p>If you have questions or concerns about our use of cookies or this Cookie Policy, please contact us at:</p>
                <p><a href="mailto:privacy@hota.org.uk">privacy@hota.org.uk</a></p>
            </div>
            <div class="col s12 m4 center-align">
                <a href="?page=privacy" class="btn blue-grey darken-1 waves-effect waves-light">
                    <i class="material-icons left">security</i>Privacy Policy
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal -->
<div id="cookie-settings-modal" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons left">settings</i>Cookie Settings</h4>
        <p>Choose which cookie categories you want to allow. Essential cookies cannot be disabled as they are required for the website to function.</p>

        <div class="cookie-settings-list">
            <div class="cookie-setting">
                <div class="row valign-wrapper">
                    <div class="col s8">
                        <h5>Essential Cookies</h5>
                        <p>Required for basic website functionality</p>
                    </div>
                    <div class="col s4 center-align">
                        <div class="switch disabled">
                            <label>
                                <input type="checkbox" checked disabled>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cookie-setting">
                <div class="row valign-wrapper">
                    <div class="col s8">
                        <h5>Analytics Cookies</h5>
                        <p>Help us improve our website by collecting anonymous usage data</p>
                    </div>
                    <div class="col s4 center-align">
                        <div class="switch">
                            <label>
                                <input type="checkbox" id="modal-analytics-switch" checked>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cookie-setting">
                <div class="row valign-wrapper">
                    <div class="col s8">
                        <h5>Functional Cookies</h5>
                        <p>Enable enhanced functionality and personalization</p>
                    </div>
                    <div class="col s4 center-align">
                        <div class="switch">
                            <label>
                                <input type="checkbox" id="modal-functional-switch" checked>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close btn-flat">Cancel</a>
        <button id="save-cookie-settings" class="btn blue-grey darken-1 waves-effect waves-light">
            <i class="material-icons left">save</i>Save Settings
        </button>
    </div>
</div>

<style>
/* Quick Actions */
.quick-actions {
    margin: 25px 0;
}

.quick-actions .btn-large, .quick-actions .btn {
    margin: 5px;
}

/* Cookie Type Styling */
.cookie-types {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.cookie-type {
    border-radius: 4px;
    padding: 15px;
}

.cookie-type.essential {
    background-color: #e8f5e9;
}

.cookie-type.analytics {
    background-color: #e1f5fe;
}

.cookie-type.functional {
    background-color: #e8eaf6;
}

.type-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.type-header h4 {
    margin: 0;
    font-size: 1.3rem;
}

/* Table Responsive */
.table-responsive {
    overflow-x: auto;
}

/* Modal Styling */
.cookie-settings-list {
    margin-top: 20px;
}

.cookie-setting {
    border-bottom: 1px solid #e0e0e0;
    padding: 15px 0;
}

.cookie-setting:last-child {
    border-bottom: none;
}

.cookie-setting h5 {
    margin-top: 0;
    margin-bottom: 5px;
    font-size: 1.1rem;
}

.cookie-setting p {
    margin: 0;
    font-size: 0.9rem;
    color: #757575;
}

/* Utility Classes */
.no-margin-top {
    margin-top: 0;
}

.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}

.small-text {
    font-size: 0.9rem;
    color: #757575;
}

.m-1 {
    margin: 0.5rem;
}

/* Responsive Adjustments */
@media only screen and (max-width: 992px) {
    .type-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}

@media only screen and (max-width: 600px) {
    .quick-actions .btn-large, .quick-actions .btn {
        width: 100%;
        margin-bottom: 10px;
    }

    .cookie-types {
        gap: 10px;
    }

    .cookie-type {
        padding: 10px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize collapsible elements
    var collapsibles = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsibles);

    // Initialize modal
    var modal = document.querySelector('#cookie-settings-modal');
    var modalInstance = M.Modal.init(modal);

    // Open cookie settings modal
    document.getElementById('customize-cookies').addEventListener('click', function() {
        modalInstance.open();
    });

    document.getElementById('show-cookie-settings').addEventListener('click', function() {
        modalInstance.open();
    });

    // Sync checkbox states between page and modal
    document.getElementById('analytics-cookies-switch').addEventListener('change', function() {
        document.getElementById('modal-analytics-switch').checked = this.checked;
    });

    document.getElementById('functional-cookies-switch').addEventListener('change', function() {
        document.getElementById('modal-functional-switch').checked = this.checked;
    });

    document.getElementById('modal-analytics-switch').addEventListener('change', function() {
        document.getElementById('analytics-cookies-switch').checked = this.checked;
    });

    document.getElementById('modal-functional-switch').addEventListener('change', function() {
        document.getElementById('functional-cookies-switch').checked = this.checked;
    });

    // Save cookie settings
    document.getElementById('save-cookie-settings').addEventListener('click', function() {
        saveCookiePreferences();
        modalInstance.close();
        M.toast({html: 'Your cookie preferences have been saved', displayLength: 3000});
    });

    // Accept all cookies
    document.getElementById('accept-all-cookies').addEventListener('click', function() {
        document.getElementById('analytics-cookies-switch').checked = true;
        document.getElementById('functional-cookies-switch').checked = true;
        document.getElementById('modal-analytics-switch').checked = true;
        document.getElementById('modal-functional-switch').checked = true;

        saveCookiePreferences();
        M.toast({html: 'All cookies accepted', displayLength: 3000});
    });

    // Essential cookies only
    document.getElementById('essential-only-cookies').addEventListener('click', function() {
        document.getElementById('analytics-cookies-switch').checked = false;
        document.getElementById('functional-cookies-switch').checked = false;
        document.getElementById('modal-analytics-switch').checked = false;
        document.getElementById('modal-functional-switch').checked = false;

        saveCookiePreferences();
        M.toast({html: 'Only essential cookies enabled', displayLength: 3000});
    });

    // Function to save cookie preferences
    function saveCookiePreferences() {
        // Here we would normally set a cookie with the user's preferences
        // For this demo, we'll just log the settings
        var preferences = {
            analytics: document.getElementById('analytics-cookies-switch').checked,
            functional: document.getElementById('functional-cookies-switch').checked
        };

        console.log('Cookie preferences saved:', preferences);

        // In a real implementation, you would:
        // 1. Set a cookie with these preferences
        // 2. Send the preferences to the server
        // 3. Enable/disable cookies based on selections
    }
});
</script>
