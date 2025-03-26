<?php
$pageTitle = "Multi-band Antenna Guide - HOTA";
$pageDescription = "A comprehensive guide to multi-band antennas for amateur radio operators participating in Houses on the Air, including trapped dipoles, fan dipoles, and versatile portable options.";
?>

<div class="container">
    <h1>Multi-band Antennas for HOTA Operations</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>Multi-band Antennas</li>
        </ul>
    </div>

    <div class="row">
        <div class="col s12 m3">
            <!-- Navigation sidebar -->
            <div class="card sticky-nav">
                <div class="card-content">
                    <span class="card-title">On This Page</span>
                    <div class="collection">
                        <a href="#intro" class="collection-item">Introduction</a>
                        <a href="#trapped-dipoles" class="collection-item">Trapped Dipoles</a>
                        <a href="#fan-dipoles" class="collection-item">Fan Dipoles</a>
                        <a href="#ocfd" class="collection-item">Off-Center Fed</a>
                        <a href="#efhw" class="collection-item">End-Fed Half-Wave</a>
                        <a href="#linked-dipoles" class="collection-item">Linked Dipoles</a>
                        <a href="#vertical-systems" class="collection-item">Multi-band Verticals</a>
                        <a href="#loaded-antennas" class="collection-item">Loaded Antennas</a>
                        <a href="#commercial" class="collection-item">Commercial Options</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m9">
            <!-- Introduction -->
            <section id="intro" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">info</i>Why Multi-band Antennas for HOTA?</span>
                        <p class="flow-text">Multi-band antennas offer significant advantages for Houses on the Air activations by allowing operation on various frequencies with a single antenna system.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Advantages</h5>
                                <ul class="browser-default">
                                    <li>Single installation covers multiple bands</li>
                                    <li>Quick band changes without antenna swapping</li>
                                    <li>More efficient use of limited space</li>
                                    <li>Adaptable to varying propagation conditions</li>
                                    <li>Reduced setup/takedown time for portable operations</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>Design Approaches</h5>
                                    <ul class="browser-default">
                                        <li><strong>Trap-based:</strong> Using resonant LC circuits</li>
                                        <li><strong>Parallel elements:</strong> Multiple resonant elements</li>
                                        <li><strong>Broadband matching:</strong> Non-resonant with tuners</li>
                                        <li><strong>Harmonically related:</strong> Using natural harmonics</li>
                                        <li><strong>Physical switching:</strong> Mechanically altering length</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trapped Dipoles -->
            <section id="trapped-dipoles" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Trapped Dipoles</span>
                        <p>Trapped dipoles use parallel LC circuits (traps) to isolate different sections of the antenna on different frequencies, creating band-specific lengths.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>How Traps Work</h5>
                                <ul class="browser-default">
                                    <li>Acts as high impedance at resonant frequency</li>
                                    <li>Acts as inductor at lower frequencies</li>
                                    <li>Effectively isolates outer sections on higher bands</li>
                                    <li>Creates multiple resonant lengths on a single wire</li>
                                </ul>

                                <div class="card-panel mt-2">
                                    <h6><i class="material-icons tiny">build</i> Trap Construction</h6>
                                    <ul class="browser-default">
                                        <li>Use quality capacitors rated for RF</li>
                                        <li>Weather-proof with appropriate covering</li>
                                        <li>Consider pre-made commercial traps</li>
                                        <li>For DIY, use coaxial cable wound on forms</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Trapped Dipole Design</h5>
                                    <div class="formula-box">
                                        <p>Typical 40/20/10m trapped dipole dimensions:</p>
                                        <p><strong>Inner section (10m):</strong> ~2.5m each side</p>
                                        <p><strong>Middle section (20m):</strong> ~2.5m each side</p>
                                        <p><strong>Outer section (40m):</strong> ~5.0m each side</p>
                                        <p><strong>Total length:</strong> ~20m end-to-end</p>
                                    </div>
                                </div>

                                <div class="card-panel blue-grey lighten-5 mt-3">
                                    <h5>Advantages/Limitations</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><strong>Pros:</strong></p>
                                            <ul class="browser-default">
                                                <li>Compact design</li>
                                                <li>Single feedline</li>
                                                <li>Predictable impedance</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><strong>Cons:</strong></p>
                                            <ul class="browser-default">
                                                <li>Trap losses (2-5% per trap)</li>
                                                <li>Narrower bandwidth</li>
                                                <li>More complex to build</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fan Dipoles -->
            <section id="fan-dipoles" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Fan Dipoles</span>
                        <p>Fan dipoles use multiple wire elements connected to a common feedpoint to achieve multi-band operation without traps or complex matching systems.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Each band has dedicated resonant element</li>
                                    <li>All elements share common feedpoint</li>
                                    <li>No lossy traps required</li>
                                    <li>Each element performs like single-band dipole</li>
                                    <li>Can add bands later as needed</li>
                                </ul>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">build</i> Construction</h6>
                                    <ul class="browser-default">
                                        <li>Start with highest frequency element</li>
                                        <li>Color-code wires for different bands</li>
                                        <li>Use robust center insulator</li>
                                        <li>Add small spacers between elements</li>
                                        <li>Use 1:1 current balun at feedpoint</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Fan Dipole Design</h5>
                                    <div class="formula-box">
                                        <p>For each element, use standard dipole formula:</p>
                                        <p><strong>Length (total) in meters:</strong> 143 / frequency (MHz)</p>
                                        <p><strong>Spacing:</strong> 15-30cm between element ends</p>
                                    </div>
                                </div>

                                <div class="card-panel blue-grey lighten-5 mt-3">
                                    <h5>Advantages/Limitations</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><strong>Pros:</strong></p>
                                            <ul class="browser-default">
                                                <li>Higher efficiency</li>
                                                <li>Full bandwidth on each band</li>
                                                <li>No lossy components</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><strong>Cons:</strong></p>
                                            <ul class="browser-default">
                                                <li>Elements interact, requiring tuning</li>
                                                <li>More visible in field</li>
                                                <li>Prone to tangling</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-panel amber lighten-5">
                            <h5>Practical Band Combinations</h5>
                            <div class="row">
                                <div class="col s12 m6">
                                    <h6>Standard 3-Band Fan Dipole</h6>
                                    <ul class="browser-default">
                                        <li><strong>40m element:</strong> ~20m (66ft) total</li>
                                        <li><strong>20m element:</strong> ~10m (33ft) total</li>
                                        <li><strong>10m element:</strong> ~5m (16.5ft) total</li>
                                    </ul>
                                </div>
                                <div class="col s12 m6">
                                    <h6>WARC 3-Band Fan Dipole</h6>
                                    <ul class="browser-default">
                                        <li><strong>30m element:</strong> ~14m (46ft) total</li>
                                        <li><strong>17m element:</strong> ~8m (26ft) total</li>
                                        <li><strong>12m element:</strong> ~5.6m (18.5ft) total</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Off-Center Fed Dipoles -->
            <section id="ocfd" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Off-Center Fed Dipole (OCFD)</span>
                        <p>The Off-Center Fed Dipole offers multi-band performance by feeding a dipole away from the center point, creating an impedance that allows operation on multiple bands.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Single wire with asymmetric feed point</li>
                                    <li>Feed point typically at 1/3 (33%) or 1/5 (20%)</li>
                                    <li>Requires matching transformer (4:1 or 6:1 balun)</li>
                                    <li>Works on multiple bands without traps</li>
                                    <li>Simpler construction than fan dipoles</li>
                                </ul>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">build</i> OCFD Design Options</h6>
                                    <ul class="browser-default">
                                        <li><strong>Windom:</strong> Classic design with 4:1 balun</li>
                                        <li><strong>Carolina Windom:</strong> Adds vertical radiator</li>
                                        <li><strong>OCF Doublet:</strong> Fed with ladder line</li>
                                        <li><strong>Commercial:</strong> Cushcraft, MFJ, Buckmaster</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">OCFD Configuration</h5>
                                    <div class="formula-box">
                                        <p><strong>Total length in meters:</strong> 143 / frequency (MHz)</p>
                                        <p><strong>Common feed ratios:</strong></p>
                                        <ul class="browser-default">
                                            <li>80/40/20/10m: 80%/20% ratio (4:1 balun)</li>
                                            <li>40/20/10m: 67%/33% ratio (4:1 balun)</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-panel blue-grey lighten-5 mt-3">
                                    <h5>Advantages/Limitations</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><strong>Pros:</strong></p>
                                            <ul class="browser-default">
                                                <li>Single wire design</li>
                                                <li>Multi-band operation</li>
                                                <li>Better bandwidth</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><strong>Cons:</strong></p>
                                            <ul class="browser-default">
                                                <li>Complex radiation patterns</li>
                                                <li>RF on feedline without balun</li>
                                                <li>Mechanical stress at feedpoint</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End-Fed Half-Wave -->
            <section id="efhw" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>End-Fed Half-Wave (EFHW)</span>
                        <p>The End-Fed Half-Wave has become popular for HOTA operations due to its single support requirement and excellent multi-band capabilities.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Fed at one end rather than center</li>
                                    <li>Half-wavelength on lowest band</li>
                                    <li>Works on odd harmonics (40/20/15/10m)</li>
                                    <li>Requires impedance matching transformer (49:1)</li>
                                    <li>High impedance at feed point (2000-4000Ω)</li>
                                </ul>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">build</i> Feed Point Components</h6>
                                    <ul class="browser-default">
                                        <li>49:1 or 64:1 impedance transformer</li>
                                        <li>2-3m counterpoise wire improves match</li>
                                        <li>Common mode choke prevents RF feedback</li>
                                        <li>Optional series capacitor in some designs</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">EFHW Configuration</h5>
                                    <div class="formula-box">
                                        <p><strong>Length in meters:</strong> 143 / frequency (MHz)</p>
                                        <p><strong>Length in feet:</strong> 468 / frequency (MHz)</p>
                                        <p><strong>Counterpoise:</strong> Short wire (0.05λ) often helps</p>
                                    </div>
                                </div>

                                <div class="card-panel blue-grey lighten-5 mt-3">
                                    <h5>Multi-band Operation</h5>
                                    <ul class="browser-default">
                                        <li><strong>80m EFHW:</strong> Works on 80/40/30/20/15/10m</li>
                                        <li><strong>40m EFHW:</strong> Works on 40/20/15/10m</li>
                                        <li><strong>20m EFHW:</strong> Works on 20/10m</li>
                                        <li>Some commercial matching units enable even harmonics</li>
                                    </ul>
                                </div>

                                <div class="card-panel portable-panel blue-grey lighten-5 mt-2">
                                    <h6>Configuration Options</h6>
                                    <ul class="browser-default">
                                        <li><strong>Horizontal:</strong> Between two supports</li>
                                        <li><strong>Sloper:</strong> One high point, feed at bottom</li>
                                        <li><strong>Inverted-L:</strong> Vertical + horizontal sections</li>
                                        <li><strong>Inverted-V:</strong> Center high, ends lower</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Linked Dipoles -->
            <section id="linked-dipoles" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Linked Dipoles</span>
                        <p>Linked dipoles use physical connections between wire sections to change the electrical length of the antenna, allowing multi-band operation without compromise.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Mechanically connected/disconnected sections</li>
                                    <li>Each band operates at full efficiency</li>
                                    <li>No traps or loading coils to reduce performance</li>
                                    <li>Configure for specific bands as needed</li>
                                    <li>Custom band combinations possible</li>
                                </ul>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">build</i> Connection Methods</h6>
                                    <ul class="browser-default">
                                        <li>Banana plugs and sockets</li>
                                        <li>Binding posts with wing nuts</li>
                                        <li>Anderson PowerPoles (popular)</li>
                                        <li>Quick-disconnect automotive connectors</li>
                                        <li>Alligator clips for temporary use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Linked Dipole Concept</h5>
                                    <div class="formula-box">
                                        <p>For standard dipole sections:</p>
                                        <p><strong>Section length = (143 / f<sub>MHz</sub>) / 2 - previous sections</strong></p>
                                        <p>Example for 40/20/10m:</p>
                                        <ul class="browser-default">
                                            <li>10m sections: 2.5m each side</li>
                                            <li>20m sections: +2.5m each side (5m total each side)</li>
                                            <li>40m sections: +5m each side (10m total each side)</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-panel blue-grey lighten-5 mt-3">
                                    <h5>Advantages/Limitations</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><strong>Pros:</strong></p>
                                            <ul class="browser-default">
                                                <li>No loss mechanisms</li>
                                                <li>Perfect resonance</li>
                                                <li>Excellent bandwidth</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><strong>Cons:</strong></p>
                                            <ul class="browser-default">
                                                <li>Requires manual band changes</li>
                                                <li>Connections can fail</li>
                                                <li>More complex to deploy</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Multi-band Verticals -->
            <section id="vertical-systems" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Multi-band Vertical Systems</span>
                        <p>Multi-band vertical antennas offer omnidirectional coverage on multiple bands with a small footprint, making them excellent options for space-constrained HOTA operations.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Vertical Design Approaches</h5>
                                <ul class="browser-default">
                                    <li><strong>Trapped Verticals:</strong> Similar to trapped dipoles</li>
                                    <li><strong>Parallel Resonators:</strong> Multiple tuned circuits</li>
                                    <li><strong>Linear Loading:</strong> Wire folding to reduce height</li>
                                    <li><strong>Capacity Hats:</strong> Top loading to reduce height</li>
                                    <li><strong>No-Radial Systems:</strong> Special designs</li>
                                </ul>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">shopping_cart</i> Commercial Systems</h6>
                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Coverage</th>
                                                <th>Feature</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cushcraft R8/R9</td>
                                                <td>6-40m</td>
                                                <td>No-radial</td>
                                            </tr>
                                            <tr>
                                                <td>Hustler 6BTV</td>
                                                <td>10-80m</td>
                                                <td>Trapped</td>
                                            </tr>
                                            <tr>
                                                <td>GAP Titan</td>
                                                <td>10-80m</td>
                                                <td>Off-center</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>Radial Requirements</h5>
                                    <ul class="browser-default">
                                        <li><strong>Minimum:</strong> 4 quarter-wave radials per band</li>
                                        <li><strong>Better:</strong> 8-16 radials of different lengths</li>
                                        <li><strong>Best:</strong> 32+ radials for permanent installs</li>
                                        <li><strong>Elevated radials:</strong> Usually resonant, fewer needed</li>
                                    </ul>
                                </div>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">directions_car</i> Portable Options</h6>
                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Coverage</th>
                                                <th>Feature</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Wolf River Coils</td>
                                                <td>10-80m</td>
                                                <td>Adjustable</td>
                                            </tr>
                                            <tr>
                                                <td>Chameleon MPAS</td>
                                                <td>6-160m</td>
                                                <td>Military-grade</td>
                                            </tr>
                                            <tr>
                                                <td>Super Antenna MP1</td>
                                                <td>7-55MHz</td>
                                                <td>Ultra-portable</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Loaded Antennas -->
            <section id="loaded-antennas" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">settings_input_antenna</i>Loaded Multi-band Antennas</span>
                        <p>Loaded antennas use inductors or capacitors to modify the electrical length, allowing physically shorter antennas to operate on multiple bands.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Loading Techniques</h5>
                                <ul class="browser-default">
                                    <li><strong>Inductive loading:</strong> Coils to electrically lengthen</li>
                                    <li><strong>Capacity hat:</strong> Wire spokes to electrically lengthen</li>
                                    <li><strong>Linear loading:</strong> Folded wire to reduce physical length</li>
                                    <li><strong>Helical winding:</strong> Wire wound around support</li>
                                    <li><strong>Combined approaches:</strong> Multiple techniques together</li>
                                </ul>

                                <div class="card-panel">
                                    <h5>Popular Loaded Designs</h5>
                                    <ul class="browser-default">
                                        <li><strong>Coil-loaded dipole:</strong> Loading coils near center</li>
                                        <li><strong>Linear-loaded dipole:</strong> Folded wire sections</li>
                                        <li><strong>Capacity-end dipole:</strong> Wire "hats" at ends</li>
                                        <li><strong>Base-loaded vertical:</strong> Common for mobile use</li>
                                        <li><strong>Center-loaded vertical:</strong> Better efficiency</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>Understanding the Trade-offs</h5>
                                    <ul class="browser-default">
                                        <li>Reducing physical size reduces radiation resistance</li>
                                        <li>Lower radiation resistance means lower efficiency</li>
                                        <li>Loading elements introduce some additional loss</li>
                                        <li>Bandwidth typically decreases with size reduction</li>
                                        <li>However, a small antenna that fits your space always outperforms a full-size antenna that doesn't fit!</li>
                                    </ul>
                                </div>

                                <div class="card-panel amber lighten-5 mt-3">
                                    <h5>Efficiency Considerations</h5>
                                    <p>Typical efficiency relative to full-size antennas:</p>
                                    <ul class="browser-default">
                                        <li><strong>85-95%:</strong> Linear loaded (minor shortening)</li>
                                        <li><strong>70-85%:</strong> End loading / capacity hats</li>
                                        <li><strong>50-70%:</strong> Center loading coils</li>
                                        <li><strong>30-50%:</strong> Base loading coils</li>
                                        <li><strong>20-40%:</strong> Heavily shortened designs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Commercial Options -->
            <section id="commercial" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">shopping_cart</i>Commercial Multi-band Options</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5>Wire Antenna Systems</h5>
                                    <h6>Trapped Dipoles & EFHW</h6>
                                    <ul class="browser-default">
                                        <li><strong>Alpha Delta DX-EE:</strong> 40-10m compact multiband</li>
                                        <li><strong>MyAntennas EFHW-8010:</strong> 80-10m coverage</li>
                                        <li><strong>Buckmaster 7-band OCF:</strong> Off-center fed design</li>
                                        <li><strong>MFJ-1982:</strong> End-fed half-wave 30-10m</li>
                                        <li><strong>SOTAbeams Bandspringer:</strong> Compact EFHW</li>
                                    </ul>
                                </div>

                                <div class="card-panel">
                                    <h5>HOTA Selection Criteria</h5>
                                    <ul class="browser-default">
                                        <li><strong>Space available:</strong> Match antenna to your location</li>
                                        <li><strong>Bands needed:</strong> Focus on useful frequencies</li>
                                        <li><strong>Portability:</strong> Consider setup/takedown time</li>
                                        <li><strong>Performance:</strong> Balance efficiency vs convenience</li>
                                        <li><strong>Stealth factor:</strong> Consider visibility concerns</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5>Portable Systems</h5>
                                    <h6>Vertical Systems & Specialty Options</h6>
                                    <ul class="browser-default">
                                        <li><strong>Buddipole/Buddistick:</strong> Modular antenna system</li>
                                        <li><strong>Chameleon MPAS:</strong> Military-grade portable</li>
                                        <li><strong>Wolf River Coils:</strong> Adjustable loading coil</li>
                                        <li><strong>PackTenna:</strong> Lightweight EFHW/vertical</li>
                                        <li><strong>MFJ-1899T:</strong> Telescopic multi-band vertical</li>
                                    </ul>
                                </div>

                                <div class="card-panel blue-grey lighten-5">
                                    <h5>DIY vs Commercial</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><strong>DIY Advantages:</strong></p>
                                            <ul class="browser-default">
                                                <li>Cost savings</li>
                                                <li>Customizable</li>
                                                <li>Educational</li>
                                                <li>Repairable</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><strong>Commercial Advantages:</strong></p>
                                            <ul class="browser-default">
                                                <li>Plug & play</li>
                                                <li>Precision-engineered</li>
                                                <li>Time-saving</li>
                                                <li>Professional finish</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resources & Conclusion -->
            <div class="card mt-4">
                <div class="card-content">
                    <span class="card-title">Additional Resources</span>
                    <div class="row">
                        <div class="col s12 m6">
                            <h5>HOTA-Related Resources</h5>
                            <ul class="browser-default">
                                <li><a href="?page=wire-antennas">Wire Antenna Guide</a></li>
                                <li><a href="?page=vertical-antennas">Vertical Antenna Guide</a></li>
                                <li><a href="?page=loop-antennas">Loop Antenna Guide</a></li>
                                <li><a href="?page=portable-antennas">Portable Antenna Overview</a></li>
                            </ul>
                        </div>
                        <div class="col s12 m6">
                            <h5>External Resources</h5>
                            <ul class="browser-default">
                                <li><a href="https://www.arrl.org/shop/ARRL-Antenna-Book-24th-Softcover-Edition/" target="_blank" rel="nofollow">ARRL Antenna Book</a></li>
                                <li><a href="https://oarc.uk/" target="_blank" rel="nofollow">Oxford Amateur Radio Club</a></li>
                                <li><a href="https://www.sotabeams.co.uk/antenna-references/" target="_blank" rel="nofollow">SOTABeams Antenna References</a></li>
                                <li><a href="https://www.tvtower.com/ftp/Military%20Info/FM%2024-18%20Tactical%20HF%20Field%20Antenna%20Handbook.pdf" target="_blank" rel="nofollow">Tactical Field Antenna Handbook</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="center-align mt-4">
                        <a href="?page=resources" class="btn blue-grey waves-effect waves-light">
                            <i class="material-icons left">arrow_back</i>Back to Resources
                        </a>
                        <a href="?page=wire-antennas" class="btn blue-grey waves-effect waves-light">
                            <i class="material-icons left">settings_input_antenna</i>Wire Antennas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Sticky sidebar navigation */
.sticky-nav {
    position: sticky;
    top: 80px;
}

/* Antenna diagram styling */
.antenna-diagram {
    background-color: #f5f5f5;
}

.formula-box {
    margin-top: 15px;
    padding: 10px;
    background-color: #fff;
    border-left: 3px solid #455a64;
}

.practical-section {
    margin-top: 20px;
}

.portable-panel {
    margin-top: 20px;
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

/* Responsive adjustments */
@media only screen and (max-width: 992px) {
    .sticky-nav {
        position: relative;
        top: 0;
        margin-bottom: 1rem;
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

    // Initialize any collapsible elements
    var collapsibleElems = document.querySelectorAll('.collapsible');
    if (collapsibleElems.length) {
        var collapsibleInstances = M.Collapsible.init(collapsibleElems);
    }
});
</script>
