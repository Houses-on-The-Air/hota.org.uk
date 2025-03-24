<?php
$pageTitle = "Amateur Radio Glossary - HOTA";
$pageDescription = "A comprehensive glossary of amateur radio and Houses on the Air (HOTA) terms and abbreviations.";
?>

<div class="container">
    <h1>Amateur Radio Glossary</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>Glossary</li>
        </ul>
    </div>

    <p class="flow-text">This glossary contains common amateur radio terms and specific Houses on the Air terminology to help newcomers understand the hobby and our program.</p>

    <!-- Alphabet Navigation -->
    <div class="alphabet-nav card-panel">
        <div class="row center-align">
            <div class="col s12">
                <?php
                $letters = range('A', 'Z');
                foreach ($letters as $letter) {
                    echo "<a href=\"#letter-$letter\" class=\"alphabet-link\">$letter</a> ";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="card-panel">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input type="text" id="glossary-search" placeholder="Search glossary terms...">
                <label for="glossary-search">Search Terms</label>
            </div>
        </div>
    </div>

    <!-- Glossary Content -->
    <div class="glossary-content">
        <?php
        // All glossary terms organized by first letter
        $glossary = [
            'A' => [
                'ADIF' => 'Amateur Data Interchange Format - A standard file format for exchanging amateur radio contact logs between different logging programs.',
                'APRS' => 'Automatic Packet Reporting System - A digital communications system used for tracking and sharing real-time data.',
                'ARES' => 'Amateur Radio Emergency Service - A public service organization of licensed amateurs who volunteer their skills and equipment to serve their communities in times of need.',
                'ARRL' => 'American Radio Relay League - The national association for amateur radio in the USA.',
                'ATV' => 'Amateur Television - The transmission of broadcast quality video and audio over radio frequencies allocated to amateur radio.',
                'Activation' => 'In HOTA terms, setting up and operating an amateur radio station from a house location and making a minimum of 10 contacts.',
                'Activator' => 'A HOTA participant who sets up and operates from house locations.',
                'Address' => 'The specific location information for a house that must be logged for HOTA credit. Must include street address and preferably town/city and postal/zip code.'
            ],
            'B' => [
                'Balun' => 'A device used to match balanced and unbalanced electrical systems, particularly for antennas.',
                'Band' => 'A range of frequencies allocated for a specific purpose, such as the 20-meter amateur band.',
                'Band Plan' => 'The voluntary division of an amateur band into segments for different modes and activities.',
                'Beacon' => 'A station that automatically transmits signals to help determine propagation conditions.',
                'Beam Antenna' => 'A directional antenna that focuses radio signals in a particular direction.',
                'BFO' => 'Beat Frequency Oscillator - A circuit used in receivers to make CW and SSB signals audible.',
                'Break-In' => 'A mode of operation that allows the operator to hear between Morse code characters or words.',
                'Bridge' => 'In HOTA terms, operating from a house with a bridge or bridges in its address.'
            ],
            'C' => [
                'CQ' => 'A general call to any station. When someone "calls CQ," they\'re inviting any station to reply.',
                'CW' => 'Continuous Wave - A mode of communication using Morse code.',
                'Call Sign' => 'A unique identifier assigned to an amateur radio station by the relevant licensing authority.',
                'Certificate' => 'An award issued for achieving specific operating milestones. HOTA offers certificates for various achievement tiers.',
                'Contest' => 'An organized amateur radio event where participants aim to make as many contacts as possible within a specified time period.',
                'Country Cottage' => 'A HOTA award tier for activating or contacting 250,000+ unique addresses.'
            ],
            'D' => [
                'DX' => 'Distant station or long-distance communication.',
                'DXpedition' => 'An expedition to a rare or exotic location specifically to operate amateur radio.',
                'Dead Band' => 'A frequency band with little or no propagation activity.',
                'Detached House' => 'A HOTA award tier for activating or contacting 10,000+ unique addresses.',
                'Digital Mode' => 'Any mode that uses digital encoding for transmission, such as FT8, PSK31, or RTTY.',
                'Dipole' => 'A simple, versatile wire antenna consisting of two equal lengths of wire fed at the center.',
                'Directionality' => 'The ability of an antenna to focus transmitted energy in a specific direction.'
            ],
            'E' => [
                'EZNEC' => 'A popular antenna modeling software used by amateur radio operators.',
                'EME' => 'Earth-Moon-Earth or Moonbounce - Communication by reflecting radio signals off the moon\'s surface.',
                'EIRP' => 'Effective Isotropic Radiated Power - The actual power radiated in a specific direction by an antenna.',
                'Elmer' => 'An experienced amateur radio operator who mentors newcomers to the hobby.',
                'End-Fed' => 'An antenna fed at one end rather than in the middle.',
                'Eyeball QSO' => 'An in-person meeting between radio amateurs who previously made contact over the air.'
            ],
            'F' => [
                'FT8' => 'A digital mode developed by Joe Taylor (K1JT) that allows contacts with weak signals.',
                'Field Day' => 'An annual amateur radio exercise focused on emergency communications preparedness.',
                'Filter' => 'A circuit that passes signals of certain frequencies while rejecting others.',
                'Fox Hunt' => 'A game where participants use radio direction finding to locate a hidden transmitter.',
                'Frequency' => 'The number of cycles per second of a radio wave, measured in Hertz (Hz).',
                'Full Break-In' => 'A mode of CW operation that allows hearing between dots and dashes.',
                'Front-to-Back Ratio' => 'The ratio of an antenna\'s forward gain to its gain in the opposite direction.'
            ],
            'G' => [
                'Gray Line' => 'The twilight zone between night and day where enhanced HF propagation often occurs.',
                'Grid Square' => 'A geographical coordinate system used by amateur radio operators (Maidenhead Locator System).',
                'Gain' => 'The increase in signal strength provided by an antenna compared to a reference antenna.',
                'Ground Plane' => 'A conductive surface that acts as a reflector for radio waves.',
                'Ground Wave' => 'Radio wave propagation along the surface of the Earth.',
                'G5RV' => 'A multi-band wire antenna designed by Louis Varney (G5RV).'
            ],
            'H' => [
                'HF' => 'High Frequency - Radio frequencies between 3 and 30 MHz.',
                'HT' => 'Handheld Transceiver - A portable two-way radio.',
                'Heritage House' => 'In HOTA terms, a house with historical significance.',
                'Home Station' => 'An amateur radio station set up at one\'s residence.',
                'HOTA' => 'Houses on the Air - An amateur radio award program focused on operating from various house locations.',
                'House Number' => 'The numeric or alphanumeric portion of a street address, required for HOTA logging.',
                'Hunter' => 'In HOTA terms, an operator who makes contacts with stations activating house locations.'
            ],
            'I' => [
                'IMD' => 'Intermodulation Distortion - Unwanted signals created by mixing of two or more signals.',
                'IOTA' => 'Islands On The Air - An award program for contacts with island stations.',
                'IRC' => 'International Reply Coupon - A voucher that can be exchanged for postage stamps in other countries.',
                'ITU' => 'International Telecommunication Union - The United Nations agency that regulates telecommunications.',
                'Ionosphere' => 'The layer of Earth\'s atmosphere that reflects radio waves back to Earth, enabling long-distance HF communication.',
                'Isotropic Antenna' => 'A theoretical antenna that radiates equally in all directions.'
            ],
            'J' => [
                'J-Pole' => 'A type of end-fed vertical antenna with a J-shaped matching section.',
                'Jumpers' => 'Short wires used to connect points in an electrical circuit.',
                'Junction Box' => 'An enclosure housing electrical connections.'
            ],
            'K' => [
                'Keyer' => 'An electronic device that aids in sending Morse code.',
                'KHz' => 'Kilohertz - 1,000 Hz.',
                'Key' => 'The device used to send Morse code.'
            ],
            'L' => [
                'LF' => 'Low Frequency - Radio frequencies between 30 and 300 kHz.',
                'LNA' => 'Low-Noise Amplifier - A device that amplifies weak signals while adding minimal noise.',
                'LOTW' => 'Logbook of the World - The ARRL\'s electronic confirmation system.',
                'Ladder Line' => 'A type of parallel transmission line with insulating spacers.',
                'Log' => 'A record of radio contacts made.',
                'Long Path' => 'The longer of two possible great circle routes between two points on Earth.'
            ],
            'M' => [
                'MF' => 'Medium Frequency - Radio frequencies between 300 kHz and 3 MHz.',
                'MHz' => 'Megahertz - 1,000,000 Hz.',
                'MMDVM' => 'Multi-Mode Digital Voice Modem - Hardware for digital voice modes.',
                'Mansion' => 'The highest HOTA award tier for activating or contacting 1,000,000+ unique addresses.',
                'Matchbox' => 'Another term for an antenna tuner.',
                'Mobile Operation' => 'Operating amateur radio from a vehicle in motion.',
                'Multiband Antenna' => 'An antenna designed to work efficiently on multiple frequency bands.'
            ],
            'N' => [
                'NVIS' => 'Near Vertical Incidence Skywave - A propagation technique for regional communications.',
                'Net' => 'A scheduled on-air meeting of amateur radio operators.',
                'Noise Blanker' => 'A receiver circuit that reduces certain types of interference.',
                'Notch Filter' => 'A filter that attenuates signals in a narrow frequency range.'
            ],
            'O' => [
                'OSCAR' => 'Orbiting Satellite Carrying Amateur Radio - A series of amateur radio satellites.',
                'Offset' => 'The frequency difference between transmit and receive in a repeater operation.',
                'Open Band' => 'A frequency band with good propagation conditions.',
                'Operation' => 'The act of using an amateur radio station.'
            ],
            'P' => [
                'PSK31' => 'Phase Shift Keying 31 Baud - A popular digital mode for keyboard-to-keyboard communications.',
                'POTA' => 'Parks On The Air - An amateur radio award program for operating from parks.',
                'Packet' => 'A digital mode using AX.25 protocol.',
                'Parasitic Element' => 'An antenna element that is not directly connected to the feedline.',
                'Portable Operation' => 'Operating amateur radio away from a permanent station.',
                'Propagation' => 'The way radio waves travel from one point to another.',
                'PTT' => 'Push To Talk - A switch that activates the transmitter.'
            ],
            'Q' => [
                'QRM' => 'Man-made interference to radio signals.',
                'QRN' => 'Natural interference to radio signals, like static from lightning.',
                'QRP' => 'Low power operation, typically 5 watts or less.',
                'QRZ' => 'Who is calling me? / A call for a station to identify.',
                'QSL' => 'Confirmation of communication, often via card.',
                'QSO' => 'A radio conversation or contact between two stations.',
                'QTH' => 'Location or station location.'
            ],
            'R' => [
                'RTTY' => 'Radio Teletype - A digital mode for text communications.',
                'RX' => 'Receive or Receiver.',
                'Radial' => 'A wire extending from the base of a vertical antenna to provide a ground plane.',
                'Ragchew' => 'A long, informal conversation between amateur radio operators.',
                'Repeater' => 'A station that automatically retransmits signals to extend range.',
                'RF' => 'Radio Frequency - The portion of the electromagnetic spectrum used for radio communications.',
                'RST' => 'Readability, Strength, Tone - A signal report system.'
            ],
            'S' => [
                'SWL' => 'Short Wave Listener - Someone who listens to but does not transmit on amateur radio bands.',
                'SWR' => 'Standing Wave Ratio - A measure of how efficiently RF power is transmitted from the source to the load.',
                'Semi-Detached House' => 'A HOTA award tier for activating or contacting 1,000+ unique addresses.',
                'Skip' => 'Propagation of radio waves by reflection from the ionosphere.',
                'Sked' => 'A scheduled contact between amateur radio operators.',
                'Sporadic-E' => 'Propagation occurring when the E layer of the ionosphere becomes ionized enough to reflect radio signals.',
                'SSB' => 'Single Sideband - A voice mode that uses less bandwidth than AM.',
                'SOTA' => 'Summits On The Air - An award program for operating from mountain summits.',
                'Special Event Station' => 'A temporary amateur radio station set up for a specific event.',
                'Split Operation' => 'Transmitting and receiving on different frequencies.'
            ],
            'T' => [
                'TCVR' => 'Transceiver - A combined transmitter and receiver.',
                'TCXO' => 'Temperature Compensated Crystal Oscillator - A high-stability frequency reference.',
                'TX' => 'Transmit or Transmitter.',
                'Terraced House' => 'A HOTA award tier for activating or contacting 500+ unique addresses.',
                'Townhouse' => 'A HOTA award tier for activating or contacting 100,000+ unique addresses.',
                'Traffic' => 'Formal messages handled by amateur radio operators.',
                'Tropospheric Ducting' => 'Enhanced VHF/UHF propagation due to atmospheric conditions.'
            ],
            'U' => [
                'UHF' => 'Ultra High Frequency - Radio frequencies between 300 MHz and 3 GHz.',
                'UTC' => 'Coordinated Universal Time - The time standard used in amateur radio.',
                'Unun' => 'A transformer used to match unbalanced impedances.',
                'Unique Address' => 'In HOTA terms, a specific house address that counts once for award credits.'
            ],
            'V' => [
                'VFO' => 'Variable Frequency Oscillator - A circuit that generates a signal whose frequency can be adjusted.',
                'VHF' => 'Very High Frequency - Radio frequencies between 30 and 300 MHz.',
                'VOX' => 'Voice Operated Transmission - A circuit that automatically switches from receive to transmit when you speak.',
                'Victorian Villa' => 'A HOTA award tier for activating or contacting 500,000+ unique addresses.',
                'Vertical Antenna' => 'An antenna perpendicular to the ground, often used in limited-space situations.'
            ],
            'W' => [
                'WARC Bands' => 'Amateur radio bands allocated during World Administrative Radio Conferences (specifically 30, 17, and 12 meters).',
                'WOTA' => 'Wainwrights On The Air - An amateur radio award program based on the Wainwright hills in England.',
                'WWV' => 'Call sign of the U.S. National Institute of Standards and Technology radio stations broadcasting time signals.',
                'Watt' => 'The SI unit of power, used to measure transmitter output power.',
                'Wavelength' => 'The distance between adjacent peaks of a radio wave.',
                'Worked All States (WAS)' => 'An award for contacting all 50 U.S. states.'
            ],
            'X' => [
                'XIT' => 'Transmit Incremental Tuning - A feature allowing the transmit frequency to be adjusted independently.',
                'XTAL' => 'Crystal - A quartz crystal used for frequency control.'
            ],
            'Y' => [
                'Yagi' => 'A directional antenna consisting of a driven element and parasitic elements.',
                'Yagi-Uda' => 'The full name of the Yagi antenna, named after its inventors.'
            ],
            'Z' => [
                'Zepp Antenna' => 'An end-fed half-wave antenna, originally used on zeppelins.',
                'Z-Match' => 'A versatile antenna tuner circuit design.',
                'Zulu Time' => 'Another term for UTC.'
            ]
        ];

        // Output the glossary
        foreach ($glossary as $letter => $terms) {
            echo "<div class='letter-section' id='letter-$letter'>";
            echo "<h3 class='letter-heading'>$letter</h3>";
            echo "<div class='divider'></div>";

            echo "<dl class='glossary-list'>";
            foreach ($terms as $term => $definition) {
                echo "<dt>$term</dt>";
                echo "<dd>$definition</dd>";
            }
            echo "</dl>";

            echo "<div class='right-align'><a href='#top' class='back-to-top'><i class='material-icons tiny'>arrow_upward</i> Back to top</a></div>";
            echo "</div>";
        }
        ?>
    </div>

    <!-- Reference Section -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>References & Resources</h3>
        <p>For more detailed information on amateur radio terminology, we recommend the following resources:</p>
        <ul class="browser-default">
            <li><a href="http://www.arrl.org/ham-radio-glossary" target="_blank" rel="nofollow noopener">ARRL Ham Radio Glossary</a></li>
            <li><a href="https://rsgb.org/main/get-started-in-amateur-radio/operating-your-new-station/abbreviations/" target="_blank" rel="nofollow noopener">RSGB Operating Abbreviations</a></li>
            <li><a href="?page=operating-guidelines">HOTA Operating Guidelines</a></li>
        </ul>
    </div>
</div>

<style>
.alphabet-nav {
    margin-bottom: 20px;
}

.alphabet-link {
    display: inline-block;
    padding: 5px 8px;
    margin: 2px;
    color: #455a64;
    font-weight: 500;
    border-radius: 2px;
}

.alphabet-link:hover {
    background-color: #eceff1;
}

.letter-heading {
    color: #455a64;
    font-size: 2rem;
    font-weight: 500;
    padding: 10px 0;
    margin-top: 30px;
    margin-bottom: 0;
}

.letter-section {
    margin-bottom: 40px;
}

.glossary-list dt {
    font-weight: 600;
    color: #263238;
    margin-top: 15px;
    font-size: 1.1rem;
}

.glossary-list dd {
    margin-left: 20px;
    margin-bottom: 15px;
    color: #455a64;
}

.back-to-top {
    color: #607d8b;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
}

.back-to-top i {
    margin-right: 5px;
}

.mt-4 {
    margin-top: 2rem;
}

/* Responsive adjustments */
@media only screen and (max-width: 600px) {
    .alphabet-link {
        padding: 4px 6px;
        margin: 1px;
    }

    .glossary-list dt {
        font-size: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.getElementById('glossary-search');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const definitions = document.querySelectorAll('.glossary-list dt');

        definitions.forEach(function(dt) {
            const term = dt.textContent.toLowerCase();
            const dd = dt.nextElementSibling;
            const definition = dd.textContent.toLowerCase();

            if (term.includes(searchTerm) || definition.includes(searchTerm)) {
                dt.style.display = 'block';
                dd.style.display = 'block';
            } else {
                dt.style.display = 'none';
                dd.style.display = 'none';
            }
        });

        // Show/hide letter sections based on visible terms
        const letterSections = document.querySelectorAll('.letter-section');
        letterSections.forEach(function(section) {
            const visibleTerms = section.querySelectorAll('.glossary-list dt[style="display: block"]');
            if (searchTerm === '' || visibleTerms.length > 0) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });
    });

    // Smooth scroll for alphabet navigation
    document.querySelectorAll('.alphabet-link').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            window.scrollTo({
                top: targetElement.offsetTop - 100,
                behavior: 'smooth'
            });
        });
    });

    // Back to top smooth scroll
    document.querySelectorAll('.back-to-top').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
});
</script>
