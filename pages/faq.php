<?php
$pageTitle = "Frequently Asked Questions - HOTA";
$pageDescription = "Find answers to common questions about Houses on the Air (HOTA), including logging, awards, rules, activations, and technical aspects.";
?>

<div class="container">
    <h1>Frequently Asked Questions</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=about">About</a></li>
            <li>FAQ</li>
        </ul>
    </div>

    <p class="flow-text">Find answers to frequently asked questions about the Houses on the Air program.</p>

    <!-- FAQ Categories -->
    <div class="card-panel">
        <h3>FAQ Categories</h3>
        <div class="row">
            <div class="col s6 m3">
                <a href="#general" class="btn blue-grey darken-1 waves-effect waves-light btn-large">General</a>
            </div>
            <div class="col s6 m3">
                <a href="#activating" class="btn blue-grey darken-1 waves-effect waves-light btn-large">Activating</a>
            </div>
            <div class="col s6 m3">
                <a href="#logging" class="btn blue-grey darken-1 waves-effect waves-light btn-large">Logging</a>
            </div>
            <div class="col s6 m3">
                <a href="#awards" class="btn blue-grey darken-1 waves-effect waves-light btn-large">Awards</a>
            </div>
        </div>
    </div>

    <!-- General Questions -->
    <div id="general" class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help_outline</i>General Questions</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What is Houses on the Air (HOTA)?</div>
                    <div class="collapsible-body">
                        <p>Houses on the Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various house locations. The goal is to promote fixed operations and to make contacts with other amateur radio operators from unique house locations. Participants can enjoy the challenge of setting up their equipment in different environments and can earn awards based on the number of unique house locations they activate and the number of contacts they make.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How do I participate in HOTA?</div>
                    <div class="collapsible-body">
                        <p>There are two main ways to participate in HOTA:</p>
                        <ol>
                            <li><strong>As an Activator:</strong> Set up and operate your amateur radio station from different house locations.</li>
                            <li><strong>As a Hunter:</strong> Make contacts with operators who are activating house locations.</li>
                        </ol>
                        <p>In both cases, you'll need to log your contacts and include the address of the house location. See our <a href="?page=participate">participation guide</a> for more information.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>Do I need any special equipment to participate?</div>
                    <div class="collapsible-body">
                        <p>No special equipment is required beyond your regular amateur radio station. However, if you plan to activate houses, portable equipment can be helpful. This might include:</p>
                        <ul class="browser-default">
                            <li>A portable transceiver</li>
                            <li>Battery power or generator</li>
                            <li>Portable antennas</li>
                            <li>Logging device (paper log, laptop, or mobile device)</li>
                        </ul>
                        <p>See our <a href="?page=house-activations">House Activations Guide</a> and <a href="?page=portable-antennas">Portable Antenna Solutions</a> for more information.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>Is HOTA free to participate in?</div>
                    <div class="collapsible-body">
                        <p>Yes, participation in HOTA is completely free. There are no fees to submit logs or claim awards. Digital certificates are provided at no cost.</p>
                        <p>Optional physical certificates for higher award tiers have a small fee to cover printing and shipping costs.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How do I join the HOTA community?</div>
                    <div class="collapsible-body">
                        <p>The HOTA community is active in several places:</p>
                        <ul class="browser-default">
                            <li>Join our <a href="?page=discord">Discord server</a> for real-time discussions and announcements</li>
                            <li>Follow us on social media (<a href="<?= ConfigManager::get('social.twitter') ?>" target="_blank" rel="nofollow">Twitter/X</a>, <a href="<?= ConfigManager::get('social.facebook') ?>" target="_blank" rel="nofollow">Facebook</a>, etc.)</li>
                            <li>Subscribe to our <a href="?page=mailing-list">mailing list</a> for updates</li>
                            <li>Participate in <a href="?page=contests">HOTA contests and events</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Activating Questions -->
    <div id="activating" class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help_outline</i>Activating Houses</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What qualifies as a "house" for HOTA?</div>
                    <div class="collapsible-body">
                        <p>For HOTA purposes, a "house" is defined as any residential structure with a unique address where people live or have lived. This includes:</p>
                        <ul class="browser-default">
                            <li>Single-family homes</li>
                            <li>Apartments and flats</li>
                            <li>Cottages and cabins</li>
                            <li>Historic homes and manors</li>
                            <li>Residential structures on the register of historic places</li>
                        </ul>
                        <p>Non-residential buildings (businesses, shops, etc.) don't qualify for HOTA.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>Do I need permission to activate a house?</div>
                    <div class="collapsible-body">
                        <p>Yes, you should always have permission to operate from a house location. This could be:</p>
                        <ul class="browser-default">
                            <li>Your own home</li>
                            <li>A friend or family member's home (with their permission)</li>
                            <li>Public residential historic sites (with permission from the managing authority)</li>
                            <li>Vacation rentals (check with the owner/management)</li>
                        </ul>
                        <p>Never trespass on private property or operate from a location without proper authorization.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How do I announce my activation?</div>
                    <div class="collapsible-body">
                        <p>There are several ways to announce your HOTA activation:</p>
                        <ol>
                            <li>Post your planned activation details on our <a href="?page=discord">Discord server</a> in the #announcements channel</li>
                            <li>Share on social media with the hashtag #HOTA</li>
                            <li>Announce on the HOTA activations cluster (coming soon)</li>
                            <li>During your activation, call "CQ HOTA" to identify yourself as a HOTA activator</li>
                        </ol>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What bands and modes can I use for HOTA?</div>
                    <div class="collapsible-body">
                        <p>HOTA activities can take place on any amateur radio band and using any mode. The most common bands for HOTA activations are:</p>
                        <ul class="browser-default">
                            <li>HF bands (40m, 20m, and 15m are particularly popular)</li>
                            <li>VHF/UHF bands (for local contacts)</li>
                        </ul>
                        <p>Popular modes include SSB, CW, FM, and digital modes like FT8 and FT4.</p>
                        <p>For more information, see our <a href="?page=band-plans">band plans guide</a>.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How long should I operate during an activation?</div>
                    <div class="collapsible-body">
                        <p>There's no minimum or maximum time requirement for a HOTA activation. It's entirely up to you based on your availability and circumstances. Some activators operate for as little as 30 minutes, while others may spend several hours or even days at a location.</p>
                        <p>For logging purposes, each unique address counts as one activation, regardless of how long you operate or how many contacts you make.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Logging Questions -->
    <div id="logging" class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help_outline</i>Logging and Submissions</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What information do I need to include in my log?</div>
                    <div class="collapsible-body">
                        <p>For HOTA purposes, your log should include:</p>
                        <ul class="browser-default">
                            <li>Callsigns of stations contacted</li>
                            <li>Date and time of contact</li>
                            <li>Band or frequency</li>
                            <li>Mode</li>
                            <li>Signal reports</li>
                            <li><strong>Address</strong> of the house (this is critical for HOTA tracking)</li>
                        </ul>
                        <p>For ADIF logs, make sure the ADDRESS field is populated. See our <a href="?page=adif-guide">ADIF Format Guide</a> for more information.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How do I submit my logs?</div>
                    <div class="collapsible-body">
                        <p>Log submission is done through our <a href="?page=log-entry">Log Entry page</a>. The basic steps are:</p>
                        <ol>
                            <li>Export your log in ADIF format from your logging software</li>
                            <li>Visit the <a href="?page=log-entry">Log Entry page</a></li>
                            <li>Enter your callsign and select the log type (Activator or Hunter)</li>
                            <li>Upload your ADIF file</li>
                            <li>Submit the form</li>
                        </ol>
                        <p>Our system will process your log and update your awards progress automatically.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What logging software should I use?</div>
                    <div class="collapsible-body">
                        <p>You can use any logging software that supports ADIF export. Some popular options include:</p>
                        <ul class="browser-default">
                            <li>N1MM+ Logger</li>
                            <li>Log4OM</li>
                            <li>Ham Radio Deluxe</li>
                            <li>Logger32</li>
                            <li>CQRLOG</li>
                        </ul>
                        <p>See our <a href="?page=logging-software">Recommended Logging Software</a> guide for more information.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How do I ensure the ADDRESS field is included in my ADIF export?</div>
                    <div class="collapsible-body">
                        <p>Different logging software handles the ADDRESS field differently. In general:</p>
                        <ol>
                            <li>Check if your software has a field for "address" or "QTH" in the contact details</li>
                            <li>If not, look for custom fields or notes that can be exported with your ADIF</li>
                            <li>Make sure the field is included in your ADIF export settings</li>
                        </ol>
                        <p>For specific software instructions, see our <a href="?page=adif-guide">ADIF Format Guide</a>.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What happens if I don't have the address field in my log?</div>
                    <div class="collapsible-body">
                        <p>Without the ADDRESS field, our system cannot track unique addresses for award purposes. If your log is missing this field:</p>
                        <ol>
                            <li>The contacts will still be accepted</li>
                            <li>However, they won't count toward your HOTA awards progress</li>
                            <li>Consider adding the address information and resubmitting your log</li>
                        </ol>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Awards Questions -->
    <div id="awards" class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help_outline</i>Awards and Recognition</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What awards are available in HOTA?</div>
                    <div class="collapsible-body">
                        <p>HOTA offers a tiered award system based on the number of unique addresses you've activated or contacted:</p>
                        <ul class="browser-default">
                            <li><strong>Mansion:</strong> 1,000,000+ unique addresses</li>
                            <li><strong>Victorian Villa:</strong> 500,000+ unique addresses</li>
                            <li><strong>Country Cottage:</strong> 250,000+ unique addresses</li>
                            <li><strong>Townhouse:</strong> 100,000+ unique addresses</li>
                            <li><strong>Detached House:</strong> 10,000+ unique addresses</li>
                            <li><strong>Semi-Detached House:</strong> 1,000+ unique addresses</li>
                            <li><strong>Terraced House:</strong> 500+ unique addresses</li>
                            <li><strong>Bedsit:</strong> 100+ unique addresses</li>
                            <li><strong>Cardboard Box:</strong> Any participation</li>
                        </ul>
                        <p>See our <a href="?page=award-tiers">Award Tiers</a> page for more details.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How do I claim my awards?</div>
                    <div class="collapsible-body">
                        <p>Awards are automatically processed when you submit your logs through our <a href="?page=log-entry">Log Entry page</a>. After submission:</p>
                        <ol>
                            <li>Our system counts the unique addresses in your logs</li>
                            <li>Your award tier is determined based on the count</li>
                            <li>Digital certificates become available in your profile</li>
                            <li>For higher tiers, you can order physical certificates</li>
                        </ol>
                        <p>You don't need to manually claim awards - the system handles it automatically.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>Are there separate awards for activators and hunters?</div>
                    <div class="collapsible-body">
                        <p>Yes, HOTA maintains separate award tracks for activators and hunters:</p>
                        <ul class="browser-default">
                            <li><strong>Activator Awards:</strong> For operators who set up and operate from houses</li>
                            <li><strong>Hunter Awards:</strong> For operators who make contacts with house activators</li>
                        </ul>
                        <p>The same tier names and requirements apply to both tracks, but they are tracked separately. You can earn awards in both categories.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What do the certificates look like?</div>
                    <div class="collapsible-body">
                        <p>HOTA certificates are professionally designed and feature:</p>
                        <ul class="browser-default">
                            <li>Your callsign and name</li>
                            <li>The award tier achieved</li>
                            <li>Date of achievement</li>
                            <li>Unique certificate number</li>
                            <li>Thematic house design matching your award tier</li>
                        </ul>
                        <p>You can view sample certificates in our <a href="?page=certificates">Certificate Gallery</a>.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>Are there special awards or challenges?</div>
                    <div class="collapsible-body">
                        <p>Yes, in addition to the main tiered awards, HOTA offers special awards and challenges:</p>
                        <ul class="browser-default">
                            <li><strong>Contest Awards:</strong> For winners of official HOTA contests</li>
                            <li><strong>Annual Achievement Awards:</strong> Recognizing the most active participants each year</li>
                            <li><strong>Innovation Awards:</strong> For unique contributions to the HOTA program</li>
                            <li><strong>Seasonal Challenges:</strong> Temporary challenges with special certificates</li>
                        </ul>
                        <p>Check our <a href="?page=contests">Contests page</a> and <a href="?page=community-events">Community Events page</a> for current special awards and challenges.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Technical Questions -->
    <div id="technical" class="card mt-4">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">help_outline</i>Technical Questions</span>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What is the best antenna for HOTA activations?</div>
                    <div class="collapsible-body">
                        <p>The best antenna depends on your specific situation, but generally:</p>
                        <ul class="browser-default">
                            <li><strong>For portability:</strong> End-fed half-wave (EFHW) antennas are popular due to their single-point support requirement</li>
                            <li><strong>For performance:</strong> Dipoles offer excellent performance when you have suitable supports</li>
                            <li><strong>For space-constrained locations:</strong> Magnetic loops work well in small spaces</li>
                            <li><strong>For multi-band operation:</strong> Linked dipoles or trap verticals provide flexibility</li>
                        </ul>
                        <p>See our <a href="?page=portable-antennas">Portable Antenna Solutions</a> guide for detailed recommendations.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What power level should I use for HOTA?</div>
                    <div class="collapsible-body">
                        <p>There are no specific power requirements for HOTA. You can use any power level permitted by your license. However:</p>
                        <ul class="browser-default">
                            <li>Lower power (QRP) is often sufficient and helps conserve battery life for portable operations</li>
                            <li>100 watts is typically more than adequate for most HOTA operations</li>
                            <li>Higher power may be useful for challenging conditions or if operating from remote locations</li>
                        </ul>
                        <p>Remember to always follow your local regulations regarding power limits.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>How can I operate HOTA from my apartment?</div>
                    <div class="collapsible-body">
                        <p>Apartments make excellent HOTA locations! Here are some tips for apartment operation:</p>
                        <ul class="browser-default">
                            <li>Use balcony-friendly antennas like magnetic loops, compact verticals, or window-mounted wires</li>
                            <li>Consider indoor antennas like loaded dipoles or loops if outdoor options aren't available</li>
                            <li>Low power digital modes like FT8 can be effective with compromised antenna setups</li>
                            <li>Focus on higher bands (20m and up) which often work better with smaller antennas</li>
                            <li>Pay attention to your apartment's specific address for logging purposes</li>
                        </ul>
                        <p>Remember that apartments count just as much as houses for HOTA awards!</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>What's the best time of day for HOTA activations?</div>
                    <div class="collapsible-body">
                        <p>The best time depends on your location, target audience, and bands you're using:</p>
                        <ul class="browser-default">
                            <li><strong>40m and lower bands:</strong> Often better in the early morning or evening</li>
                            <li><strong>20m:</strong> Usually good during daylight hours</li>
                            <li><strong>15m and higher bands:</strong> Best during peak daylight hours when open</li>
                            <li><strong>Weekends:</strong> Generally have more amateur activity</li>
                            <li><strong>Contest weekends:</strong> Very active but can be crowded</li>
                        </ul>
                        <p>Check propagation predictions for your specific location and target areas for optimal times.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">question_answer</i>Do digital modes count for HOTA?</div>
                    <div class="collapsible-body">
                        <p>Yes, all modes including digital modes count for HOTA. Digital modes like FT8, FT4, PSK31, and others are excellent for HOTA operations because:</p>
                        <ul class="browser-default">
                            <li>They work well with low power and compromised antennas</li>
                            <li>They can be effective during poor propagation conditions</li>
                            <li>Contact information is usually very accurate</li>
                        </ul>
                        <p>The only challenge is exchanging address information, which isn't part of standard digital mode exchanges. Some options include:</p>
                        <ul class="browser-default">
                            <li>Post your address info on the HOTA spotting network (coming soon)</li>
                            <li>Include brief address info in free-text fields when the mode supports it</li>
                            <li>Follow up with an email or online QSL service to provide address details</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Still Have Questions -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <h3>Still Have Questions?</h3>
        <p>If you didn't find the answer you're looking for, there are several ways to get help:</p>
        <div class="row">
            <div class="col s12 m6">
                <h4>Community Resources</h4>
                <ul class="browser-default">
                    <li><a href="?page=discord">Join our Discord server</a> and ask in the #help channel</li>
                    <li>Check our <a href="?page=glossary">Amateur Radio Glossary</a> for terminology</li>
                    <li>Browse our <a href="?page=resources">Resource Library</a> for guides and tutorials</li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h4>Contact Us</h4>
                <ul class="browser-default">
                    <li>Send us a message through our <a href="?page=contact">Contact Form</a></li>
                    <li>Email us at <a href="mailto:<?= ConfigManager::get('email.info') ?>"><?= ConfigManager::get('email.info') ?></a></li>
                    <li>Connect with us on <a href="<?= ConfigManager::get('social.facebook') ?>" target="_blank" rel="nofollow">Facebook</a> or <a href="<?= ConfigManager::get('social.twitter') ?>" target="_blank" rel="nofollow">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize collapsible elements
    var collapsibleElems = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsibleElems);

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Update URL with hash for direct linking
                    history.pushState(null, null, targetId);
                }
            }
        });
    });

    // Check for hash in URL and scroll to that section
    if (window.location.hash) {
        const targetElement = document.querySelector(window.location.hash);
        if (targetElement) {
            setTimeout(() => {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });

                // If it's inside a collapsible, open that item
                const collapsibleItem = targetElement.closest('.collapsible li');
                if (collapsibleItem) {
                    const instance = M.Collapsible.getInstance(collapsibleItem.parentElement);
                    const index = Array.from(collapsibleItem.parentElement.children).indexOf(collapsibleItem);
                    if (instance && index >= 0) {
                        instance.open(index);
                    }
                }
            }, 100);
        }
    }
});
</script>
