<main class="container my-4">
    <section id="about" class="section">
        <h2>About Houses on The Air (HOTA)</h2>
        <p>Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses. The goal is to promote fixed operations and to make contacts with other amateur radio operators from unique house locations. Participants can enjoy the challenge of setting up their equipment in different environments and can earn awards based on the number of unique house locations they activate and the number of contacts they make.</p>
        <p>HOTA is a great way to explore new places, meet new people, and improve your operating skills. Whether you are a seasoned operator or a newcomer to amateur radio, HOTA offers a fun and rewarding experience. Join the HOTA community today and start making contacts from houses around the world!</p>
    </section>
    <section id="get-started" class="section">
        <h2>Get Started with HOTA</h2>
        <p>Ready to get started with Houses on The Air? Follow these steps to begin your HOTA adventure:</p>
        <ol>
            <li>Get your <a href="?page=get-licenced">UK Amateur Radio Licence</a>.</li>
            <li>Set up your station at a house location of your choice.</li>
            <li>Choose a <a href="?page=band-plans">band</a> and frequency to operate on.</li>
            <li>Call CQ for HOTA and make contacts with other operators.</li>
            <li><a href="?page=log-entry">Log your contacts</a> and upload your ADIF file to check for <a href="?page=awards">awards</a>.</li>
        </ol>
        <p>Get on the air today and start exploring the world of Houses on The Air!</p>
    </section>
    <section id="activities" class="section">
        <h2>HOTA Activities</h2>
        <ul style="padding-left: 0; list-style-type: none;">
            <li style="margin-bottom: 10px;"><a href="?page=house-activations">House activations</a></li>
            <li style="margin-bottom: 10px;"><a href="?page=contests">Contests</a> and <a href="?page=awards">awards</a></li>
            <li style="margin-bottom: 10px;"><a href="?page=community-events">Community events</a></li>
            <li style="margin-bottom: 10px;"><a href="?page=operating-guidelines">Operating guidelines</a></li>
            <li style="margin-bottom: 10px;"><a href="?page=nets">Nets</a></li>
            <li style="margin-bottom: 10px;"><a href="?page=rules">Rules and regulations</a></li>
        </ul>
    </section>
    <section id="how-to-call-cq" class="section">
        <h2>How to Call CQ for HOTA</h2>
        <ol>
                <li>Find a clear frequency on the band you wish to operate.</li>
                <li>Listen for a few moments to ensure the frequency is not in use.</li>
                <li>Announce your call sign and your intention to call CQ, for example: "Is this frequency in use? This is [Your Call Sign]."</li>
                <li>If the frequency is clear, call CQ: "CQ CQ CQ, this is [Your Call Sign] calling CQ for Houses on The Air. CQ CQ CQ, this is [Your Call Sign] calling CQ and standing by."</li>
                <li>Listen for a response. If you hear a reply, acknowledge it and proceed with the contact.</li>
                <li>Exchange signal reports, names, and locations with the other operator.</li>
                <li>Log the contact details for your records.</li>
            </ol>
            <p>For FT8 operation, follow these steps:</p>
            <ol>
                <li>Set up your FT8 software and ensure it is configured correctly with your call sign and grid locator.</li>
                <li>Tune to the FT8 frequency for the band you wish to operate.</li>
                <li>Monitor the waterfall display for a clear spot to transmit.</li>
                <li>Initiate a CQ HOTA call by selecting an empty spot and clicking the "CQ" button in your software. Your CQ message will be automatically transmitted.</li>
                <li>Wait for a response. If you receive a reply, your software will decode the message and display the call sign of the responding station.</li>
                <li>Follow the on-screen prompts to complete the contact, exchanging signal reports and other information as required.</li>
                <li>Log the contact details for your records.</li>
            </ol>
    </section>
    <section id="upload" class="section">
        <h2>Upload Your ADIF File</h2>
        <div class="card-panel blue-grey lighten-4">
            <p>Upload an ADIF log file to check for awards based on unique addresses.</p>
            <p><strong>Important:</strong> Your ADIF file must include the <code>ADDRESS</code> field for each contact to be counted toward HOTA awards.</p>
            <p>Supported file formats: .adi, .adif</p>
            <p>Maximum file size: 5MB</p>
            <p>Results will display the number of unique addresses found and the award tier achieved.</p>
            <p>Download your award certificate after processing the file.</p>
        </div>
        <p><a href="?page=log-entry" class="btn blue-grey lighten-1">Need to log your contacts? Click here</a></p>

        <form id="adif-upload-form" enctype="multipart/form-data" class="row">
            <div class="file-field input-field col s12 m8">
                <div class="btn blue-grey">
                    <span>Select ADIF File</span>
                    <input type="file" name="adif_file" id="adif-file" accept=".adi,.adif" required>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your ADIF file">
                </div>
            </div>
            <div class="input-field col s12 m4">
                <button type="submit" class="btn blue-grey darken-1 waves-effect waves-light">
                    <i class="material-icons left"></i>Upload
                </button>
            </div>
        </form>

        <div id="upload-result"></div>
        <div id="upload-error" class="card-panel red lighten-4 red-text text-darken-4" style="display:none;"></div>
        <div id="upload-loading" class="center-align" style="display:none;">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-grey">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Processing your ADIF file...</p>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('adif-upload-form').addEventListener('submit', function (event) {
                    event.preventDefault();

                    // Clear previous results and errors
                    document.getElementById('upload-result').innerHTML = '';
                    const errorEl = document.getElementById('upload-error');
                    errorEl.innerHTML = '';
                    errorEl.style.display = 'none';

                    // Show loading indicator
                    document.getElementById('upload-loading').style.display = 'block';

                    let formData = new FormData();
                    let fileInput = document.getElementById('adif-file');

                    if (fileInput.files.length === 0) {
                        errorEl.innerHTML = "Please select a file.";
                        errorEl.style.display = 'block';
                        document.getElementById('upload-loading').style.display = 'none';
                        return;
                    }

                    formData.append("adif_file", fileInput.files[0]);

                    fetch('process_upload.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(data => {
                                throw new Error(data.error || `Server error: ${response.status}`);
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Hide loading indicator
                        document.getElementById('upload-loading').style.display = 'none';

                        // Check for error in the response
                        if (data.error) {
                            errorEl.innerHTML = `<p>Error: ${data.error}</p>`;
                            errorEl.style.display = 'block';
                            return;
                        }

                        // Ensure all required data exists
                        if (typeof data.unique_addresses === 'undefined' || typeof data.award_tier === 'undefined') {
                            errorEl.innerHTML = `<p>Error: Incomplete data received from server</p>`;
                            errorEl.style.display = 'block';
                            console.error('Server response missing data:', data);
                            return;
                        }

                        // Display results
                        let resultDiv = document.getElementById('upload-result');
                        resultDiv.innerHTML = `
                            <div class="card-panel blue-grey lighten-4">
                                <h3>Results</h3>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <h5>Unique Addresses Found:</h5>
                                        <p class="flow-text">${data.unique_addresses}</p>
                                    </div>
                                    <div class="col s12 m6">
                                        <h5>Award Tier:</h5>
                                        <p class="flow-text">${data.award_tier}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <a href="award.php?callsign=${encodeURIComponent(data.callsign)}&tier=${encodeURIComponent(data.award_tier)}"
                                          target="_blank" class="btn blue-grey darken-1 waves-effect waves-light">
                                          <i class="material-icons left"></i>Download Certificate
                                        </a>
                                    </div>
                                </div>
                            </div>`;

                        // Scroll to results
                        resultDiv.scrollIntoView({ behavior: 'smooth' });
                    })
                    .catch(error => {
                        // Hide loading indicator
                        document.getElementById('upload-loading').style.display = 'none';

                        console.error('Error:', error);
                        errorEl.innerHTML = `<p>Error processing your file: ${error.message}</p>`;
                        errorEl.style.display = 'block';
                    });
                });
            });
        </script>
    </section>
</main>
