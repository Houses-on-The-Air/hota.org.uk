<?php
$pageTitle = "Community Events - Houses on The Air";
$pageDescription = "Join the Houses on the Air community events including field days, special activations, meetups, and more. Find upcoming events and see highlights from past gatherings.";
?>

<div class="container">
    <h1>Community Events</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=participate">Participate</a></li>
            <li>Community Events</li>
        </ul>
    </div>

    <p class="flow-text">Connect with fellow HOTA enthusiasts at our community events. From virtual gatherings to in-person activations, there's always something happening in the HOTA community.</p>

    <!-- Upcoming Events Banner -->
    <div class="card event-highlight-card">
        <div class="card-content white-text">
            <div class="row valign-wrapper">
                <div class="col s12 m8">
                    <h2>Spring Group Activation Weekend</h2>
                    <p class="flow-text">Join operators worldwide for our next major group activation on April 17-18, 2025. Activate your own house or hunt for activators across multiple bands.</p>
                    <p><i class="material-icons tiny">event</i> April 17-18, 2025 &nbsp; | &nbsp; <i class="material-icons tiny">public</i> Worldwide</p>
                    <a href="#spring-activation" class="btn-large waves-effect waves-light">Learn More</a>
                </div>
                <div class="col s12 m4 center-align hide-on-small-only">
                    <img src="/images/spring-activation.jpg" alt="Spring Activation" class="responsive-img" style="max-width: 150px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Event Nav Tabs -->
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s4"><a class="active" href="#upcoming-events"><i class="material-icons left">event</i>Upcoming Events</a></li>
                <li class="tab col s4"><a href="#regular-activities"><i class="material-icons left">repeat</i>Regular Activities</a></li>
                <li class="tab col s4"><a href="#past-events"><i class="material-icons left">history</i>Past Events</a></li>
            </ul>
        </div>
    </div>

    <!-- Upcoming Events Tab -->
    <div id="upcoming-events" class="events-tab-content">
        <div class="row">
            <div class="col s12">
                <h3><i class="material-icons left">event</i>Upcoming Events</h3>
                <p>Mark your calendar for these upcoming HOTA community events. Click on any event for more details.</p>
            </div>
        </div>

        <div class="row">
            <!-- Spring Activation -->
            <div class="col s12">
                <div id="spring-activation" class="card event-card">
                    <div class="card-content">
                        <div class="event-date blue-grey darken-1 white-text">
                            <span class="month">APR</span>
                            <span class="day">17-18</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-details">
                            <span class="card-title">Spring Group Activation Weekend</span>
                            <p class="event-meta"><i class="material-icons tiny">location_on</i> Worldwide &nbsp; | &nbsp; <i class="material-icons tiny">schedule</i> 00:00 UTC Apr 17 - 23:59 UTC Apr 18</p>
                            <p>Our major seasonal activation event featuring operators from around the world activating their houses on the same weekend. Special certificates will be available for participants who activate or contact at least 10 unique houses during the event.</p>

                            <div class="event-highlights">
                                <div class="chip"><i class="material-icons tiny">settings_input_antenna</i> All Bands</div>
                                <div class="chip"><i class="material-icons tiny">record_voice_over</i> All Modes</div>
                                <div class="chip"><i class="material-icons tiny">emoji_events</i> Special Awards</div>
                            </div>

                            <p class="mt-2"><strong>How to Participate:</strong></p>
                            <ul class="browser-default">
                                <li>Activate from your home or a unique house location</li>
                                <li>Exchange complete address information with each contact</li>
                                <li>Submit logs within 7 days after the event</li>
                                <li>Special spring-themed certificates for participants</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="?page=contests#spring-activation" class="btn blue-grey darken-1 waves-effect waves-light">Full Event Details</a>
                        <a href="?page=discord" class="btn-flat waves-effect">Discuss on Discord</a>
                    </div>
                </div>
            </div>
            <!-- UK Meetup -->
            <div class="col s12">
                <div class="card event-card">
                    <div class="card-content">
                        <div class="event-date blue-grey darken-1 white-text">
                            <span class="month">JUN</span>
                            <span class="day">05</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-details">
                            <span class="card-title">UK HOTA Enthusiasts Meetup</span>
                            <p class="event-meta"><i class="material-icons tiny">location_on</i> Birmingham, UK &nbsp; | &nbsp; <i class="material-icons tiny">schedule</i> 11:00-16:00 BST</p>
                            <p>A casual in-person gathering for UK-based HOTA participants. Meet fellow enthusiasts, share experiences, and participate in short talks and demonstrations. Includes a group activation from a historic house in Birmingham (details to be announced).</p>

                            <div class="event-highlights">
                                <div class="chip"><i class="material-icons tiny">people</i> In-Person</div>
                                <div class="chip"><i class="material-icons tiny">restaurant</i> Lunch Not Provided</div>
                                <div class="chip"><i class="material-icons tiny">home</i> Group Activation</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#registration-form" class="btn blue-grey darken-1 waves-effect waves-light modal-trigger">Register</a>
                        <a href="https://maps.google.com/?q=Birmingham+UK" target="_blank" rel="nofollow noopener" class="btn-flat waves-effect">View Location</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Regular Activities Tab -->
    <div id="regular-activities" class="events-tab-content">
        <div class="row">
            <div class="col s12">
                <h3><i class="material-icons left">repeat</i>Regular Activities</h3>
                <p>These recurring events provide regular opportunities to connect with the HOTA community.</p>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6">
                <div class="card regular-activity-card">
                    <div class="card-content">
                        <span class="card-title">Weekend Breakfast Club</span>
                        <div class="activity-schedule">
                            <i class="material-icons">today</i>
                            <span>Every Saturday</span>
                        </div>
                        <div class="activity-time">
                            <i class="material-icons">schedule</i>
                            <span>08:00 UTC</span>
                        </div>
                        <div class="activity-location">
                            <i class="material-icons">settings_input_antenna</i>
                            <span>40m Band (7.135 MHz ±QRM)</span>
                        </div>
                        <p>Start your weekend with fellow HOTA enthusiasts. This casual net welcomes check-ins from anywhere, with participants sharing their HOTA plans for the weekend.</p>
                    </div>
                    <div class="card-action">
                        <a href="?page=nets" class="btn-flat waves-effect">View All Nets</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card regular-activity-card">
                    <div class="card-content">
                        <span class="card-title">HOTA Discord Live Chat</span>
                        <div class="activity-schedule">
                            <i class="material-icons">today</i>
                            <span>Every Wednesday</span>
                        </div>
                        <div class="activity-time">
                            <i class="material-icons">schedule</i>
                            <span>19:00 UTC</span>
                        </div>
                        <div class="activity-location">
                            <i class="material-icons">forum</i>
                            <span>Discord Voice Channel</span>
                        </div>
                        <p>Weekly voice chat session on Discord where community members discuss techniques, plan activations, and answer questions from newcomers.</p>
                    </div>
                    <div class="card-action">
                        <a href="?page=discord" class="btn-flat waves-effect">Join Discord</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card regular-activity-card">
                    <div class="card-content">
                        <span class="card-title">TGIF Talkgroup Net</span>
                        <div class="activity-schedule">
                            <i class="material-icons">today</i>
                            <span>Every Monday</span>
                        </div>
                        <div class="activity-time">
                            <i class="material-icons">schedule</i>
                            <span>20:00 UTC</span>
                        </div>
                        <div class="activity-location">
                            <i class="material-icons">settings_phone</i>
                            <span>TG31425 on TGIF Network</span>
                        </div>
                        <p>Weekly DMR net on our dedicated TGIF talkgroup. Great for digital mode enthusiasts and those who want to plan activations.</p>
                    </div>
                    <div class="card-action">
                        <a href="?page=tgif" class="btn-flat waves-effect">TGIF Info</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card regular-activity-card">
                    <div class="card-content">
                        <span class="card-title">Monthly Contest</span>
                        <div class="activity-schedule">
                            <i class="material-icons">today</i>
                            <span>First Sunday of Each Month</span>
                        </div>
                        <div class="activity-time">
                            <i class="material-icons">schedule</i>
                            <span>12:00-16:00 UTC</span>
                        </div>
                        <div class="activity-location">
                            <i class="material-icons">settings_input_antenna</i>
                            <span>All Bands, All Modes</span>
                        </div>
                        <p>A four-hour mini-contest focused on making HOTA contacts. Different theme each month. Simple exchange: callsign, report, and complete address.</p>
                    </div>
                    <div class="card-action">
                        <a href="?page=contests" class="btn-flat waves-effect">Contest Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Past Events Tab -->
    <div id="past-events" class="events-tab-content">
        <div class="row">
            <div class="col s12">
                <h3><i class="material-icons left">history</i>Past Events</h3>
                <p>Highlights and summaries from our previous community events.</p>
            </div>
        </div>

        <div class="row">
            <!-- Winter Activation -->
            <div class="col s12 m6">
                <div class="card past-event-card">
                    <div class="card-image">
                        <img src="/images/events/winter-activation-2025.jpg" alt="Winter Activation 2025" class="responsive-img">
                        <span class="card-title">Winter Activation Weekend 2025</span>
                    </div>
                    <div class="card-content">
                        <div class="past-event-date">January 25-26, 2025</div>
                        <p>Our inaugural seasonal activation event was a tremendous success with over 250 participants from 28 countries. More than 3,500 QSOs were logged across all bands.</p>
                        <div class="past-event-stats">
                            <div class="stat-item">
                                <span class="stat-value">250+</span>
                                <span class="stat-label">Participants</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-value">28</span>
                                <span class="stat-label">Countries</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-value">3,500+</span>
                                <span class="stat-label">QSOs</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#" class="btn-flat waves-effect">View Gallery</a>
                        <a href="#" class="btn-flat waves-effect">Results</a>
                    </div>
                </div>
            </div>

            <!-- Launch Event -->
            <div class="col s12 m6">
                <div class="card past-event-card">
                    <div class="card-image">
                        <img src="/images/events/launch-event.jpg" alt="HOTA Launch Event" class="responsive-img">
                        <span class="card-title">HOTA Launch Event</span>
                    </div>
                    <div class="card-content">
                        <div class="past-event-date">March 15, 2025</div>
                        <p>The official launch of Houses on The Air featuring simultaneous activations from historic houses across five countries. This event marked the beginning of HOTA as a global amateur radio activity.</p>
                        <div class="past-event-stats">
                            <div class="stat-item">
                                <span class="stat-value">15</span>
                                <span class="stat-label">Historic Houses</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-value">5</span>
                                <span class="stat-label">Countries</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-value">1,200+</span>
                                <span class="stat-label">QSOs</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#" class="btn-flat waves-effect">View Gallery</a>
                        <a href="#" class="btn-flat waves-effect">Read Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Host Your Own Event -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <div class="row">
            <div class="col s12 m8">
                <h3><i class="material-icons left">add_circle</i>Host Your Own HOTA Event</h3>
                <p class="flow-text">Want to organize a local HOTA event in your area? We'd love to support you!</p>
                <p>Community-led events are a fantastic way to grow the HOTA program and connect with local amateur radio operators. Whether it's a group activation, workshop, or social gathering, we can help promote your event and provide resources.</p>
                <ul class="browser-default">
                    <li>Local activations with multiple operators</li>
                    <li>Regional HOTA meetups</li>
                    <li>HOTA presentations at radio clubs</li>
                    <li>Training workshops for newcomers</li>
                </ul>
            </div>
            <div class="col s12 m4 center-align">
                <a href="?page=contact" class="btn-large waves-effect waves-light blue-grey darken-1 mt-2 full-width-btn">
                    <i class="material-icons left">email</i>Contact Us to Organize
                </a>
            </div>
        </div>
    </div>

    <!-- Calendar Integration -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">today</i>Event Calendar</span>
            <p>Keep track of all HOTA events using your favorite calendar application.</p>

            <div class="calendar-btns center-align">
                <a href="https://calendar.google.com/calendar/ical/123abc%40group.calendar.google.com/public/basic.ics" class="btn waves-effect waves-light blue-grey darken-1 m-1" rel="nofollow">
                    <i class="material-icons left">add</i>Google Calendar
                </a>
                <a href="webcal://hota.org.uk/calendar/hota-events.ics" class="btn waves-effect waves-light blue-grey darken-1 m-1" rel="nofollow">
                    <i class="material-icons left">add</i>Apple/Outlook
                </a>
                <a href="/calendar/hota-events.ics" class="btn waves-effect waves-light blue-grey darken-1 m-1">
                    <i class="material-icons left">file_download</i>Download ICS File
                </a>
            </div>
        </div>
    </div>

    <!-- Event Notification Sign-Up -->
    <div class="card-panel deep-purple lighten-5 center-align mt-4">
        <h3>Never Miss an Event!</h3>
        <p class="flow-text">Get notified about upcoming HOTA events and activities.</p>
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="input-field">
                    <input id="email" type="email" class="validate">
                    <label for="email">Your Email Address</label>
                </div>
                <button class="btn-large waves-effect waves-light deep-purple full-width-btn">
                    <i class="material-icons left">notifications_active</i>Sign Up for Event Notifications
                </button>
                <p class="mt-2 small-text">We'll only email you about events and activities. See our <a href="?page=privacy">Privacy Policy</a>.</p>
            </div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div id="registration-form" class="modal">
        <div class="modal-content">
            <h4>Event Registration</h4>
            <p>Please complete this form to register for the selected event. You'll receive a confirmation email with further details.</p>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="first_name" type="text" class="validate" required>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="last_name" type="text" class="validate" required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="callsign" type="text" class="validate" required>
                            <label for="callsign">Callsign</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="email_reg" type="email" class="validate" required>
                            <label for="email_reg">Email Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="special_requests" class="materialize-textarea"></textarea>
                            <label for="special_requests">Special Requests or Questions</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-light btn-flat">Cancel</a>
            <button type="submit" class="waves-effect waves-light btn blue-grey darken-1">Register</button>
        </div>
    </div>
