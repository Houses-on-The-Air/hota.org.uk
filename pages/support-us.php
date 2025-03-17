<?php
$pageTitle = "Support HOTA - Houses on The Air";
$pageDescription = "Support Houses on the Air through donations, volunteering, or promotion to help our amateur radio project thrive worldwide.";
?>

<div class="container">
    <h1>Support Houses on The Air</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Support Us</li>
        </ul>
    </div>

    <!-- Hero Section -->
    <div class="card hero-card blue-grey darken-1 white-text">
        <div class="card-content">
            <div class="row valign-wrapper">
                <div class="col s12 m8">
                    <h2>Your Support Makes HOTA Possible</h2>
                    <p class="flow-text">HOTA is a community-driven project run entirely by volunteers. Your support—whether financial, time-based, or promotional—helps us connect amateur radio operators worldwide through unique house locations.</p>
                </div>
                <div class="col s12 m4 center-align hide-on-small-only">
                    <i class="material-icons" style="font-size: 8rem;">volunteer_activism</i>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Options Tabs -->
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#donate"><i class="material-icons left">payments</i>Donate</a></li>
                <li class="tab col s3"><a href="#volunteer"><i class="material-icons left">people</i>Volunteer</a></li>
                <li class="tab col s3"><a href="#sponsor"><i class="material-icons left">business</i>Sponsor</a></li>
                <li class="tab col s3"><a href="#promote"><i class="material-icons left">share</i>Promote</a></li>
            </ul>
        </div>
    </div>

    <!-- Donate Tab -->
    <div id="donate" class="tab-content">
        <h3><i class="material-icons left">payments</i>Financial Support</h3>
        <p>Your financial contributions help maintain our technical infrastructure, develop resources, and organize events for the HOTA community.</p>

        <div class="card allocation-card">
            <div class="card-content">
                <span class="card-title">Where Your Donation Goes</span>
                <div class="row fund-allocation">
                    <div class="col s12 m3">
                        <div class="allocation-item">
                            <div class="percentage-circle">40%</div>
                            <h5>Web Infrastructure</h5>
                            <p>Hosting, domains, security</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="allocation-item">
                            <div class="percentage-circle">25%</div>
                            <h5>Community Events</h5>
                            <p>Contests, special activations</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="allocation-item">
                            <div class="percentage-circle">20%</div>
                            <h5>Awards Program</h5>
                            <p>Certificates, online system</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="allocation-item">
                            <div class="percentage-circle">15%</div>
                            <h5>Outreach</h5>
                            <p>Promotion, education materials</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">One-time Donation</span>
                        <div class="donation-buttons center-align">
                            <a href="#donation-modal" class="btn blue-grey waves-effect waves-light donation-amount modal-trigger" data-amount="5">£5</a>
                            <a href="#donation-modal" class="btn blue-grey waves-effect waves-light donation-amount modal-trigger" data-amount="10">£10</a>
                            <a href="#donation-modal" class="btn blue-grey waves-effect waves-light donation-amount modal-trigger" data-amount="25">£25</a>
                            <a href="#donation-modal" class="btn blue-grey waves-effect waves-light donation-amount modal-trigger" data-amount="custom">Custom</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Monthly Support</span>
                        <div class="donation-buttons center-align">
                            <a href="#recurring-modal" class="btn teal waves-effect waves-light donation-amount modal-trigger" data-amount="3">£3/mo</a>
                            <a href="#recurring-modal" class="btn teal waves-effect waves-light donation-amount modal-trigger" data-amount="5">£5/mo</a>
                            <a href="#recurring-modal" class="btn teal waves-effect waves-light donation-amount modal-trigger" data-amount="10">£10/mo</a>
                            <a href="#recurring-modal" class="btn teal waves-effect waves-light donation-amount modal-trigger" data-amount="custom">Custom</a>
                        </div>
                        <p class="center-align"><i>Monthly supporters receive website recognition and access to exclusive Discord channels</i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">Alternative Payment Options</span>
                <div class="row">
                    <div class="col s12 m4">
                        <h5><i class="material-icons left small">currency_bitcoin</i>Cryptocurrency</h5>
                        <p>We accept Bitcoin, Ethereum, and Litecoin.<br>
                        <a href="#crypto-modal" class="modal-trigger">View wallet addresses</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Volunteer Tab -->
    <div id="volunteer" class="tab-content">
        <h3><i class="material-icons left">people</i>Volunteer Opportunities</h3>
        <p>HOTA is run entirely by volunteers like you. Share your skills and time to help our community grow!</p>

        <div class="row">
            <div class="col s12 m6">
                <div class="card volunteer-card">
                    <div class="card-content">
                        <i class="material-icons medium blue-grey-text">code</i>
                        <h4>Technical Team</h4>
                        <p>Help with website development, database management, logging systems, and tech support.</p>
                        <p><strong>Skills needed:</strong> PHP, JavaScript, database design, system administration</p>
                        <p><strong>Time:</strong> 2-10 hours/week, flexible</p>
                    </div>
                    <div class="card-action">
                        <a href="?page=join-our-team" class="btn-flat waves-effect waves-teal">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card volunteer-card">
                    <div class="card-content">
                        <i class="material-icons medium blue-grey-text">public</i>
                        <h4>Regional Coordinators</h4>
                        <p>Represent HOTA in your region, coordinate local activities, and help grow participation.</p>
                        <p><strong>Skills needed:</strong> Communication, organization, local radio knowledge</p>
                        <p><strong>Time:</strong> 2-4 hours/week</p>
                    </div>
                    <div class="card-action">
                        <a href="?page=join-our-team" class="btn-flat waves-effect waves-teal">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="center-align mt-3">
            <a href="?page=join-our-team" class="btn-large blue-grey darken-1 waves-effect waves-light">
                <i class="material-icons left">person_add</i>View All Volunteer Opportunities
            </a>
        </div>
    </div>

    <!-- Sponsor Tab -->
    <div id="sponsor" class="tab-content">
        <h3><i class="material-icons left">business</i>Sponsorship Opportunities</h3>
        <p>Organizations can support HOTA while connecting with our engaged amateur radio audience.</p>

        <div class="card">
            <div class="card-content">
                <span class="card-title">Why Sponsor HOTA?</span>

                <div class="row">
                    <div class="col s12 m7">
                        <h5>Our Reach:</h5>
                        <ul class="browser-default">
                            <li>1,000+ active radio operators</li>
                            <li>50+ countries represented</li>
                            <li>10,000+ monthly website visitors</li>
                            <li>2,500+ social media followers</li>
                        </ul>
                    </div>
                    <div class="col s12 m5 center-align">
                        <div class="sponsor-cta">
                            <h5>Interested in becoming a sponsor?</h5>
                            <a href="?page=contact" class="btn blue-grey darken-1 waves-effect waves-light">
                                <i class="material-icons left">email</i>Contact Us
                            </a>
                        </div>
                    </div>
                </div>

                <div class="sponsorship-tiers">
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th>Benefit</th>
                                <th>Bronze<br><small>£250/year</small></th>
                                <th>Silver<br><small>£500/year</small></th>
                                <th>Gold<br><small>£1,000/year</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Logo on website</td>
                                <td>Footer</td>
                                <td>Sidebar</td>
                                <td>Homepage</td>
                            </tr>
                            <tr>
                                <td>Social media mentions</td>
                                <td>Quarterly</td>
                                <td>Monthly</td>
                                <td>Bi-weekly</td>
                            </tr>
                            <tr>
                                <td>Newsletter feature</td>
                                <td>-</td>
                                <td>Text mention</td>
                                <td>Logo + article</td>
                            </tr>
                            <tr>
                                <td>Event sponsorship</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Named sponsor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Promote Tab -->
    <div id="promote" class="tab-content">
        <h3><i class="material-icons left">share</i>Spread the Word</h3>
        <p>Help grow our community by sharing HOTA with fellow amateur radio operators.</p>

        <div class="row">
            <div class="col s12 m4">
                <div class="card promote-card">
                    <div class="card-content">
                        <i class="material-icons large blue-grey-text">groups</i>
                        <h4>At Your Local Club</h4>
                        <p>Introduce HOTA at your radio club meetings. We can provide presentation materials!</p>
                        <div class="center-align mt-3">
                            <a href="/downloads/HOTA-club-presentation.pptx" class="btn blue-grey waves-effect waves-light">
                                <i class="material-icons left">download</i>Download Slides
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card promote-card">
                    <div class="card-content">
                        <i class="material-icons large blue-grey-text">share</i>
                        <h4>Social Media</h4>
                        <p>Share your HOTA experiences on social media with #HOTAradio to help spread the word.</p>
                        <div class="social-buttons center-align mt-3">
                            <a href="https://twitter.com/intent/tweet?text=I'm%20participating%20in%20Houses%20on%20The%20Air!%20Join%20this%20exciting%20amateur%20radio%20activity%20at%20https://hota.org.uk%20%23HOTAradio" target="_blank" class="btn blue waves-effect waves-light">
                                <i class="material-icons left">send</i>Tweet
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://hota.org.uk" target="_blank" class="btn blue darken-3 waves-effect waves-light">
                                <i class="material-icons left">thumb_up</i>Share
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card promote-card">
                    <div class="card-content">
                        <i class="material-icons large blue-grey-text">link</i>
                        <h4>Add Our Banner</h4>
                        <p>Add a HOTA banner to your amateur radio website or blog.</p>
                        <div class="banner-preview center-align mt-3">
                            <img src="/images/hota-dualcolor.svg" alt="HOTA Banner" class="responsive-img">
                            <textarea class="banner-code materialize-textarea">&lt;a href="https://hota.org.uk"&gt;&lt;img src="https://hota.org.uk/images/hota-dualcolor.svg" alt="Houses on The Air"&gt;&lt;/a&gt;</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help</i>Support FAQ</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">keyboard_arrow_right</i>Is my donation tax-deductible?</div>
                    <div class="collapsible-body"><p>Tax deductibility depends on your country. We can provide receipts upon request. Please consult with a tax professional for specific advice.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">keyboard_arrow_right</i>Can I donate equipment instead of money?</div>
                    <div class="collapsible-body"><p>Yes! We welcome equipment donations that can benefit HOTA activities. Please contact us to discuss your equipment donation.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">keyboard_arrow_right</i>What's the minimum time commitment for volunteers?</div>
                    <div class="collapsible-body"><p>We have volunteer opportunities starting from just 2 hours per week, and we're flexible with scheduling to accommodate your availability.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">keyboard_arrow_right</i>Can our club become a sponsor?</div>
                    <div class="collapsible-body"><p>Absolutely! We have special sponsorship options for amateur radio clubs and non-profit organizations. Contact us for details.</p></div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Contact CTA -->
    <div class="card-panel deep-purple lighten-5 center-align mt-4">
        <h3>Questions About Supporting HOTA?</h3>
        <p class="flow-text">We're here to help! Reach out with any questions about donations, volunteering, or sponsorships.</p>
        <a href="?page=contact" class="btn-large blue-grey darken-1 waves-effect waves-light">
            <i class="material-icons left">email</i>Contact Us
        </a>
    </div>
