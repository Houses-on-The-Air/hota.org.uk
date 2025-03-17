<?php
$pageTitle = "HOTA Nets - Houses on The Air";
$pageDescription = "Join regular Houses on the Air (HOTA) nets on various bands and modes. Find schedules, frequencies, and information about our amateur radio nets.";
?>

<div class="container">
    <h1>HOTA Nets</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=participate">Participate</a></li>
            <li>Nets</li>
        </ul>
    </div>

    <p class="flow-text">Connect with the HOTA community through our regular scheduled nets. These on-air gatherings are perfect for making HOTA contacts, asking questions, and sharing experiences.</p>

    <!-- Net Introduction Card -->
    <div class="card">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">settings_input_antenna</i>About HOTA Nets</span>
            <p>HOTA nets are scheduled on-air meetings where operators check in to make contacts, share information, and discuss HOTA activities. These are excellent opportunities to:</p>
            <ul class="browser-default">
                <li>Make multiple HOTA contacts in a single session</li>
                <li>Get your questions answered by experienced operators</li>
                <li>Announce your upcoming activations</li>
                <li>Learn tips and techniques from others</li>
                <li>Test your equipment and improve your operating skills</li>
            </ul>
            <p>All licensed amateur radio operators are welcome to join our nets, whether you're an experienced HOTA participant or just curious about the program.</p>
        </div>
    </div>

    <!-- Net Schedule -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">schedule</i>Weekly Net Schedule</span>

            <table class="striped responsive-table highlight">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Time (UTC)</th>
                        <th>Frequency</th>
                        <th>Mode</th>
                        <th>Net Name</th>
                        <th>Net Control</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>19:00</td>
                        <td>7.190 MHz (± QRM)</td>
                        <td>SSB</td>
                        <td>HOTA Evening Chat</td>
                        <td>Varies</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>14:00</td>
                        <td>14.290 MHz (± QRM)</td>
                        <td>SSB</td>
                        <td>HOTA International</td>
                        <td>Varies</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>08:00</td>
                        <td>3.790 MHz (± QRM)</td>
                        <td>SSB</td>
                        <td>HOTA Breakfast Club</td>
                        <td>Varies</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>20:00</td>
                        <td>TG31425 (TGIF)</td>
                        <td>DMR</td>
                        <td>HOTA Digital Roundtable</td>
                        <td>Varies</td>
                    </tr>
                </tbody>
            </table>

            <div class="card-panel light-blue lighten-5 mt-3">
                <h5><i class="material-icons left">info</i>Net Information</h5>
                <p>All nets are open to anyone interested in HOTA. Frequencies may vary slightly to avoid QRM. If you don't hear activity at the scheduled time, try calling "CQ HOTA NET" on the listed frequency.</p>
            </div>
        </div>
    </div>

    <!-- Net Categories -->
    <div class="row mt-4">
        <!-- HF Nets -->
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">settings_input_antenna</i>HF Nets</span>
                    <p>Our HF nets operate on multiple bands to accommodate different propagation conditions and time zones.</p>

                    <h5>Net Procedures</h5>
                    <ol>
                        <li>Net control establishes the net by calling "CQ HOTA Net"</li>
                        <li>Check in with your callsign, name, and location (address for HOTA)</li>
                        <li>Wait for net control to acknowledge you</li>
                        <li>Share any HOTA activities, questions, or announcements when called upon</li>
                        <li>Stations may be paired up for HOTA contacts during the net</li>
                    </ol>

                    <p>HF nets typically last 60-90 minutes, depending on participation levels.</p>
                </div>
            </div>
        </div>

        <!-- Digital Nets -->
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">router</i>Digital Nets</span>
                    <p>Our digital nets use DMR, Fusion, and other digital voice modes to connect the HOTA community.</p>

                    <h5>Digital Net Information</h5>
                    <ul class="browser-default">
                        <li><strong>DMR:</strong> TGIF Talkgroup 31425</li>
                        <li><strong>YSF:</strong> Room "HOTA ROOM"</li>
                        <li><strong>D-STAR:</strong> Reflector DCS005 A</li>
                        <li><strong>EchoLink:</strong> Conference *HOTA*</li>
                    </ul>

                    <p>Digital nets provide excellent opportunities for operators with limited antenna options or those in high-noise environments to participate.</p>

                    <div class="center-align mt-3">
                        <a href="?page=tgif" class="btn blue-grey waves-effect waves-light">
                            <i class="material-icons left">info</i>TGIF Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Nets -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">event_note</i>Special Event Nets</span>
            <p>Throughout the year, we host special event nets to celebrate holidays, contests, and HOTA milestones. These are announced on our website, Discord, and during regular nets.</p>

            <div class="row">
                <div class="col s12 m6">
                    <h5>Upcoming Special Nets</h5>
                    <ul class="collection">
                        <li class="collection-item">
                            <div>Spring Activation Weekend Kickoff<span class="secondary-content">April 16, 2025</span></div>
                        </li>
                        <li class="collection-item">
                            <div>HOTA Anniversary Net<span class="secondary-content">May 15, 2025</span></div>
                        </li>
                        <li class="collection-item">
                            <div>Field Day Preparation<span class="secondary-content">July 8, 2025</span></div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <div class="card-panel teal lighten-5">
                        <h5>Net Awards</h5>
                        <p>Participate in at least 10 HOTA nets in a calendar year to earn our special "Net Enthusiast" certificate. Check-ins are tracked by net control operators.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Become a Net Control Operator -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3><i class="material-icons left">record_voice_over</i>Become a Net Control Operator</h3>
        <p>We're always looking for volunteers to help run our nets. Net control operators gain valuable experience while providing an important service to the HOTA community.</p>
        <div class="row">
            <div class="col s12 m8">
                <h4>Requirements</h4>
                <ul class="browser-default">
                    <li>Valid amateur radio license</li>
                    <li>Reliable station capable of running for the entire net duration</li>
                    <li>Good organization and communication skills</li>
                    <li>Commitment to run the net on a regular schedule</li>
                    <li>Ability to maintain accurate check-in logs</li>
                </ul>
            </div>
            <div class="col s12 m4 center-align">
                <a href="?page=contact" class="btn-large blue-grey darken-1 waves-effect waves-light">
                    <i class="material-icons left">volunteer_activism</i>Volunteer
                </a>
            </div>
        </div>
    </div>

    <!-- Related Resources -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Related Resources</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>Community</h4>
                <ul class="browser-default">
                    <li><a href="?page=discord">Join our Discord</a> for real-time net announcements</li>
                    <li><a href="?page=tgif">TGIF Network Information</a> for digital nets</li>
                    <li><a href="?page=community-events">Community Events Calendar</a></li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>Operating Resources</h4>
                <ul class="browser-default">
                    <li><a href="?page=band-plans">Band Plans</a> for frequency coordination</li>
                    <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
                    <li><a href="?page=portable-antennas">Portable Antenna Solutions</a> for mobile net participation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize any Materialize components
    var elems = document.querySelectorAll('.collapsible');
    M.Collapsible.init(elems);
});
</script>
