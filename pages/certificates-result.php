<?php
$pageTitle = "Your HOTA Certificates";
$pageDescription = "Your Houses on the Air (HOTA) award certificates based on your submitted log file.";

// Get certificates data from session if available
$certificates = $_SESSION['certificates'] ?? [];
$awardsData = $_SESSION['awards_data'] ?? [];
$callsign = $_SESSION['processed_callsign'] ?? 'Unknown';

// Clear session data after retrieval
unset($_SESSION['certificates']);
unset($_SESSION['awards_data']);
unset($_SESSION['processed_callsign']);
?>

<div class="container">
    <h1>Your HOTA Certificates</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=awards">Awards</a></li>
            <li>Your Certificates</li>
        </ul>
    </div>

    <?php if (empty($certificates)): ?>
    <div class="card-panel amber lighten-4">
        <h4>No Certificate Data Found</h4>
        <p>We couldn't find your certificate information. This might be because:</p>
        <ul class="browser-default">
            <li>Your session has expired</li>
            <li>You haven't uploaded your ADIF file yet</li>
            <li>There was an error processing your data</li>
        </ul>
        <p>Please try uploading your ADIF file again:</p>
        <a href="?page=log-entry" class="btn blue-grey darken-1 waves-effect waves-light">
            <i class="material-icons left">upload_file</i>Upload ADIF Log
        </a>
    </div>

    <?php else: ?>

    <div class="card-panel light-blue lighten-5">
        <div class="row valign-wrapper">
            <div class="col s12 m2 center-align hide-on-small-only">
                <i class="material-icons large blue-text text-darken-2">emoji_events</i>
            </div>
            <div class="col s12 m10">
                <h4>Congratulations, <?php echo htmlspecialchars($callsign); ?>!</h4>
                <p class="flow-text">Based on your ADIF log, we've generated the following certificates for you. Click on any certificate to view, print, or save it.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <?php foreach ($certificates as $certificate): ?>
        <div class="col s12 m6 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="/images/certificate-thumb.jpg" alt="Certificate Preview">
                    <span class="card-title"><?php echo htmlspecialchars($certificate['type']); ?></span>
                </div>
                <div class="card-content">
                    <h5><?php echo htmlspecialchars($certificate['name']); ?></h5>
                    <p class="truncate">Certificate ID: <?php echo htmlspecialchars($certificate['id']); ?></p>
                    <p>Issued: <?php echo htmlspecialchars($certificate['issue_date']); ?></p>
                </div>
                <div class="card-action">
                    <a href="<?php echo htmlspecialchars($certificate['url']); ?>" target="_blank" class="blue-text text-darken-2">
                        <i class="material-icons left">visibility</i>View & Print
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="card-panel">
        <h4>Your Award Summary</h4>

        <?php if (isset($awardsData['hunter'])): ?>
        <h5><i class="material-icons left">search</i>Hunter Awards</h5>
        <table class="striped">
            <thead>
                <tr>
                    <th>Award Tier</th>
                    <th>Required</th>
                    <th>Your Count</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($awardsData['hunter'] as $award): ?>
                <tr>
                    <td><?php echo htmlspecialchars($award['name']); ?></td>
                    <td><?php echo htmlspecialchars($award['required']); ?> addresses</td>
                    <td><?php echo htmlspecialchars($award['count']); ?> addresses</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>

        <?php if (isset($awardsData['activator'])): ?>
        <h5 class="mt-4"><i class="material-icons left">home</i>Activator Awards</h5>
        <table class="striped">
            <thead>
                <tr>
                    <th>Award Tier</th>
                    <th>Required</th>
                    <th>Your Count</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($awardsData['activator'] as $award): ?>
                <tr>
                    <td><?php echo htmlspecialchars($award['name']); ?></td>
                    <td><?php echo htmlspecialchars($award['required']); ?> activations</td>
                    <td><?php echo htmlspecialchars($award['count']); ?> activations</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>

        <?php if (isset($awardsData['specialist'])): ?>
        <h5 class="mt-4"><i class="material-icons left">star</i>Specialist Awards</h5>
        <table class="striped">
            <thead>
                <tr>
                    <th>Award Name</th>
                    <th>House Type</th>
                    <th>Required</th>
                    <th>Your Count</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($awardsData['specialist'] as $award): ?>
                <tr>
                    <td><?php echo htmlspecialchars($award['name']); ?></td>
                    <td><?php echo htmlspecialchars($award['type']); ?></td>
                    <td><?php echo htmlspecialchars($award['required']); ?> houses</td>
                    <td><?php echo htmlspecialchars($award['count']); ?> houses</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>

    <div class="card-panel blue-grey lighten-4 center-align">
        <h5>Share Your Achievement</h5>
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <p>Let others know about your HOTA accomplishments by sharing on social media or in your radio club!</p>
                <div class="share-buttons">
                    <a href="https://twitter.com/intent/tweet?text=I%20just%20earned%20my%20HOTA%20certificates!%20Check%20out%20Houses%20on%20the%20Air%20at%20https%3A%2F%2Fhota.org.uk" target="_blank" rel="nofollow noopener" class="btn blue waves-effect waves-light">
                        <i class="material-icons left">share</i>Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fhota.org.uk" target="_blank" rel="nofollow noopener" class="btn indigo waves-effect waves-light">
                        <i class="material-icons left">share</i>Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="center-align mt-4">
        <a href="?page=log-entry" class="btn blue-grey darken-1 waves-effect waves-light">
            <i class="material-icons left">upload_file</i>Upload Another Log
        </a>
    </div>
    <?php endif; ?>
</div>

<style>
.mt-4 {
    margin-top: 2rem;
}
.share-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 1rem;
}
</style>
