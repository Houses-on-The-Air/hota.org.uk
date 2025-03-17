<?php
$pageTitle = "ADIF Format Guide - HOTA";
$pageDescription = "Learn about the Amateur Data Interchange Format (ADIF) and how to properly format your logs for HOTA submissions.";
?>

<div class="container">
    <h1>ADIF Format Guide</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>ADIF Guide</li>
        </ul>
    </div>

    <p class="flow-text">The Amateur Data Interchange Format (ADIF) is the standard format for exchanging amateur radio logs. Understanding ADIF is essential for participating in HOTA and submitting your logs.</p>

    <!-- ADIF Basics -->
    <div class="card">
        <div class="card-content">
            <span class="card-title">ADIF Basics</span>
            <p>ADIF (Amateur Data Interchange Format) is a standard format for exchanging amateur radio contact information between different logging programmes. It's a text-based format that contains contact information in a structured way.</p>

            <h4>ADIF Structure</h4>
            <p>An ADIF file consists of:</p>
            <ol>
                <li><strong>Header</strong> - Contains version information and other metadata</li>
                <li><strong>Records</strong> - Each record represents a single contact</li>
            </ol>

            <h4>ADIF Fields</h4>
            <p>Each field in an ADIF file follows this format:</p>
            <pre><code>&lt;FIELDNAME:LENGTH&gt;DATA</code></pre>
            <p>Where:</p>
            <ul class="browser-default">
                <li><strong>FIELDNAME</strong> - Name of the field (e.g., CALL, BAND, MODE)</li>
                <li><strong>LENGTH</strong> - Number of characters in the data</li>
                <li><strong>DATA</strong> - The actual data</li>
            </ul>

            <h4>Example ADIF Record</h4>
            <pre><code>&lt;CALL:6&gt;M0ABC &lt;QSO_DATE:8&gt;20210830 &lt;TIME_ON:6&gt;152100 &lt;BAND:3&gt;20m &lt;MODE:3&gt;SSB &lt;RST_SENT:3&gt;599 &lt;RST_RCVD:3&gt;579 &lt;ADDRESS:28&gt;123 Main Street, London SW1 &lt;EOR&gt;</code></pre>
            <p>This represents a contact with M0ABC on 30 August 2021, at 15:21 UTC on 20m using SSB mode.</p>
        </div>
    </div>

    <!-- HOTA-Specific Requirements -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title">HOTA-Specific Requirements</span>
            <p>For HOTA submissions, certain fields are particularly important:</p>

            <h4>Required Fields</h4>
            <ul class="browser-default">
                <li><strong>&lt;CALL:X&gt;</strong> - Callsign of the station contacted</li>
                <li><strong>&lt;QSO_DATE:8&gt;</strong> - Date of the contact in YYYYMMDD format</li>
                <li><strong>&lt;TIME_ON:6&gt;</strong> - Time of the contact in HHMMSS format (UTC)</li>
                <li><strong>&lt;BAND:X&gt;</strong> or <strong>&lt;FREQ:X&gt;</strong> - Band or frequency of the contact</li>
                <li><strong>&lt;MODE:X&gt;</strong> - Mode of the contact (SSB, CW, FT8, etc.)</li>
                <li><strong>&lt;ADDRESS:X&gt;</strong> - <em>Critical for HOTA!</em> The address of the station location</li>
            </ul>

            <h4>ADDRESS Field Format</h4>
            <p>The ADDRESS field should contain the street address of the station. For HOTA, this is used to track unique addresses for award purposes.</p>
            <p>Example formats:</p>
            <pre><code>&lt;ADDRESS:23&gt;123 Main Street, London</code></pre>
            <p>Or with more detail:</p>
            <pre><code>&lt;ADDRESS:43&gt;123 Main Street, Westminster, London, SW1A 1AA</code></pre>

            <div class="card-panel deep-orange lighten-5">
                <p><strong>Important Note:</strong> The ADDRESS field is essential for HOTA award tracking. Without it, your contacts won't count towards your HOTA awards.</p>
            </div>
        </div>
    </div>

    <!-- Creating/Exporting ADIF Files -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title">Creating and Exporting ADIF Files</span>

            <h4>From Logging Software</h4>
            <p>Most logging software can export logs in ADIF format:</p>
            <ol>
                <li><strong>Select contacts</strong> - Choose the contacts you want to export</li>
                <li><strong>Export menu</strong> - Look for "Export" or "Export ADIF" in your software</li>
                <li><strong>Settings</strong> - Ensure all required fields are included in the export</li>
                <li><strong>Save file</strong> - Save with .adi or .adif extension</li>
            </ol>

            <h4>Manual Creation</h4>
            <p>You can create an ADIF file manually using any text editor:</p>
            <ol>
                <li>Create a new text file</li>
                <li>Add a header: <code>&lt;ADIF_VER:5&gt;3.1.0</code></li>
                <li>Add record(s) with required fields</li>
                <li>End each record with <code>&lt;EOR&gt;</code></li>
                <li>Save with .adi or .adif extension</li>
            </ol>

            <h4>Sample ADIF File</h4>
            <pre style="background-color: #f5f5f5; padding: 10px; overflow-x: auto;"><code>&lt;ADIF_VER:5&gt;3.1.0
