<?php
$pageTitle = "Our Team - Houses on The Air";
$pageDescription = "Meet the passionate team behind Houses on the Air (HOTA), the amateur radio activity connecting operators through unique house locations.";
?>

<div class="container">
    <h1>Meet the HOTA Team</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=about">About</a></li>
            <li>Our Team</li>
        </ul>
    </div>

    <!-- Team Introduction -->
    <div class="card team-intro-card">
        <div class="card-content">
            <div class="row valign-wrapper">
                <div class="col s12 m8">
                    <h2>The People Behind HOTA</h2>
                    <p class="flow-text">Houses on The Air is built and maintained by a dedicated team of amateur radio enthusiasts who volunteer their time and expertise to create a vibrant community for radio operators worldwide.</p>
                    <p>Our team brings together diverse skills and backgrounds with one common passion - amateur radio and the unique stories of houses around the world.</p>
                </div>
                <div class="col s12 m4 center-align hide-on-small-only">
                    <img src="/images/team-collaboration.svg" alt="Team Collaboration" class="responsive-img" style="max-width: 180px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Core Team Section -->
    <div class="section-header">
        <h2><i class="material-icons left">stars</i>Core Team</h2>
    </div>

    <div class="row team-grid">
        <div class="col s12 m6 l4">
            <div class="card team-member-card">
                <div class="card-content center-align">
                    <div class="team-member-image">
                        <img src="/images/team/antony-bailey.jpg" alt="Antony Bailey" class="circle responsive-img">
                    </div>
                    <h3 class="team-name">Antony Bailey</h3>
                    <div class="team-callsign">M7FGZ</div>
                    <div class="team-title">Founder & Lead Developer</div>
                    <div class="team-divider"></div>
                    <p class="team-bio">"Having spent years participating in various radio activities, I wanted to create something that combined my passion for amateur radio with my interest in architecture and history."</p>
                    <div class="team-interests">
                        <span class="chip">Software Development</span>
                        <span class="chip">Digital Modes</span>
                        <span class="chip">QRP</span>                    </div>
                </div>
                <div class="card-action center-align">
                    <a href="https://qrz.com/db/M7FGZ" target="_blank" rel="nofollow noopener" class="btn-flat waves-effect waves-teal">
                        <i class="material-icons left">open_in_new</i>QRZ Profile
                    </a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card team-member-card">
                <div class="card-content center-align">
                    <div class="team-member-image">
                        <img src="/images/team/jim-attkinson.jpg" alt="Jim Attkinson" class="circle responsive-img">
                    </div>
                    <h3 class="team-name">Jim Attkinson</h3>
                    <div class="team-callsign">M7JXZ</div>
                    <div class="team-title">Community Outreach Manager</div>
                    <div class="team-divider"></div>
                    <p class="team-bio">"I'm responsible for ensuring everyone has fun. If that's at home, or at another home. I am always there for our users."</p>
                    <div class="team-interests">
                        <span class="chip">DX-ing</span>
                        <span class="chip">Antenna Design</span>
                        <span class="chip">Victorian Architecture</span>
                    </div>
                </div>
                <div class="card-action center-align">
                    <a href="https://qrz.com/db/M7JXZ" target="_blank" rel="nofollow noopener" class="btn-flat waves-effect waves-teal">
                        <i class="material-icons left">open_in_new</i>QRZ Profile
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Join Our Team Section -->
    <div class="card-panel blue-grey lighten-5 mt-4 cta-panel">
        <div class="row valign-wrapper">
            <div class="col s12 m8">
                <h2>Would You Like to Join Our Team?</h2>
                <p class="flow-text">HOTA is always looking for enthusiastic volunteers to help grow and improve our program. Whether you have technical skills, community management experience, or just a passion for amateur radio and houses, we'd love to hear from you!</p>
                <p>Current volunteer opportunities include:</p>
                <ul class="browser-default">
                    <li>Regional coordinators for underrepresented areas</li>
                    <li>Content writers for our blog and documentation</li>
                    <li>Log reviewers for the awards program</li>
                    <li>Contest adjudicators and event organizers</li>
                    <li>Technical support for our online systems</li>
                </ul>
            </div>
            <div class="col s12 m4 center-align">
                <a href="?page=join-our-team" class="btn-large waves-effect waves-light blue-grey darken-1">
                    <i class="material-icons left">person_add</i>Join Our Team
                </a>
                <p class="mt-3">Or email us at <a href="mailto:volunteer@hota.org.uk">volunteer@hota.org.uk</a></p>
            </div>
        </div>
    </div>

    <!-- Acknowledgements -->
    <div class="card-panel mt-4">
        <h3 class="center-align">Special Acknowledgements</h3>
        <p class="center-align">Houses on The Air would not be possible without the support and guidance of many individuals and organizations.</p>

        <p class="center-align">We would like to extend our sincere thanks to:</p>

        <div class="row acknowledgements">
            <div class="col s12 m4">
                <div class="center-align">
                    <i class="material-icons medium">volunteer_activism</i>
                    <h4>Our Early Supporters</h4>
                    <p>The first 100 activators and hunters who helped refine our rules and procedures during the beta phase.</p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="center-align">
                    <i class="material-icons medium">article</i>
                    <h4>Technical Advisors</h4>
                    <p>Fellow amateur radio organizations who provided guidance on establishing our logging standards and award criteria.</p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="center-align">
                    <i class="material-icons medium">home</i>
                    <h4>Heritage Partners</h4>
                    <p>Organizations and property owners who have embraced HOTA and allowed special activations from significant historical houses.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Team Introduction Card */
