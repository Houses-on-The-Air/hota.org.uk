<?php
$pageTitle = "Amateur Radio Operator Profile - HOTA";

// Get callsign from query parameter with validation
$callsign = isset($_GET['callsign']) ? filter_var($_GET['callsign'], FILTER_SANITIZE_SPECIAL_CHARS) : '';
$callsign = preg_replace('/[^a-zA-Z0-9\/]/', '', $callsign);

if ($callsign) {
    $pageTitle = "$callsign Profile - HOTA";
    $pageDescription = "View $callsign's Houses on the Air (HOTA) profile, including awards, achievements, and activity.";
} else {
    $pageDescription = "View amateur radio operator profiles and achievements in the Houses on the Air programme.";
}
?>

<div class="container">
    <?php if ($callsign): ?>
        <h1><?php echo htmlspecialchars($callsign); ?>'s Profile</h1>

        <!-- Breadcrumbs -->
        <div class="breadcrumb-wrapper">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><?php echo htmlspecialchars($callsign); ?></li>
            </ul>
        </div>

        <div class="row">
            <!-- Profile Summary -->
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?php echo htmlspecialchars($callsign); ?></span>

                        <div class="center-align mb-2">
                            <div class="profile-avatar blue-grey darken-2">
                                <span><?php echo substr($callsign, 0, 1); ?></span>
                            </div>
                        </div>

                        <table class="profile-details">
                            <tr>
                                <th>Member Since:</th>
                                <td>January 2025</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>United Kingdom</td>
                            </tr>
                            <tr>
                                <th>Award Tier:</th>
                                <td>Detached House</td>
                            </tr>
                            <tr>
                                <th>Total Addresses:</th>
                                <td>12,456</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Award Showcase -->
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Awards</span>

                        <div class="award-badges">
                            <div class="award-badge tooltip" title="Detached House - Activator">
                                <img src="/images/badges/detached-house-activator.png" alt="Detached House Award">
                            </div>
                            <div class="award-badge tooltip" title="Terraced House - Hunter">
                                <img src="/images/badges/terraced-house-hunter.png" alt="Terraced House Award">
                            </div>
                            <div class="award-badge tooltip" title="Contest Winner - Spring 2025">
                                <img src="/images/badges/contest-winner.png" alt="Contest Winner Badge">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity and Stats -->
            <div class="col s12 m8">
                <!-- Progress to Next Tier -->
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Progress to Next Tier</span>

                        <p><strong>Current Tier:</strong> Detached House (12,456 addresses)</p>
                        <p><strong>Next Tier:</strong> Townhouse (100,000 addresses)</p>

                        <div class="progress">
                            <div class="determinate" style="width: 12%"></div>
                        </div>

                        <p class="right-align">12% Complete - 87,544 more needed</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Recent Activity</span>

                        <ul class="activity-timeline">
                            <li class="activity-item">
                                <span class="activity-date">15 Mar 2025</span>
                                <span class="activity-badge activator"></span>
                                <span class="activity-text">Activated 5 new addresses in London</span>
                            </li>
                            <li class="activity-item">
                                <span class="activity-date">10 Mar 2025</span>
                                <span class="activity-badge hunter"></span>
                                <span class="activity-text">Contacted 23 unique addresses during weekend contest</span>
                            </li>
                            <li class="activity-item">
                                <span class="activity-date">5 Mar 2025</span>
                                <span class="activity-badge award"></span>
                                <span class="activity-text">Earned Detached House Activator Award</span>
                            </li>
                            <li class="activity-item">
                                <span class="activity-date">28 Feb 2025</span>
                                <span class="activity-badge activator"></span>
                                <span class="activity-text">Activated 3 new addresses in Manchester</span>
                            </li>
                            <li class="activity-item">
                                <span class="activity-date">20 Feb 2025</span>
                                <span class="activity-badge hunter"></span>
                                <span class="activity-text">Contacted 15 unique addresses</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Statistics</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Activator Stats</h5>
                                <ul class="browser-default">
                                    <li><strong>Total Activations:</strong> 87</li>
                                    <li><strong>Unique Houses Activated:</strong> 52</li>
                                    <li><strong>QSOs Made:</strong> 1,456</li>
                                    <li><strong>Most Active Band:</strong> 40m</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <h5>Hunter Stats</h5>
                                <ul class="browser-default">
                                    <li><strong>Unique Houses Contacted:</strong> 543</li>
                                    <li><strong>Total QSOs:</strong> 892</li>
                                    <li><strong>DXCC Countries:</strong> 23</li>
                                    <li><strong>Most Active Mode:</strong> SSB</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Related Links -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Related Resources</h3>
        <div class="row">
            <div class="col s12 m6">
                <ul class="browser-default">
                    <li><a href="?page=award-tiers">Award Tiers</a></li>
                    <li><a href="?page=certificates">Certificate Gallery</a></li>
                </ul>
            </div>
            <div class="col s12 m6">
                <ul class="browser-default">
                    <li><a href="?page=log-entry">Submit Your Logs</a></li>
                    <li><a href="?page=participate">How to Participate</a></li>
                    <li><a href="?page=rules">HOTA Rules</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.profile-avatar {
    display: inline-block;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: var(--primary-color);
    color: white;
    font-size: 2.5rem;
    line-height: 80px;
    text-align: center;
    margin-bottom: 1rem;
}

.profile-details {
    width: 100%;
}

.profile-details th {
    font-weight: 600;
    text-align: left;
    padding: 8px 0;
    width: 40%;
}

.award-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.award-badge {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.award-badge img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.activity-timeline {
    list-style: none;
    padding-left: 0;
}

.activity-item {
    position: relative;
    padding-left: 30px;
    padding-bottom: 15px;
    border-left: 2px solid #e0e0e0;
    margin-left: 15px;
}

.activity-badge {
    position: absolute;
    left: -10px;
    top: 0;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background-color: var(--primary-color);
}

.activity-badge.activator {
    background-color: #2196f3;
}

.activity-badge.hunter {
    background-color: #4caf50;
}

.activity-badge.award {
    background-color: #ff9800;
}

.activity-date {
    font-size: 0.9rem;
    color: #666;
    display: block;
    margin-bottom: 5px;
}

.activity-text {
    display: block;
}

/* Tooltip styles */
.tooltip {
    position: relative;
}

.tooltip:hover::after {
    content: attr(title);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0,0,0,0.8);
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 0.8rem;
    white-space: nowrap;
    z-index: 10;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize any Materialize components if needed
});
</script>
