<?php
// Set page variables
$pageTitle = "Participate - HOTA";
$pageDescription = "Learn how to participate in Houses on The Air (HOTA) amateur radio activations.";
include_once('../includes/header.php');
?>

<div class="container">
    <h1>Participate in HOTA</h1>
    <p class="flow-text">There are many ways to get involved with Houses on The Air. Choose how you'd like to participate!</p>

    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Log Entry</span>
                    <p>Upload your ADIF logs to track your HOTA activity and earn awards.</p>
                </div>
                <div class="card-action">
                    <a href="?page=log-entry">Submit Logs</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Get Licenced</span>
                    <p>New to Amateur Radio? Learn how to begin participating in this exciting activity.</p>
                </div>
                <div class="card-action">
                    <a href="?page=get-licenced">Read Guide</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Operating Guidelines</span>
                    <p>Best practices and guidelines for HOTA operations to ensure a positive experience.</p>
                </div>
                <div class="card-action">
                    <a href="?page=operating-guidelines">View Guidelines</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Contests</span>
                    <p>Participate in HOTA contests and special operating events.</p>
                </div>
                <div class="card-action">
                    <a href="?page=contests">Browse Contests</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Community Events</span>
                    <p>Join virtual and in-person community events with other HOTA operators.</p>
                </div>
                <div class="card-action">
                    <a href="?page=community-events">See Events</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>