.team-intro-card {
    background-color: #455a64;
    background-image: linear-gradient(135deg, #455a64 0%, #263238 100%);
    color: white;
    border-radius: 8px;
    margin-top: 20px;
}

.team-intro-card h2 {
    color: white;
    margin-top: 0;
}

/* Section Headers */
.section-header {
    margin-top: 40px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #607d8b;
}

.section-header h2 {
    color: #455a64;
    font-size: 2rem;
    margin-bottom: 5px;
}

.section-header p {
    font-size: 1.1rem;
}

/* Team Member Cards */
.team-grid {
    display: flex;
    flex-wrap: wrap;
}

.team-member-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-member-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 17px 2px rgba(0,0,0,0.14), 0 3px 14px 2px rgba(0,0,0,0.12), 0 5px 5px -3px rgba(0,0,0,0.2);
}

.team-member-image {
    width: 150px;
    height: 150px;
    margin: 0 auto 20px;
    position: relative;
    overflow: hidden;
}

.team-member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.team-name {
    font-size: 1.5rem;
    margin: 0 0 5px;
    color: #455a64;
}

.team-callsign {
    font-size: 1.2rem;
    font-weight: 500;
    color: #607d8b;
    margin-bottom: 5px;
}

.team-title {
    color: #78909c;
    font-style: italic;
    margin-bottom: 15px;
}

.team-divider {
    width: 50px;
    height: 3px;
    background-color: #607d8b;
    margin: 15px auto;
}

.team-bio {
    font-style: italic;
    color: #546e7a;
    margin-bottom: 20px;
}

.team-interests {
    margin-top: 15px;
}

.team-interests .chip {
    margin: 3px;
    background-color: #eceff1;
}

/* Contributor Cards */
.contributor-card {
    margin-bottom: 20px;
}

.contributor-card h3 {
    color: #455a64;
    font-size: 1.5rem;
    margin-top: 0;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eceff1;
}

.collection .title {
    font-weight: 500;
    color: #455a64;
}

/* Regional Representatives */
.region-group h4 {
    color: #455a64;
    font-size: 1.3rem;
    border-bottom: 2px solid #eceff1;
    padding-bottom: 8px;
}

.region-group ul li {
    margin-bottom: 8px;
}

/* Gallery */
.team-gallery {
    margin-bottom: 20px;
}

.card-image {
    position: relative;
    margin-bottom: 15px;
}

.image-caption {
    position: relative;
    display: block;
    padding: 8px 0;
    font-size: 0.9rem;
    color: #607d8b;
    text-align: center;
}

/* Call to Action Panel */
.cta-panel {
    border-radius: 8px;
}

.cta-panel h2 {
    color: #455a64;
    font-size: 1.8rem;
    margin-top: 0;
    margin-bottom: 15px;
}

/* Utility Classes */
.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}

/* Mobile Responsiveness */
@media only screen and (max-width: 600px) {
    .team-member-image {
        width: 120px;
        height: 120px;
    }

    .team-name {
        font-size: 1.3rem;
    }

    .team-member-card {
        margin-bottom: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize materialbox for image zooming
    var materialboxElements = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialboxElements);
});
</script>
