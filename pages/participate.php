<?php
$pageTitle = "How to Participate - Houses on The Air";
$pageDescription = "Learn how to participate in Houses on the Air (HOTA) as an activator or hunter. Find step-by-step guides, tips, and resources for getting involved in this exciting amateur radio activity.";
?>

<div class="container">
    <h1>How to Participate in HOTA</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Participate</li>
        </ul>
    </div>

    <!-- Introduction -->
    <div class="card hero-card">
        <div class="hero-content">
            <div class="row valign-wrapper">
                <div class="col s12 m8">
                    <h2 class="hero-heading">Join the HOTA Community</h2>
                    <p class="flow-text hero-text">Houses on The Air offers two exciting ways to participate: as an Activator setting up stations at house locations, or as a Hunter making contacts with those activators.</p>
                    <p class="flow-text hero-text">Whether you're a seasoned operator or just getting started in amateur radio, HOTA welcomes you!</p>
                </div>
                <div class="col s12 m4 center-align hide-on-small-only">
                    <img src="/images/participate.jpg" alt="HOTA Participation" class="responsive-img" style="max-width: 200px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Participation Paths -->
    <div class="row mt-4">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#activator-tab"><i class="material-icons left">settings_input_antenna</i>Become an Activator</a></li>
                <li class="tab col s6"><a href="#hunter-tab"><i class="material-icons left">search</i>Become a Hunter</a></li>
            </ul>
        </div>

        <!-- Activator Tab -->
        <div id="activator-tab" class="col s12">
            <div class="card blue-grey lighten-5 mt-3">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Activating Houses</span>
                    <p class="flow-text">Activators operate amateur radio stations from various house locations, making contacts with other operators worldwide.</p>

                    <h4>Getting Started as an Activator</h4>
                    <div class="step-container">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h5>Choose a Location</h5>
                                <p>Select a house location to operate from. This can be your own home to start with, or any house where you have permission to operate.</p>
                                <div class="card-panel light-blue lighten-5 tip">
                                    <p><strong>Tip:</strong> Start with your own home for your first activation. As you gain confidence, you can expand to friends' houses, vacation rentals (with permission), or public historic houses.</p>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h5>Set Up Your Station</h5>
                                <p>Prepare your equipment for operation. This can range from a simple setup to a more elaborate station depending on your experience and goals.</p>
                                <div class="example-setup">
                                    <h6>Basic Setup:</h6>
                                    <ul class="browser-default">
                                        <li>Portable HF transceiver</li>
                                        <li>Antenna (portable dipole, end-fed wire, vertical)</li>
                                        <li>Power source (battery, power supply)</li>
                                        <li>Logging method (paper log or digital logging software)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h5>Announce Your Activity</h5>
                                <p>Let others know about your planned activation to maximize contacts:</p>
                                <ul class="browser-default">
                                    <li>Post in the <a href="?page=discord">HOTA Discord</a> #activations channel</li>
                                    <li>Share on social media using #HOTA hashtag</li>
                                    <li>Send an announcement to your local radio club</li>
                                </ul>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h5>Make Contacts</h5>
                                <p>Start making contacts using the recommended calling procedure:</p>
                                <div class="card-panel blue-grey lighten-4 example-call">
                                    <p>"CQ HOTA, CQ Houses on The Air, this is [your callsign] calling from [brief house description] and standing by."</p>
                                </div>
                                <p>For each contact, be sure to:</p>
                                <ul class="browser-default">
                                    <li>Exchange signal reports</li>
                                    <li>Provide your complete house address</li>
                                    <li>Log all contact information accurately</li>
                                </ul>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h5>Submit Your Logs</h5>
                                <p>After your activation, submit your logs to earn credit towards HOTA awards:</p>
                                <ul class="browser-default">
                                    <li>Export your log in ADIF format</li>
                                    <li>Ensure the ADDRESS field is properly filled out</li>
                                    <li>Submit through our <a href="?page=log-entry">log submission system</a></li>
                                </ul>
                                <div class="card-panel light-blue lighten-5 tip">
                                    <p><strong>Important:</strong> The ADDRESS field in your ADIF log is critical for HOTA tracking. See our <a href="?page=adif-guide">ADIF Guide</a> for formatting instructions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center-align mt-4">
                        <a href="?page=house-activations" class="btn-large blue-grey darken-1 waves-effect waves-light">
                            <i class="material-icons left">explore</i>Detailed Activation Guide
                        </a>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-content">
                    <span class="card-title">Activator Tips & Best Practices</span>

                    <div class="row">
                        <div class="col s12 m6">
                            <h5><i class="material-icons left tiny">check_circle</i>Recommended Bands & Frequencies</h5>
                            <p>While you can operate on any amateur band, these frequencies are commonly used for HOTA:</p>
                            <ul class="browser-default">
                                <li><strong>40m:</strong> 7.190 MHz (SSB), 7.030 MHz (CW)</li>
                                <li><strong>20m:</strong> 14.290 MHz (SSB), 14.030 MHz (CW)</li>
                                <li><strong>15m:</strong> 21.290 MHz (SSB), 21.030 MHz (CW)</li>
                                <li><strong>Digital:</strong> Standard FT8 frequencies on each band</li>
                            </ul>
                            <p><a href="?page=band-plans">View complete band plan</a></p>
                        </div>
                        <div class="col s12 m6">
                            <h5><i class="material-icons left tiny">lightbulb</i>Operation Ideas</h5>
                            <ul class="browser-default">
                                <li>Activate historic or architecturally significant houses</li>
                                <li>Participate in HOTA contests and special events</li>
                                <li>Plan a "house hopping" day activating multiple locations</li>
                                <li>Organize a group activation with local club members</li>
                                <li>Try different modes (SSB, CW, digital) from the same location</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-panel deep-orange lighten-5 mt-3">
                        <div class="row valign-wrapper">
                            <div class="col s2 m1 center-align">
                                <i class="material-icons medium">warning</i>
                            </div>
                            <div class="col s10 m11">
                                <h5 class="no-margin-top">Safety & Legal Considerations</h5>
                                <ul class="browser-default mb-0">
                                    <li>Always obtain proper permission before operating from any location</li>
                                    <li>Respect property boundaries and owner requirements</li>
                                    <li>Ensure safe antenna deployments away from power lines</li>
                                    <li>Follow local regulations regarding outdoor radio operations</li>
                                    <li>Be mindful of noise levels, especially in residential areas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hunter Tab -->
        <div id="hunter-tab" class="col s12">
            <div class="card blue-grey lighten-5 mt-3">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">search</i>Hunting HOTA Stations</span>
                    <p class="flow-text">HOTA Hunters make contacts with activators and collect unique house addresses for awards and certificates.</p>

                    <h4>Getting Started as a Hunter</h4>
                    <div class="step-container">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h5>Find HOTA Stations</h5>
                                <p>Locate active HOTA stations using these resources:</p>
                                <ul class="browser-default">
                                    <li>Join the <a href="?page=discord">HOTA Discord</a> for real-time activator announcements</li>
                                    <li>Monitor recommended HOTA frequencies</li>
                                    <li>Check the <a href="/">HOTA website</a> for scheduled activations</li>
                                    <li>Participate during HOTA contests when activity is highest</li>
                                </ul>
                                <div class="card-panel light-blue lighten-5 tip">
                                    <p><strong>Tip:</strong> Listen for "CQ HOTA" calls on the bands or stations mentioning "Houses on The Air" in their CQ calls.</p>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h5>Make Contact</h5>
                                <p>When you hear a HOTA station:</p>
                                <ol>
                                    <li>Wait for a break in their conversations</li>
                                    <li>Transmit your callsign clearly, using phonetics if needed</li>
                                    <li>Exchange signal reports</li>
                                    <li>Request and record their complete house address</li>
                                    <li>Thank them and clear with your callsign</li>
                                </ol>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h5>Log the Contact</h5>
                                <p>Record all contact details, paying special attention to the address information:</p>
                                <ul class="browser-default">
                                    <li>Callsign of the HOTA station</li>
                                    <li>Date and time (UTC)</li>
                                    <li>Band and mode</li>
                                    <li><strong>Complete address</strong> of the station (critical for awards)</li>
                                    <li>Signal reports exchanged</li>
                                </ul>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h5>Submit Your Logs</h5>
                                <p>To get credit for HOTA awards:</p>
                                <ul class="browser-default">
                                    <li>Export your log in ADIF format from your logging software</li>
                                    <li>Ensure the ADDRESS field contains the complete house address for each contact</li>
                                    <li>Submit through our <a href="?page=log-entry">log submission system</a></li>
                                </ul>
                                <div class="card-panel light-blue lighten-5 tip">
                                    <p><strong>Important:</strong> Without the ADDRESS field properly filled, contacts won't count toward your HOTA awards.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center-align mt-4">
                        <a href="?page=awards" class="btn-large blue-grey darken-1 waves-effect waves-light">
                            <i class="material-icons left">emoji_events</i>View Award Tiers
                        </a>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-content">
                    <span class="card-title">Hunter Tips & Best Practices</span>

                    <div class="row">
                        <div class="col s12 m6">
                            <h5><i class="material-icons left tiny">check_circle</i>Effective Hunting</h5>
                            <ul class="browser-default">
                                <li>Create a search alert for "HOTA" in digital mode programs</li>
                                <li>Scan the bands during peak activity hours (evenings and weekends)</li>
                                <li>Use spotting networks to find HOTA activators</li>
                                <li>Join regular HOTA nets for guaranteed contacts</li>
                                <li>Participate in HOTA contests when many activators are on air</li>
                            </ul>
                        </div>
                        <div class="col s12 m6">
                            <h5><i class="material-icons left tiny">lightbulb</i>Award Hunting Strategies</h5>
                            <ul class="browser-default">
                                <li>Contact the same activator multiple times if they change locations</li>
                                <li>Keep track of unique addresses you've already worked</li>
                                <li>Focus on contest weekends for maximum house diversity</li>
                                <li>Explore different bands to find more activators</li>
                                <li>Try various modes (SSB, CW, digital) to maximize opportunities</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-panel light-blue lighten-5 mt-3">
                        <h5><i class="material-icons left">forum</i>Hunter Etiquette</h5>
                        <div class="row">
                            <div class="col s12 m6">
                                <h6>Do's:</h6>
                                <ul class="browser-default">
                                    <li>Wait for a break in QSOs before calling</li>
                                    <li>Be patient if the activator has a large pileup</li>
                                    <li>Send your information only once if asked</li>
                                    <li>Thank the activator for their time</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <h6>Don'ts:</h6>
                                <ul class="browser-default">
                                    <li>Call repeatedly over other stations</li>
                                    <li>Engage in lengthy conversations during busy periods</li>
                                    <li>Ask for multiple repeats unless absolutely necessary</li>
                                    <li>Transmit on the activator's frequency while they're working someone else</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logging Software Section -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">computer</i>Recommended Logging Software</span>
            <p>Proper logging is essential for HOTA participation. These software options support the ADDRESS field needed for HOTA:</p>

            <div class="row">
                <div class="col s12 m4">
                    <div class="card software-card">
                        <div class="card-content">
                            <span class="card-title">HAMRS</span>
                            <p>Modern, cross-platform logging software with excellent HOTA support.</p>
                            <p><strong>Platforms:</strong> Windows, macOS, Linux, iOS, Android</p>
                        </div>
                        <div class="card-action">
                            <a href="https://hamrs.app" target="_blank" rel="noopener">Visit Website</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card software-card">
                        <div class="card-content">
                            <span class="card-title">N3FJP Software</span>
                            <p>Feature-rich logging with contest support and customizable fields.</p>
                            <p><strong>Platforms:</strong> Windows</p>
                        </div>
                        <div class="card-action">
                            <a href="https://n3fjp.com" target="_blank" rel="noopener">Visit Website</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card software-card">
                        <div class="card-content">
                            <span class="card-title">Log4OM</span>
                            <p>Advanced logging with comprehensive address field support.</p>
                            <p><strong>Platforms:</strong> Windows</p>
                        </div>
                        <div class="card-action">
                            <a href="https://log4om.com" target="_blank" rel="noopener">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="center-align mt-4">
                <a href="?page=logging-software" class="btn blue-grey waves-effect waves-light">
                    <i class="material-icons left">apps</i>More Software Options
                </a>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help_outline</i>Frequently Asked Questions</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>What houses qualify for HOTA?</div>
                    <div class="collapsible-body">
                        <p>Any residential building with a unique address can qualify for HOTA. This includes single-family homes, apartments, townhouses, historic houses, and even temporary structures like holiday rentals. The key requirement is that it has a unique, identifiable address that can be logged.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>Do I need special equipment?</div>
                    <div class="collapsible-body">
                        <p>No special equipment is required beyond your standard amateur radio setup. You can participate with whatever equipment you already have - from QRP portable setups to full home stations. The most important thing is having a way to accurately log your contacts with address information.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>Can I activate my own home?</div>
                    <div class="collapsible-body">
                        <p>Absolutely! Your own home is a perfect starting point for HOTA activations. Many operators primarily activate from their home station while occasionally activating other locations. Each unique address counts separately toward awards.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>How specific must the address be?</div>
                    <div class="collapsible-body">
                        <p>For HOTA purposes, an address should include at minimum the street address (number and street name) and location (city/town). More detailed information like postal codes, states/provinces, and countries provides better clarity but isn't strictly required if the address can be uniquely identified without them.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">help</i>What if I'm concerned about privacy?</div>
                    <div class="collapsible-body">
                        <p>We understand privacy concerns regarding sharing address information. For your home address, you can use a nearby landmark or intersection instead of your exact house number. For public buildings or historic houses, using the full address is appropriate. You can also participate solely as a hunter if you prefer not to share your location.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Resources Section -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Key Resources</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>For Activators</h4>
                <ul class="browser-default">
                    <li><a href="?page=house-activations">Complete Activator Guide</a></li>
                    <li><a href="?page=portable-antennas">Portable Antenna Options</a></li>
                    <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>For Hunters</h4>
                <ul class="browser-default">
                    <li><a href="?page=awards">Award Program Details</a></li>
                    <li><a href="?page=band-plans">Band Plans & Frequencies</a></li>
                    <li><a href="?page=log-entry">Log Submission Guide</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Join Community Section -->
    <div class="card-panel deep-purple lighten-5 center-align mt-4">
        <h3>Join the HOTA Community</h3>
        <p class="flow-text">Connect with fellow HOTA enthusiasts to share experiences, plan activations, and get help.</p>
        <div class="row">
            <div class="col s12 m6">
                <a href="?page=discord" class="btn-large deep-purple waves-effect waves-light full-width-btn">
                    <i class="material-icons left">forum</i>Join Discord Community
                </a>
            </div>
            <div class="col s12 m6">
                <a href="?page=mailing-list" class="btn-large blue-grey darken-1 waves-effect waves-light full-width-btn">
                    <i class="material-icons left">email</i>Subscribe to Newsletter
                </a>
            </div>
        </div>
    </div>
