<?php
$pageTitle = "Band Plans - HOTA";
$pageDescription = "Information on amateur radio band plans and frequency allocations for Houses on the Air (HOTA) operations.";
include_once('../includes/header.php');
?>

<div class="container">
    <h1>Amateur Radio Band Plans for HOTA Operations</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>Band Plans</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card-panel blue-grey lighten-5">
                <p class="flow-text">
                    This guide provides information on the amateur radio bands most commonly used for HOTA operations.
                    Always check the specific band plans and regulations for your location, as frequency allocations may
                    vary by country and licence class.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content Structure -->
    <div class="row">
        <div class="col s12 m3">
            <!-- Left Side Navigation -->
            <div class="card sticky-nav">
                <div class="card-content">
                    <span class="card-title">On This Page</span>
                    <div class="collection" id="band-nav">
                        <a href="#tlf-bands" class="collection-item">TLF Bands</a>
                        <a href="#elf-bands" class="collection-item">ELF Bands</a>
                        <a href="#vlf-bands" class="collection-item">VLF Bands</a>
                        <a href="#lf-bands" class="collection-item">LF Bands</a>
                        <a href="#hf-bands" class="collection-item">HF Bands</a>
                        <a href="#vhf-bands" class="collection-item">VHF Bands</a>
                        <a href="#uhf-bands" class="collection-item">UHF Bands</a>
                        <a href="#shf-bands" class="collection-item">SHF Bands</a>
                        <a href="#ehf-bands" class="collection-item">EHF Bands</a>
                        <a href="#thf-bands" class="collection-item">THF Bands</a>
                        <a href="#calling-freqs" class="collection-item">HOTA Frequencies</a>
                        <a href="#power-levels" class="collection-item">Power Recommendations</a>
                        <a href="#antenna-calculator" class="collection-item">Antenna Calculator</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m9">
            <!-- TLF Bands (Tremendously Low Frequency) -->
            <section id="tlf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>TLF Bands</span>

                        <p>
                            Tremendously Low Frequency (TLF) is an informal designation for frequencies below 3 Hz.
                            This range is at the boundary between what we traditionally consider radio waves and
                            slow-changing electrical fields. While not officially designated in ITU frequency allocations,
                            these ultra-low frequencies have specialised scientific applications.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>TLF Range (Below 3 Hz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> Below 3 Hz</p>
                                            <p><strong>Wavelength:</strong> Over 100,000 km</p>
                                            <p><strong>Applications:</strong> Scientific research, geophysics, magnetotellurics</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> At these extremely low frequencies, traditional concepts of radio wave propagation begin to change. The wavelengths are larger than the Earth itself, and the distinction between electric fields and radio waves becomes blurred. These frequencies are primarily used for scientific research into Earth's magnetic field, geophysical phenomena, and advanced detection systems.</p>
                                            <p><strong>HOTA Value:</strong> ☆☆☆☆☆ (Beyond amateur radio applications)</p>
                                            <p><strong>Note:</strong> While fascinating from a scientific perspective, TLF is not practical for communication due to extremely slow data rates (potentially minutes or hours per bit) and the massive infrastructure required.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel amber lighten-5">
                                    <h5>Scientific Applications</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h6>Research Areas</h6>
                                            <ul class="browser-default">
                                                <li>Earth's magnetic field monitoring</li>
                                                <li>Underwater geological mapping</li>
                                                <li>Earthquake precursor research</li>
                                                <li>Deep underground/underwater detection</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <h6>Detection Methods</h6>
                                            <ul class="browser-default">
                                                <li>Superconducting quantum interference devices (SQUIDs)</li>
                                                <li>Fluxgate magnetometers</li>
                                                <li>Large baseline sensor arrays</li>
                                                <li>Specialised amplification systems</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ELF Bands (Extremely Low Frequency) -->
            <section id="elf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>ELF Bands</span>

                        <p>
                            Extremely Low Frequency (ELF) bands from 3 Hz to 3 kHz represent the lowest
                            ranges of radio frequency used for communications. These frequencies are primarily
                            utilised by military and scientific applications due to their unique propagation characteristics
                            and enormous wavelengths.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>ELF Range (3 Hz - 3 kHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 3 Hz - 3 kHz</p>
                                            <p><strong>Common Applications:</strong> Submarine communications, geophysics research, underground communications</p>
                                            <p><strong>Notable Systems:</strong></p>
                                            <ul class="browser-default">
                                                <li>76 Hz - Russian ZEVS system</li>
                                                <li>82 Hz - Former US Navy Seafarer/Project ELF</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> ELF signals can penetrate seawater to significant depths (hundreds of meters), making them valuable for submarine communications. They can also penetrate the Earth's crust to some degree. Wavelengths range from 100,000 km to 100 km, requiring enormous antenna systems. Data rates are extremely slow, often just a few characters per minute.</p>
                                            <p><strong>HOTA Value:</strong> ☆☆☆☆☆ (Beyond practical amateur use)</p>
                                            <p><strong>Amateur Activity:</strong> Direct amateur transmissions are not practical due to the enormous infrastructure requirements. Some experimental reception and natural radio phenomena monitoring occurs in this range.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>Natural ELF Phenomena</h5>
                                    <p>Amateur radio enthusiasts sometimes monitor natural radio phenomena in the ELF range:</p>
                                    <ul class="browser-default">
                                        <li><strong>Schumann Resonances:</strong> Global electromagnetic resonances (7.83 Hz and harmonics) caused by lightning</li>
                                        <li><strong>Whistlers:</strong> Lightning-induced radio waves that follow magnetic field lines</li>
                                        <li><strong>Sferics:</strong> Broadband electromagnetic impulses from lightning</li>
                                        <li><strong>Dawn Chorus:</strong> Natural radio emissions resembling bird songs in the audio range</li>
                                    </ul>
                                    <p>Special receivers with audio output and recording capabilities are used to monitor these fascinating natural radio emissions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- VLF Bands (Very Low Frequency) -->
            <section id="vlf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>VLF Bands</span>

                        <p>
                            Very Low Frequency (VLF) bands from 3-30 kHz are primarily used for time signals,
                            navigation beacons, and submarine communications. While direct amateur transmissions
                            are rarely permitted in this range, receiving and studying these signals is a fascinating area
                            of radio experimentation.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>VLF Range (3-30 kHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 3-30 kHz</p>
                                            <p><strong>Common Signals:</strong> Navigation beacons, time signals, military communications</p>
                                            <p><strong>Notable Frequencies:</strong></p>
                                            <ul class="browser-default">
                                                <li>24.0 kHz - NAA US Navy (Cutler, Maine)</li>
                                                <li>19.8 kHz - NWC Australian Navy</li>
                                                <li>17.0 kHz - SAQ Grimeton Radio (historical transmitter)</li>
                                                <li>16.4 kHz - JXN Norwegian transmitter</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> VLF signals propagate as ground waves that follow the Earth's curvature and can reach thousands of kilometers. They also penetrate seawater to a limited depth, making them useful for submarine communications. The wavelengths are enormous (10-100 km), requiring extremely large antennas for efficient transmission.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Receive-only experiments, educational demonstrations)</p>
                                            <p><strong>Amateur Activity:</strong> Amateur activity is generally limited to receiving and monitoring. Some experimental licenses have been granted for extremely limited transmission experiments. Special events like the annual transmission from the Grimeton Radio Station (SAQ) in Sweden on 17.2 kHz are monitored by enthusiasts worldwide.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>VLF Reception Techniques</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h6>Receiving Antennas</h6>
                                            <ul class="browser-default">
                                                <li>Large air-core loops (1-2m diameter)</li>
                                                <li>Ferrite rod antennas with many turns</li>
                                                <li>E-field probes with very high impedance amplifiers</li>
                                                <li>Long wire antennas with matching transformers</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <h6>Reception Equipment</h6>
                                            <ul class="browser-default">
                                                <li>Specialised VLF receivers</li>
                                                <li>Sound card SDR with down-converters</li>
                                                <li>Spectrum analysis software</li>
                                                <li>Specialised filtering for power line noise</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- LF Bands (Low Frequency) -->
            <section id="lf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>LF Bands</span>

                        <p>
                            Low Frequency (LF) bands from 30-300 kHz represent a challenging but rewarding
                            area of experimentation for amateur radio operators. These bands require specialised
                            equipment and large antennas but can provide unique propagation characteristics.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>2200 Metres (135.7-137.8 kHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 135.7-137.8 kHz</p>
                                            <p><strong>Common Modes:</strong> CW, QRSS, Digital (very narrow bandwidth)</p>
                                            <p><strong>Best Times:</strong> Night, especially during winter</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The 2200 meter band is characterized by high atmospheric noise, extreme ground wave propagation, and significant antenna challenges. Signals can travel long distances via ground wave propagation, particularly over seawater. Antenna efficiency is extremely low, requiring specialized designs.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Highly specialized, experimental only)</p>
                                            <p><strong>Note:</strong> Requires large antennas (typically hundreds of meters long or elaborate loading schemes) and power is often limited by regulations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>630 Metres (472-479 kHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 472-479 kHz</p>
                                            <p><strong>Common Modes:</strong> CW, WSPR, JT9, FT8 (specialized versions)</p>
                                            <p><strong>Best Times:</strong> Night, especially during winter</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The 630 meter band offers better efficiency than 2200m but still presents significant antenna challenges. Groundwave propagation extends to hundreds of kilometers, while skywave can reach thousands of kilometers at night. The band is particularly quiet in rural areas, allowing for detection of very weak signals.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Specialized experimental operations)</p>
                                            <p><strong>Note:</strong> Power restrictions typically apply (5W EIRP in many regions) and antennas must be very efficient to be effective.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>LF Equipment Approaches</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h6>Antennas</h6>
                                            <ul class="browser-default">
                                                <li>Highly loaded vertical radiators</li>
                                                <li>Inverted-L with extensive top-loading</li>
                                                <li>T-antennas with significant top-hat capacity</li>
                                                <li>Multiple-turn loops for receiving</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <h6>Equipment</h6>
                                            <ul class="browser-default">
                                                <li>High-Q antenna matching networks</li>
                                                <li>Very narrow bandwidth filters</li>
                                                <li>Low-noise preamplifiers</li>
                                                <li>Digital signal processing software</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- HF Bands -->
            <section id="hf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>HF Bands</span>

                        <!-- Introduction to HF -->
                        <p>
                            The High Frequency (HF) bands from 3-30 MHz are the backbone of HOTA operations, providing both
                            local and long-distance communications depending on band, time of day, and propagation conditions.
                        </p>

                        <div class="row">
                            <!-- 160m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>160 Metres (1.8-2.0 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 1.810-2.000 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW, SSB, Digital</p>
                                            <p><strong>Best Times:</strong> Night and pre-dawn</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The "Top Band" is excellent for nighttime local and regional communication. Highly affected by atmospheric noise and requires substantial antenna size. Great for nighttime HOTA operations to reach nearby chasers.</p>
                                            <p><strong>HOTA Value:</strong> ★★☆☆☆ (Good for night operations, challenging antenna requirements)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 80m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>80/75 Metres (3.5-3.8 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 3.500-3.800 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (3.5-3.58 MHz), SSB (3.6-3.8 MHz), Digital</p>
                                            <p><strong>Best Times:</strong> Night and early morning</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Excellent nighttime band for regional communications. Propagation extends to a few hundred miles at night, with potential for DX during winter. Commonly divided with CW at lower frequencies and voice at upper frequencies.</p>
                                            <p><strong>HOTA Value:</strong> ★★★★☆ (Excellent for reaching a wide audience at night, popular with many operators)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 60m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>60 Metres (5 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 5.258.5-5.406.5 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> SSB, Digital, CW</p>
                                            <p><strong>Best Times:</strong> Day and night with variations</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> UK amateurs have access to several 3 kHz channels within this range. Offers a good compromise between 80m and 40m propagation, with excellent characteristics for NVIS and regional communications.</p>
                                            <p><strong>HOTA Value:</strong> ★★☆☆☆ (Limited allocation, but good propagation characteristics)</p>
                                            <p><strong>Note:</strong> Secondary user status - always check latest Ofcom regulations for specific allocations and power limits (currently 100W PEP maximum).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 40m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>40 Metres (7.0-7.2 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 7.000-7.200 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (7.0-7.04 MHz), SSB (7.05-7.2 MHz), Digital (7.04-7.05 MHz primary)</p>
                                            <p><strong>Best Times:</strong> Good day and night with seasonal variations</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Excellent all-around band that works well both day and night. Provides reliable regional coverage and potential for DX, especially during darkness. A staple band for HOTA operations.</p>
                                            <p><strong>HOTA Value:</strong> ★★★★★ (The workhorse band for many HOTA activations)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 30m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>30 Metres (10.1-10.15 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 10.100-10.150 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW, Digital (no SSB allowed)</p>
                                            <p><strong>Best Times:</strong> Good both day and night</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> A narrow but valuable WARC band with good propagation characteristics. Combines the best aspects of 40m and 20m, making it useful around the clock. No contests allowed, which means less congestion.</p>
                                            <p><strong>HOTA Value:</strong> ★★★☆☆ (Excellent for digital modes and CW operations)</p>
                                            <p><strong>Note:</strong> Secondary allocation with 100W PEP maximum power.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 20m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>20 Metres (14.0-14.35 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 14.000-14.350 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (14.0-14.1 MHz), SSB (14.1-14.35 MHz), Digital (14.07-14.099 MHz primary)</p>
                                            <p><strong>Best Times:</strong> Daytime and early evening</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The premier DX band that often stays open 24 hours. Excellent daytime propagation with worldwide reach. Antenna sizes are manageable for most locations. During solar maxima, can be open around the clock.</p>
                                            <p><strong>HOTA Value:</strong> ★★★★★ (Often the most active band for HOTA operations)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 17m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>17 Metres (18.068-18.168 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 18.068-18.168 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (18.068-18.095 MHz), SSB (18.1-18.168 MHz), Digital (18.095-18.109 MHz primary)</p>
                                            <p><strong>Best Times:</strong> Daytime, early evening</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> A WARC band with excellent DX potential. Less crowded than 20m while offering similar propagation. No contests allowed, making it ideal for casual HOTA operations. Performance highly dependent on solar cycle.</p>
                                            <p><strong>HOTA Value:</strong> ★★★★☆ (Great alternative to 20m, especially when that band is crowded)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 15m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>15 Metres (21.0-21.45 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 21.000-21.450 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (21.0-21.15 MHz), SSB (21.15-21.45 MHz), Digital (21.07-21.1 MHz primary)</p>
                                            <p><strong>Best Times:</strong> Mid-day to early evening</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Excellent daytime DX band that excels during solar maxima. Compact antennas work well. Opens to different parts of the world as the day progresses. More reliable during higher solar activity.</p>
                                            <p><strong>HOTA Value:</strong> ★★★★☆ (Outstanding for daytime DX during good conditions)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 12m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>12 Metres (24.89-24.99 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 24.890-24.990 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (24.89-24.92 MHz), SSB (24.93-24.99 MHz), Digital (24.92-24.93 MHz primary)</p>
                                            <p><strong>Best Times:</strong> Mid-day, highly solar cycle dependent</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> A WARC band that shares characteristics with both 10m and 15m. Excellent for DX during solar maxima but often closed during solar minima. Small antennas are very effective.</p>
                                            <p><strong>HOTA Value:</strong> ★★★☆☆ (Excellent but inconsistent propagation)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 10m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>10 Metres (28.0-29.7 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 28.000-29.700 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> CW (28.0-28.15 MHz), SSB (28.3-29.2 MHz), FM (29.2-29.7 MHz), Digital (28.07-28.15 MHz primary)</p>
                                            <p><strong>Best Times:</strong> Daytime during peak solar activity</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The most solar-dependent HF band. Can provide worldwide propagation with very simple antennas during solar maxima. Almost FM-like characteristics with low noise. Includes FM segment at upper end. Offers sporadic-E propagation in summer regardless of solar cycle.</p>
                                            <p><strong>HOTA Value:</strong> ★★★☆☆ (Amazing during solar peaks, limited other times)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Properly close the row div -->
                    </div> <!-- Properly close the card-content div -->
                </div> <!-- Properly close the card div -->
            </section>

            <!-- VHF Bands -->
            <section id="vhf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>VHF Bands</span>

                        <p>
                            Very High Frequency (VHF) bands from 30-300 MHz are excellent for local and regional
                            HOTA operations, with occasional opportunities for extended communications via
                            tropospheric ducting, sporadic-E, or other propagation enhancements.
                        </p>

                        <div class="row">
                            <!-- 6m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>6 Metres (50-52 MHz) - "The Magic Band"</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 50.000-52.000 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, FM, Digital modes</p>
                                            <p><strong>Best Times:</strong> Summer for sporadic-E, solar maxima for F2</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Bridging HF and VHF, this "Magic Band" can exhibit extraordinary propagation. Famous for unpredictable openings via sporadic-E, meteor scatter, and during solar maxima, F2 propagation. Compact antennas work well.</p>
                                            <p><strong>HOTA Value:</strong> ★★★☆☆ (Unique propagation opportunities but unpredictable)</p>
                                            <p><strong>Calling Frequencies:</strong> 50.110 MHz (SSB/CW), 50.313 MHz (FT8)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>4 Metres (70-70.5 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 70.000-70.500 MHz (UK allocation - not available in many countries)</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, FM, Digital</p>
                                            <p><strong>Best Times:</strong> Variable, summer for sporadic-E</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> A uniquely British band with excellent propagation characteristics. Less crowded than other bands. Offers sporadic-E propagation in summer and good tropo ducting. Limited commercial equipment, but conversions available.</p>
                                            <p><strong>HOTA Value:</strong> ★★★☆☆ (Excellent for UK-based operations)</p>
                                            <p><strong>Calling Frequencies:</strong> 70.200 MHz (SSB/CW), 70.450 MHz (FM), 70.300 MHz (FT8)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2m Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>2 Metres (144-146 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 144.000-146.000 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> FM, SSB, CW, Digital, Satellites</p>
                                            <p><strong>Best Times:</strong> Anytime for local work; special conditions for DX</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The most popular VHF band with excellent equipment availability. Primarily used for local communications via repeaters and simplex. Under enhanced conditions, contacts of hundreds of miles are possible. Excellent for local HOTA activations.</p>
                                            <p><strong>HOTA Value:</strong> ★★★★☆ (Essential for local operations)</p>
                                            <p><strong>Calling Frequencies:</strong> 144.300 MHz (SSB), 145.500 MHz (FM Simplex), 144.174 MHz (FT8)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- UHF Bands -->
            <section id="uhf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>UHF Bands</span>

                        <p>
                            Ultra High Frequency (UHF) bands from 300-3000 MHz provide excellent local
                            communication options for HOTA activations, particularly in urban environments
                            where lower bands might experience more interference.
                        </p>

                        <div class="row">
                            <!-- 70cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>70 Centimetres (430-440 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 430.000-440.000 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> FM, SSB, CW, Digital, Satellites</p>
                                            <p><strong>Best Times:</strong> Anytime for local communications</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The most popular UHF band with good penetration into buildings. Excellent for urban operations with many repeaters available. Compact antennas are very effective. Great for local HOTA operations in congested areas.</p>
                                            <p><strong>HOTA Value:</strong> ★★★☆☆ (Excellent for urban operations)</p>
                                            <p><strong>Calling Frequencies:</strong> 433.500 MHz (FM Simplex in UK), 432.200 MHz (SSB/CW), 432.174 MHz (FT8)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 23cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>23 Centimetres (1240-1325 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 1240-1325 MHz (UK allocation)</p>
                                            <p><strong>Common Modes:</strong> FM, SSB, CW, Digital, ATV</p>
                                            <p><strong>Best Times:</strong> Anytime for local communications</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Excellent for short-range communications with very compact antennas. Used for amateur radio, satellites, and amateur television. Limited equipment availability compared to more popular bands.</p>
                                            <p><strong>HOTA Value:</strong> ★★☆☆☆ (Specialized but rewarding)</p>
                                            <p><strong>Calling Frequency:</strong> 1296.000 MHz (SSB/CW)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 13cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>13 Centimetres (2300-2450 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 2300-2302 MHz, 2310-2350 MHz, 2390-2450 MHz (UK segments)</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, Digital, Wideband</p>
                                            <p><strong>Best Times:</strong> Anytime for local communications</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> This band includes the popular 2.4 GHz ISM range used by Wi-Fi and Bluetooth. Amateur operation often focuses on the segments outside heavy ISM use. Highly directional antennas are common. Line-of-sight propagation dominates.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Specialized equipment needed, but good for technical demonstrations)</p>
                                            <p><strong>Calling Frequency:</strong> 2320.200 MHz (SSB/CW) where available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SHF Bands -->
            <section id="shf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>SHF Bands</span>

                        <p>
                            Super High Frequency (SHF) bands from 3-30 GHz represent the microwave
                            spectrum of amateur radio. These bands offer interesting possibilities for
                            technical demonstrations during HOTA events, though they're less commonly
                            used for routine communications.
                        </p>

                        <div class="row">
                            <!-- 9cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>9 Centimetres (3300-3500 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 3300-3500 MHz (regional variations)</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, Digital, Wideband</p>
                                            <p><strong>Best Times:</strong> Anytime for line-of-sight work</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Strict line-of-sight propagation with highly directional antennas. Often used for experimental work, distance records, and amateur radio contesting. Equipment typically involves modified commercial components or specialised homebrew gear.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Technical interest, educational demonstrations)</p>
                                            <p><strong>Calling Frequency:</strong> 3400.100 MHz in regions where available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 6cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>6 Centimetres (5650-5925 MHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 5650-5925 MHz (regional variations)</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, Digital, Wideband</p>
                                            <p><strong>Best Times:</strong> Anytime for line-of-sight work</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Pure line-of-sight communication with highly directional antennas such as dishes and horns. Signals can be affected by rainfall. Often used for experimental work and distance records. Overlaps with 5 GHz Wi-Fi band in many regions.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Technical demonstrations only)</p>
                                            <p><strong>Calling Frequency:</strong> 5760.100 MHz (where permitted)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>3 Centimetres (10.0-10.5 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 10.0-10.5 GHz (varies by region)</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, Digital, Wideband, WBFM</p>
                                            <p><strong>Best Times:</strong> Anytime for line-of-sight, weather openings</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The most active microwave band, 10 GHz offers interesting propagation possibilities including rain scatter and tropospheric ducting. Equipment often utilizes modified satellite LNBs and commercial components. Highly directional antennas are required. Has achieved impressive distance records.</p>
                                            <p><strong>HOTA Value:</strong> ★★☆☆☆ (Most accessible of the microwave bands)</p>
                                            <p><strong>Calling Frequency:</strong> 10368.100 MHz (narrow band modes)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 1.25cm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>1.25 Centimetres (24.0-24.25 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 24.0-24.25 GHz</p>
                                            <p><strong>Common Modes:</strong> SSB, CW, Digital, Wideband</p>
                                            <p><strong>Best Times:</strong> Clear weather, line-of-sight</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Atmospheric absorption becomes a significant factor at 24 GHz, especially water vapor and rain. Equipment is typically highly specialized with waveguides and dish antennas. Often used for experimental work and as a technical challenge.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Technical demonstrations for special events)</p>
                                            <p><strong>Calling Frequency:</strong> 24048.100 MHz (narrow band)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EHF Bands -->
            <section id="ehf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>EHF Bands</span>

                        <p>
                            Extremely High Frequency (EHF) bands from 30-300 GHz represent the frontier of amateur radio experimentation.
                            These bands are primarily used for technical achievements, experimentation, and advancing the state of the art
                            rather than routine communications.
                        </p>

                        <div class="row">
                            <!-- 6mm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>6 Millimetres (47.0-47.2 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 47.0-47.2 GHz</p>
                                            <p><strong>Common Modes:</strong> CW, Digital, Wideband</p>
                                            <p><strong>Best Times:</strong> Clear, dry weather</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> At these frequencies, atmospheric absorption is severe, especially from oxygen and water vapor. Equipment is highly specialized with custom-built components. Operation typically requires clear line of sight with parabolic dish antennas. Used primarily for experimentation and technical achievements.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Special technical demonstrations only)</p>
                                            <p><strong>Calling Frequency:</strong> 47088.100 MHz</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4mm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>4 Millimetres (75.5-81.5 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 75.5-81.5 GHz (regional variations)</p>
                                            <p><strong>Common Modes:</strong> CW, Digital</p>
                                            <p><strong>Best Times:</strong> Clear, cold, dry weather</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Extreme atmospheric absorption requires specialized equipment and ideal conditions. Range is typically very limited but can be extended with highly directional antennas and optimal weather. Equipment is almost exclusively custom-built or modified from commercial test equipment.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Extremely specialized technical demonstrations)</p>
                                            <p><strong>Calling Frequency:</strong> 76032.100 MHz in most regions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2.5mm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>2.5 Millimetres (119.98-120.02 GHz and 122.25-123.00 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 119.98-120.02 GHz and 122.25-123.00 GHz</p>
                                            <p><strong>Common Modes:</strong> CW, Digital</p>
                                            <p><strong>Best Times:</strong> Optimal weather conditions only</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> Operation at these frequencies represents the cutting edge of amateur radio experimentation. Equipment is highly specialized with custom components and waveguides. Range is extremely limited by atmospheric conditions. Used primarily for technical achievements and record attempts.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Extremely specialized technical demonstrations)</p>
                                            <p><strong>Calling Frequency:</strong> 122250.100 MHz when used</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2mm Band -->
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>2 Millimetres (134-141 GHz and 241-250 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 134-141 GHz and 241-250 GHz</p>
                                            <p><strong>Common Modes:</strong> CW, Digital</p>
                                            <p><strong>Best Times:</strong> Optimal weather conditions only</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> The frontier of amateur radio experimentation. Equipment at these frequencies is almost entirely custom-built by specialists in microwave engineering. Ranges are typically very short, but impressive technical achievements have been made. The 241-250 GHz allocation represents the highest frequency currently available to amateur radio operators.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Extreme technical specialization)</p>
                                            <p><strong>Calling Frequency:</strong> 134928.100 MHz in the lower band when used</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- THF Bands -->
            <section id="thf-bands" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>THF Bands</span>

                        <p>
                            Tremendously High Frequency (THF) bands from 300 GHz to 3 THz represent the cutting edge
                            of amateur radio experimentation. These bands are at the boundary between radio and
                            optical techniques, and operations here are primarily research-oriented.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>1mm Band (300 GHz)</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> Around 300 GHz (varies by country)</p>
                                            <p><strong>Common Modes:</strong> Simple modulated signals, experimental</p>
                                            <p><strong>Best Times:</strong> Cold, dry conditions only</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> At these frequencies, atmospheric absorption is extremely severe, particularly from oxygen and water vapor. Equipment is highly specialized, typically using quasi-optical techniques that combine traditional RF methods with optical approaches. Signal propagation is limited to line-of-sight and is heavily affected by atmospheric conditions.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Primarily of academic interest)</p>
                                            <p><strong>Note:</strong> Operations in this range are typically conducted by research institutions and advanced experimenters.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel band-block">
                                    <h5>500 GHz to 1 THz Range</h5>
                                    <div class="row">
                                        <div class="col s12 m5">
                                            <p><strong>Frequency Range:</strong> 500 GHz to 1 THz</p>
                                            <p><strong>Common Modes:</strong> Basic detection and experimental signals</p>
                                            <p><strong>Best Times:</strong> Extremely specific atmospheric windows</p>
                                        </div>
                                        <div class="col s12 m7">
                                            <p><strong>Characteristics:</strong> This range represents the transitional area between traditional radio techniques and optical methods. Signals are extremely attenuated by the atmosphere, with only narrow windows of usability. Equipment typically employs frequency multiplier chains, quantum cascade lasers, or other specialized sources. Waveguides become impractically small, so quasi-optical methods are necessary.</p>
                                            <p><strong>HOTA Value:</strong> ★☆☆☆☆ (Purely experimental)</p>
                                            <p><strong>Note:</strong> Any amateur activities in this range are contributing to scientific knowledge of propagation and equipment design.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>THF Equipment Approaches</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h6>Signal Generation</h6>
                                            <ul class="browser-default">
                                                <li>Frequency multiplication from lower microwave sources</li>
                                                <li>Quantum cascade lasers</li>
                                                <li>Gunn diodes with multipliers</li>
                                                <li>Specialised solid-state devices</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <h6>Detection Methods</h6>
                                            <ul class="browser-default">
                                                <li>Schottky barrier diodes</li>
                                                <li>Bolometric detectors</li>
                                                <li>Heterodyne techniques with sub-harmonic mixers</li>
                                                <li>Quasi-optical focusing with lens systems</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="card-panel amber lighten-5 mt-3">
                                    <h5>Technical and Regulatory Challenges</h5>
                                    <ul class="browser-default">
                                        <li>Most THF work is experimental and research-oriented rather than communication-focused</li>
                                        <li>Equipment is typically custom-built or adapted from scientific instruments</li>
                                        <li>Power levels are extremely low, often measured in microwatts</li>
                                        <li>Regulatory status varies significantly by country; many administrations have not formally allocated these bands</li>
                                        <li>Distance records are typically measured in meters or kilometers rather than the global distances possible at HF</li>
                                        <li>Operations often require special experimental licenses or research permits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- HOTA Calling Frequencies -->
            <section id="calling-freqs" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">cell_tower</i>HOTA Recommended Frequencies</span>

                        <p>
                            While HOTA operations can take place anywhere within the amateur bands according to
                            your licence privileges, these frequencies are recommended as good starting points
                            for HOTA activities in the UK.
                        </p>

                        <div class="table-responsive">
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Band</th>
                                        <th>CW (MHz)</th>
                                        <th>SSB (MHz)</th>
                                        <th>Digital (MHz)</th>
                                        <th>FM (MHz)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>160m</td>
                                        <td>1.836</td>
                                        <td>1.933</td>
                                        <td>1.840 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>80m</td>
                                        <td>3.530</td>
                                        <td>3.733</td>
                                        <td>3.573 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>60m</td>
                                        <td>5.362</td>
                                        <td>5.362 (LSB)</td>
                                        <td>5.357 (channel dependent)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>40m</td>
                                        <td>7.030</td>
                                        <td>7.133</td>
                                        <td>7.074 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>30m</td>
                                        <td>10.118</td>
                                        <td>-</td>
                                        <td>10.136 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>20m</td>
                                        <td>14.030</td>
                                        <td>14.133</td>
                                        <td>14.074 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>17m</td>
                                        <td>18.080</td>
                                        <td>18.133</td>
                                        <td>18.100 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>15m</td>
                                        <td>21.030</td>
                                        <td>21.133</td>
                                        <td>21.074 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>12m</td>
                                        <td>24.906</td>
                                        <td>24.933</td>
                                        <td>24.915 (FT8)</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>10m</td>
                                        <td>28.030</td>
                                        <td>28.433</td>
                                        <td>28.074 (FT8)</td>
                                        <td>29.550</td>
                                    </tr>
                                    <tr>
                                        <td>6m</td>
                                        <td>50.090</td>
                                        <td>50.150</td>
                                        <td>50.313 (FT8)</td>
                                        <td>51.510</td>
                                    </tr>
                                    <tr>
                                        <td>4m</td>
                                        <td>70.200</td>
                                        <td>70.200</td>
                                        <td>70.300 (FT8)</td>
                                        <td>70.450</td>
                                    </tr>
                                    <tr>
                                        <td>2m</td>
                                        <td>144.050</td>
                                        <td>144.300</td>
                                        <td>144.174 (FT8)</td>
                                        <td>145.500</td>
                                    </tr>
                                    <tr>
                                        <td>70cm</td>
                                        <td>432.050</td>
                                        <td>432.200</td>
                                        <td>432.174 (FT8)</td>
                                        <td>433.500</td>
                                    </tr>
                                    <tr>
                                        <td>23cm</td>
                                        <td>1296.050</td>
                                        <td>1296.200</td>
                                        <td>1296.174 (FT8)</td>
                                        <td>1297.500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-panel blue-grey lighten-5 mt-3">
                            <h5>UK Frequency Usage Notes</h5>
                            <ul class="browser-default">
                                <li>Always listen before transmitting to ensure the frequency is clear.</li>
                                <li>UK band plans may differ from IARU Region 1 recommendations in some details.</li>
                                <li>When calling "CQ HOTA," move off frequency if the calling frequency is busy.</li>
                                <li>For digital modes, follow established frequency usage patterns for your mode.</li>
                                <li>Respect band plans and licence conditions – UK band limits are strictly enforced by Ofcom.</li>
                                <li>Follow power limits: foundation 25W, intermediate 400W, full 1,000W (unless otherwise specified).</li>
                                <li>Special rules apply to 60m and 30m bands, which have secondary status (100W max).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Power Recommendations -->
            <section id="power-levels" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">power</i>Power Level Recommendations</span>

                        <p>
                            Using appropriate power levels for your HOTA operation helps ensure effective communication
                            while following good amateur practice and licence limitations.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel">
                                    <h5>General Power Guidelines</h5>
                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th>Operating Condition</th>
                                                <th>Recommended Power Level</th>
                                                <th>Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Indoor operations</td>
                                                <td>5-25W (QRP to low power)</td>
                                                <td>Consider RF exposure limits in confined spaces</td>
                                            </tr>
                                            <tr>
                                                <td>Portable operations</td>
                                                <td>25-100W (low to medium power)</td>
                                                <td>Balance between effectiveness and battery consumption</td>
                                            </tr>
                                            <tr>
                                                <td>Fixed station operations</td>
                                                <td>Up to licence limits</td>
                                                <td>Higher power justifiable for difficult conditions</td>
                                            </tr>
                                            <tr>
                                                <td>VHF/UHF FM operations</td>
                                                <td>5-50W</td>
                                                <td>More than adequate for most local communications</td>
                                            </tr>
                                            <tr>
                                                <td>Digital modes</td>
                                                <td>25-50% of voice power</td>
                                                <td>Many digital modes are effective with reduced power</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-panel amber lighten-5">
                            <h5>The HOTA Power Philosophy</h5>
                            <p>
                                For HOTA operations, we encourage using the minimum power necessary to maintain reliable communications.
                                This approach:
                            </p>
                            <ul class="browser-default">
                                <li>Minimises interference to other stations</li>
                                <li>Reduces RF exposure concerns</li>
                                <li>Conserves battery power for portable operations</li>
                                <li>Demonstrates operating skill rather than "brute force"</li>
                                <li>Enables better shared use of the bands</li>
                            </ul>
                            <p>
                                Remember that doubling power provides only a marginal signal strength increase (3 dB),
                                while improvements in antenna height or efficiency often yield much greater benefits.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Antenna Calculator -->
            <section id="antenna-calculator" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">calculate</i>Antenna Length Calculator</span>

                        <p>
                            Use this calculator to determine antenna lengths for common antenna types. Enter the
                            frequency in MHz and get results in both imperial and metric units.
                        </p>

                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="frequency" type="number" min="1.8" max="450" step="0.001" value="14.200" class="validate">
                                    <label for="frequency">Frequency (MHz)</label>
                                </div>

                                <button class="btn blue-grey waves-effect waves-light" id="calculate-btn">
                                    <i class="material-icons left">calculate</i>Calculate
                                </button>
                            </div>
                        </div>

                        <div class="row mt-3" id="results" style="display: none;">
                            <div class="col s12">
                                <div class="card-panel blue-grey lighten-4">
                                    <h5 class="center-align">Results for <span id="result-freq"></span> MHz</h5>

                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th>Antenna Type</th>
                                                <th>Metres</th>
                                                <th>Feet</th>
                                                <th>Feet-Inches</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Quarter-Wave Vertical</td>
                                                <td id="quarter-m">-</td>
                                                <td id="quarter-ft">-</td>
                                                <td id="quarter-ftin">-</td>
                                            </tr>
                                            <tr>
                                                <td>Half-Wave Dipole (total)</td>
                                                <td id="dipole-m">-</td>
                                                <td id="dipole-ft">-</td>
                                                <td id="dipole-ftin">-</td>
                                            </tr>
                                            <tr>
                                                <td>Half-Wave Dipole (each leg)</td>
                                                <td id="dipole-leg-m">-</td>
                                                <td id="dipole-leg-ft">-</td>
                                                <td id="dipole-leg-ftin">-</td>
                                            </tr>
                                            <tr>
                                                <td>Full-Wave Loop (circumference)</td>
                                                <td id="loop-m">-</td>
                                                <td id="loop-ft">-</td>
                                                <td id="loop-ftin">-</td>
                                            </tr>
                                            <tr>
                                                <td>5/8 Wave Vertical</td>
                                                <td id="five-eighth-m">-</td>
                                                <td id="five-eighth-ft">-</td>
                                                <td id="five-eighth-ftin">-</td>
                                            </tr>
                                            <tr>
                                                <td>Quarter-Wave Radial</td>
                                                <td id="radial-m">-</td>
                                                <td id="radial-ft">-</td>
                                                <td id="radial-ftin">-</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="card-panel mt-2 blue darken-1 white-text">
                                        <h6 class="center-align">Velocity Factor Adjustments</h6>
                                        <p>
                                            The calculations above assume antennas in free space with wire elements.
                                            For insulated wire, multiply by 0.95. For coax-based antennas (like traps),
                                            use the coax's specific velocity factor (typically 0.66-0.82).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<style>
.sticky-nav {
    position: sticky;
    top: 80px;
}

.band-block {
    margin: 10px 0;
}

.mt-2 {
    margin-top: 1rem;
}

.mt-3 {
    margin-top: 1.5rem;
}

.table-responsive {
    overflow-x: auto;
}

@media only screen and (max-width: 992px) {
    .sticky-nav {
        position: relative;
        top: 0;
        margin-bottom: 1rem;
    }

    .table-responsive table {
        width: 100%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize scrollspy
    var elems = document.querySelectorAll('.scrollspy');
    var instances = M.ScrollSpy.init(elems, {
        scrollOffset: 100
    });

    // Antenna calculator functionality
    document.getElementById('calculate-btn').addEventListener('click', function() {
        let frequency = parseFloat(document.getElementById('frequency').value);

        if (isNaN(frequency) || frequency <= 0) {
            M.toast({html: 'Please enter a valid frequency'});
            return;
        }

        // Show results panel
        document.getElementById('results').style.display = 'block';
        document.getElementById('result-freq').textContent = frequency.toFixed(3);

        // Calculate antenna lengths
        let quarterWaveM = 71.5 / frequency;
        let halfWaveM = 143 / frequency;
        let fullWaveM = 306 / frequency;
        let fiveEighthM = 178.7 / frequency;
        let radialM = 73.5 / frequency;  // Slight adjustment for ground effects

        // Convert to feet
        let quarterWaveFt = quarterWaveM * 3.28084;
        let halfWaveFt = halfWaveM * 3.28084;
        let fullWaveFt = fullWaveM * 3.28084;
        let fiveEighthFt = fiveEighthM * 3.28084;
        let radialFt = radialM * 3.28084;

        // Update the display - metres
        document.getElementById('quarter-m').textContent = quarterWaveM.toFixed(2) + ' m';
        document.getElementById('dipole-m').textContent = halfWaveM.toFixed(2) + ' m';
        document.getElementById('dipole-leg-m').textContent = (halfWaveM / 2).toFixed(2) + ' m';
        document.getElementById('loop-m').textContent = fullWaveM.toFixed(2) + ' m';
        document.getElementById('five-eighth-m').textContent = fiveEighthM.toFixed(2) + ' m';
        document.getElementById('radial-m').textContent = radialM.toFixed(2) + ' m';

        // Update the display - feet decimal
        document.getElementById('quarter-ft').textContent = quarterWaveFt.toFixed(2) + ' ft';
        document.getElementById('dipole-ft').textContent = halfWaveFt.toFixed(2) + ' ft';
        document.getElementById('dipole-leg-ft').textContent = (halfWaveFt / 2).toFixed(2) + ' ft';
        document.getElementById('loop-ft').textContent = fullWaveFt.toFixed(2) + ' ft';
        document.getElementById('five-eighth-ft').textContent = fiveEighthFt.toFixed(2) + ' ft';
        document.getElementById('radial-ft').textContent = radialFt.toFixed(2) + ' ft';

        // Update the display - feet and inches
        document.getElementById('quarter-ftin').textContent = feetInchesFormat(quarterWaveFt);
        document.getElementById('dipole-ftin').textContent = feetInchesFormat(halfWaveFt);
        document.getElementById('dipole-leg-ftin').textContent = feetInchesFormat(halfWaveFt / 2);
        document.getElementById('loop-ftin').textContent = feetInchesFormat(fullWaveFt);
        document.getElementById('five-eighth-ftin').textContent = feetInchesFormat(fiveEighthFt);
        document.getElementById('radial-ftin').textContent = feetInchesFormat(radialFt);

        // Scroll to results
        document.getElementById('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    });

    // Function to format decimal feet as feet and inches
    function feetInchesFormat(decimalFeet) {
        let feet = Math.floor(decimalFeet);
        let inches = Math.round((decimalFeet - feet) * 12);
        // Handle case where inches rounds to 12
        if (inches === 12) {
            feet += 1;
            inches = 0;
        }
        return feet + "' " + inches + '"';
    }
});
</script>

<?php include_once('../includes/footer.php'); ?>