</div>

<!-- Donation Modal -->
<div id="donation-modal" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons left">payments</i>Make a Donation</h4>
        <p>Your contribution helps support HOTA's mission to connect amateur radio operators around the world.</p>

        <div class="row">
            <form class="col s12" id="donation-form">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="donor_name" type="text" class="validate" required>
                        <label for="donor_name">Name (Optional)</label>
                        <span class="helper-text">Leave blank to donate anonymously</span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="donor_callsign" type="text" class="validate">
                        <label for="donor_callsign">Amateur Radio Callsign</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="donor_email" type="email" class="validate" required>
                        <label for="donor_email">Email Address</label>
                        <span class="helper-text">For donation receipt</span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <select id="donation_currency" required>
                            <option value="GBP" selected>British Pound (£)</option>
                            <option value="USD">US Dollar ($)</option>
                            <option value="EUR">Euro (€)</option>
                        </select>
                        <label>Currency</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="donation_amount" type="number" min="1" step="1" class="validate" required>
                        <label for="donation_amount">Amount</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input type="checkbox" id="show_name" checked />
                            <span>List my name/callsign on the supporters page</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="payment-methods center-align">
                            <button type="button" class="btn-large blue darken-1 waves-effect waves-light payment-btn" data-method="paypal">
                                <i class="material-icons left">payment</i>PayPal
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
    </div>
