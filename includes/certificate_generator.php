<?php

/**
 * Certificate Generator for HOTA Awards
 * Handles the creation of certificate files based on ADIF processing results
 */

/**
 * Generate certificates based on award qualifications
 *
 * @param array $awardsData Award data from ADIF processing
 * @param string $callsign The operator's callsign
 * @param array $dateRange The date range for validity
 * @return array List of generated certificates with paths and details
 */
function generateCertificates($awardsData, $callsign, $dateRange) {
    $certificates = [];
    $certificateDir = '../certificates/'; // Directory to store certificates

    // Ensure the certificate directory exists
    if (!is_dir($certificateDir)) {
        mkdir($certificateDir, 0755, true);
    }

    // Generate unique identifier for these certificates
    $certificateId = uniqid('HOTA-' . $callsign . '-');
    $issueDate = date('Y-m-d');

    // Define activator tier images
    $activatorTierImages = [
        'House Explorer' => 'activator-bronze.jpg',
        'House Keeper' => 'activator-silver.jpg',
        'House Steward' => 'activator-gold.jpg',
        'Estate Manager' => 'activator-platinum.jpg'
    ];

    // Create certificates based on award types
    if (isset($awardsData['certificates']) && is_array($awardsData['certificates'])) {
        foreach ($awardsData['certificates'] as $cert) {
            // Generate the certificate HTML
            $certificateHtml = generateCertificateHtml(
                $cert['name'],
                $cert['description'],
                $callsign,
                $certificateId,
                $issueDate,
                $dateRange
            );

            // Save certificate to file
            $filename = sanitizeFilename($callsign . '-' . $cert['type'] . '-' . date('Y-m-d-His') . '.html');
            $filePath = $certificateDir . $filename;

            file_put_contents($filePath, $certificateHtml);

            // Add to the list of certificates
            $certificates[] = [
                'type' => $cert['type'],
                'name' => $cert['name'],
                'path' => $filePath,
                'url' => '/certificates/' . $filename,
                'id' => $certificateId,
                'issue_date' => $issueDate
            ];
        }
    }

    return $certificates;
}

/**
 * Generate HTML for a certificate
 *
 * @param string $title Certificate title
 * @param string $description Achievement description
 * @param string $callsign Recipient's callsign
 * @param string $certificateId Unique certificate ID
 * @param string $issueDate Date of issuance
 * @param array $dateRange QSO date range for validity
 * @return string HTML content for the certificate
 */
function generateCertificateHtml($title, $description, $callsign, $certificateId, $issueDate, $dateRange) {
    // Format date range as string if available
    $dateRangeStr = '';
    if (!empty($dateRange['start']) && !empty($dateRange['end'])) {
        $dateRangeStr = "QSOs from {$dateRange['start']} to {$dateRange['end']}";
    }

    // Generate certificate HTML
    $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTA Certificate - {$callsign}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/stylesheets/certificate-print.css">
</head>
<body class="certificate">
    <div class="certificate-container">
        <div class="certificate-header">
            <img src="/images/hota-dualcolor.svg" alt="HOTA Logo" class="certificate-logo">
            <h1 class="certificate-title">Houses On The Air</h1>
        </div>

        <div class="certificate-body">
            <h2 class="award-title">{$title}</h2>

            <p class="certificate-text">This certifies that</p>
            <h3 class="callsign">{$callsign}</h3>
            <p class="certificate-text">{$description}</p>

            <div class="certificate-validity">
                <p>{$dateRangeStr}</p>
            </div>
        </div>

        <div class="certificate-footer">
            <div class="certificate-id">Certificate ID: {$certificateId}</div>
            <div class="issue-date">Issued: {$issueDate}</div>
            <div class="signature">
                <img src="/images/signature.png" alt="HOTA Manager Signature">
                <div class="signature-name">HOTA Award Manager</div>
            </div>
        </div>
    </div>

    <div class="print-controls no-print">
        <button class="btn blue-grey darken-1" onclick="window.print()">
            <i class="material-icons left">print</i>Print Certificate
        </button>
        <a href="/" class="btn">
            <i class="material-icons left">arrow_back</i>Return to HOTA
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
HTML;

    return $html;
}

/**
 * Sanitize a filename to make it safe for storage
 *
 * @param string $filename The original filename
 * @return string Sanitized filename
 */
function sanitizeFilename($filename) {
    // Remove any character that isn't a word character, dash, dot or underscore
    $filename = preg_replace('/[^\w\-\.]/', '', $filename);
    return $filename;
}
?>
