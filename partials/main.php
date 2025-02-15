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
            <li>Choose a band and frequency to operate on.</li>
            <li>Call CQ for HOTA and make contacts with other operators.</li>
            <li>Log your contacts and upload your ADIF file to check for awards.</li>
        </ol>
        <p>Get on the air today and start exploring the world of Houses on The Air!</p>
    </section>
    <section id="activities" class="section">
        <h2>HOTA Activities</h2>
        <ul>
            <li><a href="?page=house-activations">House activations</a></li>
            <li><a href="?page=contests">Contests</a> and <a href="?page=awards">awards</a></li>
            <li><a href="?page=community-events">Community events</a></li>
            <li><a href="?page=operating-guidelines">Operating guidelines</a></li>
            <li><a href="?page=rules">Rules and regulations</a></li>
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
        <p>Supported file formats: .adi, .adif</p>

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
                                        <p>Award Tier: ${data.award_tier}</p>
                                        <p><a href="award.php?callsign=${data.callsign}&tier=${data.award_tier}" target="_blank">Download Certificate</a></p>`;
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('upload-result').innerHTML = "<p>There was an error processing your file.</p>";
                });
            });
        </script>
    </section>
</main>
