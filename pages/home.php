<?php
// Set page variables
$pageTitle = "Welcome to Houses on the Air";
$pageDescription = "Houses on the Air (HOTA) is an amateur radio activity that encourages operators to set up from various houses.";
?>

<!-- Hero Section -->
<div class="hero-container">
    <div class="hero-overlay"></div>
    <div class="hero-content center-align">
        <div class="hero-text">
            <h2>Welcome to Houses on The Air</h2>
            <p class="flow-text">The amateur radio activity connecting operators through unique house locations.</p>
        </div>
    </div>
</div>

<div class="home-content">
    <section id="features" class="section bg-light">
        <div class="container">
            <h2 class="center-align">Explore Houses on The Air</h2>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card feature-card">
                        <div class="card-content">
                            <span class="card-title">House Activations</span>
                            <p>Set up and operate from various house locations. Make contacts, log your operations, and earn awards.</p>
                        </div>
                        <div class="card-action">
                            <a href="?page=house-activations">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card feature-card">
                        <div class="card-content">
                            <span class="card-title">Awards Program</span>
                            <p>Earn certificates based on the number of unique addresses you activate or contact, from Cardboard Box to Mansion tier.</p>
                        </div>
                        <div class="card-action">
                            <a href="?page=awards">View Awards</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card feature-card">
                        <div class="card-content">
                            <span class="card-title">Join Our Community</span>
                            <p>Connect with other HOTA operators, share experiences, and participate in community events and contests.</p>
                        </div>
                        <div class="card-action">
                            <a href="?page=discord">Join Discord</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fixed Journey Section with inline background -->
    <section class="section journey-section" style="position: relative; background: url('/images/backgrounds/radio-landscape.jpg') center center no-repeat; background-size: cover; padding: 80px 0; color: white; margin: 40px 0;">
        <!-- Explicit overlay with guaranteed coverage -->
        <div class="journey-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
        <div class="container center-align" style="position: relative; z-index: 2;">
            <div class="journey-content">
                <h2 class="white-text text-shadow">Start Your HOTA Journey Today</h2>
                <p class="flow-text white-text text-shadow">Join amateur radio operators around the world in this exciting activity</p>

                <div class="row journey-steps">
                    <div class="col s12 m4 center-align">
                        <div class="journey-step">
                            <i class="material-icons large white-text">home</i>
                            <h5 class="white-text">Activate</h5>
                            <p class="white-text">Set up your station at different houses</p>
                        </div>
                    </div>
                    <div class="col s12 m4 center-align">
                        <div class="journey-step">
                            <i class="material-icons large white-text">record_voice_over</i>
                            <h5 class="white-text">Connect</h5>
                            <p class="white-text">Make contacts with operators worldwide</p>
                        </div>
                    </div>
                    <div class="col s12 m4 center-align">
                        <div class="journey-step">
                            <i class="material-icons large white-text">emoji_events</i>
                            <h5 class="white-text">Achieve</h5>
                            <p class="white-text">Earn awards and recognition</p>
                        </div>
                    </div>
                </div>

                <a href="?page=log-entry" class="btn-large orange darken-2 waves-effect waves-light mt-4" style="margin-top: 30px;">Upload Your ADIF File</a>
            </div>
        </div>
    </section>

    <!-- New Quick Links Section -->
    <section id="quick-links" class="section bg-light">
        <div class="container">
            <h2 class="center-align">Popular Resources</h2>
            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="card feature-card">
                        <div class="card-content">
                            <span class="card-title">Getting Started</span>
                            <ul class="browser-default">
                                <li><a href="?page=get-licenced">How to Get licenced</a></li>
                                <li><a href="?page=house-activations">House Activations Guide</a></li>
                                <li><a href="?page=log-entry">Log Submission</a></li>
                                <li><a href="?page=band-plans">Band Plans</a></li>
                                <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card feature-card">
                        <div class="card-content">
                            <span class="card-title">Community</span>
                            <ul class="browser-default">
                                <li><a href="?page=discord">Join Discord</a></li>
                                <li><a href="?page=contests">Upcoming Contests</a></li>
                                <li><a href="?page=community-events">Community Events</a></li>
                                <li><a href="?page=nets">Net Schedule</a></li>
                                <li><a href="?page=support-us">Support HOTA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card feature-card">
                        <div class="card-content">
                            <span class="card-title">Reference</span>
                            <ul class="browser-default">
                                <li><a href="?page=glossary">Radio Terminology Glossary</a></li>
                                <li><a href="?page=faq">Frequently Asked Questions</a></li>
                                <li><a href="?page=rules">HOTA Rules</a></li>
                                <li><a href="?page=awards">Award Tiers</a></li>
                                <li><a href="?page=sitemap">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-news" class="section">
        <div class="container">
            <div class="row">
                <div class="col s12 m8">
                    <h2>Latest News</h2>
                    <div class="card-panel">
                        <h5>HOTA Weekend Event - Coming Soon!</h5>
                        <p class="grey-text">Posted on <?= date('F j, Y', strtotime('-3 days')); ?></p>
                        <p>Join us for a special HOTA weekend activation event! Operators around the world will be setting up from various house locations and making contacts.</p>
                        <a href="?page=community-events" class="btn blue-grey">Learn More</a>
                    </div>
                </div>
                <div class="col s12 m4">
                    <h2>Connect With Us</h2>
                    <div class="card-panel">
                        <h5>Join Our Community</h5>
                        <p>Connect with other HOTA operators on Discord, share your experiences, and get help.</p>
                        <a href="?page=discord" class="btn blue-grey waves-effect waves-light">Join Discord</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add these important styles inline to ensure they're always available -->
<style>
    /* Essential styles to ensure journey section displays correctly */
    .text-shadow {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    }

    .journey-step {
        padding: 20px;
    }

    .journey-step .material-icons.large {
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    }

    .mt-4 {
        margin-top: 2rem;
    }

    /* Fallback background color in case image fails to load */
    .journey-section {
        background-color: #455a64 !important;
    }
</style>