</div>

<style>
/* Event Highlight Card */
.event-highlight-card {
    background: linear-gradient(135deg, #455a64 0%, #263238 100%);
    margin-bottom: 30px;
}

/* Event Cards */
.event-card {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
}

.event-date {
    float: left;
    padding: 10px;
    border-radius: 4px;
    text-align: center;
    margin-right: 20px;
    width: 70px;
}

.event-date .month {
    display: block;
    font-size: 0.8rem;
    text-transform: uppercase;
}

.event-date .day {
    display: block;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 2px 0;
}

.event-date .year {
    display: block;
    font-size: 0.8rem;
}

.event-details {
    overflow: hidden;
}

.event-meta {
    color: #757575;
    margin-top: 0;
    margin-bottom: 15px;
    font-size: 0.9rem;
}

.event-highlights {
    margin-top: 15px;
    margin-bottom: 15px;
}

/* Regular Activity Cards */
.regular-activity-card {
    height: 100%;
}

.activity-schedule, .activity-time, .activity-location {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.activity-schedule i, .activity-time i, .activity-location i {
    margin-right: 10px;
    color: #607d8b;
}

/* Past Event Cards */
.past-event-card {
    height: 100%;
}

.past-event-card .card-image {
    max-height: 200px;
    overflow: hidden;
}

.past-event-date {
    font-weight: 500;
    color: #607d8b;
    margin-bottom: 10px;
}

.past-event-stats {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
    text-align: center;
}

.stat-item {
    flex: 1;
    padding: 5px;
}

.stat-value {
    display: block;
    font-size: 1.5rem;
    font-weight: bold;
    color: #455a64;
}

.stat-label {
    display: block;
    font-size: 0.8rem;
    color: #78909c;
}

/* Tab Content */
.events-tab-content {
    padding-top: 20px;
}

/* Utility Classes */
.mt-2 {
    margin-top: 10px;
}

.mt-3 {
    margin-top: 15px;
}

.mt-4 {
    margin-top: 20px;
}

.small-text {
    font-size: 0.8rem;
    color: #757575;
}

.full-width-btn {
    width: 100%;
    margin-bottom: 10px;
}

.calendar-btns {
    margin: 20px 0;
}

/* Mobile Adjustments */
@media only screen and (max-width: 600px) {
    .event-date {
        float: none;
        width: auto;
        display: inline-block;
        margin-bottom: 15px;
    }

    .tabs .tab a {
        padding: 0 10px;
        font-size: 12px;
    }

    .tabs .tab a i.material-icons {
        margin-right: 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tabs
    var tabs = document.querySelectorAll('.tabs');
    M.Tabs.init(tabs);

    // Initialize modals
    var modals = document.querySelectorAll('.modal');
    M.Modal.init(modals);

    // Form validation for email signup
    document.querySelector('.full-width-btn').addEventListener('click', function(e) {
        var email = document.getElementById('email');
        if (!email.validity.valid) {
            M.toast({html: 'Please enter a valid email address'});
            e.preventDefault();
        } else {
            M.toast({html: 'Thank you for signing up! You\'ll receive event notifications soon.'});
            email.value = '';
        }
    });
});
</script>
