<?php
$pageTitle = "Sitemap - Houses on The Air";
$pageDescription = "Complete sitemap of the Houses on The Air (HOTA) website. Find all pages organized by category for easy navigation.";
?>

<div class="container">
    <h1>Website Sitemap</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li>Sitemap</li>
        </ul>
    </div>

    <p class="flow-text">This sitemap provides an overview of all pages available on the Houses on The Air website, organized by category for easy navigation.</p>

    <div class="row">
        <!-- Search box -->
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons left">search</i>Find a Page</span>
                    <div class="input-field">
                        <input type="text" id="sitemap-search" placeholder="Type to search pages...">
                        <label for="sitemap-search">Search</label>
                        <span class="helper-text">Type any keyword to filter pages</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="sitemap-content">
        <!-- Main Pages -->
        <div class="card sitemap-section" id="main-pages">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">home</i>Main Pages</span>
                <div class="collection">
                    <a href="/" class="collection-item">
                        <div class="sitemap-link-title">Home</div>
                        <div class="sitemap-link-desc">The main landing page with latest news and featured content.</div>
                    </a>
                    <a href="?page=about" class="collection-item">
                        <div class="sitemap-link-title">About HOTA</div>
                        <div class="sitemap-link-desc">Learn about Houses on The Air, our mission, and history.</div>
                    </a>
                    <a href="?page=participate" class="collection-item">
                        <div class="sitemap-link-title">Participate</div>
                        <div class="sitemap-link-desc">Information on how to get involved with HOTA activities.</div>
                    </a>
                    <a href="?page=awards" class="collection-item">
                        <div class="sitemap-link-title">Awards</div>
                        <div class="sitemap-link-desc">Details about our award tiers and how to earn them.</div>
                    </a>
                    <a href="?page=resources" class="collection-item">
                        <div class="sitemap-link-title">Resources</div>
                        <div class="sitemap-link-desc">Guides, tools, and resources for amateur radio operators.</div>
                    </a>
                    <a href="?page=contact" class="collection-item">
                        <div class="sitemap-link-title">Contact</div>
                        <div class="sitemap-link-desc">Get in touch with the HOTA team.</div>
                    </a>
                    <a href="?page=faq" class="collection-item">
                        <div class="sitemap-link-title">FAQ</div>
                        <div class="sitemap-link-desc">Frequently Asked Questions about HOTA.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Participation Pages -->
        <div class="card sitemap-section" id="participation">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">people</i>Participation</span>
                <div class="collection">
                    <a href="?page=house-activations" class="collection-item">
                        <div class="sitemap-link-title">House Activations</div>
                        <div class="sitemap-link-desc">Guide to activating houses for HOTA.</div>
                    </a>
                    <a href="?page=contests" class="collection-item">
                        <div class="sitemap-link-title">Contests & Events</div>
                        <div class="sitemap-link-desc">Information on HOTA contests and upcoming events.</div>
                    </a>
                    <a href="?page=community-events" class="collection-item">
                        <div class="sitemap-link-title">Community Events</div>
                        <div class="sitemap-link-desc">Community-organized HOTA events and activities.</div>
                    </a>
                    <a href="?page=log-entry" class="collection-item">
                        <div class="sitemap-link-title">Log Entry</div>
                        <div class="sitemap-link-desc">Submit your HOTA contact logs for award credit.</div>
                    </a>
                    <a href="?page=nets" class="collection-item">
                        <div class="sitemap-link-title">HOTA Nets</div>
                        <div class="sitemap-link-desc">Regular on-air meeting schedules for HOTA operators.</div>
                    </a>
                    <a href="?page=get-licenced" class="collection-item">
                        <div class="sitemap-link-title">Get Licensed</div>
                        <div class="sitemap-link-desc">Information for newcomers to amateur radio.</div>
                    </a>
                    <a href="?page=operating-guidelines" class="collection-item">
                        <div class="sitemap-link-title">Operating Guidelines</div>
                        <div class="sitemap-link-desc">Best practices for HOTA operations.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Awards & Recognition -->
        <div class="card sitemap-section" id="awards">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">emoji_events</i>Awards & Recognition</span>
                <div class="collection">
                    <a href="?page=awards" class="collection-item">
                        <div class="sitemap-link-title">Awards Program</div>
                        <div class="sitemap-link-desc">Overview of the HOTA awards program.</div>
                    </a>
                    <a href="?page=award-tiers" class="collection-item">
                        <div class="sitemap-link-title">Award Tiers</div>
                        <div class="sitemap-link-desc">Detailed information about award levels and requirements.</div>
                    </a>
                    <a href="?page=certificates" class="collection-item">
                        <div class="sitemap-link-title">Certificates</div>
                        <div class="sitemap-link-desc">Gallery of HOTA award certificates.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Technical Resources -->
        <div class="card sitemap-section" id="technical">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">build</i>Technical Resources</span>
                <div class="collection">
                    <a href="?page=band-plans" class="collection-item">
                        <div class="sitemap-link-title">Band Plans</div>
                        <div class="sitemap-link-desc">Radio frequency allocations and recommended operating frequencies.</div>
                    </a>
                    <a href="?page=portable-antennas" class="collection-item">
                        <div class="sitemap-link-title">Portable Antennas</div>
                        <div class="sitemap-link-desc">Guide to antenna options for portable operations.</div>
                    </a>
                    <a href="?page=adif-guide" class="collection-item">
                        <div class="sitemap-link-title">ADIF Guide</div>
                        <div class="sitemap-link-desc">Information about the Amateur Data Interchange Format for logs.</div>
                    </a>
                    <a href="?page=logging-software" class="collection-item">
                        <div class="sitemap-link-title">Logging Software</div>
                        <div class="sitemap-link-desc">Recommended software for logging HOTA contacts.</div>
                    </a>
                    <a href="?page=appicons" class="collection-item">
                        <div class="sitemap-link-title">App Icons & Assets</div>
                        <div class="sitemap-link-desc">Download HOTA logos and icons for applications.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Community -->
        <div class="card sitemap-section" id="community">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">forum</i>Community</span>
                <div class="collection">
                    <a href="?page=discord" class="collection-item">
                        <div class="sitemap-link-title">Discord Community</div>
                        <div class="sitemap-link-desc">Join our Discord server for real-time discussions.</div>
                    </a>
                    <a href="?page=team" class="collection-item">
                        <div class="sitemap-link-title">HOTA Team</div>
                        <div class="sitemap-link-desc">Meet the volunteers running Houses on The Air.</div>
                    </a>
                    <a href="?page=support-us" class="collection-item">
                        <div class="sitemap-link-title">Support HOTA</div>
                        <div class="sitemap-link-desc">Ways you can support the HOTA program.</div>
                    </a>
                    <a href="?page=join-our-team" class="collection-item">
                        <div class="sitemap-link-title">Join Our Team</div>
                        <div class="sitemap-link-desc">Volunteer opportunities with HOTA.</div>
                    </a>
                    <a href="?page=mailing-list" class="collection-item">
                        <div class="sitemap-link-title">Mailing List</div>
                        <div class="sitemap-link-desc">Subscribe to our newsletter for updates.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Reference & Tools -->
        <div class="card sitemap-section" id="reference">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">library_books</i>Reference & Tools</span>
                <div class="collection">
                    <a href="?page=glossary" class="collection-item">
                        <div class="sitemap-link-title">Glossary</div>
                        <div class="sitemap-link-desc">Amateur radio and HOTA terminology explained.</div>
                    </a>
                    <a href="?page=rules" class="collection-item">
                        <div class="sitemap-link-title">Rules</div>
                        <div class="sitemap-link-desc">Official rules for the HOTA program.</div>
                    </a>
                    <a href="?page=opensource" class="collection-item">
                        <div class="sitemap-link-title">Open Source</div>
                        <div class="sitemap-link-desc">Information about our open source software.</div>
                    </a>
                    <a href="?page=tgif" class="collection-item">
                        <div class="sitemap-link-title">TGIF Network</div>
                        <div class="sitemap-link-desc">Information about HOTA on the TGIF DMR network.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Legal & Policies -->
        <div class="card sitemap-section" id="legal">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">gavel</i>Legal & Policies</span>
                <div class="collection">
                    <a href="?page=terms" class="collection-item">
                        <div class="sitemap-link-title">Terms of Service</div>
                        <div class="sitemap-link-desc">Terms and conditions for using the HOTA website.</div>
                    </a>
                    <a href="?page=privacy" class="collection-item">
                        <div class="sitemap-link-title">Privacy Policy</div>
                        <div class="sitemap-link-desc">How we collect and use your data.</div>
                    </a>
                    <a href="?page=cookies" class="collection-item">
                        <div class="sitemap-link-title">Cookie Policy</div>
                        <div class="sitemap-link-desc">Information about our use of cookies.</div>
                    </a>
                    <a href="?page=gdpr" class="collection-item">
                        <div class="sitemap-link-title">GDPR Compliance</div>
                        <div class="sitemap-link-desc">Our compliance with data protection regulations.</div>
                    </a>
                    <a href="?page=modern-slavery" class="collection-item">
                        <div class="sitemap-link-title">Modern Slavery Statement</div>
                        <div class="sitemap-link-desc">Our commitment against modern slavery.</div>
                    </a>
                    <a href="?page=advertising" class="collection-item">
                        <div class="sitemap-link-title">Advertising</div>
                        <div class="sitemap-link-desc">Information about advertising on our platform.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Store -->
        <div class="card sitemap-section" id="store">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">shopping_cart</i>Store</span>
                <div class="collection">
                    <a href="?page=store" class="collection-item">
                        <div class="sitemap-link-title">HOTA Store</div>
                        <div class="sitemap-link-desc">Purchase HOTA merchandise and gear.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Information about the sitemap -->
    <div class="card-panel blue-grey lighten-5 mt-4">
        <div class="row valign-wrapper">
            <div class="col s12 m2 center-align">
                <i class="material-icons large">language</i>
            </div>
            <div class="col s12 m10">
                <h3 class="no-margin-top">About This Sitemap</h3>
                <p>This sitemap was last updated on <?php echo date('F j, Y'); ?>. If you cannot find what you're looking for, please <a href="?page=contact">contact us</a> for assistance.</p>
                <p>For developers and search engines, we also provide an <a href="/sitemap.xml">XML sitemap</a> that includes all pages on our website.</p>
            </div>
        </div>
    </div>
