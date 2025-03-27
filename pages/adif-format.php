<?php
$pageTitle = "ADIF Format for HOTA";
$pageDescription = "Learn about the ADIF format requirements for Houses on the Air (HOTA) log submissions, including the required ADDRESS field.";
?>

<div class="container">
    <h1>ADIF Format for HOTA Logs</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>ADIF Format</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <p class="flow-text">The Amateur Data Interchange Format (ADIF) is the standard format for submitting your HOTA logs. The key requirement for HOTA is the inclusion of a complete house address in the ADDRESS field.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">description</i>ADIF Requirements for HOTA</span>

                    <h5>Essential Fields</h5>
                    <p>Your ADIF logs must include these standard fields:</p>

                    <ul class="browser-default">
                        <li><strong>CALL</strong> - Callsign of the station contacted</li>
                        <li><strong>QSO_DATE</strong> - Date of the contact (YYYYMMDD format)</li>
                        <li><strong>TIME_ON</strong> - Time of the contact (HHMM format)</li>
                        <li><strong>BAND</strong> - Band of operation (e.g., 20m, 40m)</li>
                        <li><strong>MODE</strong> - Mode of operation (e.g., SSB, CW, FT8)</li>
                        <li><strong>FREQ</strong> - Exact frequency in MHz (optional but recommended)</li>
                        <li><strong>RST_SENT</strong> - Signal report sent</li>
                        <li><strong>RST_RCVD</strong> - Signal report received</li>
                    </ul>

                    <div class="card-panel blue lighten-5 mt-3">
                        <h5><i class="material-icons left">home</i>The Critical ADDRESS Field</h5>
                        <p>For HOTA, the <strong>ADDRESS</strong> field is essential. This field must contain:</p>

                        <ul class="browser-default">
                            <li>For activators: The complete address of the house you are operating from</li>
                            <li>For hunters: The complete address of the house the contacted station is operating from</li>
                        </ul>

                        <p>A complete address typically includes:</p>
                        <ul class="browser-default">
                            <li>House name or number</li>
                            <li>Street</li>
                            <li>City/town</li>
                            <li>State/county/region (if applicable)</li>
                            <li>Postcode/ZIP (if known)</li>
                            <li>Country</li>
                        </ul>

                        <p class="mt-2"><strong>Example:</strong> "10 Downing Street, London, SW1A 2AA, UK" or "White House, 1600 Pennsylvania Avenue NW, Washington, DC 20500, USA"</p>
                    </div>

                    <h5 class="mt-3">Sample ADIF Format</h5>
                    <p>Here's a simplified example of what a HOTA ADIF record should look like:</p>

                    <div class="code-block">
