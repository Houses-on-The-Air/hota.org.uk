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

    <!-- Search and Filter Controls -->
    <div class="card">
        <div class="card-content">
            <div class="row mb-0">
                <div class="col s12 m8">
                    <div class="input-field">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="glossary-search" placeholder="Search terms or definitions..." autocomplete="off">
                        <label for="glossary-search">Search Glossary</label>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="input-field">
                        <select id="category-filter">
                            <option value="all" selected>All Categories</option>
                            <option value="hota">HOTA Specific</option>
                            <option value="antenna">Antennas</option>
                            <option value="modes">Operating Modes</option>
                            <option value="technical">Technical Terms</option>
                            <option value="organizations">Organizations</option>
                        </select>
                        <label>Filter By Category</label>
                    </div>
                </div>
            </div>
            <div class="search-stats">
                <span id="search-count">Showing all terms</span>
                <a href="#" id="clear-search" class="right" style="display: none;">
                    <i class="material-icons left tiny">cancel</i>Clear Search
                </a>
            </div>
        </div>
    </div>

    <!-- Sticky Alphabet Navigation -->
    <div id="alphabet-nav-wrapper" class="sticky-nav z-depth-1">
        <div class="alphabet-nav" id="alphabet-nav">
            <div class="center-align">
                <?php
                $letters = range('A', 'Z');
                foreach ($letters as $letter) {
                    echo "<a href=\"#letter-$letter\" class=\"alphabet-link\" data-letter=\"$letter\">$letter</a> ";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Glossary Content -->
    <div class="glossary-content">
        <?php
        // Define categories for terms
        $categories = [
            'ADIF' => ['technical'],
            'APRS' => ['technical', 'modes'],
            'ARES' => ['organizations'],
            'ARRL' => ['organizations'],
            'ATV' => ['modes'],
            'Activation' => ['hota'],
            'Activator' => ['hota'],
            'Address' => ['hota'],
            'Balun' => ['antenna', 'technical'],
            'Band' => ['technical'],
            'Band Plan' => ['technical'],
            'Beacon' => ['technical'],
            'Beam Antenna' => ['antenna'],
            'BFO' => ['technical'],
            'Break-In' => ['modes', 'technical'],
            'Bridge' => ['hota'],
            'CQ' => ['modes'],
            'CW' => ['modes'],
            'Call Sign' => ['technical'],
            'Certificate' => ['hota'],
            'Contest' => ['modes'],
            'Country Cottage' => ['hota'],
            'DX' => ['technical'],
            'DXpedition' => ['technical'],
            'Dead Band' => ['technical'],
            'Detached House' => ['hota'],
            'Digital Mode' => ['modes'],
            'Dipole' => ['antenna'],
            'Directionality' => ['antenna', 'technical'],
            'EZNEC' => ['antenna', 'technical'],
            'EME' => ['modes', 'technical'],
            'EIRP' => ['technical'],
            'Elmer' => ['technical'],
            'End-Fed' => ['antenna'],
            'Eyeball QSO' => ['technical'],
            'FT8' => ['modes', 'technical'],
            'Field Day' => ['modes'],
            'Filter' => ['technical'],
            'Fox Hunt' => ['technical'],
            'Frequency' => ['technical'],
            'Full Break-In' => ['modes', 'technical'],
            'Front-to-Back Ratio' => ['antenna', 'technical'],
            'Gray Line' => ['technical'],
            'Grid Square' => ['technical'],
            'Gain' => ['antenna', 'technical'],
            'Ground Plane' => ['antenna', 'technical'],
            'Ground Wave' => ['technical'],
            'G5RV' => ['antenna'],
            'HF' => ['technical'],
            'HT' => ['technical'],
            'Heritage House' => ['hota'],
            'Home Station' => ['technical'],
            'HOTA' => ['hota'],
            'House Number' => ['hota'],
            'Hunter' => ['hota'],
            'IMD' => ['technical'],
            'IOTA' => ['organizations'],
            'IRC' => ['technical'],
            'ITU' => ['organizations'],
            'Ionosphere' => ['technical'],
            'Isotropic Antenna' => ['antenna', 'technical'],
            'J-Pole' => ['antenna'],
            'Jumpers' => ['technical'],
            'Junction Box' => ['technical'],
            'Keyer' => ['technical', 'modes'],
            'KHz' => ['technical'],
            'Key' => ['technical', 'modes'],
            'LF' => ['technical'],
            'LNA' => ['technical'],
            'LOTW' => ['technical'],
            'Ladder Line' => ['antenna', 'technical'],
            'Log' => ['technical'],
            'Long Path' => ['technical'],
            'MF' => ['technical'],
            'MHz' => ['technical'],
            'MMDVM' => ['modes', 'technical'],
            'Mansion' => ['hota'],
            'Matchbox' => ['antenna', 'technical'],
            'Mobile Operation' => ['technical'],
            'Multiband Antenna' => ['antenna'],
            'NVIS' => ['technical', 'antenna'],
            'Net' => ['modes'],
            'Noise Blanker' => ['technical'],
            'Notch Filter' => ['technical'],
            'OSCAR' => ['technical'],
            'Offset' => ['technical'],
            'Open Band' => ['technical'],
            'Operation' => ['technical'],
            'PSK31' => ['modes', 'technical'],
            'POTA' => ['organizations'],
            'Packet' => ['modes', 'technical'],
            'Parasitic Element' => ['antenna'],
            'Portable Operation' => ['technical'],
            'Propagation' => ['technical'],
            'PTT' => ['technical'],
            'QRM' => ['technical'],
            'QRN' => ['technical'],
            'QRP' => ['technical'],
            'QRZ' => ['modes'],
            'QSL' => ['technical'],
            'QSO' => ['technical'],
            'QTH' => ['technical'],
            'RTTY' => ['modes', 'technical'],
            'RX' => ['technical'],
            'Radial' => ['antenna', 'technical'],
            'Ragchew' => ['modes'],
            'Repeater' => ['technical'],
            'RF' => ['technical'],
            'RST' => ['technical'],
            'SWL' => ['technical'],
            'SWR' => ['technical', 'antenna'],
            'Semi-Detached House' => ['hota'],
            'Skip' => ['technical'],
            'Sked' => ['technical'],
            'Sporadic-E' => ['technical'],
            'SSB' => ['modes'],
            'SOTA' => ['organizations'],
            'Special Event Station' => ['technical'],
            'Split Operation' => ['technical'],
            'TCVR' => ['technical'],
            'TCXO' => ['technical'],
            'TX' => ['technical'],
            'Terraced House' => ['hota'],
            'Townhouse' => ['hota'],
            'Traffic' => ['technical'],
            'Tropospheric Ducting' => ['technical'],
            'UHF' => ['technical'],
            'UTC' => ['technical'],
            'Unun' => ['antenna', 'technical'],
            'Unique Address' => ['hota'],
            'VFO' => ['technical'],
            'VHF' => ['technical'],
            'VOX' => ['technical'],
            'Victorian Villa' => ['hota'],
            'Vertical Antenna' => ['antenna'],
            'WARC Bands' => ['technical'],
            'WOTA' => ['organizations'],
            'WWV' => ['technical'],
            'Watt' => ['technical'],
            'Wavelength' => ['technical', 'antenna'],
            'Worked All States (WAS)' => ['organizations'],
            'XIT' => ['technical'],
            'XTAL' => ['technical'],
            'Yagi' => ['antenna'],
            'Yagi-Uda' => ['antenna'],
            'Zepp Antenna' => ['antenna'],
            'Z-Match' => ['antenna', 'technical'],
            'Zulu Time' => ['technical'],
            'AF' => ['technical'],
            'AGC' => ['technical'],
            'AM' => ['modes'],
            'AMSAT' => ['organizations'],
            'AMTOR' => ['modes', 'digital'],
            'Aurora' => ['technical'],
            'Amplitude' => ['technical'],
            'Antenna Farm' => ['antenna'],
            'Attenuator' => ['technical'],
            'Azimuth' => ['technical'],
            'Bandpass Filter' => ['technical'],
            'Bandwidth' => ['technical'],
            'Barefoot' => ['technical'],
            'Battery' => ['technical'],
            'Beverage Antenna' => ['antenna'],
            'Bedsit' => ['hota'],
            'Binaural' => ['technical'],
            'Bird' => ['technical'],
            'Birdies' => ['technical'],
            'Bug' => ['modes', 'technical'],
            'Cardboard Box' => ['hota'],
            'Choke' => ['technical', 'antenna'],
            'Cootie Key' => ['modes', 'technical'],
            'Coronal Mass Ejection' => ['technical'],
            'Cross-Band' => ['technical'],
            'D-Layer' => ['technical'],
            'DMR' => ['modes', 'digital'],
            'D-STAR' => ['modes', 'digital'],
            'Deviation' => ['technical'],
            'Digi-MODEM' => ['technical'],
            'Dummy Load' => ['technical', 'antenna'],
            'Duplex' => ['technical'],
            'E-Skip' => ['technical'],
            'Earth-Moon-Earth' => ['modes', 'technical'],
            'EchoLink' => ['modes', 'digital'],
            'Elevation' => ['antenna', 'technical'],
            'F-Layer' => ['technical'],
            'FISTS' => ['organizations'],
            'FSTV' => ['modes'],
            'Faraday Rotation' => ['technical'],
            'Federal Communications Commission' => ['organizations'],
            'Ferrite' => ['technical', 'antenna'],
            'Grey Line' => ['technical'],
            'Grid Dip Meter' => ['technical'],
            'HAAT' => ['antenna', 'technical'],
            'HFLINK' => ['organizations'],
            'Half-Square Antenna' => ['antenna'],
            'Harmonics' => ['technical'],
            'Heritage Program' => ['hota'],
            'Hertz' => ['technical'],
            'Hot Spot' => ['digital', 'technical'],
            'IARU' => ['organizations'],
            'ICAO Phonetics' => ['technical'],
            'IF' => ['technical'],
            'K Index' => ['technical'],
            'MFSK' => ['modes', 'digital'],
            'MUF' => ['technical'],
            'Magnetic Loop' => ['antenna'],
            'Meteor Scatter' => ['modes', 'technical'],
            'Microphone Gain' => ['technical'],
            'Modulation Index' => ['technical'],
            'Noise Figure' => ['technical'],
            'Notch Filter' => ['technical'],
            'Ofcom' => ['organizations'],
            'Over' => ['technical'],
            'Parity' => ['technical', 'digital'],
            'Path Loss' => ['technical'],
            'Pedestrian Mobile' => ['technical'],
            'Phase Noise' => ['technical'],
            'Picket Fencing' => ['technical'],
            'Pile-up' => ['technical'],
            'Pink Ticket' => ['technical'],
            'Polarization' => ['antenna', 'technical'],
            'Pre-amp' => ['technical'],
            'Q-Code' => ['technical'],
            'QRO' => ['technical'],
            'QRT' => ['technical'],
            'QRU' => ['technical'],
            'QRX' => ['technical'],
            'QSY' => ['technical'],
            'QTC' => ['technical'],
            'RBN' => ['technical', 'digital'],
            'RDF' => ['technical'],
            'RF Exposure' => ['technical'],
            'RF Gain' => ['technical'],
            'RIT' => ['technical'],
            'RSQ' => ['technical', 'digital'],
            'Remote Operation' => ['technical'],
            'Robert' => ['hota'],
            'Roofing Filter' => ['technical'],
            'Rotator' => ['antenna', 'technical'],
            'S-Meter' => ['technical'],
            'SDR' => ['technical'],
            'SFI' => ['technical'],
            'SKCC' => ['organizations'],
            'SSN' => ['technical'],
            'SSTV' => ['modes'],
            'Safe Harbor' => ['hota'],
            'Satellite' => ['technical'],
            'Squelch' => ['technical'],
            'TNC' => ['digital', 'technical'],
            'Transceive' => ['technical'],
            'Tropospheric Propagation' => ['technical'],
            'Two-Tone Test' => ['technical'],
            'USB Soundcard Interface' => ['digital', 'technical'],
            'Vertical Polarization' => ['antenna', 'technical'],
            'Virtual Address' => ['hota'],
            'Voice Keyer' => ['technical'],
            'WebSDR' => ['technical', 'digital'],
            'Windom' => ['antenna'],
            'Winlink' => ['modes', 'digital'],
            'Worked All Continents' => ['technical'],
            'WSPR' => ['modes', 'digital'],
            'YL' => ['technical'],
            'Zoned House' => ['hota'],
            'ALE' => ['technical', 'modes'],
            'API' => ['technical'],
            'ARISS' => ['organizations'],
            'Azimuthal Map' => ['technical'],
            'Backscatter' => ['technical'],
            'Balanced Line' => ['antenna', 'technical'],
            'Baofeng' => ['technical'],
            'Boat Anchor' => ['technical'],
            'Buddipole' => ['antenna'],
            'Bug Key' => ['modes', 'technical'],
            'Calling CQ' => ['technical'],
            'Calling Frequency' => ['technical'],
            'Capacitive Hat' => ['antenna', 'technical'],
            'Century Club' => ['organizations'],
            'Channelized Operation' => ['technical'],
            'Chirp' => ['technical'],
            'Circle House' => ['hota'],
            'Circular Polarization' => ['antenna', 'technical'],
            'Cloud Warming' => ['technical'],
            'Coherent CW' => ['modes', 'technical'],
            'Comms House' => ['hota'],
            'Covenanter' => ['hota'],
            'Crown House' => ['hota'],
            'Dayton Hamvention' => ['organizations'],
            'DCS' => ['technical'],
            'De-sensing' => ['technical'],
            'Dielectric' => ['technical'],
            'Doctor House' => ['hota'],
            'Doppler Shift' => ['technical'],
            'Double-Hop' => ['technical'],
            'Edge House' => ['hota'],
            'EHF' => ['technical'],
            'Elecraft' => ['technical'],
            'Elements' => ['antenna', 'technical'],
            'EndFed Random Wire' => ['antenna'],
            'Fan Dipole' => ['antenna'],
            'Feedpoint' => ['antenna', 'technical'],
            'Ferry House' => ['hota'],
            'Field Strength' => ['technical'],
            'Filter Skirt' => ['technical'],
            'First House' => ['hota'],
            'Fishbown' => ['hota'],
            'Flat-topping' => ['technical'],
            'Flint House' => ['hota'],
            'FPC' => ['organizations'],
            'Galvanic Isolation' => ['technical'],
            'Grand House' => ['hota'],
            'GreenCube' => ['technical'],
            'Green Stamp' => ['technical'],
            'Grounding' => ['antenna', 'technical'],
            'Grounded Grid' => ['technical'],
            'Hall House' => ['hota'],
            'Ham Fair' => ['organizations'],
            'Heterodyne' => ['technical'],
            'House Call' => ['hota'],
            'House Manager' => ['hota'],
            'ICPO' => ['organizations'],
            'IDing' => ['technical'],
            'Image Rejection' => ['technical'],
            'Impedance Matching' => ['antenna', 'technical'],
            'Inverted L' => ['antenna'],
            'Iron Horse' => ['hota'],
            'Island House' => ['hota'],
            'JS8Call' => ['modes', 'digital'],
            'Jacket Loss' => ['technical', 'antenna'],
            'Judge House' => ['hota'],
            'Kerchunking' => ['technical'],
            'KiwiSDR' => ['technical'],
            'Knight House' => ['hota'],
            'Lighthouse House' => ['hota'],
            'Limiter' => ['technical'],
            'Linear Amplifier' => ['technical'],
            'Loop On Ground' => ['antenna'],
            'Mill House' => ['hota'],
            'Mirror House' => ['hota'],
            'MOF' => ['technical'],
            'Mystery House' => ['hota'],
            'Nobel House' => ['hota'],
            'Noise Bridge' => ['technical', 'antenna'],
            'Noise Floor' => ['technical'],
            'Old House' => ['hota'],
            'Omnidirectional' => ['antenna', 'technical'],
            'Operating Desk' => ['technical'],
            'Palace House' => ['hota'],
            'Phantom House' => ['hota'],
            'Phase Shift' => ['technical'],
            'Pirate House' => ['hota'],
            'Prefix' => ['technical'],
            'Propagation Beacon' => ['technical'],
            'QRM-Free' => ['technical'],
            'QRP Labs' => ['organizations'],
            'QSL Bureau' => ['organizations'],
            'Quad Antenna' => ['antenna'],
            'Queen House' => ['hota'],
            'Railroad House' => ['hota'],
            'Rainscatter' => ['technical'],
            'Rare Earth' => ['technical'],
            'Reactive Power' => ['technical'],
            'Royal House' => ['hota'],
            'Rubber Duck' => ['antenna'],
            'School House' => ['hota'],
            'SDRplay' => ['technical'],
            'Series Resonance' => ['technical'],
            'Shack' => ['technical'],
            'Shack Sloth' => ['technical'],
            'SHF' => ['technical'],
            'Sloper' => ['antenna'],
            'Smith Chart' => ['technical', 'antenna'],
            'Stone House' => ['hota'],
            'Summer House' => ['hota'],
            'Suffix' => ['technical'],
            'Tea House' => ['hota'],
            'The Old House' => ['hota'],
            'Thermistor' => ['technical'],
            'Tonna' => ['antenna'],
            'Transverter' => ['technical'],
            'Tuna Tin Transmitter' => ['technical'],
            'Twin Lead' => ['antenna', 'technical'],
            'Upper House' => ['hota'],
            'Uplink' => ['technical'],
            'Vacuum House' => ['hota'],
            'Vertical Houses' => ['hota'],
            'VSWR' => ['technical', 'antenna'],
            'Waterhouse' => ['hota'],
            'Waveguide' => ['technical'],
            'West House' => ['hota'],
            'White House' => ['hota'],
            'Winter House' => ['hota'],
            'XYL' => ['technical'],
            'Yaesu' => ['technical'],
            'Yellow House' => ['hota'],
            'Zoo House' => ['hota'],
            'APCO P25' => ['modes', 'digital'],
            'Apartment Complex' => ['hota'],
            'Attenuator Pad' => ['technical'],
            'Audio Filter' => ['technical'],
            'Base Loading' => ['antenna', 'technical'],
            'Battlefield House' => ['hota'],
            'Bidirectional Amplifier' => ['technical'],
            'Butler Matrix' => ['antenna', 'technical'],
            'Clock House' => ['hota'],
            'Collinear Antenna' => ['antenna'],
            'Corner House' => ['hota'],
            'Cross-Polarization' => ['antenna', 'technical'],
            'DDS' => ['technical'],
            'Differential GPS' => ['technical'],
            'Dip Switch' => ['technical'],
            'Direct Conversion' => ['technical'],
            'Earthing' => ['technical', 'antenna'],
            'ERP' => ['technical'],
            'ElectroMagnetic Compatibility' => ['technical'],
            'Executive House' => ['hota'],
            'FCC Part 97' => ['technical'],
            'FEC' => ['technical', 'digital'],
            'Farmhouse' => ['hota'],
            'Fusion' => ['modes', 'digital'],
            'Garden House' => ['hota'],
            'Gatehouse' => ['hota'],
            'Grid Block Keying' => ['technical', 'modes'],
            'Guard Band' => ['technical'],
            'Holiday House' => ['hota'],
            'ICNIRP' => ['organizations'],
            'IQ Modulation' => ['technical'],
            'Image Frequency' => ['technical'],
            'Imported House' => ['hota'],
            'JT65' => ['modes', 'digital'],
            'Key Click' => ['technical', 'modes'],
            'Lake House' => ['hota'],
            'Longhouse' => ['hota'],
            'M-ary FSK' => ['technical', 'modes'],
            'Manhattan Style' => ['technical'],
            'Mountain House' => ['hota'],
            'N-type Connector' => ['technical'],
            'NEC2' => ['antenna', 'technical'],
            'Nixie Tube' => ['technical'],
            'Ocean House' => ['hota'],
            'Octave' => ['technical'],
            'Parasitic Oscillation' => ['technical'],
            'Parsonage' => ['hota'],
            'Pi Network' => ['technical'],
            'Pilot House' => ['hota'],
            'Prairie House' => ['hota'],
            'QSK' => ['technical', 'modes'],
            'QSY Frequency' => ['technical'],
            'Quiet House' => ['hota'],
            'Rectory' => ['hota'],
            'Regenerative Receiver' => ['technical'],
            'Rock House' => ['hota'],
            'Round House' => ['hota'],
            'Salt Path' => ['technical'],
            'Shelter House' => ['hota'],
            'Signal-to-Noise Ratio' => ['technical'],
            'Silver Mica Capacitor' => ['technical'],
            'Stealth Antenna' => ['antenna'],
            'Starship House' => ['hota'],
            'Tempest' => ['technical'],
            'Terminated Folded Dipole' => ['antenna'],
            'Terrace View' => ['hota'],
            'Tree House' => ['hota'],
            'Tunnel Diode' => ['technical'],
            'Ugly Balun' => ['antenna', 'technical'],
            'Unique QTH' => ['hota'],
            'Valley House' => ['hota'],
            'Vector Network Analyzer' => ['technical'],
            'Vista House' => ['hota'],
            'Weather House' => ['hota'],
            'Wire Beam' => ['antenna'],
            'Woodhouse' => ['hota'],
            'XVTR' => ['technical'],
            'Xenia Hamvention' => ['organizations'],
            'Zero Beat' => ['technical'],
            'Zigzag Antenna' => ['antenna'],
        ];

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
                'Address' => 'The specific location information for a house that must be logged for HOTA credit. Must include street address and preferably town/city and postal/zip code.',
                'AF' => 'Audio Frequency - The range of frequencies audible to the human ear (approximately 20 Hz to 20 kHz).',
                'AGC' => 'Automatic Gain Control - A circuit that automatically adjusts receiver gain to maintain relatively constant audio output with varying signal strengths.',
                'AM' => 'Amplitude Modulation - A mode where the carrier wave\'s amplitude is varied in accordance with the transmitted information.',
                'AMSAT' => 'Radio Amateur Satellite Corporation - An international organization that designs, builds, and operates amateur radio satellites.',
                'AMTOR' => 'Amateur Teleprinting Over Radio - A digital mode similar to RTTY but with error correction capabilities.',
                'Aurora' => 'A propagation mode that uses the auroral curtain (Northern or Southern Lights) to reflect VHF signals over long distances.',
                'Amplitude' => 'The maximum value or strength of a signal, often measured from a zero reference.',
                'Antenna Farm' => 'A location with multiple antennas, typically used by operators with several directional antennas for different bands.',
                'ALE' => 'Automatic Link Establishment - A digital protocol that automatically selects the best frequency for HF communications based on current propagation conditions.',
                'API' => 'Application Programming Interface - A set of definitions and protocols used to develop and integrate application software, commonly used in amateur radio logging and digital mode software.',
                'ARISS' => 'Amateur Radio on the International Space Station - A program that coordinates scheduled contacts between students and astronauts using amateur radio equipment installed on the ISS.',
                'Azimuthal Map' => 'A map projection centered on a specific location showing true directions (bearings) and distances to all other points on Earth, useful for antenna pointing and path analysis.',
                'APCO P25' => 'Association of Public-Safety Communications Officials Project 25 - A digital radio communications standard for public safety organizations, sometimes used by amateur radio operators for experimentation.',
                'Apartment Complex' => 'In HOTA terms, a multi-family residential building qualifying for activations, with each apartment considered a separate address for HOTA purposes if it has a unique unit number.',
                'Attenuator Pad' => 'A network of resistors designed to reduce signal amplitude by a precise amount, expressed in decibels (dB).',
                'Audio Filter' => 'A device or circuit used to process audio signals by selectively passing certain frequencies while rejecting others, often used to improve speech intelligibility or reduce noise.'
            ],
            'B' => [
                'Balun' => 'A device used to match balanced and unbalanced electrical systems, particularly for antennas.',
                'Band' => 'A range of frequencies allocated for a specific purpose, such as the 20-meter amateur band.',
                'Band Plan' => 'The voluntary division of an amateur band into segments for different modes and activities.',
                'Beacon' => 'A station that automatically transmits signals to help determine propagation conditions.',
                'Beam Antenna' => 'A directional antenna that focuses radio signals in a particular direction.',
                'BFO' => 'Beat Frequency Oscillator - A circuit used in receivers to make CW and SSB signals audible.',
                'Break-In' => 'A mode of operation that allows the operator to hear between Morse code characters or words.',
                'Bridge' => 'In HOTA terms, operating from a house with a bridge or bridges in its address.',
                'Bandpass Filter' => 'A circuit that allows signals within a specific frequency range to pass through while attenuating others outside this range.',
                'Bandwidth' => 'The range of frequencies occupied by a signal, channel, or transmission. Wider bandwidth typically allows for faster data transmission.',
                'Barefoot' => 'Operating a transceiver without an external amplifier, using only the built-in power output capabilities.',
                'Battery' => 'A device that converts chemical energy to electrical energy, commonly used for portable amateur radio operations.',
                'Beverage Antenna' => 'A long wire receiving antenna (typically multiple wavelengths) mounted close to the ground, known for excellent directivity on lower HF bands.',
                'Bedsit' => 'A HOTA award tier for activating or contacting 100+ unique addresses.',
                'Binaural' => 'Two-channel audio reception allowing the operator to hear different signals in each ear, useful for picking out weak signals.',
                'Bird' => 'Slang for a directional wattmeter made by Bird Electronic Corporation, commonly used to measure transmitter output power.',
                'Birdies' => 'Unwanted signals or spurious emissions generated within a radio receiver that sound like whistles or chirps.',
                'Backscatter' => 'A propagation phenomenon where radio signals are returned from beyond the intended receiving station due to scattering from the ionosphere or other reflective surfaces.',
                'Balanced Line' => 'A transmission line with two conductors that carry equal but opposite voltages relative to ground, helping to reduce unwanted radiation.',
                'Baofeng' => 'A brand of inexpensive handheld transceivers popular among new hams and for emergency communications kits.',
                'Boat Anchor' => 'Affectionate term for older, large, heavy radio equipment, particularly vintage vacuum tube gear.',
                'Buddipole' => 'A popular portable, modular antenna system designed for quick deployment in field operations.',
                'Bug Key' => 'A semi-automatic Morse code key that makes dots automatically using a vibrating pendulum but requires manual creation of dashes.',
                'Base Loading' => 'A method of making an electrically short vertical antenna resonant by adding an inductor at the base of the antenna.',
                'Battlefield House' => 'In HOTA terms, a certificate endorsement for houses located on historical battlefield sites or with "Battlefield" in their address.',
                'Bidirectional Amplifier' => 'An amplifier capable of amplifying signals traveling in both directions through a transmission line.',
                'Butler Matrix' => 'A circuit that allows multiple antennas to be combined into a phased array, enabling beam steering without mechanical rotation.'
            ],
            'C' => [
                'CQ' => 'A general call to any station. When someone "calls CQ," they\'re inviting any station to reply.',
                'CW' => 'Continuous Wave - A mode of communication using Morse code.',
                'Call Sign' => 'A unique identifier assigned to an amateur radio station by the relevant licensing authority.',
                'Certificate' => 'An award issued for achieving specific operating milestones. HOTA offers certificates for various achievement tiers.',
                'Contest' => 'An organized amateur radio event where participants aim to make as many contacts as possible within a specified time period.',
                'Country Cottage' => 'A HOTA award tier for activating or contacting 250,000+ unique addresses.',
                'Cardboard Box' => 'The entry-level HOTA award tier for any participation in the program.',
                'Choke' => 'A component used to block high-frequency signals while allowing DC or low-frequency signals to pass, often used in antenna systems to reduce common-mode currents.',
                'Cootie Key' => 'A type of Morse code key featuring a horizontal lever that can move side to side, producing dots and dashes manually.',
                'Coronal Mass Ejection' => 'A significant release of plasma and magnetic field from the solar corona that can affect radio propagation on Earth when it arrives.',
                'Cross-Band' => 'Operation where transmission occurs on one frequency band and reception on another.',
                'Calling CQ' => 'The practice of making a general call to any amateur radio station, derived from the code "CQ" which means "Calling any station".',
                'Calling Frequency' => 'A designated frequency on a band where operators call CQ or monitor for contacts before moving to another frequency for conversation.',
                'Capacitive Hat' => 'A structure added to the top of a vertical antenna to increase its effective electrical length without increasing its physical height.',
                'Century Club' => 'Various award programs that recognize contacting 100 different entities (countries, counties, grid squares, etc.).',
                'Channelized Operation' => 'Using pre-designated frequencies for operations, common in FM and digital modes, as opposed to freely tuning across a band.',
                'Chirp' => 'An undesirable frequency shift in a transmitted signal, particularly in CW operations, often caused by transmitter instability.',
                'Circle House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Circle" in their address.',
                'Circular Polarization' => 'A radio wave where the electric field rotates as the wave travels, used particularly in satellite communications.',
                'Cloud Warming' => 'Humorous term for high-power transmissions that supposedly heat the ionosphere.',
                'Coherent CW' => 'A high-precision CW mode where transmitters maintain precise phase relationships, allowing weak signal work.',
                'Comms House' => 'In HOTA terms, a certificate endorsement for activating houses that have historical connections to communications.',
                'Clock House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Clock" in their address or featuring notable clocks.',
                'Collinear Antenna' => 'An antenna design where multiple radiating elements are arranged end-to-end in a straight line to increase gain without significantly affecting radiation pattern width.',
                'Corner House' => 'In HOTA terms, a certificate endorsement for houses located on corner lots or with "Corner" in their address.',
                'Cross-Polarization' => 'The component of a radio wave with polarization perpendicular to the intended polarization, often resulting in signal loss between transmitting and receiving antennas.'
            ],
            'D' => [
                'DX' => 'Distant station or long-distance communication.',
                'DXpedition' => 'An expedition to a rare or exotic location specifically to operate amateur radio.',
                'Dead Band' => 'A frequency band with little or no propagation activity.',
                'Detached House' => 'A HOTA award tier for activating or contacting 10,000+ unique addresses.',
                'Digital Mode' => 'Any mode that uses digital encoding for transmission, such as FT8, PSK31, or RTTY.',
                'Dipole' => 'A simple, versatile wire antenna consisting of two equal lengths of wire fed at the center.',
                'Directionality' => 'The ability of an antenna to focus transmitted energy in a specific direction.',
                'D-Layer' => 'The lowest region of the ionosphere that absorbs HF signals during daylight hours, especially affecting lower frequencies.',
                'DMR' => 'Digital Mobile Radio - A digital voice mode using time-division multiple access technology allowing two conversations on a single frequency.',
                'D-STAR' => 'Digital Smart Technologies for Amateur Radio - A digital voice and data protocol developed by the JARL.',
                'Deviation' => 'The amount by which a carrier wave is varied from its center frequency during frequency modulation.',
                'Digi-MODEM' => 'Digital Modulator-Demodulator - A device that converts digital data to audio tones for transmission and vice versa for reception.',
                'Dummy Load' => 'A device that safely dissipates RF energy as heat instead of radiating it as radio waves, used for testing transmitters without creating signals on the air.',
                'DCS' => 'Digital Coded Squelch - A selective calling system using digital data to control receiver squelch operation.',
                'De-sensing' => 'The reduction in receiver sensitivity due to a strong nearby signal, often from a transmitter on the same band.',
                'Dielectric' => 'An insulating material between conductors in antennas, transmission lines, and capacitors that affects signal propagation characteristics.',
                'Doctor House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Doctor" in their address.',
                'Doppler Shift' => 'The change in frequency of a signal caused by relative motion between the transmitter and receiver, significant in satellite communications.',
                'Double-Hop' => 'Propagation where a signal reflects off the ionosphere, then off the Earth, and then off the ionosphere again, enabling very long distance communications.',
                'DDS' => 'Direct Digital Synthesis - A method of producing an analog waveform by generating a digital representation of the waveform and then using a digital-to-analog converter.',
                'Differential GPS' => 'A technique to improve the accuracy of GPS location data by using fixed reference stations to calculate position corrections.',
                'Dip Switch' => 'A small manual electric switch designed for mounting on printed circuit boards, often used to configure radio equipment.',
                'Direct Conversion' => 'A radio receiver design that converts an RF signal directly to audio without an intermediate frequency (IF) stage.'
            ],
            'E' => [
                'EZNEC' => 'A popular antenna modeling software used by amateur radio operators.',
                'EME' => 'Earth-Moon-Earth or Moonbounce - Communication by reflecting radio signals off the moon\'s surface.',
                'EIRP' => 'Effective Isotropic Radiated Power - The actual power radiated in a specific direction by an antenna.',
                'Elmer' => 'An experienced amateur radio operator who mentors newcomers to the hobby.',
                'End-Fed' => 'An antenna fed at one end rather than in the middle.',
                'Eyeball QSO' => 'An in-person meeting between radio amateurs who previously made contact over the air.',
                'E-Skip' => 'Sporadic-E propagation - Signal reflection from intensely ionized patches in the E-layer, enabling long-distance communications.',
                'Earth-Moon-Earth' => 'Also called moonbounce, a technique where radio signals are bounced off the moon\'s surface to reach distant stations.',
                'EchoLink' => 'A system that allows amateur radio stations to communicate through the internet using Voice over IP technology.',
                'Elevation' => 'The angle above the horizon at which an antenna is pointed, particularly important for satellite communications.',
                'Edge House' => 'In HOTA terms, a house located on the edge of a property boundary, eligible for special endorsement.',
                'EHF' => 'Extremely High Frequency - Radio frequencies between 30 GHz and 300 GHz, used for specialized amateur radio experimentation.',
                'Elecraft' => 'A manufacturer of popular high-performance amateur radio transceivers and accessories, known for their modular kits.',
                'Elements' => 'The conductive parts of an antenna that radiate or receive radio signals.',
                'EndFed Random Wire' => 'A simple antenna consisting of a wire of non-resonant length fed at one end, often used for multi-band operation with a matching network.',
                'Earthing' => 'The process of connecting equipment to the Earth\'s conductive surface to ensure electrical safety and improve RF performance, similar to grounding.',
                'ERP' => 'Effective Radiated Power - The amount of power that would have to be radiated by a half-wave dipole to give the same signal strength as the actual antenna in a specific direction.',
                'ElectroMagnetic Compatibility' => 'The ability of electronic equipment to operate correctly in the intended electromagnetic environment without causing interference to other systems.',
                'Executive House' => 'In HOTA terms, a certificate endorsement for houses with "Executive" in their address or associated with government executives.'
            ],
            'F' => [
                'FT8' => 'A digital mode developed by Joe Taylor (K1JT) that allows contacts with weak signals.',
                'Field Day' => 'An annual amateur radio exercise focused on emergency communications preparedness.',
                'Filter' => 'A circuit that passes signals of certain frequencies while rejecting others.',
                'Fox Hunt' => 'A game where participants use radio direction finding to locate a hidden transmitter.',
                'Frequency' => 'The number of cycles per second of a radio wave, measured in Hertz (Hz).',
                'Full Break-In' => 'A mode of CW operation that allows hearing between dots and dashes.',
                'Front-to-Back Ratio' => 'The ratio of an antenna\'s forward gain to its gain in the opposite direction.',
                'F-Layer' => 'The uppermost layer of the ionosphere responsible for most long-distance HF radio propagation.',
                'FISTS' => 'An international organization devoted to promoting and preserving Morse code operation.',
                'FSTV' => 'Fast Scan Television - A mode for transmitting and receiving television images over amateur radio frequencies.',
                'Faraday Rotation' => 'The rotation of polarization of radio waves as they pass through the ionosphere, affecting signal reception.',
                'Federal Communications Commission' => 'The U.S. government agency responsible for regulating amateur radio in the United States (FCC).',
                'Ferrite' => 'A magnetic material used in cores for inductors, transformers, and chokes in RF applications.',
                'Fan Dipole' => 'A multi-band antenna consisting of multiple dipoles of different lengths fed at a common point, resembling a fan shape.',
                'Feedpoint' => 'The point at which a transmission line connects to an antenna, critical for proper impedance matching.',
                'Ferry House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses related to ferry crossings or ferry operations.',
                'Field Strength' => 'The intensity of an electromagnetic field at a given location, often measured to determine antenna performance.',
                'Filter Skirt' => 'The shape of a filter\'s frequency response curve that illustrates how quickly it transitions from pass-band to stop-band.',
                'First House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "First" in their address.',
                'Fishbowl' => 'A transparent enclosure sometimes used to protect outdoor radio equipment from the elements while allowing visual inspection.',
                'Flat-topping' => 'Distortion in an amplified signal when the peaks are clipped or flattened due to overdriving or improper bias.',
                'Flint House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses built primarily of flint stone.',
                'FPC' => 'Federal Preemption Clause - A legal doctrine that prevents local jurisdictions from completely prohibiting amateur radio antennas.',
                'FCC Part 97' => 'The section of the U.S. Federal Communications Commission regulations that governs amateur radio operations.',
                'FEC' => 'Forward Error Correction - A technique that adds redundant data to transmissions to detect and correct errors without retransmission.',
                'Farmhouse' => 'In HOTA terms, a certificate endorsement for activating or contacting houses on working farms or with "Farm" in their address.',
                'Fusion' => 'A digital voice mode developed by Yaesu that allows both digital and conventional FM communications.'
            ],
            'G' => [
                'Gray Line' => 'The twilight zone between night and day where enhanced HF propagation often occurs.',
                'Grid Square' => 'A geographical coordinate system used by amateur radio operators (Maidenhead Locator System).',
                'Gain' => 'The increase in signal strength provided by an antenna compared to a reference antenna.',
                'Ground Plane' => 'A conductive surface that acts as a reflector for radio waves.',
                'Ground Wave' => 'Radio wave propagation along the surface of the Earth.',
                'G5RV' => 'A multi-band wire antenna designed by Louis Varney (G5RV).',
                'Grid Dip Meter' => 'A test instrument used to determine the resonant frequency of an unpowered tuned circuit.',
                'Galvanic Isolation' => 'The prevention of direct electrical current flow between two parts of a circuit while allowing signal or energy to pass.',
                'Grand House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Grand" in their address.',
                'GreenCube' => 'An educational satellite project that includes amateur radio payloads for experimentation and communication.',
                'Green Stamp' => 'A dollar bill enclosed with a QSL card to help cover return postage costs, particularly for international QSLs.',
                'Grounded Grid' => 'A type of vacuum tube amplifier configuration commonly used in amateur radio linear amplifiers.',
                'Grounding' => 'The connection of equipment to earth ground for safety and RF performance reasons.',
                'Garden House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Garden" in their address or houses located within botanical gardens.',
                'Gatehouse' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that historically served as entrance houses to estates or with "Gate" in their address.',
                'Grid Block Keying' => 'A method of keying a vacuum tube transmitter by interrupting the grid bias voltage.',
                'Guard Band' => 'A small frequency range between radio channels or bands left unused to prevent interference between adjacent signals.'
            ],
            'H' => [
                'HF' => 'High Frequency - Radio frequencies between 3 and 30 MHz.',
                'HT' => 'Handheld Transceiver - A portable two-way radio.',
                'Heritage House' => 'In HOTA terms, a house with historical significance.',
                'Home Station' => 'An amateur radio station set up at one\'s residence.',
                'HOTA' => 'Houses on the Air - An amateur radio award program focused on operating from various house locations.',
                'House Number' => 'The numeric or alphanumeric portion of a street address, required for HOTA logging.',
                'Hunter' => 'In HOTA terms, an operator who makes contacts with stations activating house locations.',
                'HAAT' => 'Height Above Average Terrain - A measure of how high an antenna is placed relative to the surrounding landscape.',
                'HFLINK' => 'An organization promoting global HF digital communications for emergency and routine operation.',
                'Half-Square Antenna' => 'A wire antenna consisting of two vertical elements connected by a horizontal wire, providing good low-angle radiation.',
                'Harmonics' => 'Integer multiples of a fundamental frequency that may be generated by transmitters and can cause interference.',
                'Heritage Program' => 'A HOTA initiative focusing on activating and contacting houses with historical significance.',
                'Hot Spot' => 'A personal digital mode access point that connects a local transceiver to digital networks via the internet.',
                'Hall House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Hall" in their address.',
                'Ham Fair' => 'A gathering or convention of amateur radio operators featuring equipment displays, talks, and trading.',
                'Heterodyne' => 'The process of mixing two frequencies to produce sum and difference frequencies, fundamental to superheterodyne receivers.',
                'House Call' => 'In HOTA terms, a scheduled contact between stations for the purpose of a specific HOTA activation.',
                'House Manager' => 'In HOTA terms, a volunteer who oversees the approval and documentation of specific historic houses for the HOTA program.',
                'Holiday House' => 'In HOTA terms, a certificate endorsement for activating or contacting vacation houses or houses with "Holiday" in their address.',
                'ICNIRP' => 'International Commission on Non-Ionizing Radiation Protection - An organization that provides guidelines for RF exposure limits.'
            ],
            'I' => [
                'IMD' => 'Intermodulation Distortion - Unwanted signals created by mixing of two or more signals.',
                'IOTA' => 'Islands On The Air - An award program for contacts with island stations.',
                'IRC' => 'International Reply Coupon - A voucher that can be exchanged for postage stamps in other countries.',
                'ITU' => 'International Telecommunication Union - The United Nations agency that regulates telecommunications.',
                'Ionosphere' => 'The layer of Earth\'s atmosphere that reflects radio waves back to Earth, enabling long-distance HF communication.',
                'Isotropic Antenna' => 'A theoretical antenna that radiates equally in all directions.',
                'IARU' => 'International Amateur Radio Union - A global federation of national amateur radio organizations.',
                'ICAO Phonetics' => 'The standard international phonetic alphabet used by radio operators (Alpha, Bravo, Charlie, etc.).',
                'IF' => 'Intermediate Frequency - A frequency to which a received signal is converted before final detection in a superheterodyne receiver.',
                'ICPO' => 'International Code Proficiency Organization - A group that promotes and certifies Morse code proficiency.',
                'IDing' => 'The process of a station identifying itself with its callsign as required by regulations.',
                'Image Rejection' => 'A receiver\'s ability to eliminate or reduce responses to signals at the image frequency.',
                'Impedance Matching' => 'The process of making one electrical circuit present the same impedance as another to ensure maximum power transfer.',
                'Inverted L' => 'An antenna shaped like an inverted "L" with a vertical segment and horizontal segment, offering good performance in limited space.',
                'Iron Horse' => 'In HOTA terms, a certificate endorsement for houses related to railroads or with "Iron" in their address.',
                'Island House' => 'In HOTA terms, a house located on an island or with "Island" in its address, eligible for special endorsement.',
                'IQ Modulation' => 'A method of modulation using in-phase (I) and quadrature (Q) components, fundamental to many digital modes.',
                'Image Frequency' => 'An undesired frequency that can create interference in superheterodyne receivers due to the mixing process.',
                'Imported House' => 'In HOTA terms, a certificate endorsement for houses that were physically relocated from another country.'
            ],
            'J' => [
                'J-Pole' => 'A type of end-fed vertical antenna with a J-shaped matching section.',
                'Jumpers' => 'Short wires used to connect points in an electrical circuit.',
                'Junction Box' => 'An enclosure housing electrical connections.',
                'JS8Call' => 'A digital mode based on FT8 that enables keyboard-to-keyboard and store-forward messaging capabilities.',
                'Jacket Loss' => 'Power loss in coaxial cables due to heating of the outer insulating jacket by RF energy.',
                'Judge House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses associated with judges or with "Judge" in their address.',
                'JT65' => 'A digital mode developed by Joe Taylor (K1JT) for weak signal communication, particularly popular for EME (moonbounce) operations.'
            ],
            'K' => [
                'Keyer' => 'An electronic device that aids in sending Morse code.',
                'KHz' => 'Kilohertz - 1,000 Hz.',
                'Key' => 'The device used to send Morse code.',
                'K Index' => 'A measure of geomagnetic activity that affects radio propagation, especially at higher latitudes.',
                'Kerchunking' => 'The practice of briefly keying a repeater without identifying, considered poor operating practice.',
                'KiwiSDR' => 'A network of web-accessible Software Defined Receivers around the world that can be accessed by amateur radio operators.',
                'Knight House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Knight" in their address or with historical connections to knighthood.',
                'Key Click' => 'Unwanted broadband signals generated by too rapid keying of a CW transmitter, causing interference on adjacent frequencies.'
            ],
            'L' => [
                'LF' => 'Low Frequency - Radio frequencies between 30 and 300 kHz.',
                'LNA' => 'Low-Noise Amplifier - A device that amplifies weak signals while adding minimal noise.',
                'LOTW' => 'Logbook of the World - The ARRL\'s electronic confirmation system.',
                'Ladder Line' => 'A type of parallel transmission line with insulating spacers.',
                'Log' => 'A record of radio contacts made.',
                'Long Path' => 'The longer of two possible great circle routes between two points on Earth.',
                'Lighthouse House' => 'In HOTA terms, a certificate endorsement for houses built adjacent to or as part of lighthouse structures.',
                'Limiter' => 'A circuit that prevents signal amplitude from exceeding a predetermined level, used to prevent overmodulation.',
                'Linear Amplifier' => 'An RF power amplifier that maintains the linearity of the input signal while increasing its power.',
                'Loop On Ground' => 'A receive-only antenna consisting of a wire loop laid directly on the ground, effective for low-noise reception on lower HF bands.',
                'Lake House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses located on lakes or with "Lake" in their address.',
                'Longhouse' => 'In HOTA terms, a certificate endorsement for activating or contacting traditional longhouses or houses with "Long" in their address.'
            ],
            'M' => [
                'MF' => 'Medium Frequency - Radio frequencies between 300 kHz and 3 MHz.',
                'MHz' => 'Megahertz - 1,000,000 Hz.',
                'MMDVM' => 'Multi-Mode Digital Voice Modem - Hardware for digital voice modes.',
                'Mansion' => 'The highest HOTA award tier for activating or contacting 1,000,000+ unique addresses.',
                'Matchbox' => 'Another term for an antenna tuner.',
                'Mobile Operation' => 'Operating amateur radio from a vehicle in motion.',
                'Multiband Antenna' => 'An antenna designed to work efficiently on multiple frequency bands.',
                'MFSK' => 'Multiple Frequency-Shift Keying - A digital mode that uses multiple tones to encode data.',
                'MUF' => 'Maximum Usable Frequency - The highest frequency that will return to Earth from the ionosphere at a specific time and path.',
                'Magnetic Loop' => 'A small transmitting/receiving loop antenna with good performance despite its compact size, useful where space is limited.',
                'Meteor Scatter' => 'A propagation mode using the ionized trails of meteors to reflect radio signals, allowing brief communications over extended distances.',
                'Modulation Index' => 'A measure of the extent of modulation applied to a carrier signal, affecting bandwidth and signal quality.',
                'Mill House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that were once mills or contain "Mill" in their address.',
                'Mirror House' => 'In HOTA terms, a certificate endorsement for houses with unusual mirror features or "Mirror" in their address.',
                'MOF' => 'Maximum Observed Frequency - The highest frequency at which signals are observed to return from the ionosphere on a specific path.',
                'M-ary FSK' => 'A form of frequency-shift keying that uses multiple frequency shifts to encode more than one bit per symbol.',
                'Manhattan Style' => 'A construction technique for building electronic circuits using small pads of copper cut from printed circuit board material.',
                'Mountain House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses located on mountains or with "Mountain" in their address.'
            ],
            'N' => [
                'NVIS' => 'Near Vertical Incidence Skywave - A propagation technique for regional communications.',
                'Net' => 'A scheduled on-air meeting of amateur radio operators.',
                'Noise Blanker' => 'A receiver circuit that reduces certain types of interference.',
                'Notch Filter' => 'A filter that attenuates signals in a narrow frequency range.',
                'Noise Figure' => 'A measure of how much a device degrades the signal-to-noise ratio, important for receiver performance evaluation.',
                'Nobel House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses associated with Nobel Prize winners.',
                'Noise Bridge' => 'A test instrument used to measure complex impedance in antennas and transmission lines.',
                'Noise Floor' => 'The level of background noise in a receiver, below which signals cannot be detected.',
                'N-type Connector' => 'A weatherproof RF connector commonly used in amateur radio applications, especially at VHF and above.',
                'NEC2' => 'Numerical Electromagnetics Code - A popular software implementation for antenna modeling and analysis.',
                'Nixie Tube' => 'A vintage electronic display technology sometimes used in classic amateur radio frequency counters and other equipment.'
            ],
            'O' => [
                'OSCAR' => 'Orbiting Satellite Carrying Amateur Radio - A series of amateur radio satellites.',
                'Offset' => 'The frequency difference between transmit and receive in a repeater operation.',
                'Open Band' => 'A frequency band with good propagation conditions.',
                'Operation' => 'The act of using an amateur radio station.',
                'Ofcom' => 'The Office of Communications - The government-approved regulatory authority for telecommunications in the United Kingdom.',
                'Over' => 'A procedural word indicating the end of a transmission and an invitation for the other station to transmit.',
                'Old House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Old" in their address.',
                'Omnidirectional' => 'An antenna that radiates or receives equally well in all horizontal directions.',
                'Operating Desk' => 'The furniture arrangement where amateur radio equipment is installed and operated.',
                'Ocean House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses located near oceans or with "Ocean" in their address.',
                'Octave' => 'A frequency range where the highest frequency is twice the lowest frequency, representing a doubling in frequency.'
            ],
            'P' => [
                'PSK31' => 'Phase Shift Keying 31 Baud - A popular digital mode for keyboard-to-keyboard communications.',
                'POTA' => 'Parks On The Air - An amateur radio award program for operating from parks.',
                'Packet' => 'A digital mode using AX.25 protocol.',
                'Parasitic Element' => 'An antenna element that is not directly connected to the feedline.',
                'Portable Operation' => 'Operating amateur radio away from a permanent station.',
                'Propagation' => 'The way radio waves travel from one point to another.',
                'PTT' => 'Push To Talk - A switch that activates the transmitter.',
                'Parity' => 'An error detection technique used in digital communications to identify data corruption.',
                'Path Loss' => 'The reduction in power density of a radio wave as it propagates through space.',
                'Pedestrian Mobile' => 'Operating amateur radio while walking, typically with portable equipment.',
                'Phase Noise' => 'Short-term, random fluctuations in the phase of a signal, which can degrade receiver performance.',
                'Picket Fencing' => 'A rapid fluctuation in signal strength, often experienced in mobile operations as the vehicle moves.',
                'Pile-up' => 'A situation where many stations are calling a rare or sought-after station simultaneously.',
                'Pink Ticket' => 'A notice of violation from a regulatory authority regarding improper operation.',
                'Polarization' => 'The orientation of the electric field of a radio wave, typically either horizontal, vertical, or circular.',
                'Pre-amp' => 'A low-noise amplifier placed at or near an antenna to boost weak signals before they travel through the feedline to the receiver.',
                'Palace House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Palace" in their address.',
                'Phantom House' => 'In HOTA terms, a special category for houses that no longer exist but have historical significance.',
                'Phase Shift' => 'The timing difference between two periodic signals, important in phased antenna arrays and modulation techniques.',
                'Pirate House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with historical connections to piracy or with "Pirate" in their address.',
                'Prefix' => 'The part of a call sign that indicates the country or region of the station.',
                'Propagation Beacon' => 'A transmitter that sends continuous signals for monitoring radio wave propagation conditions.',
                'Parasitic Oscillation' => 'Unintended oscillation in an amplifier circuit that can cause interference and reduced efficiency.',
                'Parsonage' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that serve as residences for clergy.',
                'Pi Network' => 'A circuit containing two capacitors and an inductor arranged in the shape of the Greek letter π, often used for impedance matching in tube amplifiers.',
                'Pilot House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Pilot" in their address or historically associated with pilots.',
                'Prairie House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses built in the Prairie School architectural style or located on prairies.'
            ],
            'Q' => [
                'QRM' => 'Man-made interference to radio signals.',
                'QRN' => 'Natural interference to radio signals, like static from lightning.',
                'QRP' => 'Low power operation, typically 5 watts or less.',
                'QRZ' => 'Who is calling me? / A call for a station to identify.',
                'QSL' => 'Confirmation of communication, often via card.',
                'QSO' => 'A radio conversation or contact between two stations.',
                'QTH' => 'Location or station location.',
                'Q-Code' => 'A standardized collection of three-letter codes starting with Q used to communicate efficiently in Morse code and voice operations.',
                'QRO' => 'Increasing power/operating with high power (Q-code).',
                'QRT' => 'Stopping transmission/going off air (Q-code).',
                'QRU' => 'Having nothing more for the contacted station (Q-code).',
                'QRX' => 'A request to standby or pause communication temporarily (Q-code).',
                'QSY' => 'Changing frequency (Q-code).',
                'QTC' => 'Having a message to send (Q-code).',
                'QRM-Free' => 'A frequency or time period with minimal man-made interference.',
                'QRP Labs' => 'A company that produces affordable QRP (low power) amateur radio kits.',
                'QSL Bureau' => 'A system for sending and receiving QSL cards in bulk to reduce postage costs.',
                'Quad Antenna' => 'A directional antenna using full-wavelength loop elements arranged in a square or diamond shape.',
                'Queen House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Queen" in their address or royal connections.',
                'QSK' => 'Full break-in operation in CW mode where the receiver recovers fast enough to hear signals between dots and dashes.',
                'QSY Frequency' => 'A frequency to which stations move after establishing initial contact, freeing the calling frequency.',
                'Quiet House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Quiet" in their address or in designated radio quiet zones.'
            ],
            'R' => [
                'RTTY' => 'Radio Teletype - A digital mode for text communications.',
                'RX' => 'Receive or Receiver.',
                'Radial' => 'A wire extending from the base of a vertical antenna to provide a ground plane.',
                'Ragchew' => 'A long, informal conversation between amateur radio operators.',
                'Repeater' => 'A station that automatically retransmits signals to extend range.',
                'RF' => 'Radio Frequency - The portion of the electromagnetic spectrum used for radio communications.',
                'RST' => 'Readability, Strength, Tone - A signal report system.',
                'RBN' => 'Reverse Beacon Network - A network of automated stations that detect and report CW, RTTY, and FT8 signals.',
                'RDF' => 'Radio Direction Finding - Determining the direction from which a radio signal is received, used for foxhunting and location services.',
                'RF Exposure' => 'The amount of RF energy to which a human body is exposed, regulated for safety purposes.',
                'RF Gain' => 'A control that adjusts the amplification of signals in a receiver\'s RF amplifier stage.',
                'RIT' => 'Receiver Incremental Tuning - A control allowing fine adjustment of receive frequency without changing transmit frequency.',
                'RSQ' => 'Readability, Strength, Quality - A signal report system used for digital modes.',
                'Remote Operation' => 'Controlling an amateur radio station from a different location through internet or other links.',
                'Robert' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that are on Robert Street or similar (Robert Road, Roberts Avenue, etc.).',
                'Roofing Filter' => 'A narrow filter placed early in a receiver\'s signal path to reduce the possibility of strong adjacent signals affecting reception.',
                'Rotator' => 'A mechanical device used to change the direction of a directional antenna remotely.',
                'Railroad House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with historical connections to railroads.',
                'Rainscatter' => 'A VHF/UHF propagation mode where signals scatter off rain droplets, extending communication range.',
                'Rare Earth' => 'Elements used in high-performance magnets found in modern amateur radio equipment components.',
                'Reactive Power' => 'Power that oscillates between the source and load due to stored energy in inductive or capacitive components.',
                'Royal House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with royal connections or "Royal" in their address.',
                'Rubber Duck' => 'A flexible, helically wound antenna commonly used with handheld transceivers.',
                'Rectory' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that serve as residences for clergy, particularly in Anglican traditions.',
                'Regenerative Receiver' => 'A simple radio receiver design that uses positive feedback to increase gain and selectivity.',
                'Rock House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses made of rock or with "Rock" in their address.',
                'Round House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with circular floor plans or with "Round" in their address.'
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
                'Split Operation' => 'Transmitting and receiving on different frequencies.',
                'S-Meter' => 'A display on a receiver showing relative signal strength, typically calibrated in S-units from S1 to S9 and decibels above S9.',
                'SDR' => 'Software Defined Radio - A radio system where components traditionally implemented in hardware are instead implemented by software.',
                'SFI' => 'Solar Flux Index - A measure of 10.7 cm radio emissions from the sun, used as an indicator of solar activity.',
                'SKCC' => 'Straight Key Century Club - An organization promoting the use of manual Morse code keys.',
                'SSN' => 'Sunspot Number - A count of sunspots on the solar surface, influencing HF propagation conditions.',
                'SSTV' => 'Slow Scan Television - A method of picture transmission used by amateur radio operators to transmit and receive static images.',
                'Safe Harbor' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with harbor, port, or marina-related addresses.',
                'Satellite' => 'An orbiting object carrying amateur radio transponders allowing long-distance communications.',
                'Squelch' => 'A circuit that suppresses receiver audio output when no signal is present.',
                'School House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that were formerly schools or contain "School" in their address.',
                'SDRplay' => 'A brand of software-defined radio receivers popular among amateur radio operators.',
                'Series Resonance' => 'A condition where inductive and capacitive reactances cancel each other in a series circuit, important in antenna tuning.',
                'Shack' => 'The room or area where an amateur radio operator houses and operates their equipment.',
                'Shack Sloth' => 'Humorous term for an operator who rarely ventures outside to work on antennas or operate portable.',
                'SHF' => 'Super High Frequency - Radio frequencies between 3 GHz and 30 GHz used for specialized amateur radio work.',
                'Sloper' => 'An antenna that runs at an angle from a high point down toward the ground, often used in limited space situations.',
                'Smith Chart' => 'A graphical calculator designed for solving transmission line and matching problems.',
                'Stone House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses built primarily of stone or with "Stone" in their address.',
                'Summer House' => 'In HOTA terms, a certificate endorsement for activating or contacting seasonal dwellings designated as summer houses.',
                'Suffix' => 'The part of a call sign that follows the prefix, often unique to an individual station.',
                'Salt Path' => 'Corrosion caused by salt spray or sea air affecting antenna systems and outdoor equipment near coastal areas.',
                'Shelter House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses that serve as public shelters or with "Shelter" in their address.',
                'Signal-to-Noise Ratio' => 'The ratio of desired signal power to noise power, often expressed in decibels (dB).',
                'Silver Mica Capacitor' => 'A type of capacitor with excellent stability and low loss, often used in RF circuits.',
                'Stealth Antenna' => 'An antenna designed to be visually inconspicuous, often used where deed restrictions or HOA rules limit visible antenna installations.',
                'Starship House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with futuristic or spaceship-like architecture.'
            ],
            'T' => [
                'TCVR' => 'Transceiver - A combined transmitter and receiver.',
                'TCXO' => 'Temperature Compensated Crystal Oscillator - A high-stability frequency reference.',
                'TX' => 'Transmit or Transmitter.',
                'Terraced House' => 'A HOTA award tier for activating or contacting 500+ unique addresses.',
                'Townhouse' => 'A HOTA award tier for activating or contacting 100,000+ unique addresses.',
                'Traffic' => 'Formal messages handled by amateur radio operators.',
                'Tropospheric Ducting' => 'Enhanced VHF/UHF propagation due to atmospheric conditions.',
                'TNC' => 'Terminal Node Controller - A device used to connect a computer to a radio for packet and other digital modes.',
                'Transceive' => 'To both transmit and receive, or a mode where receiver and transmitter frequencies track together.',
                'Tropospheric Propagation' => 'Radio propagation through the troposphere, typically enabling extended VHF/UHF communications during specific weather conditions.',
                'Two-Tone Test' => 'A test using two non-harmonically related audio frequencies to evaluate SSB transmitter linearity.',
                'Tea House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with historical connections to tea production or ceremonies.',
                'The Old House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with the specific name "The Old House".',
                'Thermistor' => 'A resistor whose resistance varies significantly with temperature, used in some amateur radio equipment for temperature compensation.',
                'Tonna' => 'A brand of VHF/UHF Yagi antennas particularly popular in Europe for contest and weak signal work.',
                'Transverter' => 'A device that converts transmit and receive signals from one frequency band to another.',
                'Tuna Tin Transmitter' => 'A simple, low-power (QRP) transmitter built in a small tin can, a classic beginner\'s project.',
                'Twin Lead' => 'A type of parallel transmission line consisting of two conductors held a precise distance apart by insulating material.',
                'Tempest' => 'The study and prevention of compromising electronic emissions that could reveal sensitive information.',
                'Terminated Folded Dipole' => 'A wideband antenna design where a folded dipole is terminated with a resistor to provide consistent impedance across a wide frequency range.',
                'Terrace View' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with terraced gardens or views.',
                'Tree House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses built in or around trees.'
            ],
            'U' => [
                'UHF' => 'Ultra High Frequency - Radio frequencies between 300 MHz and 3 GHz.',
                'UTC' => 'Coordinated Universal Time - The time standard used in amateur radio.',
                'Unun' => 'A transformer used to match unbalanced impedances.',
                'Unique Address' => 'In HOTA terms, a specific house address that counts once for award credits.',
                'USB Soundcard Interface' => 'A device connecting a computer\'s USB port to a radio for digital mode operations.',
                'Upper House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Upper" in their address.',
                'Uplink' => 'The transmit frequency used to communicate with a satellite or repeater.',
                'Ugly Balun' => 'A simple balun made by winding coaxial cable into a coil, used to prevent common-mode currents on transmission lines.',
                'Unique QTH' => 'In HOTA terms, an address or location that hasn\'t been previously activated or contacted for HOTA credits.'
            ],
            'V' => [
                'VFO' => 'Variable Frequency Oscillator - A circuit that generates a signal whose frequency can be adjusted.',
                'VHF' => 'Very High Frequency - Radio frequencies between 30 and 300 MHz.',
                'VOX' => 'Voice Operated Transmission - A circuit that automatically switches from receive to transmit when you speak.',
                'Victorian Villa' => 'A HOTA award tier for activating or contacting 500,000+ unique addresses.',
                'Vertical Antenna' => 'An antenna perpendicular to the ground, often used in limited-space situations.',
                'Vertical Polarization' => 'Radio waves where the electric field is perpendicular to the Earth\'s surface, typical of vertical antennas.',
                'Virtual Address' => 'In HOTA, a specially assigned address used for Clubs or Special Event activations that don\'t have a permanent physical address.',
                'Voice Keyer' => 'A device that records and plays back voice messages automatically, useful for contest and DX operations.',
                'Vacuum House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses associated with vacuum tube manufacturing.',
                'Vertical Houses' => 'In HOTA terms, a certificate endorsement for activating houses with "Vertical" in their address.',
                'VSWR' => 'Voltage Standing Wave Ratio - A measure of how efficiently RF power is transmitted from source to load, essential for antenna system evaluation.',
                'Valley House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses located in valleys or with "Valley" in their address.',
                'Vector Network Analyzer' => 'A precision test instrument used to measure the network parameters of electrical networks, particularly useful for antenna system analysis.',
                'Vista House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with panoramic views or "Vista" in their address.'
            ],
            'W' => [
                'WARC Bands' => 'Amateur radio bands allocated during World Administrative Radio Conferences (specifically 30, 17, and 12 meters).',
                'WOTA' => 'Wainwrights On The Air - An amateur radio award program based on the Wainwright hills in England.',
                'WWV' => 'Call sign of the U.S. National Institute of Standards and Technology radio stations broadcasting time signals.',
                'Watt' => 'The SI unit of power, used to measure transmitter output power.',
                'Wavelength' => 'The distance between adjacent peaks of a radio wave.',
                'Worked All States (WAS)' => 'An award for contacting all 50 U.S. states.',
                'WebSDR' => 'A Software Defined Radio receiver connected to the internet, allowing many users to access it simultaneously via a web browser.',
                'Windom' => 'An off-center fed dipole antenna named after its developer Loren G. Windom.',
                'Winlink' => 'A worldwide radio email system using amateur radio frequencies, allowing email exchange without internet infrastructure.',
                'Worked All Continents' => 'An award for contacting amateur radio stations on all six continents.',
                'WSPR' => 'Weak Signal Propagation Reporter - A digital protocol designed for probing potential radio propagation paths using low-power transmissions.',
                'Waterhouse' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Water" in their address.',
                'Waveguide' => 'A structure that guides electromagnetic waves along its length, commonly used at microwave frequencies.',
                'West House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "West" in their name or address.',
                'White House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "White" in their name.',
                'Winter House' => 'In HOTA terms, a certificate endorsement for activating or contacting seasonal houses designated as winter residences.',
                'Weather House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses associated with weather monitoring or with "Weather" in their address.',
                'Wire Beam' => 'A directional antenna made entirely from wire elements, often using spreaders to maintain proper element spacing.',
                'Woodhouse' => 'In HOTA terms, a certificate endorsement for activating or contacting houses made primarily of wood or with "Wood" in their address.'
            ],
            'X' => [
                'XIT' => 'Transmit Incremental Tuning - A feature allowing the transmit frequency to be adjusted independently.',
                'XTAL' => 'Crystal - A quartz crystal used for frequency control.',
                'XYL' => 'Ex-Young Lady - A term traditionally used by radio amateurs to refer to the operator\'s wife.',
                'XVTR' => 'Abbreviation for transverter, a device that converts signals from one frequency band to another.'
            ],
            'Y' => [
                'Yagi' => 'A directional antenna consisting of a driven element and parasitic elements.',
                'Yagi-Uda' => 'The full name of the Yagi antenna, named after its inventors.',
                'YL' => 'Young Lady - A female amateur radio operator, regardless of age.',
                'Yaesu' => 'A major manufacturer of amateur radio equipment known for their HF transceivers and VHF/UHF equipment.',
                'Yellow House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with "Yellow" in their address.',
                'Xenia Hamvention' => 'One of the largest amateur radio gatherings in the world, held annually in Xenia, Ohio, USA.'
            ],
            'Z' => [
                'Zepp Antenna' => 'An end-fed half-wave antenna, originally used on zeppelins.',
                'Z-Match' => 'A versatile antenna tuner circuit design.',
                'Zulu Time' => 'Another term for UTC.',
                'Zoned House' => 'In HOTA terms, a house with an address containing a zone number or district code.',
                'Zoo House' => 'In HOTA terms, a certificate endorsement for activating or contacting houses with historical connections to zoos or with "Zoo" in their address.',
                'Zero Beat' => 'The condition where two frequencies are exactly matched, resulting in no audible tone when mixed.',
                'Zigzag Antenna' => 'A folded wire antenna design where the wire follows a zigzag pattern to reduce its physical length while maintaining electrical properties.'
            ]
        ];

        // Output the glossary
        foreach ($glossary as $letter => $terms) {
            echo "<div class='letter-section' id='letter-$letter' data-letter='$letter'>";
            echo "<h3 class='letter-heading'>$letter</h3>";
            echo "<div class='divider'></div>";

            echo "<dl class='glossary-list'>";
            foreach ($terms as $term => $definition) {
                $termCategories = isset($categories[$term]) ? $categories[$term] : ['technical'];
                $categoryClasses = implode(' ', array_map(function($cat) { return 'cat-'.$cat; }, $termCategories));
                $categoryBadges = '';

                foreach ($termCategories as $cat) {
                    $badgeClass = getBadgeClass($cat);
                    $categoryBadges .= "<span class='term-category $badgeClass'>".ucfirst($cat)."</span>";
                }

                echo "<dt class='term $categoryClasses' data-term='".strtolower($term)."'>";
                echo "<span class='term-text'>$term</span>";
                echo "<span class='term-categories hide-on-small-only'>$categoryBadges</span>";
                echo "</dt>";
                echo "<dd class='$categoryClasses'>$definition</dd>";
            }
            echo "</dl>";

            echo "<div class='right-align'><a href='#top' class='back-to-top'><i class='material-icons tiny'>arrow_upward</i> Back to top</a></div>";
            echo "</div>";
        }

        // Helper function to get the badge class based on category
        function getBadgeClass($category) {
            switch($category) {
                case 'hota': return 'blue-grey white-text';
                case 'antenna': return 'green lighten-1 white-text';
                case 'modes': return 'deep-purple lighten-1 white-text';
                case 'technical': return 'grey lighten-1 white-text';
                case 'organizations': return 'amber darken-2 white-text';
                default: return 'grey lighten-2';
            }
        }
        ?>
    </div>

    <!-- No Results Message -->
    <div id="no-results-message" style="display: none;" class="card-panel amber lighten-4">
        <h4><i class="material-icons left">search_off</i>No Matching Terms</h4>
        <p>Your search didn't match any terms or definitions in our glossary. Try:</p>
        <ul class="browser-default">
            <li>Checking the spelling</li>
            <li>Using fewer or different keywords</li>
            <li>Removing the category filter</li>
        </ul>
        <button class="btn amber darken-2 waves-effect waves-light mt-3" id="reset-search">
            <i class="material-icons left">refresh</i>Reset Search
        </button>
    </div>

    <!-- Print Info -->
    <div class="hide-on-med-and-up center-align mt-4 print-controls">
        <a href="#" onclick="window.print(); return false;" class="btn blue-grey waves-effect waves-light">
            <i class="material-icons left">print</i>Print Glossary
        </a>
    </div>

    <!-- Reference Section -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>References & Resources</h3>
        <div class="row">
            <div class="col s12 m8">
                <p>For more detailed information on amateur radio terminology, we recommend the following resources:</p>
                <ul class="browser-default">
                    <li><a href="http://www.arrl.org/ham-radio-glossary" target="_blank" rel="nofollow noopener">ARRL Ham Radio Glossary</a></li>
                    <li><a href="https://rsgb.org/main/publications-archives/radcom/supplementary-information/abbreviations-and-acronyms/" target="_blank" rel="nofollow noopener">RSGB Operating Abbreviations</a></li>
                    <li><a href="http://www.ac6v.com/jargon.htm" target="_blank" rel="nofollow noopener">AC6V's Amateur Radio And DX Reference Guide</a></li>
                    <li><a href="?page=operating-guidelines">HOTA Operating Guidelines</a></li>
                </ul>
            </div>
            <div class="col s12 m4 hide-on-small-only center-align print-controls">
                <a href="#" onclick="window.print(); return false;" class="btn-large blue-grey waves-effect waves-light">
                    <i class="material-icons left">print</i>Print Glossary
                </a>
                <p class="small-text mt-2">Creates a printer-friendly version with all terms</p>
            </div>
        </div>
    </div>