</div>

<!-- Recurring Donation Modal -->
<div id="recurring-modal" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons left">repeat</i>Monthly Support</h4>
        <p>Become a sustaining supporter with a monthly contribution. You can cancel anytime.</p>

        <div class="card-panel blue lighten-5">
            <div class="row valign-wrapper">
                <div class="col s2 m1 center-align">
                    <i class="material-icons medium blue-text">stars</i>
                </div>
                <div class="col s10 m11">
                    <h5 class="no-margin-top">Monthly Supporter Benefits</h5>
                    <ul class="browser-default">
                        <li>Recognition on our website's supporter page</li>
                        <li>Access to exclusive Discord channels</li>
                        <li>Early access to new features and tools</li>
                        <li>Monthly insider newsletter</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <form class="col s12" id="recurring-donation-form">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="recurring_donor_name" type="text" class="validate" required>
                        <label for="recurring_donor_name">Name</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="recurring_donor_callsign" type="text" class="validate" required>
                        <label for="recurring_donor_callsign">Amateur Radio Callsign</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="recurring_donor_email" type="email" class="validate" required>
                        <label for="recurring_donor_email">Email Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <select id="recurring_currency" required>
                            <option value="GBP" selected>British Pound (£)</option>
                            <option value="USD">US Dollar ($)</option>
                            <option value="EUR">Euro (€)</option>
                        </select>
                        <label>Currency</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="recurring_amount" type="number" min="1" step="1" class="validate" required>
                        <label for="recurring_amount">Monthly Amount</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input type="checkbox" id="recurring_show_name" checked />
                            <span>List me as a monthly supporter</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="payment-methods center-align">
                            <button type="button" class="btn-large blue darken-1 waves-effect waves-light payment-btn" data-method="paypal">
                                <i class="material-icons left">payment</i>PayPal Subscription
                            </button>
                            <button type="button" class="btn-large green darken-1 waves-effect waves-light payment-btn" data-method="card">
                                <i class="material-icons left">credit_card</i>Credit Card Subscription
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
    </div>