<pre><code>&lt;CALL:5&gt;G3ABC &lt;QSO_DATE:8&gt;20230512 &lt;TIME_ON:4&gt;1423 &lt;BAND:3&gt;20m &lt;MODE:3&gt;SSB
&lt;FREQ:8&gt;14.285.0 &lt;RST_SENT:3&gt;599 &lt;RST_RCVD:3&gt;579
&lt;ADDRESS:46&gt;Blenheim Palace, Woodstock, Oxfordshire, OX20 1PP, UK &lt;EOR&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">help_outline</i>Troubleshooting</span>

                    <div class="row">
                        <div class="col s12">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">error_outline</i>My logging software doesn't have an ADDRESS field</div>
                                    <div class="collapsible-body">
                                        <p>Many logging programs don't display the ADDRESS field by default. Check your software's documentation for how to enable or add custom ADIF fields. Common approaches:</p>
                                        <ul class="browser-default">
                                            <li>Look for "custom fields" or "ADIF fields" in software settings</li>
                                            <li>Some software allows adding the address in a "comments" or "notes" field and will map it correctly during ADIF export</li>
                                            <li>Check if your software has a "QTH" field that can be used to store the address</li>
                                            <li>Consider using our <a href="?page=logging-software">HOTA-compatible logging guide</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">error_outline</i>My ADIF export is missing addresses</div>
                                    <div class="collapsible-body">
                                        <p>If your exported ADIF file doesn't contain the ADDRESS field even though you've entered the data:</p>
                                        <ul class="browser-default">
                                            <li>Check if your software has an option to "include all fields" in the ADIF export</li>
                                            <li>Look for advanced export options that might allow you to select specific fields</li>
                                            <li>Check if the address data is being exported under a different field name</li>
                                            <li>Some software needs configuration to export non-standard fields</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">error_outline</i>Manually adding ADDRESS fields</div>
                                    <div class="collapsible-body">
                                        <p>If you can't configure your software to include ADDRESS fields, you can edit the ADIF file manually:</p>
                                        <ol class="browser-default">
                                            <li>Export your log to ADIF format</li>
                                            <li>Open the file with a text editor (Notepad, TextEdit, VS Code, etc.)</li>
                                            <li>For each QSO record, add <code>&lt;ADDRESS:[length]&gt;[actual address]</code> before the <code>&lt;EOR&gt;</code> tag</li>
                                            <li>The [length] value must be the exact number of characters in the address</li>
                                            <li>Save the file and upload to HOTA</li>
                                        </ol>
                                        <p class="mt-2">This can be tedious for large logs, so we recommend setting up proper ADDRESS field support in your logging software.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">error_outline</i>Using our ADIF Helper tool</div>
                                    <div class="collapsible-body">
                                        <p>We offer a simple online tool that can help you add ADDRESS fields to your ADIF files:</p>
                                        <ol class="browser-default">
                                            <li>Export your log to ADIF format</li>
                                            <li>Go to our <a href="#">ADIF Helper Tool</a> (coming soon)</li>
                                            <li>Upload your file</li>
                                            <li>Add addresses to each QSO</li>
                                            <li>Download the corrected ADIF file</li>
                                        </ol>
                                        <p class="mt-2">This is especially useful for small logs or correcting a few missing addresses.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card blue-grey lighten-5">
                <div class="card-content">
                    <span class="card-title">Why Addresses Matter</span>
                    <p>The complete house address is at the core of the HOTA programme. It allows us to:</p>

                    <ul class="browser-default">
                        <li>Verify unique houses for award purposes</li>
                        <li>Create regional statistics</li>
                        <li>Prevent duplicate credit for the same location</li>
                        <li>Ensure the integrity of the awards system</li>
                    </ul>

                    <p class="mt-3">Without complete addresses, QSOs cannot be credited toward HOTA awards.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <span class="card-title">Popular Logging Software</span>
                    <p>These logging programs support the ADDRESS field for HOTA operations:</p>

                    <ul class="collection">
                        <li class="collection-item">
                            <i class="material-icons left">check_circle</i>HAMRS
                            <span class="new badge green" data-badge-caption="Recommended"></span>
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">check_circle</i>Log4OM 2
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">check_circle</i>N1MM+ (with configuration)
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">check_circle</i>DXKeeper
                        </li>
                        <li class="collection-item">
                            <i class="material-icons left">check_circle</i>WSJT-X (with additional steps)
                        </li>
                    </ul>

                    <div class="center-align mt-3">
                        <a href="?page=logging-software" class="btn blue-grey darken-1 waves-effect waves-light">
                            <i class="material-icons left">apps</i>Logging Software Guide
                        </a>
                    </div>
                </div>
            </div>

            <div class="card amber lighten-5">
                <div class="card-content">
                    <span class="card-title">Data Protection Note</span>
                    <p>We understand the privacy implications of address data:</p>

                    <ul class="browser-default">
                        <li>Address data is used only for award validation</li>
                        <li>We don't publish full addresses</li>
                        <li>Only general statistics are made public</li>
                        <li>Your data is protected under our <a href="?page=privacy">Privacy Policy</a></li>
                    </ul>

                    <p class="mt-3">Activators should only provide addresses of public buildings or their own property, never addresses of others without permission.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">For More Information</span>

                    <div class="row">
                        <div class="col s12 m4">
                            <h5><i class="material-icons left small">upload_file</i>Log Submission</h5>
                            <p>Ready to submit your ADIF log with proper address fields?</p>
                            <div class="center-align">
                                <a href="?page=log-entry" class="btn-large blue-grey darken-1 waves-effect waves-light">
                                    Submit Logs
                                </a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <h5><i class="material-icons left small">library_books</i>ADIF Documentation</h5>
                            <p>For more details about the ADIF format:</p>
                            <div class="center-align">
                                <a href="https://www.adif.org/" target="_blank" rel="nofollow" class="btn-large blue-grey darken-1 waves-effect waves-light">
                                    ADIF.org
                                </a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <h5><i class="material-icons left small">help</i>Get Help</h5>
                            <p>Need assistance with your ADIF logs?</p>
                            <div class="center-align">
                                <a href="?page=discord" class="btn-large blue-grey darken-1 waves-effect waves-light">
                                    Join Discord
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.mt-2 {
    margin-top: 1rem;
}

.mt-3 {
    margin-top: 1.5rem;
}

.code-block {
    background-color: #f5f5f5;
    border-left: 3px solid #455a64;
    padding: 15px;
    margin: 15px 0;
    overflow-x: auto;
}

.code-block pre {
    margin: 0;
    padding: 0;
}

.code-block code {
    font-family: Consolas, Monaco, 'Andale Mono', monospace;
    white-space: pre-wrap;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var collapsibleElements = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(collapsibleElements);
});
</script>