</div>

<style>
/* Sticky Alphabet Navigation */
.sticky-nav {
    position: sticky;
    top: 64px; /* Adjust based on your header height */
    z-index: 10;
    background-color: white;
    border-bottom: 1px solid #e0e0e0;
    padding: 10px 0;
    margin-bottom: 20px;
    transition: box-shadow 0.3s;
}

.alphabet-nav {
    padding: 5px 15px;
}

.alphabet-link {
    display: inline-block;
    padding: 5px 8px;
    margin: 2px;
    color: #455a64;
    font-weight: 500;
    border-radius: 2px;
    transition: all 0.2s;
}

.alphabet-link:hover {
    background-color: #eceff1;
}

.alphabet-link.active {
    background-color: #455a64;
    color: white;
}

.alphabet-link.empty {
    color: #bdbdbd;
    cursor: default;
}

/* Letter headings */
.letter-heading {
    color: #455a64;
    font-size: 2.2rem;
    font-weight: 500;
    padding: 10px 0;
    margin-top: 30px;
    margin-bottom: 0;
    background-color: white;
    position: sticky;
    top: 116px; /* Adjust based on header + alphabet nav */
    z-index: 9;
}

.letter-section {
    margin-bottom: 40px;
    scroll-margin-top: 116px;
}

/* Term styling */
.glossary-list dt {
    font-weight: 600;
    color: #263238;
    margin-top: 15px;
    font-size: 1.1rem;
    border-left: 4px solid #455a64;
    padding-left: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.glossary-list dt.highlight {
    background-color: rgba(255, 235, 59, 0.2);
}

.term-categories {
    display: flex;
    gap: 4px;
}

.term-category {
    font-size: 0.7rem;
    padding: 2px 6px;
    border-radius: 2px;
    font-weight: 400;
}

.glossary-list dd {
    margin-left: 20px;
    margin-bottom: 15px;
    color: #455a64;
    line-height: 1.6;
    padding-left: 8px;
    border-left: 1px solid #e0e0e0;
}

.glossary-list dd.highlight {
    background-color: rgba(255, 235, 59, 0.2);
}

/* Mark highlighted text */
mark {
    background-color: rgba(255, 152, 0, 0.4);
    padding: 0px 2px;
    border-radius: 2px;
}

/* Navigation */
.back-to-top {
    color: #607d8b;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
}

.back-to-top i {
    margin-right: 5px;
}

/* Search stats */
.search-stats {
    color: #757575;
    font-size: 0.9rem;
}

/* Utilities */
.mt-2 {
    margin-top: 0.75rem;
}

.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}