</div>

<style>
/* Hero card styling */
.hero-card {
    background-color: #455a64;
    background-image: linear-gradient(135deg, #455a64 0%, #263238 100%);
    border-radius: 8px;
    margin-top: 20px;
    color: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.hero-content {
    padding: 30px;
}

.hero-heading {
    color: white;
    font-size: 2.2rem;
    font-weight: 500;
    margin-bottom: 20px;
    text-shadow: 0 1px 3px rgba(0,0,0,0.3);
}

.hero-text {
    color: rgba(255, 255, 255, 0.95);
    font-size: 1.2rem;
    line-height: 1.6;
}

/* Step container styling */
.step-container {
    margin-top: 30px;
}

.step {
    display: flex;
    margin-bottom: 40px;
    position: relative;
}

.step-number {
    background-color: #607d8b;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    flex-shrink: 0;
    margin-right: 20px;
    margin-top: 5px;
}

.step-content {
    flex: 1;
}

.step-content h5 {
    margin-top: 0;
    color: #455a64;
    font-weight: 500;
}

/* Call example styling */
.example-call {
    font-style: italic;
    font-weight: 500;
    text-align: center;
    padding: 15px;
    font-size: 1.1rem;
}

/* Equipment setup panel */
.example-setup {
    background-color: #f5f5f5;
    padding: 15px;
    border-radius: 4px;
    margin-top: 10px;
}

.example-setup h6 {
    margin-top: 0;
    font-weight: 500;
}

/* Software card styling */
.software-card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.software-card .card-content {
    flex-grow: 1;
}

.software-card .card-title {
    font-size: 1.3rem;
}

/* Utility classes */
.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}

.mb-0 {
    margin-bottom: 0;
}

.no-margin-top {
    margin-top: 0;
}

.tip {
    padding: 10px 15px;
}

.full-width-btn {
    width: 100%;
    margin: 10px 0;
}

/* Mobile adjustments */
@media only screen and (max-width: 600px) {
    .step {
        flex-direction: column;
    }

    .step-number {
        margin-bottom: 15px;
    }

    .tabs .tab a {
        padding: 0 10px;
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

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if(targetId.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});
</script>
