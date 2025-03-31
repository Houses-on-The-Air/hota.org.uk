<?php
$pageTitle = "HOTA Award Years";
$pageDescription = "Information about the annual award cycle and year-based certificates for Houses on the Air (HOTA) participants.";
?>

<div class="container">
    <h1>HOTA Award Years</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=awards">Awards</a></li>
            <li>Award Years</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <p class="flow-text">The HOTA programme offers annual awards and certificates to recognize achievements within each calendar year, in addition to our cumulative award system.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">date_range</i>Annual Award Cycle</span>
                    <p>Each HOTA award year runs from January 1st to December 31st. During this period, contacts with houses and house activations are logged and counted toward annual achievements.</p>

                    <h5 class="mt-3">Annual Awards Available</h5>
                    <ul class="browser-default">
                        <li><strong>Annual Hunter Certificate</strong> - For participants who contact at least 50 different houses in a calendar year</li>
                        <li><strong>Annual House Explorer</strong> - For operators who activate at least 10 different houses in a calendar year</li>
                        <li><strong>Most Active Activator</strong> - Awarded to the operator who activates the most unique houses during the calendar year</li>
                        <li><strong>Top Hunter</strong> - Awarded to the operator who contacts the most unique houses during the calendar year</li>
                        <li><strong>Regional Recognition</strong> - Special recognition for high activity levels within specific geographic regions</li>
                    </ul>

                    <h5 class="mt-3">End-of-Year Process</h5>
                    <p>At the conclusion of each award year:</p>
                    <ol>
                        <li>All logs must be submitted by January 15th of the following year to count toward the previous year's totals</li>
                        <li>Annual results are tabulated and announced by January 31st</li>
                        <li>Certificates are issued by February 15th</li>
                        <li>Special recognition is published in the HOTA newsletter and website</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card blue-grey lighten-5">
                <div class="card-content">
                    <span class="card-title">Annual vs. Cumulative</span>
                    <p>HOTA offers two parallel award tracks:</p>

                    <h6 class="mt-3"><i class="material-icons left">date_range</i>Annual Awards</h6>
                    <ul class="browser-default">
                        <li>Reset each calendar year</li>
                        <li>Promote regular participation</li>
                        <li>Lower thresholds for achievement</li>
                        <li>Dated certificates for each year</li>
                    </ul>

                    <h6 class="mt-3"><i class="material-icons left">timeline</i>Cumulative Awards</h6>
                    <ul class="browser-default">
                        <li>Track lifetime achievement</li>
                        <li>Progress through award tiers</li>
                        <li>No annual reset</li>
                        <li>Comprehensive achievement record</li>
                    </ul>

                    <div class="center-align mt-3">
                        <a href="?page=award-tiers" class="btn blue-grey darken-1 waves-effect waves-light">
                            View Cumulative Award Tiers
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <span class="card-title">Current Year Status</span>
                    <p>We're currently <span id="days-remaining">calculating...</span> days into the <?php echo date('Y'); ?> award year.</p>

                    <div class="progress">
                        <div class="determinate" id="year-progress" style="width: 0%"></div>
                    </div>

                    <p>Top activity so far:</p>
                    <ul class="collection">
                        <li class="collection-item">M7FGZ: 387 houses contacted</li>
                        <li class="collection-item">M7JXZ: 29 houses activated</li>
                    </ul>

                    <div class="center-align mt-3">
                        <a href="?page=log-entry" class="btn blue-grey darken-1 waves-effect waves-light">
                            Submit Your Logs
                        </a>
                    </div>
                </div>
            </div>

            <div class="card amber lighten-5">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">lightbulb</i>Activity Tip</span>
                    <p>Keep track of your contacts throughout the year rather than submitting them all at once. This way you'll always know how close you are to the next award level.</p>
                    <p>Our <a href="?page=logging-software">recommended logging software</a> makes it easy to export ADIF files regularly.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">star_border</i>Special Annual Events</span>
                    <p>Throughout the year, HOTA organizes special events that count toward annual totals:</p>

                    <div class="row mt-3">
                        <div class="col s12 m4">
                            <div class="card-panel blue lighten-4">
                                <h5>Winter Activity Weekend</h5>
                                <p>March each year</p>
                                <a href="?page=activity-weekend" class="btn blue darken-1 waves-effect waves-light">Details</a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="card-panel green lighten-4">
                                <h5>Spring House Sprint</h5>
                                <p>May each year</p>
                                <a href="?page=contests" class="btn green darken-1 waves-effect waves-light">Details</a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="card-panel amber lighten-4">
                                <h5>Autumn House Marathon</h5>
                                <p>October each year</p>
                                <a href="?page=contests" class="btn amber darken-2 waves-effect waves-light">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.mt-3 {
    margin-top: 1.5rem;
}

.table-responsive {
    overflow-x: auto;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calculate days into current year and year progress
    const now = new Date();
    const startOfYear = new Date(now.getFullYear(), 0, 1);
    const endOfYear = new Date(now.getFullYear(), 11, 31);

    const msInYear = endOfYear - startOfYear;
    const msSoFar = now - startOfYear;

    const daysSoFar = Math.floor((now - startOfYear) / (24 * 60 * 60 * 1000));
    const daysInYear = Math.floor((endOfYear - startOfYear) / (24 * 60 * 60 * 1000)) + 1;

    const percentComplete = (msSoFar / msInYear) * 100;

    document.getElementById('days-remaining').textContent = daysSoFar;
    document.getElementById('year-progress').style.width = percentComplete.toFixed(1) + '%';
});
</script>