</div>

<style>
.sitemap-section {
    margin-bottom: 20px;
}

.sitemap-link-title {
    font-weight: 500;
    font-size: 1.1rem;
}

.sitemap-link-desc {
    font-size: 0.9rem;
    color: #666;
    margin-top: 3px;
}

.collection .collection-item {
    transition: background-color 0.2s ease;
}

.collection .collection-item:hover {
    background-color: #f5f5f5;
}

.mt-4 {
    margin-top: 2rem;
}

/* Hide section if it doesn't contain any visible items due to search */
.sitemap-section:not(:has(.collection-item:not(.hide))) {
    display: none;
}

.large {
    font-size: 4rem;
}

.no-margin-top {
    margin-top: 0;
}

.hidden {
    display: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.getElementById('sitemap-search');

    searchInput.addEventListener('keyup', function() {
        const searchTerm = this.value.toLowerCase();

        // Get all sitemap links
        const links = document.querySelectorAll('.collection-item');

        links.forEach(function(link) {
            const title = link.querySelector('.sitemap-link-title').textContent.toLowerCase();
            const desc = link.querySelector('.sitemap-link-desc').textContent.toLowerCase();

            // Show/hide based on search term
            if (title.includes(searchTerm) || desc.includes(searchTerm)) {
                link.classList.remove('hide');
            } else {
                link.classList.add('hide');
            }
        });
    });
});
</script>