</div>

<!-- Cryptocurrency Modal -->
<div id="crypto-modal" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons left">currency_bitcoin</i>Cryptocurrency Donations</h4>
        <p>Support HOTA using cryptocurrency. Please send your donations to the following wallet addresses:</p>

        <div class="row crypto-wallets">
            <div class="col s12 m4">
                <div class="card crypto-card">
                    <div class="card-content">
                        <span class="card-title">Bitcoin (BTC)</span>
                        <div class="qr-code center-align">
                            <img src="/images/crypto/btc-qr.png" alt="Bitcoin QR Code" class="responsive-img">
                        </div>
                        <div class="wallet-address">
                            <input type="text" value="" readonly>
                            <button class="btn-flat waves-effect waves-light copy-btn" data-clipboard-text="">
                                <i class="material-icons">content_copy</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card crypto-card">
                    <div class="card-content">
                        <span class="card-title">Ethereum (ETH)</span>
                        <div class="qr-code center-align">
                            <img src="/images/crypto/eth-qr.png" alt="Ethereum QR Code" class="responsive-img">
                        </div>
                        <div class="wallet-address">
                            <input type="text" value="0xc8b2FA36F645B58104b878CCdAA5B25e2D4c013" readonly>
                            <button class="btn-flat waves-effect waves-light copy-btn" data-clipboard-text="">
                                <i class="material-icons">content_copy</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card crypto-card">
                    <div class="card-content">
                        <span class="card-title">Litecoin (LTC)</span>
                        <div class="qr-code center-align">
                            <img src="/images/crypto/ltc-qr.png" alt="Litecoin QR Code" class="responsive-img">
                        </div>
                        <div class="wallet-address">
                            <input type="text" value="" readonly>
                            <button class="btn-flat waves-effect waves-light copy-btn" data-clipboard-text="">
                                <i class="material-icons">content_copy</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-panel amber lighten-5">
            <div class="row valign-wrapper">
                <div class="col s2 m1 center-align">
                    <i class="material-icons medium amber-text text-darken-2">info</i>
                </div>
                <div class="col s10 m11">
                    <p>After sending your donation, please email <a href="mailto:crypto@hota.org.uk">crypto@hota.org.uk</a> with your transaction ID if you would like to be recognized as a donor or receive confirmation of your contribution.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<style>
/* Hero Card */
.hero-card {
    margin-bottom: 20px;
}

/* Tab Content */
.tab-content {
    display: none;
    padding: 20px 0;
}

.tab-content:first-of-type {
    display: block;
}

/* Allocation Card */
.fund-allocation {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-bottom: 0;
}

.allocation-item {
    text-align: center;
    margin-bottom: 20px;
}

.percentage-circle {
    width: 70px;
    height: 70px;
    background-color: #607d8b;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    font-weight: bold;
    margin: 0 auto 15px;
}

.donation-buttons {
    margin: 20px 0;
}

