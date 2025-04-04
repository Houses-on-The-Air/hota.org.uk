<?php
$pageTitle = "Log Entry - HOTA";
$pageDescription = "Submit your amateur radio logs to claim HOTA awards and certificates.";

// Include the ADIF processor
require_once(__DIR__ . '/../includes/adif_processor.php');
require_once(__DIR__ . '/../includes/certificate_generator.php');

$success = false;
$error = '';
$adifResult = [];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['adif_file'])) {
    $file = $_FILES['adif_file'];

    // Check for errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        switch ($file['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $error = 'The uploaded file is too large. Maximum size is ' . ini_get('upload_max_filesize');
                break;
            case UPLOAD_ERR_PARTIAL:
                $error = 'The file was only partially uploaded.';
                break;
            case UPLOAD_ERR_NO_FILE:
                $error = 'No file was uploaded.';
                break;
            default:
                $error = 'Unknown error occurred during upload.';
        }
    } else {
        // Check file type (should be .adi or .adif)
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if ($fileExtension !== 'adi' && $fileExtension !== 'adif') {
            $error = 'Invalid file type. Please upload an ADIF file (.adi or .adif).';
        } else {
            // Process the ADIF file
            $fileContent = file_get_contents($file['tmp_name']);
            $adifResult = processAdif($fileContent);

            if (isset($adifResult['error'])) {
                $error = $adifResult['error'];
            } else {
                $success = true;

                // Generate certificates
                if (isset($adifResult['awards'])) {
                    $certificates = generateCertificates(
                        $adifResult['awards'],
                        $adifResult['callsign'],
                        $adifResult['dateRange']
                    );

                    // Store data in session for the certificate page
                    $_SESSION['certificates'] = $certificates;
                    $_SESSION['awards_data'] = $adifResult['awards'];
                    $_SESSION['processed_callsign'] = $adifResult['callsign'];

                    // Redirect to certificates page
                    header('Location: ?page=certificates-result');
                    exit;
                }
            }
        }
    }
}
?>

<div class="container">
    <h1>Log Entry</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=participate">Participate</a></li>
            <li>Log Entry</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12 m8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Upload Your ADIF Log</span>
                    <p>Upload your ADIF (Amateur Data Interchange Format) log file to claim your Houses on the Air awards and certificates. ADIF files are generated by most logging software.</p>

                    <?php if ($error): ?>
                    <div class="card-panel red lighten-4 red-text text-darken-4">
                        <i class="material-icons left">error</i>
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($success): ?>
                    <div class="card-panel green lighten-4 green-text text-darken-4">
                        <i class="material-icons left">check_circle</i>
                        Your ADIF file has been successfully processed.
                    </div>

                    <div class="card-panel blue-grey lighten-5">
                        <h5>Log Summary</h5>
                        <ul class="browser-default">
                            <li><strong>Callsign:</strong> <?php echo htmlspecialchars($adifResult['callsign']); ?></li>
                            <li><strong>Unique Addresses:</strong> <?php echo htmlspecialchars($adifResult['uniqueAddressCount']); ?></li>
                            <li><strong>QSO Count:</strong> <?php echo htmlspecialchars($adifResult['qsoCount']); ?></li>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <form action="?page=log-entry" method="post" enctype="multipart/form-data">
                        <div class="file-field input-field">
                            <div class="btn blue-grey darken-1">
                                <span><i class="material-icons left">attach_file</i>Select File</span>
                                <input type="file" name="adif_file" accept=".adi,.adif">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your ADIF file">
                            </div>
                        </div>

                        <div class="input-field">
                            <p>
                                <label>
                                    <input type="checkbox" name="agree_terms" required>
                                    <span>I confirm that the submitted log is accurate and complies with <a href="?page=rules" target="_blank">HOTA rules</a>.</span>
                                </label>
                            </p>
                        </div>

                        <button type="submit" class="btn-large blue-grey darken-2 waves-effect waves-light">
                            <i class="material-icons left">cloud_upload</i>Upload and Process Log
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card-panel">
                <h5><i class="material-icons left">lightbulb</i>Tips</h5>
                <ul class="browser-default">
                    <li>Make sure your ADIF file includes address information in either the ADDRESS or QTH fields.</li>
                    <li>Files must be standard ADIF format with proper headers.</li>
                    <li>Maximum file size is 5MB. For larger files, please split them into multiple uploads.</li>
                </ul>
            </div>

            <div class="card-panel deep-purple lighten-5">
                <h5><i class="material-icons left">help</i>Need Help?</h5>
                <p>Check our <a href="?page=adif-guide">ADIF Guide</a> for information on how to properly format your logs for HOTA submissions.</p>
                <p>Most logging software can export to ADIF format. See our <a href="?page=logging-software">Logging Software</a> page for recommendations.</p>
            </div>
        </div>
    </div>

    <div class="card-panel blue-grey lighten-5">
        <h4>Available Awards</h4>

        <div class="row">
            <div class="col s12 m4">
                <h5><i class="material-icons left">home</i>Hunter Awards</h5>
                <p>Based on the number of unique house addresses you've contacted:</p>
                <ul class="browser-default">
                    <li><strong>Cardboard Box:</strong> 10+ addresses</li>
                    <li><strong>Bedsit:</strong> 100+ addresses</li>
                    <li><strong>Terraced House:</strong> 500+ addresses</li>
                    <li><strong>Semi-Detached:</strong> 1,000+ addresses</li>
                    <li><strong>Detached House:</strong> 10,000+ addresses</li>
                    <li><strong>Townhouse:</strong> 100,000+ addresses</li>
                    <li><strong>Country Cottage:</strong> 250,000+ addresses</li>
                    <li><strong>Victorian Villa:</strong> 500,000+ addresses</li>
                    <li><strong>Mansion:</strong> 1,000,000+ addresses</li>
                </ul>
            </div>

            <div class="col s12 m4">
                <h5><i class="material-icons left">cell_tower</i>Activator Awards</h5>
                <p>Based on the number of locations you've activated:</p>
                <ul class="browser-default">
                    <li><strong>Novice Activator:</strong> 5+ activations</li>
                    <li><strong>Experienced Activator:</strong> 25+ activations</li>
                    <li><strong>Expert Activator:</strong> 100+ activations</li>
                    <li><strong>Master Activator:</strong> 500+ activations</li>
                </ul>
                <p><em>Note: Your log must contain HOTA activation information to qualify.</em></p>
            </div>

            <div class="col s12 m4">
                <h5><i class="material-icons left">star</i>Specialist Awards</h5>
                <p>Special award endorsements for contacting specific types of houses:</p>
                <ul class="browser-default">
                    <li><strong>School Scholar:</strong> 10+ School Houses</li>
                    <li><strong>Miller:</strong> 10+ Mill Houses</li>
                    <li><strong>Historian:</strong> 20+ Old Houses</li>
                    <li><strong>White Collector:</strong> 15+ White Houses</li>
                    <li><strong>Stone Mason:</strong> 10+ Stone Houses</li>
                    <li><strong>Time Keeper:</strong> 5+ Clock Houses</li>
                    <li><strong>Farmer:</strong> 25+ Farm Houses</li>
                </ul>
            </div>
        </div>
    </div>
</div>
