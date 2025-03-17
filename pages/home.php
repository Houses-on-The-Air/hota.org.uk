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

    <section class="section blue-grey darken-1 white-text">
        <div class="container center-align">
            <h2>Start Your HOTA Journey Today</h2>
            <p class="flow-text">Join amateur radio operators around the world in this exciting activity</p>
            <div class="row">
                <div class="col s12 m4 center-align">
                    <i class="material-icons large">home</i>
                    <h4>Activate</h4>
                    <p>Set up your station at a house location</p>
                </div>
                <div class="col s12 m4 center-align">
                    <i class="material-icons large">settings_input_antenna</i>
                    <h4>Operate</h4>
                    <p>Make contacts with other stations</p>
                </div>
                <div class="col s12 m4 center-align">
                    <i class="material-icons large">emoji_events</i>
                    <h4>Earn Awards</h4>
                    <p>Upload your logs and earn certificates</p>
                </div>
            </div>
            <a href="#upload" class="btn-large orange waves-effect waves-light mt-4">Upload Your ADIF File</a>
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