.donation-buttons a {
    margin: 5px;
}

/* Volunteer and Promote Cards */
.volunteer-card, .promote-card {
    height: 100%;
    text-align: center;
}

.volunteer-card i, .promote-card i {
    margin-bottom: 15px;
}

/* Donor Display */
.donor-card {
    padding: 15px;
    border-radius: 4px;
    background-color: #f5f5f5;
    height: 100%;
}

.donor-chip {
    display: inline-block;
    background-color: #eceff1;
    border-radius: 16px;
    padding: 5px 12px;
    margin: 3px;
    font-weight: 500;
}

/* Banner Code */
.banner-code {
    font-family: monospace;
    font-size: 0.8rem;
    height: 60px;
    margin-top: 10px;
}

/* Utility Classes */
.mt-3 {
    margin-top: 15px;
}

.mt-4 {
    margin-top: 20px;
}

/* Mobile Adjustments */
@media only screen and (max-width: 600px) {
    .tabs .tab a {
        padding: 0 8px;
    }

    .tabs .tab a i {
        margin-right: 0;
    }
}

/* Modal Styles */
.payment-methods {
    margin: 20px 0;
}

.payment-methods .payment-btn {
    margin: 0 10px;
    min-width: 150px;
}

.crypto-card {
    height: 100%;
}

.qr-code {
    margin: 15px 0;
}

.qr-code img {
    max-width: 150px;
    border: 1px solid #ddd;
    padding: 10px;
    background-color: white;
}

.wallet-address {
    display: flex;
    align-items: center;
    margin-top: 10px;
    background-color: #f5f5f5;
    border-radius: 4px;
    padding: 5px;
}

.wallet-address input {
    border: none !important;
    margin: 0 !important;
    padding: 0 5px !important;
    height: 36px !important;
    font-family: monospace;
    font-size: 0.8rem;
    background-color: transparent !important;
    flex-grow: 1;
    box-shadow: none !important;
    color: #424242;
}

.wallet-address .copy-btn {
    padding: 0 10px;
}

.no-margin-top {
    margin-top: 0;
}

@media only screen and (max-width: 992px) {
    .payment-methods .payment-btn {
        display: block;
        margin: 10px auto;
    }

    .crypto-wallets .col {
        margin-bottom: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tabs
    var tabs = document.querySelectorAll('.tabs');
    M.Tabs.init(tabs);

    // Initialize collapsible elements
    var collapsibles = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsibles);

    // Initialize modals
    var modals = document.querySelectorAll('.modal');
    M.Modal.init(modals);

    // Handle banner code selection
    document.querySelector('.banner-code').addEventListener('click', function() {
        this.select();
    });

    // Set amount in donation modal based on clicked button
    document.querySelectorAll('.donation-amount').forEach(function(button) {
        button.addEventListener('click', function() {
            const amount = this.getAttribute('data-amount');
            const modal = this.getAttribute('href');
            const amountInput = modal === '#donation-modal' ?
                document.getElementById('donation_amount') :
                document.getElementById('recurring_amount');

            if (amount !== 'custom') {
                amountInput.value = amount;
                amountInput.focus();
            } else {
                amountInput.value = '';
                amountInput.focus();
            }
        });
    });

    // Initialize selects
    var selects = document.querySelectorAll('select');
    M.FormSelect.init(selects);

    // Handle payment method selection
    document.querySelectorAll('.payment-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const method = this.getAttribute('data-method');
            const form = this.closest('form');

            // In a real implementation, this would submit the form to the appropriate payment processor
            // For this demo, we'll just show a toast notification
            M.toast({html: `Processing ${method} payment... This would redirect to payment gateway.`});

            // Close the modal after a brief delay (simulating redirect)
            setTimeout(() => {
                const modalInstance = M.Modal.getInstance(this.closest('.modal'));
                modalInstance.close();

                // Show success message
                M.toast({html: 'Thank you for your support!', classes: 'green', displayLength: 5000});
            }, 2000);
        });
    });

    // Copy to clipboard functionality for cryptocurrency addresses
    document.querySelectorAll('.copy-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const text = this.getAttribute('data-clipboard-text');

            // Create temporary element
            const el = document.createElement('textarea');
            el.value = text;
            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);

            // Select and copy text
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);

            // Show feedback
            M.toast({html: 'Address copied to clipboard!', classes: 'rounded'});
        });
    });
});
</script>