.mb-0 {
    margin-bottom: 0;
}

.small-text {
    font-size: 0.9rem;
    color: #757575;
}

/* Responsive adjustments */
@media only screen and (max-width: 992px) {
    .sticky-nav {
        top: 56px;
    }

    .letter-heading {
        top: 108px;
        font-size: 2rem;
    }

    .letter-section {
        scroll-margin-top: 108px;
    }
}

@media only screen and (max-width: 600px) {
    .alphabet-link {
        padding: 4px 6px;
        font-size: 0.9rem;
        margin: 1px;
    }

    .glossary-list dt {
        font-size: 1rem;
    }
}

/* Print styles */
@media print {
    .breadcrumb-wrapper, .sticky-nav, .card, .back-to-top,
    .print-controls, #no-results-message, header, footer,
    .sidenav-overlay, .sidenav-trigger {
        display: none !important;
    }

    body, .container {
        padding: 0;
        margin: 0;
        width: 100%;
        max-width: 100%;
    }

    .glossary-list dt {
        break-inside: avoid;
        page-break-inside: avoid;
    }

    .letter-heading {
        position: relative;
        break-before: page;
        break-after: avoid;
        page-break-before: always;
        page-break-after: avoid;
    }

    .letter-section:first-child .letter-heading {
        break-before: auto;
        page-break-before: auto;
    }

    .glossary-list dd {
        break-inside: avoid;
        page-break-inside: avoid;
    }

    h1 {
        text-align: center;
    }

    .card-panel.blue-grey {
        border: 1px solid #ddd;
        padding: 15px;
        margin-top: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize selects
    var selectElems = document.querySelectorAll('select');
    M.FormSelect.init(selectElems);

    // Reference key elements
    const searchInput = document.getElementById('glossary-search');
    const categoryFilter = document.getElementById('category-filter');
    const clearSearchBtn = document.getElementById('clear-search');
    const resetSearchBtn = document.getElementById('reset-search');
    const searchCountElem = document.getElementById('search-count');
    const noResultsMessage = document.getElementById('no-results-message');
    const alphabetLinks = document.querySelectorAll('.alphabet-link');
    const letterSections = document.querySelectorAll('.letter-section');

    // Initialize the alphabet navigation
    updateAlphabetNavStatus();

    // ENHANCED SEARCH FUNCTIONALITY
    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;

        const terms = document.querySelectorAll('.glossary-list dt');
        const defs = document.querySelectorAll('.glossary-list dd');

        // Clear previous highlights
        document.querySelectorAll('mark').forEach(mark => {
            let text = mark.textContent;
            mark.replaceWith(text);
        });

        document.querySelectorAll('.highlight').forEach(el => {
            el.classList.remove('highlight');
        });

        // Track visible terms for each letter
        const visibleByLetter = {};
        const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
        letters.forEach(letter => {
            visibleByLetter[letter] = 0;
        });

        // Count total and visible terms
        let visibleCount = 0;
        let totalCount = terms.length;

        // Filter and highlight terms
        terms.forEach((term, index) => {
            const def = defs[index];
            const termText = term.getAttribute('data-term');
            const defText = def.textContent.toLowerCase();

            // Category filtering
            const showByCategory = selectedCategory === 'all' ||
                                   term.classList.contains('cat-' + selectedCategory);

            // Text searching
            const matchesTerm = termText.includes(searchTerm);
            const matchesDef = defText.includes(searchTerm);
            const showBySearch = !searchTerm || matchesTerm || matchesDef;

            const shouldShow = showByCategory && showBySearch;

            if (shouldShow) {
                term.style.display = 'flex';
                def.style.display = 'block';
                visibleCount++;

                // Track which letter sections have visible terms
                const letterSection = term.closest('.letter-section');
                if (letterSection) {
                    const letter = letterSection.getAttribute('data-letter');
                    visibleByLetter[letter] = (visibleByLetter[letter] || 0) + 1;
                }

                // Highlight matching text if there's a search term
                if (searchTerm) {
                    if (matchesTerm) {
                        term.classList.add('highlight');
                        highlightText(term.querySelector('.term-text'), searchTerm);
                    }
                    if (matchesDef) {
                        def.classList.add('highlight');
                        highlightText(def, searchTerm);
                    }
                }
            } else {
                term.style.display = 'none';
                def.style.display = 'none';
            }
        });

        // Update alphabet navigation based on visible terms
        updateAlphabetNavigation(visibleByLetter);

        // Update search count
        if (searchTerm || selectedCategory !== 'all') {
            searchCountElem.textContent = `Showing ${visibleCount} of ${totalCount} terms`;
            clearSearchBtn.style.display = 'inline-block';
        } else {
            searchCountElem.textContent = `Showing all ${totalCount} terms`;
            clearSearchBtn.style.display = 'none';
        }

        // Show/hide letter sections based on visible terms
        letterSections.forEach(section => {
            const letter = section.getAttribute('data-letter');
            if (visibleByLetter[letter] > 0) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });

        // Show/hide no results message
        if (visibleCount === 0) {
            noResultsMessage.style.display = 'block';
        } else {
            noResultsMessage.style.display = 'none';
        }
    }

    // Helper function to highlight text
    function highlightText(element, searchTerm) {
        const content = element.innerHTML;
        const searchPattern = new RegExp('(' + escapeRegExp(searchTerm) + ')', 'gi');
        const highlightedContent = content.replace(searchPattern, '<mark>$1</mark>');
        element.innerHTML = highlightedContent;
    }

    // Helper function to escape special regex characters
    function escapeRegExp(string) {
        return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    }

    // Update alphabet navigation based on visible terms
    function updateAlphabetNavigation(visibleByLetter) {
        alphabetLinks.forEach(link => {
            const letter = link.getAttribute('data-letter');
            if (visibleByLetter[letter] === 0) {
                link.classList.add('empty');
            } else {
                link.classList.remove('empty');
            }
        });
    }

    // Initialize alphabet links with active section highlighting
    function updateAlphabetNavStatus() {
        // Check which letter sections exist in the document
        const existingLetters = new Set();
        letterSections.forEach(section => {
            const letter = section.getAttribute('data-letter');
            existingLetters.add(letter);
        });

        // Mark empty letters in the navigation
        alphabetLinks.forEach(link => {
            const letter = link.getAttribute('data-letter');
            if (!existingLetters.has(letter)) {
                link.classList.add('empty');
            }
        });
    }

    // Active section detection for sticky alphabet navigation
    function updateActiveLetterNav() {
        // Get current scroll position plus some offset
        const scrollPosition = window.scrollY + 150;

        // Find the current visible section
        let currentSection = null;
        letterSections.forEach(section => {
            if (section.style.display !== 'none') {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop &&
                    scrollPosition < sectionTop + sectionHeight) {
                    currentSection = section;
                }
            }
        });

        // Update active state in the alphabet navigation
        alphabetLinks.forEach(link => {
            link.classList.remove('active');
        });

        if (currentSection) {
            const activeLetter = currentSection.getAttribute('data-letter');
            const activeLink = document.querySelector(`.alphabet-link[data-letter="${activeLetter}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    }

    // Add scroll shadow effect to sticky navigation
    function updateStickyNavShadow() {
        const stickyNav = document.getElementById('alphabet-nav-wrapper');
        if (window.scrollY > 100) {
            stickyNav.classList.add('z-depth-1');
        } else {
            stickyNav.classList.remove('z-depth-1');
        }
    }

    // Event Listeners
    searchInput.addEventListener('input', debounce(performSearch, 300));
    categoryFilter.addEventListener('change', performSearch);

    clearSearchBtn.addEventListener('click', function(e) {
        e.preventDefault();
        searchInput.value = '';
        categoryFilter.value = 'all';
        M.FormSelect.init(categoryFilter);
        performSearch();
    });

    resetSearchBtn.addEventListener('click', function() {
        searchInput.value = '';
        categoryFilter.value = 'all';
        M.FormSelect.init(categoryFilter);
        performSearch();
    });

    // Smooth scroll for alphabet navigation
    alphabetLinks.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            if (this.classList.contains('empty')) {
                e.preventDefault();
                return;
            }

            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const yOffset = -120; // Adjust based on your sticky header height
                const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;

                window.scrollTo({top: y, behavior: 'smooth'});
            }
        });
    });

    // Back to top smooth scroll
    document.querySelectorAll('.back-to-top').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    });

    // Update active section on scroll
    window.addEventListener('scroll', debounce(function() {
        updateActiveLetterNav();
        updateStickyNavShadow();
    }, 100));

    // Debounce helper for scroll events
    function debounce(func, wait) {
        let timeout;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }

    // Initial run to set up the page state
    performSearch();
    updateActiveLetterNav();
});
</script>
