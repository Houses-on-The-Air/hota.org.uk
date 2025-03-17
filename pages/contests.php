<?php
$pageTitle = "HOTA Contests & Events";
$pageDescription = "Participate in Houses on the Air (HOTA) contests and special events. Find upcoming contests, rules, and results for amateur radio operators.";
?>

<div class="container">
    <h1>HOTA Contests & Events</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=participate">Participate</a></li>
            <li>Contests</li>
        </ul>
    </div>

    <p class="flow-text">HOTA contests provide an exciting way to activate or contact many houses in a short time and earn awards faster. Find upcoming contests and learn how to participate.</p>

    <!-- Upcoming Contests -->
    <div class="card">
        <div class="card-content">
            <span class="card-title">Upcoming Contests</span>
            <p>Mark your calendar for these upcoming HOTA events:</p>

            <table class="striped responsive-table highlight">
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Date</th>
                        <th>Time (UTC)</th>
                        <th>Bands</th>
                        <th>Mode</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HOTA Spring Contest</td>
                        <td>April 15-16, 2025</td>
                        <td>12:00-12:00</td>
                        <td>All HF</td>
                        <td>All</td>
                        <td><a href="#spring-contest" class="btn-small blue-grey">View Rules</a></td>
                    </tr>
                    <tr>
                        <td>National Historic Homes Weekend</td>
                        <td>May 22-23, 2025</td>
                        <td>00:00-23:59</td>
                        <td>All HF + VHF</td>
                        <td>All</td>
                        <td><a href="#historic-homes" class="btn-small blue-grey">View Rules</a></td>
                    </tr>
                    <tr>
                        <td>HOTA Summer Sprint</td>
                        <td>June 5, 2025</td>
                        <td>18:00-22:00</td>
                        <td>20m, 40m</td>
                        <td>SSB, CW</td>
                        <td><a href="#summer-sprint" class="btn-small blue-grey">View Rules</a></td>
                    </tr>
                    <tr class="featured">
                        <td>Annual HOTA Field Day</td>
                        <td>July 10-11, 2025</td>
                        <td>12:00-12:00</td>
                        <td>All</td>
                        <td>All</td>
                        <td><a href="#field-day" class="btn-small green darken-3">Featured Event</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Contest Details -->
    <div id="spring-contest" class="card mt-4">
        <div class="card-content">
            <span class="card-title">HOTA Spring Contest Rules</span>

            <div class="row">
                <div class="col s12 m6">
                    <h4>Event Details</h4>
                    <ul class="browser-default">
                        <li><strong>Date:</strong> April 15-16, 2025</li>
                        <li><strong>Time:</strong> 12:00-12:00 UTC (24 hours)</li>
                        <li><strong>Bands:</strong> All HF bands</li>
                        <li><strong>Modes:</strong> SSB, CW, Digital</li>
                    </ul>
                    <h4>Exchange</h4>
                    <p>Activators: Signal report + house address<br>
                    Hunters: Signal report + name</p>
                </div>
                <div class="col s12 m6">
                    <h4>Scoring</h4>
                    <ul class="browser-default">
                        <li>1 point per QSO</li>
                        <li>5 bonus points per unique street address</li>
                        <li>10 bonus points per unique city/town</li>
                        <li>20 bonus points per unique country (DXCC entity)</li>
                    </ul>
                    <h4>Logs Due</h4>
                    <p>April 23, 2025 at 23:59 UTC</p>
                </div>
            </div>

            <div class="card-panel light-blue lighten-5 mt-3">
                <h5><i class="material-icons left">lightbulb</i>Contest Tip</h5>
                <p>During contests, use the exchange format: "CQ HOTA CONTEST from [your callsign]" to identify yourself as a contest participant.</p>
            </div>
        </div>
        <div class="card-action">
            <a href="?page=log-entry" class="btn blue-grey waves-effect waves-light">Submit Contest Log</a>
        </div>
    </div>

    <div id="field-day" class="card mt-4 highlight-card">
        <div class="card-content">
            <span class="card-title">Annual HOTA Field Day</span>

            <div class="ribbon">Featured Event</div>

            <p>Our flagship annual event! The HOTA Field Day is the largest gathering of HOTA activators worldwide, with stations operating from historic and unique houses across the globe.</p>

            <div class="row">
                <div class="col s12 m6">
                    <h4>Event Details</h4>
                    <ul class="browser-default">
                        <li><strong>Date:</strong> July 10-11, 2025</li>
                        <li><strong>Time:</strong> 12:00-12:00 UTC (24 hours)</li>
                        <li><strong>Bands:</strong> All amateur bands</li>
                        <li><strong>Modes:</strong> All modes</li>
                    </ul>
                    <h4>Categories</h4>
                    <ul class="browser-default">
                        <li>Single Operator - Single House</li>
                        <li>Single Operator - Multi House</li>
                        <li>Multi Operator - Single House</li>
                        <li>Hunter Category</li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <h4>Special Awards</h4>
                    <ul class="browser-default">
                        <li>Most Unique Houses Activated</li>
                        <li>Most Unique Houses Contacted</li>
                        <li>Most Historical Property</li>
                        <li>Most Remote Location</li>
                        <li>Best Field Day Station Photo</li>
                    </ul>
                    <h4>Prizes</h4>
                    <p>Category winners receive special certificates and merchandise from our sponsors, including radio equipment and accessories.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Contest Tips -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Contest Operating Tips</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>For Activators</h4>
                <ul class="browser-default">
                    <li>Announce your contest participation in advance on the <a href="?page=discord">HOTA Discord</a></li>
                    <li>Prepare a summary sheet with your complete address information for quick exchange</li>
                    <li>Consider activating multiple houses to maximize your score</li>
                    <li>Use <a href="?page=logging-software">contest logging software</a> for efficient operation</li>
                    <li>For multi-house operations, keep separate logs for each location</li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>For Hunters</h4>
                <ul class="browser-default">
                    <li>Check the <a href="?page=band-plans">recommended frequencies</a> for contest activity</li>
                    <li>Keep a careful log of addresses to claim unique address bonuses</li>
                    <li>Tune across multiple bands to find more activators</li>
                    <li>Use resources like <a href="?page=discord">HOTA Discord</a> for spotting information</li>
                    <li>Submit your log promptly after the contest ends</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.featured {
    background-color: #e8f5e9 !important;
    font-weight: bold;
}

.highlight-card {
    border: 2px solid #2e7d32;
    position: relative;
}

.ribbon {
    position: absolute;
    right: -5px;
    top: -5px;
    z-index: 1;
    overflow: hidden;
    width: 150px;
    height: 150px;
    text-align: right;
}
.ribbon span {
    font-size: 14px;
    font-weight: bold;
    color: #FFF;
    text-align: center;
    line-height: 30px;
    transform: rotate(45deg);
    width: 200px;
    display: block;
    background: #2e7d32;
    position: absolute;
    top: 35px;
    right: -45px;
}

.collection-item .badge {
    color: white;
    background-color: #607d8b;
    border-radius: 10px;
    padding: 2px 8px;
}
</style>
