/**
 * HOTA Log Entry Handling
 * Specialised scripts for the ADIF log upload and processing functionality
 * Using British English terminology
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialise log entry form
    const logEntryForm = document.getElementById('adif-upload-form');
    if (logEntryForm) {
        initLogEntryForm(logEntryForm);
    }

    // Initialise file upload preview
    const fileInputs = document.querySelectorAll('.file-field input[type=file]');
    fileInputs.forEach(input => {
        initFileUploadPreview(input);
    });
});

/**
 * Initialises the log entry form with AJAX submission
 * @param {HTMLFormElement} form - The log entry form element
 */
function initLogEntryForm(form) {
    const resultDiv = document.getElementById('upload-result');
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Disable submit button to prevent double submission
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.classList.add('disabled');
        }

        // Show loading indicator
        if (resultDiv) {
            resultDiv.innerHTML = `
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
                <p class="center-align">Processing your log file...</p>
            `;
            resultDiv.style.display = 'block';
        }

        // Prepare form data
        const formData = new FormData(form);

        // Send AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            displayResults(data, resultDiv);

            // If successful, track using analytics
            if (data.success && window.HOTA && window.HOTA.Analytics) {
                window.HOTA.Analytics.trackEvent('Log Submission', 'Success', data.callsign);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            if (resultDiv) {
                resultDiv.innerHTML = `
                    <div class="card-panel red lighten-4">
                        <h5><i class="material-icons left">error</i> System Error</h5>
                        <p>A system error occurred whilst processing your request.</p>
                        <p>Please try again later or contact support if the problem persists.</p>
                    </div>
                `;
            }
        })
        .finally(() => {
            // Re-enable submit button
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('disabled');
            }
        });
    });
}

/**
 * Displays the log processing results
 * @param {Object} data - Response data from the server
 * @param {HTMLElement} resultDiv - Element to display results in
 */
function displayResults(data, resultDiv) {
    if (!resultDiv) return;

    if (data.success) {
        // Format contact stats for display
        let contactStats = '';
        if (data.stats) {
            contactStats = `
                <ul>
                    <li><strong>Total Contacts:</strong> ${data.stats.contacts || 0}</li>
                    <li><strong>Unique Addresses:</strong> ${data.stats.uniqueAddresses || 0}</li>
                    <li><strong>Award Tier:</strong> ${data.stats.awardTier || 'None'}</li>
                </ul>
            `;
        }

        // Display success message
        resultDiv.innerHTML = `
            <div class="card-panel green lighten-4">
                <h5><i class="material-icons left">check_circle</i> Upload Successful!</h5>
                <p>Your log has been processed successfully:</p>
                ${contactStats}
                ${data.certificateUrl ? `<p><a href="${data.certificateUrl}" class="btn green">View Award Certificate</a></p>` : ''}
                ${data.profileUrl ? `<p><a href="${data.profileUrl}" class="btn blue-grey">View Your Profile</a></p>` : ''}
            </div>
        `;
    } else {
        // Display error message
        resultDiv.innerHTML = `
            <div class="card-panel red lighten-4">
                <h5><i class="material-icons left">error</i> Upload Failed</h5>
                <p>${data.message || 'There was an error processing your log file.'}</p>
                ${data.errors ? '<ul class="browser-default">' + data.errors.map(err => `<li>${err}</li>`).join('') + '</ul>' : ''}
                <p>Please check your file and try again.</p>
                <p>Need help? <a href="?page=adif-guide">View our ADIF Guide</a> or <a href="?page=discord">ask on our Discord</a>.</p>
            </div>
        `;
    }
}

/**
 * Initialises file upload preview functionality
 * @param {HTMLInputElement} fileInput - File input element
 */
function initFileUploadPreview(fileInput) {
    fileInput.addEventListener('change', function() {
        if (!this.files || !this.files[0]) return;

        const file = this.files[0];
        const fileInfoDiv = document.querySelector('.file-details');

        if (!fileInfoDiv) return;

        if (file.name.match(/\.(adif|adi)$/i)) {
            let fileSize = '';
            if (file.size < 1024) {
                fileSize = file.size + ' bytes';
            } else if (file.size < 1048576) {
                fileSize = (file.size / 1024).toFixed(1) + ' KB';
            } else {
                fileSize = (file.size / 1048576).toFixed(1) + ' MB';
            }

            fileInfoDiv.innerHTML = `
                <div class="card-panel blue lighten-5">
                    <h5><i class="material-icons left">description</i> File Ready</h5>
                    <p><strong>Name:</strong> ${file.name}</p>
                    <p><strong>Size:</strong> ${fileSize}</p>
                </div>
            `;
            fileInfoDiv.style.display = 'block';

            // If file is too large, show warning
            if (file.size > 5242880) { // 5MB limit
                fileInfoDiv.innerHTML += `
                    <div class="card-panel yellow lighten-3">
                        <p><strong>Warning:</strong> This file is quite large (${fileSize}). Files over 5MB may take longer to process.</p>
                    </div>
                `;
            }
        } else {
            fileInfoDiv.innerHTML = `
                <div class="card-panel red lighten-4">
                    <h5><i class="material-icons left">error</i> Invalid File</h5>
                    <p>Selected file isn't a valid ADIF file. Please select a file with .adi or .adif extension.</p>
                </div>
            `;
            fileInfoDiv.style.display = 'block';
        }
    });
}

