<?php
$pageTitle = "Loop Antenna Guide - HOTA";
$pageDescription = "A comprehensive guide to loop antennas for amateur radio operators participating in Houses on the Air, including full-wave loops, magnetic loops, and multi-band solutions.";
?>

<div class="container">
    <h1>Loop Antennas for HOTA Operations</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>Loop Antennas</li>
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
                        <a href="#full-wave" class="collection-item">Full-Wave Loops</a>
                        <a href="#delta-loop" class="collection-item">Delta Loops</a>
                        <a href="#quad" class="collection-item">Quad Loops</a>
                        <a href="#small-tx" class="collection-item">Small TX Loops</a>
                        <a href="#indoor" class="collection-item">Indoor Loops</a>
                        <a href="#rx-loops" class="collection-item">Receiving Loops</a>
                        <a href="#installation" class="collection-item">Installation</a>
                        <a href="#projects" class="collection-item">DIY Projects</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m9">
            <!-- Introduction -->
            <section id="intro" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">info</i>Why Loop Antennas for HOTA?</span>
                        <p class="flow-text">Loop antennas offer unique advantages that make them excellent choices for Houses on the Air activations, especially in challenging environments.</p>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Advantages</h5>
                                <ul class="browser-default">
                                    <li>Excellent performance in small spaces</li>
                                    <li>Many designs work well at low heights</li>
                                    <li>Lower noise reception than many antennas</li>
                                    <li>Some types can be mounted indoors</li>
                                    <li>Various shapes adapt to available supports</li>
                                    <li>Can be very discrete for stealth operations</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>Loop Categories</h5>
                                    <ul class="browser-default">
                                        <li><strong>Full-Wave Loops:</strong> One wavelength in circumference</li>
                                        <li><strong>Small Transmitting Loops:</strong> Typically 1/10 wavelength or less</li>
                                        <li><strong>Receiving Loops:</strong> Very small, high-efficiency reception</li>
                                        <li><strong>Indoor Loops:</strong> For stealth/apartment operation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Full-Wave Loops -->
            <section id="full-wave" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">radio_button_checked</i>Full-Wave Loop Antennas</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Excellent gain (2-3 dBd depending on shape)</li>
                                    <li>Works well at lower heights than dipoles</li>
                                    <li>Quieter reception than many antennas</li>
                                    <li>Feed impedance ~100-120Ω (2:1 balun needed)</li>
                                    <li>Can be configured in different shapes</li>
                                    <li>Single-band by design, but works on harmonics</li>
                                </ul>

                                <div class="card-panel">
                                    <h6><i class="material-icons tiny">build</i> Construction</h6>
                                    <ul class="browser-default">
                                        <li>Use insulated wire (14-18 AWG)</li>
                                        <li>Include a 2:1 balun at the feed point</li>
                                        <li>Use corner insulators to reduce mechanical stress</li>
                                        <li>Position feed point based on desired polarization</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Full-Wave Loop Dimensions</h5>
                                    <div class="formula-box">
                                        <p><strong>Circumference (meters):</strong> 306 / frequency (MHz)</p>
                                        <p><strong>Circumference (feet):</strong> 1005 / frequency (MHz)</p>
                                    </div>

                                    <h6 class="center-align mt-3">Shape Variations</h6>
                                    <ul class="browser-default">
                                        <li><strong>Square/Rectangle:</strong> Best all-around performer</li>
                                        <li><strong>Triangle (Delta):</strong> Good for single tall support</li>
                                        <li><strong>Circle:</strong> Most efficient but hardest to support</li>
                                        <li><strong>Diamond (Quad):</strong> Good when height is available</li>
                                    </ul>
                                </div>

                                <div class="card-panel blue-grey lighten-5 mt-3">
                                    <h6>Feeding Options</h6>
                                    <ul class="browser-default">
                                        <li><strong>Center Feed:</strong> Horizontal polarization, ~120Ω</li>
                                        <li><strong>Corner Feed:</strong> Vertical polarization, ~150-200Ω</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Delta Loop -->
            <section id="delta-loop" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">change_history</i>Delta Loop Antennas</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Requires only one tall support</li>
                                    <li>Other corners can be secured close to ground</li>
                                    <li>Flexible mounting options</li>
                                    <li>Feed point can be placed at convenient location</li>
                                    <li>Polarization can be selected via feed point</li>
                                    <li>Good performer for both DX and local contacts</li>
                                </ul>

                                <div class="card-panel mt-3">
                                    <h6>Configuration Options</h6>
                                    <ul class="browser-default">
                                        <li><strong>Apex Up:</strong> Most common, one tall support</li>
                                        <li><strong>Apex Down:</strong> Better for DX, needs two supports</li>
                                        <li><strong>Feed bottom center:</strong> For horizontal polarization</li>
                                        <li><strong>Feed at corner:</strong> For vertical polarization</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Delta Loop Dimensions</h5>
                                    <div class="formula-box">
                                        <p><strong>Total wire (meters):</strong> 306 / frequency (MHz)</p>
                                        <p><strong>Each side (meters):</strong> 102 / frequency (MHz)</p>
                                        <p><strong>Apex height:</strong> As high as possible (min. 1/4λ)</p>
                                    </div>
                                </div>

                                <div class="card-panel portable-panel blue-grey lighten-5">
                                    <h5>Portable Delta Loop Kit</h5>
                                    <ul class="browser-default">
                                        <li>10-12m telescoping fiberglass mast</li>
                                        <li>Full-wave length wire for your band</li>
                                        <li>Appropriate balun (2:1 or 4:1)</li>
                                        <li>Three lightweight corner insulators</li>
                                        <li>Two ground stakes for base corners</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quad Loops -->
            <section id="quad" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">crop_square</i>Quad Loop Antennas</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Excellent gain (up to 3 dBd over dipole)</li>
                                    <li>Square or diamond shape configuration</li>
                                    <li>Low angle of radiation for DX contacts</li>
                                    <li>Less sensitive to ground conditions</li>
                                    <li>Good bandwidth across an entire band</li>
                                </ul>

                                <div class="card-panel">
                                    <h6>Configuration Options</h6>
                                    <ul class="browser-default">
                                        <li><strong>Square:</strong> Needs four support points</li>
                                        <li><strong>Diamond:</strong> Can use single mast for top</li>
                                        <li><strong>Feed at side:</strong> For horizontal polarization</li>
                                        <li><strong>Feed at top/bottom:</strong> For vertical polarization</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Quad Loop Dimensions</h5>
                                    <div class="formula-box">
                                        <p><strong>Total wire (meters):</strong> 306 / frequency (MHz)</p>
                                        <p><strong>Each side (meters):</strong> 76.5 / frequency (MHz)</p>
                                        <p><strong>Height:</strong> Center at least 1/4λ above ground</p>
                                    </div>
                                </div>

                                <div class="card-panel amber lighten-5 mt-3">
                                    <h5>Self-Supporting Frame</h5>
                                    <p>For semi-permanent HOTA operations, consider building a self-supporting quad frame using:</p>
                                    <ul class="browser-default">
                                        <li>PVC pipe, fiberglass rod, or bamboo</li>
                                        <li>Cross construction in X pattern</li>
                                        <li>Wire secured to frame with cable ties</li>
                                        <li>Single-point mounting at center</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Small Transmitting Loops -->
            <section id="small-tx" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">radio_button_unchecked</i>Small Transmitting Loops</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Very compact (typically 1/10λ or less in diameter)</li>
                                    <li>Works well indoors or in limited spaces</li>
                                    <li>Less affected by nearby objects</li>
                                    <li>Excellent reception with reduced noise</li>
                                    <li>Can be used close to ground level</li>
                                    <li>Sharp nulls can reduce interference</li>
                                </ul>

                                <h5>Limitations</h5>
                                <ul class="browser-default">
                                    <li>Very narrow bandwidth (requires tuning)</li>
                                    <li>Lower efficiency than full-size antennas</li>
                                    <li>High voltages at the tuning capacitor</li>
                                    <li>Typically limited to 100W or less</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel antenna-diagram">
                                    <h5 class="center-align">Magnetic Loop Design</h5>
                                    <div class="formula-box">
                                        <p><strong>Diameter range:</strong> 0.03λ to 0.1λ</p>
                                        <p><strong>20m band diameter:</strong> ~1-2 meters</p>
                                        <p><strong>Conductor:</strong> Thick copper pipe/tubing</p>
                                        <p><strong>Key component:</strong> High-voltage variable capacitor</p>
                                    </div>
                                </div>

                                <div class="card-panel amber lighten-5 mt-3">
                                    <h6 class="center-align">Safety Warning</h6>
                                    <p>Small transmitting loops generate <strong>extremely high voltages</strong> at the tuning capacitor. Keep fingers away during operation and ensure proper insulation.</p>
                                </div>

                                <div class="card-panel mt-3">
                                    <h6>Construction Elements</h6>
                                    <ul class="browser-default">
                                        <li>Copper pipe or thick copper tubing</li>
                                        <li>Air/vacuum variable capacitor (3-5kV rating)</li>
                                        <li>Coupling loop (1/5 diameter of main loop)</li>
                                        <li>Non-conductive frame for support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Indoor Loop Antennas -->
            <section id="indoor" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">home</i>Indoor Loop Antennas</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Operation regardless of weather</li>
                                    <li>No outdoor installation required</li>
                                    <li>Completely invisible from outside</li>
                                    <li>Works for apartments/rental properties</li>
                                    <li>Easy to adjust or modify</li>
                                </ul>

                                <h5>Limitations</h5>
                                <ul class="browser-default">
                                    <li>Reduced efficiency vs outdoor antennas</li>
                                    <li>Building materials attenuate signals</li>
                                    <li>More susceptible to local interference</li>
                                    <li>Size limitations based on room dimensions</li>
                                    <li>May need reduced power operation</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5 class="center-align">Indoor Loop Types</h5>
                                    <div class="row">
                                        <div class="col s12">
                                            <h6><i class="material-icons tiny">room</i> Room-Perimeter Loop</h6>
                                            <ul class="browser-default">
                                                <li>Wire run around room perimeter</li>
                                                <li>Typically near ceiling height</li>
                                                <li>Best for 20m and higher bands</li>
                                                <li>Requires antenna tuner</li>
                                            </ul>
                                            <div class="divider mt-2 mb-2"></div>
                                            <h6><i class="material-icons tiny">radio_button_unchecked</i> Indoor Magnetic Loop</h6>
                                            <ul class="browser-default">
                                                <li>Most effective indoor HF option</li>
                                                <li>1-2 meter diameter for 20-10m</li>
                                                <li>Can be mounted on camera tripod</li>
                                                <li>Requires careful tuning</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-panel amber lighten-5 mt-3">
                                    <h5>Living Room Delta Loop</h5>
                                    <ul class="browser-default">
                                        <li>Run wire around room perimeter in triangle</li>
                                        <li>Mount as high as possible (near ceiling)</li>
                                        <li>Total wire: ~15m (49ft) for 20m band</li>
                                        <li>Feed at corner with 4:1 balun</li>
                                        <li>Use antenna tuner for optimal SWR</li>
                                        <li>Consider QRP operation for RF safety</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Receiving Loops -->
            <section id="rx-loops" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">hearing</i>Receiving Loop Antennas</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <h5>Key Features</h5>
                                <ul class="browser-default">
                                    <li>Exceptional noise rejection</li>
                                    <li>Very small physical size (typically under 1m)</li>
                                    <li>Sharp nulls to eliminate specific noise sources</li>
                                    <li>Can be rotated to optimize reception</li>
                                    <li>Works well indoors or near ground</li>
                                    <li>Dramatically improves reception in noisy environments</li>
                                </ul>

                                <h5>Limitations</h5>
                                <ul class="browser-default">
                                    <li>Receive-only (needs separate TX antenna)</li>
                                    <li>Very low output requires preamplifier</li>
                                    <li>Directional - needs rotating for different directions</li>
                                    <li>Most effective on lower bands (160-30m)</li>
                                </ul>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5 class="center-align">Receiving Loop Types</h5>
                                    <ul class="browser-default">
                                        <li><strong>Small Loop:</strong> 1m diameter, tuned with variable capacitor</li>
                                        <li><strong>Flag/Pennant:</strong> Terminated loops with resistive loading</li>
                                        <li><strong>K9AY Loop:</strong> Switchable direction receiving loop</li>
                                    </ul>

                                    <h6 class="center-align mt-3">HOTA Application</h6>
                                    <p>Use a receiving loop with your main antenna for diversity reception:</p>
                                    <ul class="browser-default">
                                        <li>Main antenna for transmitting</li>
                                        <li>Receiving loop for noise-free reception</li>
                                        <li>Switch between antennas for TX/RX</li>
                                        <li>Rotate loop for best signal-to-noise ratio</li>
                                    </ul>
                                </div>

                                <div class="card-panel portable-panel blue-grey lighten-5">
                                    <h5>Commercial Options</h5>
                                    <ul class="browser-default">
                                        <li>Wellbrook Loop - High-performance active loops</li>
                                        <li>MFJ-1886 - Compact active receiving loop</li>
                                        <li>W6LVP Loop - Affordable active loop antenna</li>
                                        <li>Cross Country Wireless loops</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Installation Tips -->
            <section id="installation" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">build</i>Installation Tips</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5>Full-Size Loop Installation</h5>
                                    <ul class="browser-default">
                                        <li><strong>Height:</strong> Bottom edge at least 2m (6ft) above ground</li>
                                        <li><strong>Polarization:</strong> Vertical plane for horizontal polarization</li>
                                        <li><strong>Supports:</strong> Trees, poles, buildings make good anchor points</li>
                                        <li><strong>Materials:</strong> Use UV-resistant wire and insulators</li>
                                        <li><strong>Feed:</strong> Include balun appropriate for feed impedance</li>
                                    </ul>
                                </div>

                                <div class="card-panel mt-3">
                                    <h5>Magnetic Loop Setup</h5>
                                    <ul class="browser-default">
                                        <li><strong>Mounting:</strong> Camera tripod, PVC frame, or wall brackets</li>
                                        <li><strong>Orientation:</strong> Vertical for omnidirectional pattern</li>
                                        <li><strong>Tuning:</strong> Remote tuning mechanism recommended</li>
                                        <li><strong>Safety:</strong> Keep at least 1m from people when transmitting</li>
                                        <li><strong>Placement:</strong> Away from metal objects for best performance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5>Portable Deployment Tips</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h6>Delta Loop</h6>
                                            <ul class="browser-default">
                                                <li>Single tall support for apex</li>
                                                <li>Ground stakes for bottom corners</li>
                                                <li>Pre-measured wire with corner markers</li>
                                                <li>Lightweight balun at feedpoint</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <h6>Magnetic Loop</h6>
                                            <ul class="browser-default">
                                                <li>Collapsible/segmented tubing</li>
                                                <li>Foldable tripod mount</li>
                                                <li>Protected tuning capacitor</li>
                                                <li>Padded carrying bag</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-panel amber lighten-5 mt-3">
                                    <h5>Safety Considerations</h5>
                                    <ul class="browser-default">
                                        <li><strong>Never</strong> install near power lines</li>
                                        <li>Small transmitting loops generate hazardous voltages</li>
                                        <li>Ensure sturdy mounting to prevent collapse</li>
                                        <li>Be aware of RF exposure guidelines</li>
                                        <li>For indoor loops, consider using lower power</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DIY Loop Projects -->
            <section id="projects" class="scrollspy">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><i class="material-icons left">build</i>DIY Loop Projects</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5 class="center-align">Portable 20m Delta Loop</h5>
                                    <h6>Materials Needed</h6>
                                    <ul class="browser-default">
                                        <li>15m (49ft) of lightweight wire</li>
                                        <li>One 6-10m telescopic fiberglass pole</li>
                                        <li>Two ground stakes</li>
                                        <li>Three lightweight insulators</li>
                                        <li>2:1 balun (toroid core with windings)</li>
                                        <li>Short length of coax (3-5m) with connectors</li>
                                    </ul>
                                    <h6>Construction Steps</h6>
                                    <ol class="browser-default">
                                        <li>Create balun using toroid core</li>
                                        <li>Cut wire to full-wave length (~14.5m for 20m)</li>
                                        <li>Attach insulators at each corner</li>
                                        <li>Install balun at the feed point</li>
                                        <li>Prepare apex attachment for the pole</li>
                                        <li>Include ground anchors for bottom corners</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card-panel">
                                    <h5 class="center-align">Desktop Magnetic Loop</h5>
                                    <h6>Materials Needed</h6>
                                    <ul class="browser-default">
                                        <li>2m (6.6ft) of 15-22mm copper pipe/tubing</li>
                                        <li>Air-variable capacitor (15-150pF range)</li>
                                        <li>Small coupling loop (1/5 main loop diameter)</li>
                                        <li>PVC pipe segments for stand</li>
                                        <li>SO-239 connector for coupling loop</li>
                                        <li>Short length of coax</li>
                                    </ul>
                                    <h6>Construction Steps</h6>
                                    <ol class="browser-default">
                                        <li>Form copper into circle/octagon (~60-70cm diameter)</li>
                                        <li>Create PVC mounting system</li>
                                        <li>Install variable capacitor across the loop gap</li>
                                        <li>Create coupling loop from coax or wire</li>
                                        <li>Mount coupling loop opposite the capacitor</li>
                                        <li>Test and tune starting with very low power</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col s12">
                                <div class="card-panel blue-grey lighten-5">
                                    <h5 class="center-align">Testing & Optimizing Your Loop</h5>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <ol class="browser-default">
                                                <li>Use an antenna analyzer when possible</li>
                                                <li>Check resonant frequency and SWR</li>
                                                <li>Adjust dimensions if needed</li>
                                                <li>Test initially with low power (5-10W)</li>
                                                <li>Check for RF feedback or hot spots</li>
                                            </ol>
                                        </div>
                                        <div class="col s12 m6">
                                            <ol class="browser-default" start="6">
                                                <li>Document tuning settings for quick reference</li>
                                                <li>Test in different orientations and heights</li>
                                                <li>For magnetic loops, carefully adjust coupling</li>
                                                <li>Weatherproof outdoor installations</li>
                                                <li>Make incremental adjustments and test after each</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resources & Conclusion -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Additional Resources</span>
                    <div class="row">
                        <div class="col s12 m6">
                            <h5>HOTA-Related Resources</h5>
                            <ul class="browser-default">
                                <li><a href="?page=wire-antennas">Wire Antenna Guide</a></li>
                                <li><a href="?page=vertical-antennas">Vertical Antenna Guide</a></li>
                                <li><a href="?page=portable-antennas">Portable Antenna Options</a></li>
                                <li><a href="?page=band-plans">Band Plans & Antenna Calculator</a></li>
                            </ul>
                        </div>
                        <div class="col s12 m6">
                            <h5>External Resources</h5>
                            <ul class="browser-default">
                                <li><a href="https://www.arrl.org/shop/ARRL-Antenna-Book-24th-Softcover-Edition/" target="_blank" rel="nofollow">ARRL Antenna Book</a></li>
                                <li><a href="https://www.g0kya.blogspot.com/" target="_blank" rel="nofollow">G0KYA's Blog (Loop Antenna Designs)</a></li>
                                <li><a href="https://www.aa5tb.com/loop.html" target="_blank" rel="nofollow">AA5TB Small Loop Antenna Calculator</a></li>
                                <li><a href="http://www.ko4bb.com/ham-radio/" target="_blank" rel="nofollow">KO4BB Loop Antenna Pages</a></li>
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

.mb-2 {
    margin-bottom: 1rem;
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
