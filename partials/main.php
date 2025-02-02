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
    <section id="faq" class="section">
        <h2>Frequently Asked Questions (FAQ)</h2>
        <h3 id="what-is-hota"><a href="#what-is-hota">What is HOTA?</a></h3>
        <p>HOTA is an amateur radio activity encouraging operators to set up from various houses.</p>
        <h3 id="rules-of-hota"><a href="#rules-of-hota">What are the rules of HOTA?</a></h3>
        <p>Rules include eligibility, registration, event guidelines, code of conduct, and contact information. They are available on our <a href="?page=rules">Rules Page</a>.</p>
        <h3 id="how-to-participate"><a href="#how-to-participate">How do I participate in HOTA?</a></h3>
        <p>To participate in HOTA, set up your station at a house location, make contacts, and log your activations.</p>
        <h3 id="identify-house"><a href="#identify-house">How do I uniquely identify my house?</a></h3>
        <p>You can uniquely identify your house by its address or using a UPRN if available in your location.</p>
        <h3 id="what-is-uprn"><a href="#what-is-uprn">What is a UPRN?</a></h3>
        <p>A UPRN is a unique property reference number assigned to each address in the UK.</p>
        <h3 id="what-is-activation"><a href="#what-is-activation">What is an activation?</a></h3>
        <p>An activation is when an operator sets up and operates from a house location.</p>
        <h3 id="contacts-for-activation"><a href="#contacts-for-activation">How many contacts do I need to make for a successful activation?</a></h3>
        <p>There is no minimum number of contacts required for a successful activation, but more contacts increase your chances of earning awards.</p>
        <h3 id="special-license"><a href="#special-license">Do I need a special license?</a></h3>
        <p>No special license is required, but you must have a valid amateur radio license.</p>
        <h3 id="identify-hota-stations"><a href="#identify-hota-stations">How do you identify HOTA stations?</a></h3>
        <p>HOTA stations use their call signs followed by "/HOTA" to identify their participation in the activity.</p>
        <h3 id="operate-from-any-house"><a href="#operate-from-any-house">Can I operate from any house?</a></h3>
        <p>Yes, you can operate from your own house or another location with permission.</p>
        <h3 id="awards-for-participants"><a href="#awards-for-participants">Are there awards for HOTA participants?</a></h3>
        <p>Yes, there are awards and contests for HOTA participants based on their activations and contacts.</p>
        <h3 id="earn-awards"><a href="#earn-awards">How do I earn awards in HOTA?</a></h3>
        <p>You can earn awards by activating unique house locations and making contacts with other operators.</p>
        <h3 id="what-is-adif"><a href="#what-is-adif">What is an ADIF file?</a></h3>
        <p>An ADIF file is a standard format for logging amateur radio contacts.</p>
        <h3 id="upload-adif"><a href="#upload-adif">How do I upload my ADIF file?</a></h3>
        <p>You can upload your ADIF file on the website to check for awards based on unique addresses.</p>
        <h3 id="check-awards"><a href="#check-awards">What is the process for checking awards?</a></h3>
        <p>Upload your ADIF file to check for unique addresses and determine your award tier.</p>
        <h3 id="download-certificate"><a href="#download-certificate">How do I download my award certificate?</a></h3>
        <p>After checking your awards, you can download a certificate based on your tier.</p>
        <h3 id="participate-in-contests"><a href="#participate-in-contests">Can I participate in HOTA contests?</a></h3>
        <p>Yes, you can participate in HOTA contests and earn awards for your achievements.</p>
        <h3 id="best-time-to-operate"><a href="#best-time-to-operate">What is the best time to operate in HOTA?</a></h3>
        <p>The best time to operate in HOTA depends on band conditions and your location.</p>
        <h3 id="log-activations"><a href="#log-activations">How do I log my HOTA activations?</a></h3>
        <p>You can log your activations manually or use logging software to track your contacts.</p>
        <h3 id="equipment-needed"><a href="#equipment-needed">What equipment do I need for HOTA?</a></h3>
        <p>You will need a transceiver, antenna, power source, and other accessories for portable operation.</p>
        <h3 id="remote-participation"><a href="#remote-participation">Can I participate in HOTA remotely?</a></h3>
        <p>Remote participation is not allowed.</p>
        <h3 id="find-hota-stations"><a href="#find-hota-stations">How do I find HOTA stations to contact?</a></h3>
        <p>You can listen for HOTA stations calling CQ or search for them on the bands.</p>
        <h3 id="bands-and-modes"><a href="#bands-and-modes">What bands and modes are used in HOTA?</a></h3>
        <p>HOTA participants can operate on various bands and modes, including HF, VHF, UHF, and digital modes.</p>
        <h3 id="get-involved"><a href="#get-involved">How can I get involved in HOTA?</a></h3>
        <p>To get involved in HOTA, set up your station at a house location, make contacts, and log your activations.</p>
        <h3 id="contact-hota"><a href="#contact-hota">How can I contact HOTA?</a></h3>
        <p>Email us at <a href="mailto:info@hota.org.uk">info@hota.org.uk</a>.</p>
    </section>
</main>
