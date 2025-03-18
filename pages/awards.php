<?php
$pageTitle = "Awards Program - HOTA";
$pageDescription = "Learn about the Houses on the Air awards program, tiers, and how to qualify for certificates by activating or contacting houses.";
include_once('../includes/header.php');
?>
<section class="container">
    <h1>HOTA Awards Program</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Awards</li>
        </ul>
    </div>

    <!-- Hero Section -->
    <div class="card hero-card">
        <div class="hero-content">
            <div class="row valign-wrapper">
                <div class="col s12 m8">
                    <h2 class="hero-heading">Earn Recognition for Your HOTA Activity</h2>
                    <p class="flow-text hero-text">Our progressive awards program celebrates both activators and hunters with certificates, digital badges, and recognition based on the number of unique house addresses.</p>
                </div>
                <div class="col s12 m4 center-align hide-on-small-only">
                    <img src="/images/awards/certificate-icon.svg" alt="HOTA Award Certificate" class="responsive-img" style="max-width: 150px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Award Tabs -->
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#award-tiers"><i class="material-icons left">view_list</i>Award Tiers</a></li>
                <li class="tab col s6"><a href="#how-to-earn"><i class="material-icons left">help_outline</i>How to Earn</a></li>
            </ul>
        </div>
    </div>

    <!-- Award Tiers Tab -->
    <div id="award-tiers" class="col s12">
        <div class="card-panel blue-grey lighten-5">
            <div class="row">
                <div class="col s12 m6">
                    <div class="award-path-card">
                        <i class="material-icons medium">settings_input_antenna</i>
                        <h3>Activator Awards</h3>
                        <p>For operators who set up and transmit from various house locations</p>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="award-path-card">
                        <i class="material-icons medium">search</i>
                        <h3>Hunter Awards</h3>
                        <p>For operators who make contacts with stations at various house locations</p>
                    </div>
                </div>
            </div>
            <p class="center-align">Both paths follow the same tier structure but are tracked separately.</p>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">Award Tiers</span>
                <div class="tier-table-wrapper">
                    <table class="striped highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Tier</th>
                                <th>Required Addresses</th>
                                <th>Certificate</th>
                                <th>Difficulty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tiers = [
                                ['Mansion', '1,000,000+', 'Digital + Premium Physical', 5],
                                ['Victorian Villa', '500,000+', 'Digital + Premium Physical', 4],
                                ['Country Cottage', '250,000+', 'Digital + Physical', 3],
                                ['Townhouse', '100,000+', 'Digital + Physical', 3],
                                ['Detached House', '10,000+', 'Digital + Physical', 2],
                                ['Semi-Detached House', '1,000+', 'Digital + Physical', 2],
                                ['Terraced House', '500+', 'Digital', 1],
                                ['Bedsit', '100+', 'Digital', 1],
                                ['Cardboard Box', 'Any participation', 'Digital', 1]
                            ];

                            foreach ($tiers as $tier) {
                                echo '<tr>';
                                echo '<td><div class="tier-name"><i class="material-icons left">home</i>' . $tier[0] . '</div></td>';
                                echo '<td>' . $tier[1] . '</td>';
                                echo '<td>' . $tier[2] . '</td>';
                                echo '<td><div class="difficulty-meter">';
                                for ($i = 1; $i <= 5; $i++) {
                                    $active = $i <= $tier[3] ? 'active' : '';
                                    echo '<span class="difficulty-dot ' . $active . '"></span>';
                                }
                                echo '</div></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Special Endorsements Preview -->
        <div class="card">
            <div class="card-content">
                <span class="card-title">Special Endorsements</span>
                <div class="row endorsements-preview">
                    <div class="col s12 m4">
                        <div class="center-align">
                            <i class="material-icons medium">public</i>
                            <h4>Continental Explorer</h4>
                            <p>For houses on all continents</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="center-align">
                            <i class="material-icons medium">history_edu</i>
                            <h4>Heritage Specialist</h4>
                            <p>For historic houses</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="center-align">
                            <i class="material-icons medium">language</i>
                            <h4>International Ambassador</h4>
                            <p>For houses in 10+ countries</p>
                        </div>
                    </div>
                </div>
                <div class="center-align mt-3">
                    <a href="?page=award-tiers" class="btn blue-grey darken-1 waves-effect waves-light">
                        <i class="material-icons left">more_horiz</i>View All Endorsements
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- How to Earn Tab -->
    <div id="how-to-earn" class="col s12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">How to Earn Awards</span>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="path-card">
                            <div class="path-header activator-header">
                                <i class="material-icons">settings_input_antenna</i>
                                <h3>Activator Path</h3>
                            </div>
                            <ol class="browser-default">
                                <li>Set up your station at unique house locations</li>
                                <li>Make contacts with other operators</li>
                                <li>Record complete address information</li>
                                <li>Export your logs in ADIF format</li>
                                <li>Submit through our <a href="?page=log-entry">log system</a></li>
                            </ol>
                            <div class="card-panel deep-orange lighten-5">
                                <p><strong>Note:</strong> A minimum of 10 QSOs must be made from each location to count as an activation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="path-card">
                            <div class="path-header hunter-header">
                                <i class="material-icons">search</i>
                                <h3>Hunter Path</h3>
                            </div>
                            <ol class="browser-default">
                                <li>Contact stations operating from houses</li>
                                <li>Request and record their complete address</li>
                                <li>Save contacts with ADDRESS field populated</li>
                                <li>Export your logs in ADIF format</li>
                                <li>Submit through our <a href="?page=log-entry">log system</a></li>
                            </ol>
                            <div class="card-panel deep-orange lighten-5">
                                <p><strong>Critical:</strong> The ADDRESS field must be properly populated in your ADIF logs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <a href="?page=log-entry" class="btn blue-grey darken-1">
                    <i class="material-icons left">file_upload</i>Submit Logs
                </a>
                <a href="?page=adif-guide" class="btn blue-grey lighten-1">
                    <i class="material-icons left">help_outline</i>ADIF Guide
                </a>
                <a href="?page=certificates" class="btn blue-grey lighten-1">
                    <i class="material-icons left">card_membership</i>View Certificates
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero styling */
.hero-card {
    background-color: #455a64;
    background-image: linear-gradient(135deg, #455a64 0%, #263238 100%);
    color: white;
    margin-bottom: 20px;
}
.hero-content { padding: 30px; }
.hero-heading {
    color: white;
    font-size: 2rem;
    margin-bottom: 15px;
    text-shadow: 0 1px 3px rgba(0,0,0,0.3);
}
.hero-text { color: rgba(255,255,255,0.95); }

/* Path cards */
.award-path-card, .path-card {
    text-align: center;
    padding: 20px;
    height: 100%;
}
.path-header {
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e0e0e0;
}
.activator-header { color: #546e7a; }
.hunter-header { color: #795548; }
.path-header i { font-size: 2.5rem; }
.path-header h3 { margin: 10px 0 0; }

/* Tier table */
.tier-name {
    display: flex;
    align-items: center;
    font-weight: 500;
}
.difficulty-meter {
    display: flex;
    align-items: center;
}
.difficulty-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #e0e0e0;
    margin: 0 2px;
}
.difficulty-dot.active { background-color: #546e7a; }

/* Endorsements */
.endorsements-preview i { color: #546e7a; }
.endorsements-preview h4 { font-size: 1.2rem; }

/* Certificate carousel */
.certificate-carousel {
    height: 200px !important;
}
.certificate-carousel .carousel-item {
    width: 200px !important;
    opacity: 1 !important;
}

/* Utilities */
.mt-3 { margin-top: 15px; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var tabs = document.querySelectorAll('.tabs');
    M.Tabs.init(tabs);

    var carousel = document.querySelectorAll('.carousel');
    M.Carousel.init(carousel, {
        indicators: true,
        numVisible: 3
    });
});
</script>

<?php include_once('../includes/footer.php'); ?>
