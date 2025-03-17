<?php
$pageTitle = "Log Entry - HOTA";
$pageDescription = "Upload your ADIF logs to track your Houses on the Air progress, earn awards, and contribute to the HOTA community database.";
?>

<div class="container">
    <h1>Log Submission</h1>
    <p class="flow-text">Upload your ADIF logs to track your progress and earn HOTA awards.</p>

    <!-- Breadcrumbs for better navigation -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=participate">Participate</a></li>
            <li>Log Entry</li>
        </ul>
    </div>

    <!-- Log Entry System -->
    <div class="row">
        <div class="col s12 m8">
            <div class="card" id="upload-form-container">
                <div class="card-content">
                    <span class="card-title">Upload ADIF Log</span>

                    <form id="adif-upload-form" action="process_upload.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="callsign" name="callsign" type="text" class="validate" required>
                                <label for="callsign">Your Callsign</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <select id="log-type" name="log-type">
                                    <option value="activator">Activator Log</option>
                                    <option value="hunter">Hunter Log</option>
                                </select>
                                <label>Log Type</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn blue-grey darken-1">
                                <span>ADIF File</span>
                                <input type="file" name="adif_file" accept=".adi,.adif" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your ADIF file">
                            </div>
                        </div>

                        <div class="center-align mt-3">
                            <button type="submit" class="btn-large waves-effect waves-light blue-grey darken-2">
                                <i class="material-icons left">cloud_upload</i> Submit Log
                            </button>
                        </div>
                    </form>

                    <div id="upload-result" style="display: none;" class="mt-3">
                        <!-- Results will be displayed here via JavaScript -->
                    </div>
                </div>
            </div>

            <div class="card-panel info-panel blue lighten-5">
                <h5><i class="material-icons left">info</i> Log Submission Guidelines</h5>
                <ul>
                    <li>Files must be in ADIF format (.adi or .adif extension)</li>
                    <li>Maximum file size is 5MB</li>
                    <li>Include ADDRESS field in your ADIF for address tracking</li>
                    <li>Processing may take a few moments for large files</li>
                    <li>Your logs are private and only used for award verification</li>
                </ul>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card-panel">
                <h5>Your Progress</h5>
                <p>Login to view your current award progress and statistics.</p>
                <a href="#login" class="btn blue-grey waves-effect waves-light">Log In</a>
            </div>

            <div class="card-panel">
                <h5>Need Help?</h5>
                <p>Check out these resources:</p>
                <ul class="browser-default">
                    <li><a href="?page=faq#logging">Logging FAQ</a></li>
                    <li><a href="?page=award-tiers">Award Tiers</a></li>
                    <li><a href="?page=adif-guide">ADIF Format Guide</a></li>
                    <li><a href="?page=discord">Ask on Discord</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Related Pages -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Related Resources</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>Award Information</h4>
                <ul class="browser-default">
                    <li><a href="?page=awards">Award Tiers and Requirements</a></li>
                    <li><a href="?page=certificates">Certificate Gallery</a></li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>Operating Resources</h4>
                <ul class="browser-default">
                    <li><a href="?page=house-activations">How to Activate Houses</a></li>
                    <li><a href="?page=logging-software">Recommended Logging Software</a></li>
                    <li><a href="?page=operating-guidelines">Operating Guidelines</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
// Form submission handling with AJAX
document.addEventListener('DOMContentLoaded', function() {
    // Initialize select dropdowns
    var selectElems = document.querySelectorAll('select');
    M.FormSelect.init(selectElems);

    // AJAX form submission
    document.getElementById('adif-upload-form').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        var resultDiv = document.getElementById('upload-result');

        // Show loading indicator
        resultDiv.innerHTML = `
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
            <p class="center-align">Processing your log file...</p>
        `;
        resultDiv.style.display = 'block';

        fetch('process_upload.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Success message
                resultDiv.innerHTML = `
                    <div class="card-panel green lighten-4">
                        <h5><i class="material-icons left">check_circle</i> Upload Successful!</h5>
                        <p>Your log has been processed successfully:</p>
                        <ul>
                            <li>Unique addresses found: ${data.unique_addresses}</li>
                            <li>Current award tier: ${data.award_tier}</li>
                        </ul>
                        <p><a href="award.php?callsign=${encodeURIComponent(document.getElementById('callsign').value)}&tier=${encodeURIComponent(data.award_tier)}" class="btn green">View Award Certificate</a></p>
                    </div>
                `;
            } else {
                // Error message
                resultDiv.innerHTML = `
                    <div class="card-panel red lighten-4">
                        <h5><i class="material-icons left">error</i> Upload Failed</h5>
                        <p>There was an error processing your log file:</p>
                        <p>${data.error}</p>
                        <p>Please check your file and try again.</p>
                    </div>
                `;
            }
        })
        .catch(error => {
            // Network or other error
            resultDiv.innerHTML = `
                <div class="card-panel red lighten-4">
                    <h5><i class="material-icons left">error</i> System Error</h5>
                    <p>A system error occurred while processing your request.</p>
                    <p>Please try again later or contact support if the problem persists.</p>
                </div>
            `;
            console.error('Error:', error);
        });
    });
});
</script>
