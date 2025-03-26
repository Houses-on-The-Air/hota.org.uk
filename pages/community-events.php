<?php
$pageTitle = "Community Events - HOTA";
$pageDescription = "Join Houses on the Air community events, contests, and special activations. Find upcoming amateur radio events organised by HOTA team and supporters.";
?>

<div class="container">
    <h1>Community Events</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Community Events</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <p class="flow-text">Houses on the Air is more than an awards programme—it's a community of amateur radio enthusiasts. Check out our upcoming events and join the fun!</p>
            </div>
        </div>
    </div>

    <!-- Upcoming Events -->
    <h3>Upcoming Events</h3>

    <div class="card event-card">
        <div class="card-content">
            <span class="card-title">HOTA Winter Activity Weekend</span>
            <div class="event-date">12-13 January 2024</div>
            <p>Join fellow operators for a weekend of HOTA activations! This special event encourages activators to set up from house locations throughout the weekend, providing hunters with many opportunities for unique contacts.</p>
            <p><strong>Special Participation Certificate:</strong> Available to anyone who activates at least one location or contacts 10+ HOTA stations during the weekend.</p>
        </div>
        <div class="card-action">
            <a href="?page=activity-weekend">Event Details</a>
        </div>
    </div>

    <div class="card event-card">
        <div class="card-content">
            <span class="card-title">Monthly HOTA Net - 80m</span>
            <div class="event-date">First Sunday of each month, 20:00 GMT/BST</div>
            <p>Join our monthly net on 80 metres where HOTA participants can check in, share experiences, and coordinate future activations. All licenced operators welcome!</p>
            <p><strong>Frequency:</strong> 3.760 MHz ±QRM, LSB</p>
            <p><strong>Net Controller:</strong> M7JXZ</p>
        </div>
        <div class="card-action">
            <a href="?page=nets">Net Schedule</a>
        </div>
    </div>

    <!-- Create an Event Section -->
    <div class="card blue-grey lighten-5">
        <div class="card-content">
            <span class="card-title">Organise Your Own HOTA Event</span>
            <p>Would you like to organise a local HOTA event or activation day? We can help promote your event and provide resources.</p>
            <div class="row">
                <div class="col s12 m6">
                    <h5>Event Ideas:</h5>
                    <ul class="browser-default">
                        <li>Local activation day at a historic house</li>
                        <li>Regional HOTA contest or sprint</li>
                        <li>Club-based HOTA presentation and activation</li>
                        <li>Themed activations (e.g., lighthouses, schoolhouses)</li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <h5>How We Can Help:</h5>
                    <ul class="browser-default">
                        <li>List your event on our website</li>
                        <li>Promote through our social media channels</li>
                        <li>Provide HOTA information materials</li>
                        <li>Issue special certificates for participants</li>
                    </ul>
                </div>
            </div>
            <div class="center-align mt-3">
                <a href="?page=contact" class="btn blue-grey waves-effect waves-light">
                    <i class="material-icons left">event</i>Submit Your Event
                </a>
            </div>
        </div>
    </div>

    <!-- Discord Events -->
    <div class="card purple lighten-5">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">forum</i>Join Us on Discord for Weekly Events</span>
            <p>Our Discord community hosts regular events including:</p>
            <ul class="browser-default">
                <li>Weekly planning sessions for upcoming activations</li>
                <li>Technical discussions and equipment advice</li>
                <li>Show & tell for portable setups</li>
                <li>Q&A sessions with experienced activators</li>
            </ul>
            <div class="center-align mt-3">
                <a href="?page=discord" class="btn purple darken-1 waves-effect waves-light">
                    <i class="material-icons left">person_add</i>Join Discord Community
                </a>
            </div>
        </div>
    </div>

    <!-- Event Calendar -->
    <h3>Event Calendar</h3>
    <div class="card">
        <div class="card-content">
            <div id="event-calendar">
                <iframe src="https://calendar.google.com/calendar/embed?src=hotaevents%40gmail.com&ctz=Europe%2FLondon" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</div>

<style>
.event-card {
    margin-bottom: 20px;
}

.event-date {
    font-size: 1.1rem;
    color: #455a64;
    font-weight: 500;
    margin-bottom: 15px;
}

.past-event {
    opacity: 0.9;
}

.past-event .card-title {
    color: #666;
}

.mt-3 {
    margin-top: 1.5rem;
}
</style>
