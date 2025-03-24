<?php
$pageTitle = "Amateur Radio Band Plans - HOTA";
$pageDescription = "Reference guide to amateur radio band plans for Houses on the Air (HOTA) activities. Find recommended frequencies for HOTA operations across different bands.";
include_once('../includes/header.php');
?>

<div class="container">
    <h1>Amateur Radio Band Plans</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>Band Plans</li>
        </ul>
    </div>

    <p class="flow-text">Navigating the amateur radio bands effectively is crucial for successful HOTA operations. This guide provides information on recommended frequency ranges and HOTA activity centers.</p>

    <!-- Band Selection -->
    <div class="card-panel">
        <h3>Select a Band</h3>
        <p>Click on a band to view detailed information including recommended HOTA frequencies.</p>

        <div class="row band-buttons">
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-160m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">160m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-80m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">80m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-60m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">60m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-40m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">40m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-30m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">30m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-20m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">20m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-17m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">17m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-15m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">15m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-12m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">12m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#hf-10m" class="btn blue-grey darken-1 waves-effect waves-light full-width-btn">10m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#vhf-6m" class="btn blue-grey lighten-1 waves-effect waves-light full-width-btn">6m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#vhf-2m" class="btn blue-grey lighten-1 waves-effect waves-light full-width-btn">2m</a>
            </div>
            <div class="col s6 m4 l3 xl2">
                <a href="#uhf-70cm" class="btn blue-grey lighten-2 waves-effect waves-light full-width-btn">70cm</a>
            </div>
        </div>
    </div>

    <!-- HOTA Preferred Frequencies -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">star</i>HOTA Preferred Frequencies</span>
            <p>These are the recommended calling frequencies for HOTA activities. Listen around these frequencies to find active stations or announce your own operations.</p>

            <table class="striped highlight responsive-table">
                <thead>
                    <tr>
                        <th>Band</th>
                        <th>SSB (Phone)</th>
                        <th>CW</th>
                        <th>Digital Modes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>80m</td>
                        <td>3.755 MHz</td>
                        <td>3.530 MHz</td>
                        <td>3.573 MHz (FT8/FT4)</td>
                    </tr>
                    <tr>
                        <td>40m</td>
                        <td>7.135 MHz</td>
                        <td>7.030 MHz</td>
                        <td>7.074 MHz (FT8/FT4)</td>
                    </tr>
                    <tr>
                        <td>20m</td>
                        <td>14.255 MHz</td>
                        <td>14.030 MHz</td>
                        <td>14.074 MHz (FT8/FT4)</td>
                    </tr>
                    <tr>
                        <td>15m</td>
                        <td>21.255 MHz</td>
                        <td>21.030 MHz</td>
                        <td>21.074 MHz (FT8/FT4)</td>
                    </tr>
                    <tr>
                        <td>10m</td>
                        <td>28.455 MHz</td>
                        <td>28.030 MHz</td>
                        <td>28.074 MHz (FT8/FT4)</td>
                    </tr>
                    <tr>
                        <td>2m</td>
                        <td>145.500 MHz</td>
                        <td>144.050 MHz</td>
                        <td>144.174 MHz (FT8/FT4)</td>
                    </tr>
                    <tr>
                        <td>70cm</td>
                        <td>433.500 MHz</td>
                        <td>432.050 MHz</td>
                        <td>432.174 MHz (FT8/FT4)</td>
                    </tr>
                </tbody>
            </table>

            <p class="note mt-3"><strong>Note:</strong> Always follow your local band plans and regulations, as they may vary by country or region. If the preferred frequency is in use, move up or down slightly to find a clear frequency.</p>
        </div>
    </div>

    <!-- Antenna Calculator -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">calculate</i>Antenna Length Calculator</span>
            <p>Use this calculator to determine the correct lengths for various antenna types based on your operating frequency.</p>

            <div class="row">
                <div class="col s12 m6">
                    <div class="input-field">
                        <input type="number" id="frequency" min="1.8" max="450" step="0.001" value="14.255">
                        <label for="frequency">Frequency (MHz)</label>
                    </div>

                    <div class="input-field">
                        <select id="antenna-type">
                            <option value="halfwave" selected>Half-wave Dipole</option>
                            <option value="quarterwave">Quarter-wave Vertical</option>
                            <option value="5-8wave">5/8 Wave Vertical</option>
                            <option value="fullwave">Full-wave Loop</option>
                            <option value="j-pole">J-Pole</option>
                            <option value="groundplane">Ground Plane</option>
                            <option value="extended-double-zepp">Extended Double Zepp</option>
                            <option value="g5rv">G5RV</option>
                            <option value="zs6bkw">ZS6BKW / G0GSF</option>
                            <option value="bobtail">Bobtail Curtain</option>
                            <option value="delta-loop">Delta Loop</option>
                            <option value="magnetic-loop">Magnetic Loop</option>
                        </select>
                        <label>Antenna Type</label>
                    </div>

                    <div class="input-field">
                        <select id="velocity-factor">
                            <option value="0.95">Wire in Free Space (0.95)</option>
                            <option value="0.90" selected>Bare Copper Wire (0.90)</option>
                            <option value="0.80">Insulated Wire (0.80)</option>
                            <option value="0.66">RG-6 Coax (0.66)</option>
                            <option value="0.70">RG-8 Coax (0.70)</option>
                            <option value="0.66">RG-58 Coax (0.66)</option>
                            <option value="0.82">450Ω Ladder Line (0.82)</option>
                            <option value="0.91">300Ω Twin Lead (0.91)</option>
                        </select>
                        <label>Velocity Factor</label>
                    </div>

                    <button id="calculate-antenna" class="btn blue-grey darken-1 waves-effect waves-light">
                        <i class="material-icons left">calculate</i>Calculate
                    </button>
                </div>

                <div class="col s12 m6">
                    <div class="card-panel blue-grey lighten-5 results-panel">
                        <h4>Results</h4>
                        <div id="calculation-results">
                            <table class="results-table">
                                <tr>
                                    <td><strong>Total Length:</strong></td>
                                    <td id="total-length">Calculate to see results</td>
                                </tr>
                                <tr id="each-leg-row" style="display: none;">
                                    <td><strong>Each Leg:</strong></td>
                                    <td id="each-leg">Calculate to see results</td>
                                </tr>
                                <tr id="radiator-row" style="display: none;">
                                    <td><strong>Radiator:</strong></td>
                                    <td id="radiator-length">Calculate to see results</td>
                                </tr>
                                <tr id="stub-row" style="display: none;">
                                    <td><strong>Matching Stub:</strong></td>
                                    <td id="stub-length">Calculate to see results</td>
                                </tr>
                                <tr id="radials-row" style="display: none;">
                                    <td><strong>Radials (each):</strong></td>
                                    <td id="radials-length">Calculate to see results</td>
                                </tr>
                                <tr id="circumference-row" style="display: none;">
                                    <td><strong>Circumference:</strong></td>
                                    <td id="circumference-length">Calculate to see results</td>
                                </tr>
                                <tr id="side-length-row" style="display: none;">
                                    <td><strong>Side Length:</strong></td>
                                    <td id="side-length">Calculate to see results</td>
                                </tr>
                                <tr id="element-spacing-row" style="display: none;">
                                    <td><strong>Element Spacing:</strong></td>
                                    <td id="element-spacing">Calculate to see results</td>
                                </tr>
                                <tr id="reflector-row" style="display: none;">
                                    <td><strong>Reflector Length:</strong></td>
                                    <td id="reflector-length">Calculate to see results</td>
                                </tr>
                                <tr id="director-row" style="display: none;">
                                    <td><strong>Director Length:</strong></td>
                                    <td id="director-length">Calculate to see results</td>
                                </tr>
                                <tr>
                                    <td><strong>Wavelength:</strong></td>
                                    <td id="wavelength">Calculate to see results</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card-panel deep-orange lighten-5">
                        <p><strong>Remember:</strong> These calculations provide theoretical lengths. Fine-tuning with an antenna analyzer will give the best results, as environmental factors can affect the resonant frequency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Band Information -->
    <h3 class="mt-4">Detailed Band Information</h3>

    <!-- HF Bands -->
    <div id="hf-160m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">160m Band (1.8-2.0 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 160m band is known as the "Top Band" and is excellent for nighttime communication, especially during winter. It's challenging but rewarding for HOTA operations.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Best at night when D-layer absorption is minimal</li>
                        <li>Seasonal - best in fall and winter</li>
                        <li>High atmospheric noise, especially in summer</li>
                        <li>Primarily regional coverage (100-1500+ km), with potential for DX during optimal conditions</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.800-1.810 MHz</td>
                                <td>CW, Digital</td>
                                <td>DX window</td>
                            </tr>
                            <tr>
                                <td>1.810-1.840 MHz</td>
                                <td>CW, Digital</td>
                                <td>CW primary</td>
                            </tr>
                            <tr>
                                <td>1.840-1.910 MHz</td>
                                <td>SSB, Digital</td>
                                <td>HOTA activity: 1.855 MHz</td>
                            </tr>
                            <tr>
                                <td>1.910-2.000 MHz</td>
                                <td>SSB, Digital</td>
                                <td>General voice operations</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>Efficient antennas for 160m are large, but compromises are possible for portable HOTA operations:</p>
                        <ul class="browser-default">
                            <li>Full-size dipole: 80m (260ft) long</li>
                            <li>Inverted-L: Vertical section + horizontal top</li>
                            <li>Shortened dipole with loading coils</li>
                            <li>Vertical with extensive radial system</li>
                        </ul>
                        <p>For portable: Consider end-fed wires with matching units or loaded verticals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-80m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">80m Band (3.5-4.0 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 80m band is excellent for regional communications and nighttime DX. It's a popular band for HOTA activities, especially during evening and overnight hours.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Reliable nighttime communications</li>
                        <li>Daytime propagation limited to ground wave (100-200 km)</li>
                        <li>Nighttime: Regional to continental distances</li>
                        <li>Winter nights offer the best DX opportunities</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3.500-3.570 MHz</td>
                                <td>CW</td>
                                <td>CW preferred (HOTA: 3.530 MHz)</td>
                            </tr>
                            <tr>
                                <td>3.570-3.600 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 3.573 MHz</td>
                            </tr>
                            <tr>
                                <td>3.600-3.800 MHz</td>
                                <td>SSB, Digital</td>
                                <td>HOTA voice activity: 3.755 MHz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>80m antennas are still large but more manageable than 160m:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~40m (130ft)</li>
                            <li>Inverted-V: Good compromise for limited space</li>
                            <li>Vertical: 20m (65ft) with radials</li>
                            <li>OCFD (Off-Center Fed Dipole): Multi-band operation</li>
                        </ul>
                        <p>For portable: Consider end-fed half-waves or shortened loaded antennas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-60m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">60m Band (5.3-5.4 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 60m band is a relatively new addition to many amateur radio allocations. It offers a good compromise between 80m and 40m propagation characteristics.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Fills the gap between 80m and 40m</li>
                        <li>Daytime: Regional communications</li>
                        <li>Nighttime: Potential for good DX</li>
                        <li>Less crowded than 40m and 80m</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3" class="center-align"><strong>Note: 60m allocations vary significantly by country</strong></td>
                            </tr>
                            <tr>
                                <td>5.351-5.354 MHz</td>
                                <td>CW, Digital</td>
                                <td>WRC-15 allocation</td>
                            </tr>
                            <tr>
                                <td>5.354-5.366 MHz</td>
                                <td>SSB, Digital</td>
                                <td>WRC-15 allocation</td>
                            </tr>
                            <tr>
                                <td>5.3515, 5.3665 MHz</td>
                                <td>FT8</td>
                                <td>Common digital frequencies</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="note"><strong>Important:</strong> Always check your local regulations for 60m operation as channelized access and power limits often apply.</p>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>60m offers more manageable antenna sizes than 80m:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~26m (86ft)</li>
                            <li>Vertical: ~13m (43ft) with radials</li>
                            <li>Modified 40m antennas often work well</li>
                            <li>Multi-band antennas with tuners</li>
                        </ul>
                        <p>For portable: End-fed wires work well if properly matched.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-40m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">40m Band (7.0-7.3 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 40m band is one of the most versatile HF bands, offering good propagation both day and night. It's excellent for HOTA operations and a favorite for many portable activations.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Reliable 24 hours a day</li>
                        <li>Daytime: Regional communications (100-1000+ km)</li>
                        <li>Nighttime: DX potential worldwide</li>
                        <li>Less affected by solar conditions than higher bands</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7.000-7.025 MHz</td>
                                <td>CW</td>
                                <td>DX window</td>
                            </tr>
                            <tr>
                                <td>7.025-7.040 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 7.030 MHz</td>
                            </tr>
                            <tr>
                                <td>7.040-7.075 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 7.074 MHz</td>
                            </tr>
                            <tr>
                                <td>7.075-7.125 MHz</td>
                                <td>SSB</td>
                                <td>HOTA voice activity: 7.135 MHz</td>
                            </tr>
                            <tr>
                                <td>7.125-7.200 MHz</td>
                                <td>SSB</td>
                                <td>General voice operations</td>
                            </tr>
                            <tr>
                                <td>7.200-7.300 MHz</td>
                                <td>SSB</td>
                                <td>Region-dependent allocations</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>40m offers practical antenna options for many locations:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~20m (66ft)</li>
                            <li>Inverted-V: Good for limited space</li>
                            <li>Vertical: ~10m (33ft) with radials</li>
                            <li>End-fed half-wave (EFHW)</li>
                        </ul>
                        <p>For portable: Many excellent options including lightweight wire dipoles, verticals, and end-fed antennas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-30m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">30m Band (10.1-10.15 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 30m band is a WARC (World Administrative Radio Conference) band that offers excellent propagation characteristics between 20m and 40m. It's a relatively narrow band with no voice allocations.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Often open 24 hours a day</li>
                        <li>Suffers less from daytime D-layer absorption than 40m</li>
                        <li>Less affected by nighttime attenuation than 20m</li>
                        <li>Generally less crowded than contest bands</li>
                        <li>Reliable for medium to long distance communications</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10.100-10.130 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 10.117 MHz</td>
                            </tr>
                            <tr>
                                <td>10.130-10.150 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 10.136 MHz</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="note"><strong>Important:</strong> SSB operation is not permitted on this band. CW and narrow-band digital modes only.</p>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>30m offers good compromise for antenna size:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~14m (46ft)</li>
                            <li>Vertical: ~7m (23ft) with radials</li>
                            <li>Shortened loaded antennas work well</li>
                            <li>Off-center fed dipoles with 40m/20m tuning</li>
                        </ul>
                        <p>For portable: End-fed wires with a matching unit or a 40m dipole with an antenna tuner work well.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-20m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">20m Band (14.0-14.35 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 20m band is the premier DX band for amateur radio, offering excellent worldwide propagation during daylight hours. It's a primary band for HOTA international operations.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Best daytime DX band</li>
                        <li>Often open 24 hours during good conditions</li>
                        <li>Reliable worldwide communications</li>
                        <li>Responds well to peaks in the solar cycle</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>14.000-14.070 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 14.030 MHz</td>
                            </tr>
                            <tr>
                                <td>14.070-14.099 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 14.074 MHz</td>
                            </tr>
                            <tr>
                                <td>14.100-14.150 MHz</td>
                                <td>Digital, Beacons</td>
                                <td>Includes NCDXF beacons</td>
                            </tr>
                            <tr>
                                <td>14.150-14.350 MHz</td>
                                <td>SSB</td>
                                <td>HOTA voice activity: 14.255 MHz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>20m offers very practical antenna options for most situations:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~10m (33ft)</li>
                            <li>Vertical: ~5m (16.5ft) with radials</li>
                            <li>2-element Yagi: Excellent gain</li>
                            <li>Portable hex beam: Compact directional</li>
                            <li>End-fed wire: Great for portable</li>
                        </ul>
                        <p>For portable: Even simple wire antennas perform well on this band.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-17m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">17m Band (18.068-18.168 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 17m band is another WARC band that provides excellent DX opportunities. It offers characteristics between 20m and 15m, and often provides good propagation when 20m is overcrowded or 15m hasn't opened yet.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Primarily a daytime band</li>
                        <li>Often open when higher bands (15m, 12m, 10m) are closed</li>
                        <li>Less crowded than 20m</li>
                        <li>Good DX potential with moderate solar activity</li>
                        <li>Tends to close after sunset but can remain open on long paths</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18.068-18.095 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 18.085 MHz</td>
                            </tr>
                            <tr>
                                <td>18.095-18.109 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 18.100 MHz</td>
                            </tr>
                            <tr>
                                <td>18.109-18.111 MHz</td>
                                <td>Beacons</td>
                                <td>International beacon network</td>
                            </tr>
                            <tr>
                                <td>18.111-18.168 MHz</td>
                                <td>SSB, Digital</td>
                                <td>HOTA voice activity: 18.135 MHz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>17m allows reasonably sized effective antennas:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~8m (26ft)</li>
                            <li>Vertical: ~4m (13ft) with radials</li>
                            <li>Small Yagi antennas provide excellent gain</li>
                            <li>Works well with multi-band trap verticals</li>
                        </ul>
                        <p>For portable: Wire dipoles and end-fed wires are very effective and easily deployable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-15m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">15m Band (21.0-21.45 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 15m band is an excellent daytime DX band that comes alive during solar cycle peaks. It offers outstanding long-distance communication capabilities with modest antenna systems.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Primarily a daytime band</li>
                        <li>Highly dependent on solar activity</li>
                        <li>Excellent long-distance propagation during solar maximum</li>
                        <li>Can support multiple propagation hops worldwide</li>
                        <li>Often closes after sunset except during peak solar activity</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>21.000-21.070 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 21.030 MHz</td>
                            </tr>
                            <tr>
                                <td>21.070-21.110 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 21.074 MHz, RTTY: 21.080 MHz</td>
                            </tr>
                            <tr>
                                <td>21.110-21.150 MHz</td>
                                <td>Digital, CW</td>
                                <td>Mixed narrow-band modes</td>
                            </tr>
                            <tr>
                                <td>21.150-21.450 MHz</td>
                                <td>SSB, Digital</td>
                                <td>HOTA voice activity: 21.255 MHz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>15m offers very manageable antenna sizes:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~6.7m (22ft)</li>
                            <li>Vertical: ~3.3m (11ft) with radials</li>
                            <li>2 or 3 element Yagi: Easily supported on lightweight masts</li>
                            <li>Effective with multi-band verticals and trap dipoles</li>
                        </ul>
                        <p>For portable: Simple wire antennas at reasonable heights perform very effectively on this band.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-12m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">12m Band (24.89-24.99 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 12m band is a WARC band that offers propagation characteristics between 10m and 15m. It can provide excellent DX opportunities, especially around solar maximum periods.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Strictly a daytime band</li>
                        <li>Highly dependent on solar activity</li>
                        <li>Can produce exceptional DX during solar maximum</li>
                        <li>Often supports long-path propagation</li>
                        <li>Can experience Sporadic-E propagation in summer months</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24.890-24.915 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 24.905 MHz</td>
                            </tr>
                            <tr>
                                <td>24.915-24.929 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 24.915 MHz</td>
                            </tr>
                            <tr>
                                <td>24.929-24.931 MHz</td>
                                <td>Beacons</td>
                                <td>International beacon network</td>
                            </tr>
                            <tr>
                                <td>24.931-24.990 MHz</td>
                                <td>SSB, Digital</td>
                                <td>HOTA voice activity: 24.955 MHz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>12m offers compact, efficient antenna options:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~5.9m (19.5ft)</li>
                            <li>Vertical: ~3m (9.8ft) with radials</li>
                            <li>Small directional antennas very effective</li>
                            <li>Often works with 10m antennas using a tuner</li>
                        </ul>
                        <p>For portable: Simple wire antennas perform exceptionally well and are easily deployed due to their compact size.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hf-10m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">10m Band (28.0-29.7 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 10m band offers excellent DX potential during solar maximum periods. It combines characteristics of HF and VHF, making it unique for HOTA operations.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Highly dependent on solar cycle</li>
                        <li>Exceptional worldwide DX during solar maxima</li>
                        <li>Sporadic-E propagation possible year-round</li>
                        <li>Can support local communications via ground wave</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>28.000-28.070 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 28.030 MHz</td>
                            </tr>
                            <tr>
                                <td>28.070-28.190 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 28.074 MHz</td>
                            </tr>
                            <tr>
                                <td>28.190-28.300 MHz</td>
                                <td>Beacons</td>
                                <td>Useful for checking propagation</td>
                            </tr>
                            <tr>
                                <td>28.300-29.300 MHz</td>
                                <td>SSB</td>
                                <td>HOTA voice activity: 28.455 MHz</td>
                            </tr>
                            <tr>
                                <td>29.300-29.700 MHz</td>
                                <td>FM</td>
                                <td>Repeater and simplex channels</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>10m offers compact, efficient antenna options:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: Just 5m (16.5ft)</li>
                            <li>Vertical: 2.5m (8.2ft) with radials</li>
                            <li>3-element Yagi: Excellent performance in small footprint</li>
                            <li>Mobile whip: Effective for portable operations</li>
                            <li>Quarter-wave ground plane: Simple and effective</li>
                        </ul>
                        <p>For portable: Small, lightweight antennas can be very effective.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="vhf-6m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">6m Band (50-54 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 6m band is known as the "Magic Band" due to its unpredictable and sometimes spectacular propagation. It exhibits characteristics of both HF and VHF bands, making it unique for HOTA activities.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Multiple propagation modes available</li>
                        <li>Sporadic-E: Common in summer months, offering sudden openings</li>
                        <li>F2 layer: During solar maximum, worldwide propagation</li>
                        <li>Meteor scatter: Brief contacts via meteor trails</li>
                        <li>Tropospheric enhancement: During specific weather conditions</li>
                        <li>Aurora: In high latitudes during geomagnetic storms</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>50.000-50.100 MHz</td>
                                <td>CW, Beacons</td>
                                <td>International beacons present</td>
                            </tr>
                            <tr>
                                <td>50.100-50.300 MHz</td>
                                <td>SSB, CW</td>
                                <td>HOTA activity: 50.150 MHz</td>
                            </tr>
                            <tr>
                                <td>50.300-50.400 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 50.313 MHz, FT4: 50.318 MHz</td>
                            </tr>
                            <tr>
                                <td>50.400-50.800 MHz</td>
                                <td>All modes</td>
                                <td>Mixed mode segment</td>
                            </tr>
                            <tr>
                                <td>50.800-51.000 MHz</td>
                                <td>Digital, Experimental</td>
                                <td>Digital voice, experimental modes</td>
                            </tr>
                            <tr>
                                <td>51.000-54.000 MHz</td>
                                <td>FM, All modes</td>
                                <td>FM repeaters in some countries</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="note"><strong>Important:</strong> Band allocations vary by region - check your local regulations.</p>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>6m antennas are reasonably sized and effective:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: ~3m (9.8ft)</li>
                            <li>3-element Yagi: Very effective with ~2m boom</li>
                            <li>Quarter-wave vertical: ~1.5m (5ft) with 4+ radials</li>
                            <li>Halo: Omni-directional horizontally polarized</li>
                            <li>Moxon: Compact 2-element directional</li>
                        </ul>
                        <p>For portable: Simple dipoles are very effective. Even mobile whips can work well during band openings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="vhf-2m" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">2m Band (144-148 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 2m band is the most popular VHF band, excellent for local HOTA operations, especially in urban environments where noise may affect HF.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Primarily line-of-sight</li>
                        <li>Tropospheric ducting possible</li>
                        <li>Sporadic-E during summer months</li>
                        <li>Satellite operations</li>
                        <li>Typical reliable range: 5-50+ km (more with height)</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>144.000-144.100 MHz</td>
                                <td>CW</td>
                                <td>HOTA activity: 144.050 MHz</td>
                            </tr>
                            <tr>
                                <td>144.100-144.300 MHz</td>
                                <td>SSB, CW</td>
                                <td>Weak signal work</td>
                            </tr>
                            <tr>
                                <td>144.300-144.500 MHz</td>
                                <td>SSB, CW calling</td>
                                <td>144.300 MHz is SSB calling frequency</td>
                            </tr>
                            <tr>
                                <td>144.500-145.800 MHz</td>
                                <td>FM, Digital</td>
                                <td>HOTA activity: 145.500 MHz</td>
                            </tr>
                            <tr>
                                <td>145.800-146.000 MHz</td>
                                <td>Satellite</td>
                                <td>Space communications</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>2m offers very compact antenna options:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: Just 1m (39 inches)</li>
                            <li>5/8 wave vertical: Excellent low-angle radiation</li>
                            <li>J-pole: Easy to build, good performance</li>
                            <li>Yagi: High gain for directional work</li>
                            <li>Slim Jim: Good portable roll-up design</li>
                        </ul>
                        <p>For portable: Small handheld antennas or roll-up J-poles work well. Height is more important than antenna gain for increased range.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="uhf-70cm" class="card band-card mt-4">
        <div class="card-content">
            <span class="card-title">70cm Band (430-440 MHz)</span>

            <div class="row">
                <div class="col s12 m8">
                    <h4>Band Characteristics</h4>
                    <p>The 70cm band is a versatile UHF band that offers reliable local communications for HOTA operations. It works well in urban environments and can provide excellent building penetration compared to higher frequencies.</p>

                    <h5>Propagation</h5>
                    <ul class="browser-default">
                        <li>Primarily line-of-sight</li>
                        <li>Urban range: Typically 3-10 km with handheld radios</li>
                        <li>Enhanced range with elevated antennas</li>
                        <li>Tropospheric ducting possible during specific weather conditions</li>
                        <li>Good building penetration for indoor operations</li>
                        <li>Less susceptible to urban noise than VHF</li>
                    </ul>

                    <h5>Recommended Sub-bands</h5>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Frequency Range</th>
                                <th>Mode</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>430.000-432.000 MHz</td>
                                <td>CW, SSB, Digital</td>
                                <td>HOTA CW activity: 432.050 MHz</td>
                            </tr>
                            <tr>
                                <td>432.000-432.100 MHz</td>
                                <td>CW</td>
                                <td>DX window</td>
                            </tr>
                            <tr>
                                <td>432.100-432.400 MHz</td>
                                <td>SSB, CW</td>
                                <td>SSB calling frequency: 432.200 MHz</td>
                            </tr>
                            <tr>
                                <td>432.400-433.000 MHz</td>
                                <td>Digital</td>
                                <td>FT8: 432.174 MHz</td>
                            </tr>
                            <tr>
                                <td>433.000-435.000 MHz</td>
                                <td>FM simplex</td>
                                <td>HOTA activity: 433.500 MHz</td>
                            </tr>
                            <tr>
                                <td>435.000-438.000 MHz</td>
                                <td>Satellite</td>
                                <td>Shared with amateur satellites</td>
                            </tr>
                            <tr>
                                <td>438.000-440.000 MHz</td>
                                <td>FM repeaters</td>
                                <td>Digital voice systems like DMR, D-STAR</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="note"><strong>Important:</strong> 70cm privileges vary significantly by country, with some having narrower allocations or sharing with other services.</p>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel antenna-panel">
                        <h5><i class="material-icons left">settings_input_antenna</i>Antenna Considerations</h5>
                        <p>70cm offers very compact, efficient antenna options:</p>
                        <ul class="browser-default">
                            <li>Half-wave dipole: Just 33cm (13 inches)</li>
                            <li>5/8 wave vertical: 43cm (17 inches)</li>
                            <li>Yagi antennas: Compact with excellent gain</li>
                            <li>Collinear: High gain omnidirectional</li>
                            <li>Log periodic: Wideband directional</li>
                            <li>Slim Jim: Compact roll-up portable</li>
                        </ul>
                        <p>For portable: Hand-held radio stock antennas can work, but even a small Slim Jim or J-pole dramatically improves performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Antenna Type Reference -->
    <div class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Antenna Types for HOTA Operations</span>

            <p>Different antenna types offer various advantages for HOTA operations. Here's a comparison of common antenna options:</p>

            <div class="row">
                <div class="col s12 m6">
                    <h4>Wire Antennas</h4>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Antenna Type</th>
                                <th>Advantages</th>
                                <th>Challenges</th>
                                <th>Best For</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dipole</td>
                                <td>Simple, efficient, predictable</td>
                                <td>Requires two supports, length</td>
                                <td>Fixed locations</td>
                            </tr>
                            <tr>
                                <td>Inverted-V</td>
                                <td>Single center support, more compact</td>
                                <td>Some performance compromise vs dipole</td>
                                <td>Limited space setups</td>
                            </tr>
                            <tr>
                                <td>End-Fed Half Wave</td>
                                <td>Single support, versatile</td>
                                <td>Needs matching unit, RF feedback possible</td>
                                <td>Portable operations</td>
                            </tr>
                            <tr>
                                <td>Random Wire</td>
                                <td>Very adaptable, simple to deploy</td>
                                <td>Requires tuner, less predictable</td>
                                <td>Improvised setups</td>
                            </tr>
                            <tr>
                                <td>OCF Dipole</td>
                                <td>Multi-band operation</td>
                                <td>Needs balun, specific length</td>
                                <td>Multi-band fixed stations</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col s12 m6">
                    <h4>Vertical & Directional Antennas</h4>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Antenna Type</th>
                                <th>Advantages</th>
                                <th>Challenges</th>
                                <th>Best For</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Quarter-wave Vertical</td>
                                <td>Low takeoff angle, good DX</td>
                                <td>Needs good ground/radials</td>
                                <td>DX hunting</td>
                            </tr>
                            <tr>
                                <td>5/8 Wave Vertical</td>
                                <td>Better gain than 1/4 wave</td>
                                <td>Longer, needs matching</td>
                                <td>VHF mobile/base</td>
                            </tr>
                            <tr>
                                <td>Yagi</td>
                                <td>Directional gain, front-to-back ratio</td>
                                <td>Size, needs rotor, narrowband</td>
                                <td>Directed DX work</td>
                            </tr>
                            <tr>
                                <td>Hex Beam</td>
                                <td>Compact directional, multi-band</td>
                                <td>Complex setup, moderate cost</td>
                                <td>Limited space DX</td>
                            </tr>
                            <tr>
                                <td>J-Pole</td>
                                <td>No radials needed, good gain</td>
                                <td>Narrowband, specific length</td>
                                <td>VHF/UHF fixed stations</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-panel blue-grey lighten-5 mt-3">
                <h5 class="center-align">Portable Antenna Recommendations for HOTA</h5>
                <p>For portable HOTA operations, we recommend these versatile options:</p>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="center-align">
                            <i class="material-icons medium">golf_course</i>
                            <h5>End-Fed Half Wave</h5>
                            <p>Single support point, efficient, easy to deploy in various configurations.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="center-align">
                            <i class="material-icons medium">architecture</i>
                            <h5>Linked Dipole</h5>
                            <p>Multi-band operation without a tuner, customizable for your preferred bands.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="center-align">
                            <i class="material-icons medium">vertical_align_top</i>
                            <h5>Portable Vertical</h5>
                            <p>Low profile, good DX potential, can be set up in space-constrained locations.</p>
                        </div>
                    </div>
                </div>
                <p class="center-align mt-2">
                    <a href="?page=portable-antennas" class="btn blue-grey darken-1 waves-effect waves-light">
                        <i class="material-icons left">settings_input_antenna</i>See Our Portable Antenna Guide
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Tips for HOTA Band Operations -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3><i class="material-icons left">lightbulb</i>Operating Tips for HOTA</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>Band Selection Strategy</h4>
                <ul class="browser-default">
                    <li><strong>Morning:</strong> 40m, 20m - good for regional and DX contacts</li>
                    <li><strong>Midday:</strong> 20m, 17m, 15m - excellent for DX</li>
                    <li><strong>Evening:</strong> 40m, 80m - regional contacts</li>
                    <li><strong>Night:</strong> 80m, 160m - regional and sometimes DX</li>
                    <li><strong>Local work anytime:</strong> 2m, 70cm - reliable for nearby contacts</li>
                </ul>
                <p>Always check band conditions using tools like <a href="https://www.bandconditions.com/" target="_blank" rel="nofollow noopener">Band Conditions</a> or the VOACAP Propagation prediction.</p>
            </div>
            <div class="col s12 m6">
                <h4>HOTA Operating Practices</h4>
                <ul class="browser-default">
                    <li>Always include your full address in exchanges</li>
                    <li>Listen first before calling on a frequency</li>
                    <li>For best results, spot yourself on cluster services</li>
                    <li>Announce your HOTA activity on our <a href="?page=discord">Discord</a> channel</li>
                    <li>Try multiple bands to maximize your contacts</li>
                    <li>Consider band selection based on your antenna limitations</li>
                    <li>Digital modes can be effective with minimal power/antennas</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Resources Section -->
    <div class="card-panel mt-4">
        <h3><i class="material-icons left">library_books</i>Additional Resources</h3>
        <div class="row">
            <div class="col s12 m6">
                <h4>Band Condition Tools</h4>
                <ul class="browser-default">
                    <li><a href="https://www.bandconditions.com/" target="_blank" rel="nofollow noopener">Band Conditions</a> - Real-time HF band condition reporting</li>
                    <li><a href="https://www.voacap.com/" target="_blank" rel="nofollow noopener">VOACAP Online</a> - HF propagation prediction</li>
                    <li><a href="https://pskreporter.info/" target="_blank" rel="nofollow noopener">PSK Reporter</a> - Real-time reception reports</li>
                    <li><a href="https://www.dxmaps.com/" target="_blank" rel="nofollow noopener">DX Maps</a> - Visual propagation data</li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>Antenna Resources</h4>
                <ul class="browser-default">
                    <li><a href="?page=portable-antennas">HOTA Portable Antenna Guide</a></li>
                    <li><a href="https://www.qsl.net/va3iul/" target="_blank" rel="nofollow noopener">VA3IUL Antenna Designs</a></li>
                    <li><a href="http://www.karinya.net/g3txq/hexbeam/" target="_blank" rel="nofollow noopener">G3TXQ Hexbeam</a></li>
                    <li><a href="https://www.electronics-notes.com/articles/antennas-propagation/antenna-theory/antennas-types.php" target="_blank" rel="nofollow noopener">Antenna Types Guide</a></li>
                </ul>
            </div>
        </div>

        <div class="center-align mt-4">
            <a href="?page=operating-guidelines" class="btn blue-grey darken-1 waves-effect waves-light">
                <i class="material-icons left">school</i>HOTA Operating Guidelines
            </a>
        </div>
    </div>
</div>

<style>
/* Band buttons grid */
.band-buttons {
    margin-top: 20px;
}

.full-width-btn {
    width: 100%;
    margin-bottom: 10px;
}

/* Band Cards */
.band-card {
    border-top: 4px solid #455a64;
}

.antenna-panel {
    height: 100%;
}

.results-panel {
    min-height: 200px;
}

.results-table td {
    padding: 8px 5px;
}

/* Utility classes */
.mt-2 {
    margin-top: 1rem;
}

.mt-3 {
    margin-top: 1.5rem;
}

.mt-4 {
    margin-top: 2rem;
}

.note {
    font-size: 0.9rem;
    color: #666;
}

/* Responsive adjustments for tables */
@media only screen and (max-width: 600px) {
    table.striped {
        font-size: 0.85rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize selects
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 20,
                    behavior: 'smooth'
                });

                // Update URL without reloading page
                history.pushState(null, null, targetId);
            }
        });
    });

    // Antenna calculator functionality
    document.getElementById('calculate-antenna').addEventListener('click', calculateAntennaLength);

    function calculateAntennaLength() {
        const frequency = parseFloat(document.getElementById('frequency').value);
        const antennaType = document.getElementById('antenna-type').value;
        const velocityFactor = parseFloat(document.getElementById('velocity-factor').value);

        if (!frequency || frequency <= 0) {
            M.toast({html: 'Please enter a valid frequency'});
            return;
        }

        // Calculate wavelength in free space (meters)
        const wavelengthMeters = 299.792458 / frequency;
        const wavelengthFeet = wavelengthMeters * 3.28084;

        // Apply velocity factor
        const adjustedWavelengthMeters = wavelengthMeters * velocityFactor;
        const adjustedWavelengthFeet = wavelengthFeet * velocityFactor;

        // Set display elements common to all calculations
        document.getElementById('wavelength').textContent =
            wavelengthMeters.toFixed(2) + ' meters (' +
            wavelengthFeet.toFixed(2) + ' feet)';

        // Reset all rows
        document.getElementById('each-leg-row').style.display = 'none';
        document.getElementById('radiator-row').style.display = 'none';
        document.getElementById('stub-row').style.display = 'none';
        document.getElementById('radials-row').style.display = 'none';
        document.getElementById('circumference-row') ? document.getElementById('circumference-row').style.display = 'none' : createExtraRow('circumference-row', 'Circumference:');
        document.getElementById('side-length-row') ? document.getElementById('side-length-row').style.display = 'none' : createExtraRow('side-length-row', 'Side Length:');
        document.getElementById('element-spacing-row') ? document.getElementById('element-spacing-row').style.display = 'none' : createExtraRow('element-spacing-row', 'Element Spacing:');
        document.getElementById('reflector-row') ? document.getElementById('reflector-row').style.display = 'none' : createExtraRow('reflector-row', 'Reflector Length:');
        document.getElementById('director-row') ? document.getElementById('director-row').style.display = 'none' : createExtraRow('director-row', 'Director Length:');

        // Calculate specific dimensions based on antenna type
        let totalLengthMeters, totalLengthFeet;

        switch (antennaType) {
            case 'halfwave':
                totalLengthMeters = adjustedWavelengthMeters * 0.5;
                totalLengthFeet = adjustedWavelengthFeet * 0.5;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('each-leg').textContent =
                    (totalLengthMeters / 2).toFixed(2) + ' meters (' +
                    (totalLengthFeet / 2).toFixed(2) + ' feet)';
                document.getElementById('each-leg-row').style.display = '';
                break;

            case 'quarterwave':
                totalLengthMeters = adjustedWavelengthMeters * 0.25;
                totalLengthFeet = adjustedWavelengthFeet * 0.25;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('radials-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';
                document.getElementById('radials-row').style.display = '';
                break;

            case '5-8wave':
                totalLengthMeters = adjustedWavelengthMeters * 0.625;
                totalLengthFeet = adjustedWavelengthFeet * 0.625;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('radials-length').textContent =
                    (adjustedWavelengthMeters * 0.25).toFixed(2) + ' meters (' +
                    (adjustedWavelengthFeet * 0.25).toFixed(2) + ' feet)';
                document.getElementById('radials-row').style.display = '';
                break;

            case 'fullwave':
                totalLengthMeters = adjustedWavelengthMeters;
                totalLengthFeet = adjustedWavelengthFeet;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('circumference-row').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';
                document.getElementById('circumference-row').style.display = '';
                break;

            case 'j-pole':
                const quarterWave = adjustedWavelengthMeters * 0.25;
                const threeQuarterWave = adjustedWavelengthMeters * 0.75;
                const quarterWaveFt = adjustedWavelengthFeet * 0.25;
                const threeQuarterWaveFt = adjustedWavelengthFeet * 0.75;

                totalLengthMeters = threeQuarterWave + quarterWave;
                totalLengthFeet = threeQuarterWaveFt + quarterWaveFt;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('radiator-length').textContent =
                    threeQuarterWave.toFixed(2) + ' meters (' +
                    threeQuarterWaveFt.toFixed(2) + ' feet)';
                document.getElementById('radiator-row').style.display = '';

                document.getElementById('stub-length').textContent =
                    quarterWave.toFixed(2) + ' meters (' +
                    quarterWaveFt.toFixed(2) + ' feet)';
                document.getElementById('stub-row').style.display = '';
                break;

            case 'groundplane':
                totalLengthMeters = adjustedWavelengthMeters * 0.25;
                totalLengthFeet = adjustedWavelengthFeet * 0.25;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('radials-length').textContent =
                    (totalLengthMeters * 1.05).toFixed(2) + ' meters (' +
                    (totalLengthFeet * 1.05).toFixed(2) + ' feet)';
                document.getElementById('radials-row').style.display = '';
                break;

            case 'extended-double-zepp':
                // Extended Double Zepp is 1.28 wavelengths long (0.64λ per leg)
                totalLengthMeters = adjustedWavelengthMeters * 1.28;
                totalLengthFeet = adjustedWavelengthFeet * 1.28;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet)';

                document.getElementById('each-leg').textContent =
                    (adjustedWavelengthMeters * 0.64).toFixed(2) + ' meters (' +
                    (adjustedWavelengthFeet * 0.64).toFixed(2) + ' feet)';
                document.getElementById('each-leg-row').style.display = '';
                break;

            case 'g5rv':
                // G5RV has specific dimensions regardless of frequency
                // Standard G5RV is 102' top, 31' matching section
                // We'll still scale it for different frequencies as a reference
                totalLengthMeters = 31.1; // ~102 feet top section
                const matchingSectionMeters = 9.45; // ~31 feet

                // Scale based on relationship to 14MHz (original design freq)
                const scaleFactor = 14 / frequency;
                totalLengthMeters *= scaleFactor;
                const matchingSectionMeters_scaled = matchingSectionMeters * scaleFactor;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    (totalLengthMeters * 3.28084).toFixed(2) + ' feet)';

                document.getElementById('each-leg').textContent =
                    (totalLengthMeters / 2).toFixed(2) + ' meters (' +
                    (totalLengthMeters * 3.28084 / 2).toFixed(2) + ' feet)';
                document.getElementById('each-leg-row').style.display = '';

                document.getElementById('stub-length').textContent =
                    matchingSectionMeters_scaled.toFixed(2) + ' meters (' +
                    (matchingSectionMeters_scaled * 3.28084).toFixed(2) + ' feet)';
                document.getElementById('stub-row').style.display = '';
                break;

            case 'zs6bkw':
                // ZS6BKW/G0GSF is an optimized G5RV
                totalLengthMeters = 28.4; // Reference length for 14MHz
                const matchingSectionMetersZS = 12.2; // Reference matching section

                // Scale based on relationship to 14MHz (original design freq)
                const scaleFactorZS = 14 / frequency;
                totalLengthMeters *= scaleFactorZS;
                const matchingSectionMetersZS_scaled = matchingSectionMetersZS * scaleFactorZS;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    (totalLengthMeters * 3.28084).toFixed(2) + ' feet)';

                document.getElementById('each-leg').textContent =
                    (totalLengthMeters / 2).toFixed(2) + ' meters (' +
                    (totalLengthMeters * 3.28084 / 2).toFixed(2) + ' feet)';
                document.getElementById('each-leg-row').style.display = '';

                document.getElementById('stub-length').textContent =
                    matchingSectionMetersZS_scaled.toFixed(2) + ' meters (' +
                    (matchingSectionMetersZS_scaled * 3.28084).toFixed(2) + ' feet)';
                document.getElementById('stub-row').style.display = '';
                break;

            case 'bobtail':
                // Bobtail curtain - Three vertical radiators spaced 1/4λ with top connecting wire
                const verticalHeight = adjustedWavelengthMeters * 0.25; // 1/4λ verticals
                const horizontalTop = adjustedWavelengthMeters * 0.5; // 1/2λ total (1/4λ between elements)

                document.getElementById('total-length').textContent =
                    (verticalHeight * 3 + horizontalTop).toFixed(2) + ' meters (' +
                    ((verticalHeight * 3 + horizontalTop) * 3.28084).toFixed(2) + ' feet)';

                document.getElementById('radiator-length').textContent =
                    verticalHeight.toFixed(2) + ' meters (' +
                    (verticalHeight * 3.28084).toFixed(2) + ' feet) x3';
                document.getElementById('radiator-row').style.display = '';

                document.getElementById('element-spacing-row').textContent =
                    (adjustedWavelengthMeters * 0.25).toFixed(2) + ' meters (' +
                    (adjustedWavelengthFeet * 0.25).toFixed(2) + ' feet)';
                document.getElementById('element-spacing-row').style.display = '';
                break;

            case 'delta-loop':
                // Delta Loop - Full wavelength triangle
                totalLengthMeters = adjustedWavelengthMeters * 1.05; // 5% longer for end effect
                totalLengthFeet = adjustedWavelengthFeet * 1.05;

                document.getElementById('total-length').textContent =
                    totalLengthMeters.toFixed(2) + ' meters (' +
                    totalLengthFeet.toFixed(2) + ' feet) perimeter';

                document.getElementById('side-length-row').textContent =
                    (totalLengthMeters / 3).toFixed(2) + ' meters (' +
                    (totalLengthFeet / 3).toFixed(2) + ' feet) for equilateral';
                document.getElementById('side-length-row').style.display = '';
                break;

            case 'magnetic-loop':
                // Magnetic Loop - Typically 1/10λ to 1/5λ in circumference
                const circumferenceSmall = adjustedWavelengthMeters * 0.1;
                const circumferenceLarge = adjustedWavelengthMeters * 0.2;
                const diameterSmall = circumferenceSmall / Math.PI;
                const diameterLarge = circumferenceLarge / Math.PI;

                document.getElementById('total-length').textContent =
                    "Diameter: " + diameterSmall.toFixed(2) + " - " + diameterLarge.toFixed(2) + " meters";

                document.getElementById('circumference-row').textContent =
                    circumferenceSmall.toFixed(2) + " - " + circumferenceLarge.toFixed(2) + " meters (circumference)";
                document.getElementById('circumference-row').style.display = '';
                break;
        }
    }

    // Helper function to create additional rows dynamically if they don't exist
    function createExtraRow(rowId, label) {
        if (!document.getElementById(rowId)) {
            const table = document.querySelector('.results-table');
            const newRow = document.createElement('tr');
            newRow.id = rowId;
            newRow.style.display = 'none';

            const labelCell = document.createElement('td');
            labelCell.innerHTML = `<strong>${label}</strong>`;

            const valueCell = document.createElement('td');
            valueCell.id = rowId;

            newRow.appendChild(labelCell);
            newRow.appendChild(valueCell);
            table.appendChild(newRow);
            return valueCell;
        }
        return document.getElementById(rowId);
    }

    // Calculate initial values
    calculateAntennaLength();

    // Add an event listener to recalculate when antenna type changes
    document.getElementById('antenna-type').addEventListener('change', calculateAntennaLength);
    document.getElementById('frequency').addEventListener('input', calculateAntennaLength);
    document.getElementById('velocity-factor').addEventListener('change', calculateAntennaLength);
});
</script>

<?php include_once('../includes/footer.php'); ?>
