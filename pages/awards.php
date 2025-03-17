<?php
$pageTitle = "Awards Program - HOTA";
$pageDescription = "Learn about the Houses on the Air awards program, tiers, and how to qualify for certificates by activating or contacting houses.";
include_once('../includes/header.php');
?>
<section class="container">
    <h1>HOTA Awards Program</h1>
    <p class="flow-text">Earn certificates and awards by activating or contacting houses through our tiered awards program.</p>

    <!-- Awards Table -->
    <div class="card">
        <div class="card-content">
            <span class="card-title">Award Tiers</span>
            <table class="striped highlight responsive-table">
                <thead>
                    <tr>
                        <th>Tier</th>
                        <th>Required Unique Addresses</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mansion</td>
                        <td>1,000,000+</td>
                        <td>Our highest achievement level for dedicated operators</td>
                    </tr>
                    <tr>
                        <td>Victorian Villa</td>
                        <td>500,000+</td>
                        <td>Distinguished level of achievement</td>
                    </tr>
                    <tr>
                        <td>Country Cottage</td>
                        <td>250,000+</td>
                        <td>Advanced level for committed participants</td>
                    </tr>
                    <tr>
                        <td>Townhouse</td>
                        <td>100,000+</td>
                        <td>Intermediate level accomplishment</td>
                    </tr>
                    <tr>
                        <td>Detached House</td>
                        <td>10,000+</td>
                        <td>Significant progress milestone</td>
                    </tr>
                    <tr>
                        <td>Semi-Detached House</td>
                        <td>1,000+</td>
                        <td>Solid progress for regular operators</td>
                    </tr>
                    <tr>
                        <td>Terraced House</td>
                        <td>500+</td>
                        <td>Regular participation award</td>
                    </tr>
                    <tr>
                        <td>Bedsit</td>
                        <td>100+</td>
                        <td>Entry level for new participants</td>
                    </tr>
                    <tr>
                        <td>Cardboard Box</td>
                        <td>Any participation</td>
                        <td>Welcome to HOTA!</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- How to Earn Awards -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title">How to Earn Awards</span>
            <p>Awards are based on the number of unique addresses you activate or contact:</p>
            <ol>
                <li><strong>Upload your ADIF logs</strong> - Submit your logs through our <a href="?page=log-entry">log submission system</a></li>
                <li><strong>Verification</strong> - Our system verifies your contacts and unique addresses</li>
                <li><strong>Certificates</strong> - Download digital certificates or request physical ones</li>
                <li><strong>Track Progress</strong> - Monitor your progress towards the next tier in your profile</li>
            </ol>
        </div>
        <div class="card-action">
            <a href="?page=log-entry" class="btn blue-grey darken-1">Submit Logs</a>
        </div>
    </div>

    <!-- Related Content Section -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Related Information</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>Rules and Guidelines</h4>
                <ul class="browser-default">
                    <li><a href="?page=rules">Official HOTA Rules</a></li>
                    <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
                    <li><a href="?page=house-activations">House Activation Guide</a></li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>Participate and Track</h4>
                <ul class="browser-default">
                    <li><a href="?page=log-entry">Log Submission</a></li>
                    <li><a href="?page=contests">Contests for Fast Progress</a></li>
                    <li><a href="?page=faq#awards">Awards FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
.award-card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.award-card .card-content {
    flex-grow: 1;
    text-align: center;
    padding: 24px;
}

.award-card .card-content h4 {
    font-size: 2rem;
    margin: 1rem 0 0.5rem;
    color: white;
}

.award-card .card-action {
    display: flex;
    justify-content: center;
    padding: 16px;
}

.awards-grid {
    display: flex;
    flex-wrap: wrap;
}

.awards-grid > div {
    margin-bottom: 20px;
}
</style>

<?php include_once('../includes/footer.php'); ?>