/**
 * ADIF preview functionality - shows a sample of contacts from a file
 * @param {File} file - ADIF file to preview
 * @param {HTMLElement} previewElement - Element to display preview in
 */
function previewAdif(file, previewElement) {
    if (!file || !previewElement) return;

    const reader = new FileReader();

    reader.onload = function(e) {
        const contents = e.target.result;
        const records = parseAdifRecords(contents);

        if (records.length === 0) {
            previewElement.innerHTML = `
                <div class="card-panel yellow lighten-3">
                    <p>No valid QSO records found in this file. Please check if it's a valid ADIF format.</p>
                </div>
            `;
            return;
        }

        // Show preview of first few records
        const maxPreview = Math.min(5, records.length);
        let tableRows = '';

        for (let i = 0; i < maxPreview; i++) {
            const record = records[i];
            tableRows += `
                <tr>
                    <td>${record.call || 'N/A'}</td>
                    <td>${formatAdifDate(record.qso_date) || 'N/A'}</td>
                    <td>${record.band || record.freq || 'N/A'}</td>
                    <td>${record.mode || 'N/A'}</td>
                    <td>${record.address ? 'Yes' : 'No'}</td>
                </tr>
            `;
        }

        previewElement.innerHTML = `
            <div class="card">
                <div class="card-content">
                    <span class="card-title">ADIF Preview (${records.length} QSOs found)</span>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Callsign</th>
                                <th>Date</th>
                                <th>Band/Freq</th>
                                <th>Mode</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${tableRows}
                        </tbody>
                    </table>
                    ${records.length > maxPreview ? `<p class="right-align">Showing ${maxPreview} of ${records.length} QSOs</p>` : ''}
                </div>
            </div>

            ${!hasAddressFields(records) ? `
                <div class="card-panel yellow lighten-3">
                    <p><strong>Warning:</strong> No ADDRESS fields detected in this ADIF file. The ADDRESS field is required for HOTA awards tracking.</p>
                    <p>Please ensure your logging software exports the ADDRESS field. <a href="?page=adif-guide">Learn more about ADIF requirements</a>.</p>
                </div>
            ` : ''}
        `;
    };

    reader.onerror = function() {
        previewElement.innerHTML = `
            <div class="card-panel red lighten-4">
                <p>Error reading file. Please try again or select a different file.</p>
            </div>
        `;
    };

    reader.readAsText(file);
}

/**
 * Very simple ADIF parser to extract basic fields for preview
 * @param {string} adifContent - ADIF file content
 * @return {Array} Array of QSO records with basic fields
 */
function parseAdifRecords(adifContent) {
    const records = [];
    const regex = /<([^:]+):(\d+)>([^<]+)/g;

    let currentRecord = {};
    let match;

    // Split content by EOR markers
    const recordStrings = adifContent.split('<EOR>');

    for (const recordStr of recordStrings) {
        currentRecord = {};

        // Extract fields from record
        while ((match = regex.exec(recordStr)) !== null) {
            const fieldName = match[1].toLowerCase();
            const fieldValue = match[3];
            currentRecord[fieldName] = fieldValue.trim();
        }

        // If record has at least callsign and date, consider it valid
        if (currentRecord.call && currentRecord.qso_date) {
            records.push(currentRecord);
        }

        // Reset regex for next record
        regex.lastIndex = 0;
    }

    return records;
}

/**
 * Checks if any records have ADDRESS fields
 * @param {Array} records - Array of ADIF records
 * @return {boolean} True if any records have ADDRESS field
 */
function hasAddressFields(records) {
    if (!records || records.length === 0) return false;
    return records.some(record => record.address !== undefined);
}

/**
 * Formats YYYYMMDD date as DD/MM/YYYY (UK format)
 * @param {string} adifDate - Date in ADIF format (YYYYMMDD)
 * @return {string} Formatted date or original string if invalid
 */
function formatAdifDate(adifDate) {
    if (!adifDate || adifDate.length !== 8) return adifDate;

    const year = adifDate.substring(0, 4);
    const month = adifDate.substring(4, 6);
    const day = adifDate.substring(6, 8);

    return `${day}/${month}/${year}`;
}
