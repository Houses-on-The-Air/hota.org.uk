</main> <!-- Properly close main tag -->

    <footer class="page-footer blue-grey darken-2">
        <div class="container">
            <div class="row">
                <!-- Main site sections -->
                <div class="col l3 m6 s12">
                    <h5 class="white-text">Houses on the Air</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="/">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=about">About</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=participate">Participate</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=awards">Awards</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=resources">Resources</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=store">Store</a></li>
                    </ul>
                </div>

                <!-- Community links -->
                <div class="col l3 m6 s12">
                    <h5 class="white-text">Community</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="?page=discord">Discord</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=tgif">TGIF Talkgroup</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=contests">Contests</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=community-events">Events</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=nets">Net Schedule</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=support-us">Support Us</a></li>
                    </ul>
                </div>

                <!-- Help & Resources -->
                <div class="col l3 m6 s12">
                    <h5 class="white-text">Resources</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="?page=faq">FAQ</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=glossary">Glossary</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=band-plans">Band Plans</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=get-licenced">Get Licenced</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=operating-guidelines">Guidelines</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=rules">Rules</a></li>
                    </ul>
                </div>

                <!-- Legal & Contact -->
                <div class="col l3 m6 s12">
                    <h5 class="white-text">Legal & Contact</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="?page=contact">Contact Us</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=privacy">Privacy Policy</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=cookies">Cookie Policy</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=gdpr">GDPR</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=terms">Terms of Service</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=modern-slavery">Modern Slavery</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social media links -->
            <div class="row">
                <div class="col s12 center-align">
                    <h5 class="white-text">Connect With Us</h5>
                    <div class="social-links">
                        <a href="<?= ConfigManager::get('social.facebook') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 m-1" aria-label="Facebook">
                            <i class="material-icons">facebook</i>
                        </a>
                        <a href="<?= ConfigManager::get('social.twitter') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 m-1" aria-label="Twitter/X">
                            <i class="material-icons">X</i>
                        </a>
                        <a href="<?= ConfigManager::get('social.reddit') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 m-1" aria-label="Reddit">
                            <i class="material-icons">forum</i>
                        </a>
                        <a href="<?= ConfigManager::get('social.bluesky') ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 m-1" aria-label="Bluesky">
                            <i class="material-icons">cloud</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                &copy; <?php echo date('Y'); ?> Houses on the Air
                <span class="right">
                    <a class="grey-text text-lighten-4" href="?page=opensource">Open Source</a> |
                    <a class="grey-text text-lighten-4" href="?page=sitemap">Sitemap</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- JavaScript at end of body for optimized loading -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize sidenav
            var sidenavElems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sidenavElems);

            // Initialize dropdowns with proper options
            var dropdownElems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdownElems, {
                coverTrigger: false,
                constrainWidth: false,
                hover: true
            });
        });
    </script>
</body>
</html>
