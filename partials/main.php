<main class="container my-4">
    <section id="about" class="section">
        <h2>About Houses on The Air (HOTA)</h2>
        <p>Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses. The goal is to promote portable operations and to make contacts with other amateur radio operators from unique house locations. Participants can enjoy the challenge of setting up their equipment in different environments and can earn awards based on the number of unique house locations they activate and the number of contacts they make.</p>
        <p>HOTA is a great way to explore new places, meet new people, and improve your operating skills. Whether you are a seasoned operator or a newcomer to amateur radio, HOTA offers a fun and rewarding experience. Join the HOTA community today and start making contacts from houses around the world!</p>
    </section>
    <section id="activities" class="section">
        <h2>HOTA Activities</h2>
        <ul>
            <li><a href="?page=house-activations">House activations</a></li>
            <li>Contests and <a href="?page=awards">awards</a></li>
            <li><a href="?page=community-events">Community events</a></li>
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
        <p>Upload an ADIF log file to check for awards based on unique addresses.</p>

        <form id="adif-upload-form" enctype="multipart/form-data">
            <input type="file" name="adif_file" id="adif-file" accept=".adi,.adif" required>
            <button type="submit">Upload</button>
        </form>

        <div id="upload-result"></div>

        <script>
            document.getElementById('adif-upload-form').addEventListener('submit', function (event) {
                event.preventDefault();

                let formData = new FormData();
                let fileInput = document.getElementById('adif-file');

                if (fileInput.files.length === 0) {
                    alert("Please select a file.");
                    return;
                }

                formData.append("adif_file", fileInput.files[0]);

                fetch('process_upload.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let resultDiv = document.getElementById('upload-result');
                    resultDiv.innerHTML = `<h2>Results</h2>
                                        <p>Unique Addresses Found: ${data.unique_addresses}</p>
                                        <p>Award Tier: ${data.award_tier}</p>`;
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('upload-result').innerHTML = "<p>There was an error processing your file.</p>";
                });
            });
        </script>
    </section>
    <section id="faq" class="section">
        <h2>Frequently Asked Questions (FAQ)</h2>
        <h3>What is HOTA?</h3>
        <p>HOTA is an amateur radio activity encouraging operators to set up from various houses.</p>
        <h3>Do I need a special license?</h3>
        <p>No special license is required, but you must have a valid amateur radio license.</p>
        <h3>How do you identify HOTA stations?</h3>
        <p>HOTA stations use their call signs followed by "/HOTA" to identify their participation in the activity.</p>
        <h3>Can I operate from any house?</h3>
        <p>Yes, you can operate from your own house or another location with permission.</p>
        <h3>Are there awards for HOTA participants?</h3>
        <p>Yes, there are awards and contests for HOTA participants based on their activations and contacts.</p>
        <h3>How can I get involved in HOTA?</h3>
        <p>To get involved in HOTA, set up your station at a house location, make contacts, and log your activations.</p>
        <h3>How can I contact HOTA?</h3>
        <p>Email us at <a href="mailto:info@hota.org.uk">info@hota.org.uk</a>.</p>
    </section>
</main>