&lt;PROGRAMID:6&gt;FLDIGI
&lt;PROGRAMVERSION:6&gt;4.1.20
&lt;EOH&gt;

&lt;CALL:6&gt;M0ABC &lt;QSO_DATE:8&gt;20210830 &lt;TIME_ON:6&gt;152100 &lt;BAND:3&gt;20m &lt;MODE:3&gt;SSB &lt;RST_SENT:3&gt;599 &lt;RST_RCVD:3&gt;579 &lt;ADDRESS:28&gt;123 Main Street, London SW1 &lt;EOR&gt;
&lt;CALL:6&gt;G3XYZ &lt;QSO_DATE:8&gt;20210830 &lt;TIME_ON:6&gt;153000 &lt;BAND:3&gt;20m &lt;MODE:3&gt;SSB &lt;RST_SENT:3&gt;599 &lt;RST_RCVD:3&gt;599 &lt;ADDRESS:30&gt;45 High Street, Manchester M1 &lt;EOR&gt;
&lt;CALL:5&gt;2E0AB &lt;QSO_DATE:8&gt;20210830 &lt;TIME_ON:6&gt;154500 &lt;BAND:3&gt;20m &lt;MODE:3&gt;SSB &lt;RST_SENT:3&gt;599 &lt;RST_RCVD:3&gt;559 &lt;ADDRESS:32&gt;78 Church Road, Edinburgh EH1 &lt;EOR&gt;</code></pre>
        </div>
    </div>

    <!-- Tips and Troubleshooting -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title">Tips and Troubleshooting</span>

            <h4>Common Issues</h4>
            <ul class="browser-default">
                <li><strong>Missing ADDRESS Field</strong> - Ensure your logging software includes this field in exports</li>
                <li><strong>Incorrectly Formatted Dates/Times</strong> - Use YYYYMMDD for dates and HHMMSS for times</li>
                <li><strong>Special Characters</strong> - Some characters may cause issues; use standard ASCII when possible</li>
                <li><strong>File Size</strong> - Keep submissions under 5MB; split larger logs if necessary</li>
            </ul>

            <h4>Tips for Clean ADIF Files</h4>
            <ul class="browser-default">
                <li>Regularly update your logging software to the latest version</li>
                <li>Check your ADIF files with an ADIF validator before submission</li>
                <li>Include as much detail as possible in the ADDRESS field</li>
                <li>Export only relevant contacts for HOTA submissions</li>
            </ul>
        </div>
    </div>

    <!-- ADIF Validator -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>ADIF Validator</h3>
        <p>Before submitting your ADIF file, we recommend validating it to ensure it meets all requirements:</p>
        <div class="center-align">
            <a href="https://www.rickmurphy.net/adifvalidator.html" target="_blank" rel="nofollow noopener" class="btn blue-grey darken-1 waves-effect waves-light">
                <i class="material-icons left">check_circle</i>Validate Your ADIF
            </a>
        </div>
    </div>

    <!-- Related Links -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Related Resources</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>HOTA Submissions</h4>
                <ul class="browser-default">
                    <li><a href="?page=log-entry">Submit Your ADIF Logs</a></li>
                    <li><a href="?page=logging-software">Recommended Logging Software</a></li>
                    <li><a href="?page=awards">Award Tiers</a></li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>External Resources</h4>
                <ul class="browser-default">
                    <li><a href="https://www.adif.org/" target="_blank" rel="nofollow noopener">ADIF Official Specification</a></li>
                    <li><a href="?page=faq#logging">Logging FAQ</a></li>
                    <li><a href="?page=discord">Get Help on Discord</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
