<section class="container">
    <h2>Frequently Asked Questions</h2>
    <p>Last updated: <?= date('F j, Y'); ?></p>

    <div class="card-panel blue-grey lighten-4">
        <p>Find answers to common questions about HOTA participation, awards, and technical requirements.</p>
    </div>

    <h3>General Questions</h3>
    <h3>What is HOTA?</h3>
    <p>HOTA is an amateur radio activity encouraging operators to set up from various houses.</p>
    <h3>How do I register for HOTA?</h3>
    <p>Registration is not required for HOTA. Simply set up your station and start making contacts.</p>
    <h3>What are the rules of HOTA?</h3>
    <p>Rules include eligibility, registration, event guidelines, code of conduct, and contact information. They are available on our <a href="?page=rules">Rules Page</a>.</p>
    <h3>How do I participate in HOTA?</h3>
    <p>To participate in HOTA, set up your station at a house location, make contacts, and log your activations.</p>
    <h3>Do you have a merch store?</h3>
    <p>Yes, we have a merch store. You can visit our <a href="?page=store">Merch Store</a> to view our products.</p>
    <h3>How do I uniquely identify my house?</h3>
    <p>You can uniquely identify your house by its address or using a UPRN if available in your location.</p>
    <h3>What is a UPRN?</h3>
    <p>A UPRN is a unique property reference number assigned to each address in the UK.</p>
    <h3>Can I use What3Words to identify my house?</h3>
    <p>Yes, you can use What3Words to identify your house location.</p>
    <h3>What is What3Words?</h3>
    <p>What3Words is a geocoding system that divides the world into 3m x 3m squares, each with a unique three-word address.</p>
    <h3>How do I get licenced for Amateur Radio?</h3>
    <p>You can get licenced for Amateur Radio by passing an exam and obtaining a licence from Ofcom. For more information, see our <a href="?page=get-licenced">Get Licenced Page</a></p>
    <h3>What is an activation?</h3>
    <p>An activation is when an operator sets up and operates from a house location.</p>
    <h3>How many contacts do I need to make for a successful activation?</h3>
    <p>There is no minimum number of contacts required for a successful activation, but more contacts increase your chances of earning awards.</p>
    <h3>Do I need a special license?</h3>
    <p>No special license is required, but you must have a valid amateur radio license.</p>
    <h3>How do you identify HOTA stations?</h3>
    <p>HOTA stations use their call signs followed by "/HOTA" to identify their participation in the activity.</p>
    <h3>Can I operate from any house?</h3>
    <p>Yes, you can operate from your own house or another location with permission.</p>
    <h3>Are there awards for HOTA participants?</h3>
    <p>Yes, there are awards and contests for HOTA participants based on their activations and contacts.</p>
    <h3>How do I earn awards in HOTA?</h3>
    <p>You can earn awards by activating unique house locations and making contacts with other operators.</p>
    <h3>What is the tier system for awards?</h3>
    <p>The tier system includes different award levels based on the number of unique addresses activated. You can view the tiers on our <a href="?page=awards">Awards Page</a></p>
    <h3>What is an ADIF file?</h3>
    <p>An ADIF (Amateur Data Interchange Format) file is a standard format for logging amateur radio contacts. It contains details of each contact, including callsigns, dates, times, signal reports, and most importantly for HOTA - addresses.</p>
    <h3>How do I upload my ADIF file?</h3>
    <p>You can upload your ADIF file on our <a href="/#upload">upload section</a> to check for awards based on unique addresses. Simply click the "Choose File" button, select your ADIF file, and click "Upload".</p>
    <h3>What is the process for checking awards?</h3>
    <p>Upload your ADIF file to check for unique addresses and determine your award tier. Our system will analyze your file and show your results immediately.</p>
    <h3>What field in the ADIF file is used to identify the house location?</h3>
    <p>The ADIF file uses the <code>ADDRESS</code> field to identify house locations. This field is essential for HOTA awards. If your ADIF file doesn't have this field, you can <a href="?page=log-entry">use our log entry form</a> to create a properly formatted file.</p>
    <h3>Can my logger add ADDRESS fields to my QSOs?</h3>
    <p>Many logging programs allow you to add address information to your QSOs. Look for a field labeled "Address" or "QTH" in your logging software. You can also use our <a href="?page=log-entry">log entry form</a> to create ADIF files with address fields.</p>
    <h3>How do I download my award certificate?</h3>
    <p>After uploading your ADIF file and checking your awards, you can click the "Download Certificate" button that appears with your results to get a personalized certificate based on your tier.</p>
    <h3>Can I participate in HOTA contests?</h3>
    <p>Yes, you can participate in HOTA contests and earn awards for your achievements.</p>
    <h3>What is the best time to operate in HOTA?</h3>
    <p>The best time to operate in HOTA depends on band conditions and your location.</p>
    <h3>How do I log my HOTA activations?</h3>
    <p>You can log your activations manually or use logging software to track your contacts. Be sure to include the station address in your logs.</p>
    <h3>What equipment do I need for HOTA?</h3>
    <p>You will need a transceiver, antenna, power source, and other accessories for portable operation.</p>

    <h3>Technical Questions</h3>
    <h4>I get an error when uploading my ADIF file. What should I do?</h4>
    <p>Here are some common solutions:</p>
    <ul>
        <li>Check that your file has the <code>.adi</code> or <code>.adif</code> extension</li>
        <li>Ensure your file is under 5MB in size</li>
        <li>Verify your file contains proper ADIF formatting with <code>&lt;EOH&gt;</code> and <code>&lt;EOR&gt;</code> markers</li>
        <li>Make sure your file includes <code>&lt;ADDRESS:</code> fields for your contacts</li>
        <li>Try creating a new ADIF file using our <a href="?page=log-entry">log entry form</a></li>
    </ul>

    <h4>How do I create an ADIF file with address information?</h4>
    <p>You can create an ADIF file with address information in several ways:</p>
    <ol>
        <li>Use our <a href="?page=log-entry">log entry form</a> to create an ADIF file with required fields</li>
        <li>Configure your logging software to include the ADDRESS field in your logs</li>
        <li>Manually edit your existing ADIF file to add ADDRESS fields for each contact</li>
    </ol>

    <h4>What format should addresses be in?</h4>
    <p>Addresses can be in any text format, but should ideally include enough information to uniquely identify the location. For example: "123 Main Street, London, SW1A 1AA" or "47 Elm Avenue, Manchester, M1 1AA".</p>

    <h3>Can I share photos of my station?</h3>
    <p>Yes, you can share photos of your station setup and activations with the HOTA community.</p>
    <h3>How can I get feedback on my station setup?</h3>
    <p>You can share your station setup on the HOTA website or social media channels to get feedback from other operators.</p>
    <h3>How can I join the HOTA community?</h3>
    <p>You can join the HOTA community by participating in activations, contests, and events.</p>
    <h3>Can I share my HOTA experiences with others?</h3>
    <p>Yes, you can share your HOTA experiences with the community through social media, forums, and other channels.</p>
    <h3>How can I get support for my HOTA activities?</h3>
    <p>You can get support for your HOTA activities by contacting the HOTA team or community members for assistance.</p>
    <h3>How do I report issues with the HOTA website?</h3>
    <p>If you encounter any issues with the HOTA website, please contact us at <a href="mailto:info@hota.org.uk">info@hota.org.uk</a></p>
    <h3>Can I operate in digital modes for HOTA?</h3>
    <p>Yes, you can operate in digital modes for HOTA activations and contests. We currently have a <a href="?page=tgif">TGIF Talkgroup</a> if you would like to talk to other HOTA operators.</p>
    <h3>Can I participate in HOTA remotely?</h3>
    <p>Remote participation is not allowed.</p>
    <h3>How do I find HOTA stations to contact?</h3>
    <p>You can listen for HOTA stations calling CQ or search for them on the bands.</p>
    <h3>What does "CQ" mean?</h3>
    <p>"CQ" is a general call for any station to respond and make contact.</p>
    <h3>What is a "QSO"?</h3>
    <p>A "QSO" is a contact or conversation between two amateur radio stations.</p>
    <h3>What is a "QSL" card?</h3>
    <p>A "QSL" card is a confirmation of a contact between two amateur radio stations.</p>
    <h3>How do I exchange QSL cards?</h3>
    <p>You can exchange QSL cards directly, through a QSL bureau, or electronically using services like eQSL or LOTW.</p>
    <h3>What bands and modes are used in HOTA?</h3>
    <p>HOTA participants can operate on various bands and modes, including HF, VHF, UHF, and digital modes.</p>
    <h3>How can I get involved in HOTA?</h3>
    <p>To get involved in HOTA, set up your station at a house location, make contacts, and log your activations.</p>
    <h3>Does HOTA store a copy of my ADIF file?</h3>
    <p>HOTA does store a copy of your ADIF file after processing it for awards. This is used for generating metrics and future functionality.</p>
    <h3>How can I advertise on the site?</h3>
    <p>If you are interested in advertising on the site, please see our <a href="?page=advertising">Advertising Page</a> for more information.</p>
    <h3>How can I contact HOTA?</h3>
    <p>Email us at <a href="mailto:info@hota.org.uk">info@hota.org.uk</a> or join us on <a href="?page=discord">Discord</a>.</p>
    <h3>How can I join the HOTA Discord server?</h3>
    <p>You can join the HOTA Discord server by following the link on our <a href="?page=discord">Discord Page</a>.</p>
    <h3>What is Discord?</h3>
    <p>Discord is a communication platform for communities to chat, share, and connect.</p>
    <h3>What is TGIF?</h3>
    <p>TGIF is a DMR network for amateur radio operators.</p>
    <h3>How can I join the TGIF network?</h3>
    <p>You can join the TGIF network by following the instructions on our <a href="?page=tgif">TGIF Page</a>.</p>
    <h3>What is the TGIF Talkgroup?</h3>
    <p>86915.</p>
    <h3>Is the HOTA website open source?</h3>
    <p>Yes, the HOTA website is open source. You can view the code on our <a href="https://github.com/Houses-on-The-Air" target="_blank" rel="nofollow">GitHub</a> profile.</p>
    <h3>How can I contribute to the HOTA website?</h3>
    <p>You can contribute to the HOTA website by submitting bug reports, feature requests, or code contributions on our <a href="https://github.com/Houses-on-The-Air" target="_blank" rel="nofollow">GitHub</a> profile.</p>
    <h3>Where can I find more information about HOTA?</h3>
    <p>For more information about HOTA, visit our <a href="?page=about">About Page</a>.
    <h3>Are there any app icons available for HOTA?</h3>
    <p>Yes, you can download app icons for HOTA from our <a href="?page=appicons">App Icons Page</a>.</p>
    <h3>Can you explain what the terms used in Amateur Radio mean?</h3>
    <p>Yes, we have a glossary of terms available on our <a href="?page=glossary">Glossary Page</a>.</p>
    <h3>How are bands allocated?</h3>
    <p>Bands are allocated by frequency range and mode of operation to ensure efficient use of the radio spectrum. For more information visit our <a href="?page=band-plans">Band Plans</a> page.</p>
    <h3>How can I support Houses on The Air?</h3>
    <p>You can view our support options on our <a href="?page=support-us">Support Us</a> Page.
</section>
