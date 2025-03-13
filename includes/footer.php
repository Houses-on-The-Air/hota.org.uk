</main>
    <!-- Main content ends -->

    <!-- Footer -->
    <footer class="page-footer blue-grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l4 s12">
                    <h5 class="white-text">Houses on The Air</h5>
                    <p class="grey-text text-lighten-4">Amateur Radio Activity promoting fixed operations from unique house locations around the world.</p>
                    <img src="/images/hota-singlecolor.svg" alt="HOTA Logo" height="80" class="mt-3">
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Quick Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="?page=rules">Rules</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=awards">Awards</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=house-activations">Activations</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=faq">FAQ</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Connect With Us</h5>
                    <div class="social-links mt-3">
                        <a href="<?php echo ConfigManager::get('social.facebook', '#'); ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 mr-2">
                            <i class="material-icons">facebook</i>
                        </a>
                        <a href="<?php echo ConfigManager::get('social.twitter', '#'); ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 mr-2">
                            <i class="material-icons">twitter</i>
                        </a>
                        <a href="<?php echo ConfigManager::get('social.discord', '#'); ?>" target="_blank" rel="nofollow" class="btn-floating blue-grey lighten-1 mr-2">
                            <i class="material-icons">forum</i>
                        </a>
                    </div>
                    <p class="mt-3">
                        <a class="grey-text text-lighten-3" href="?page=mailing-list">Join our mailing list</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © <?php echo date('Y'); ?> Houses on The Air (HOTA)
                <a class="grey-text text-lighten-4 right" href="?page=privacy">Privacy Policy</a>
                <a class="grey-text text-lighten-4 right mr-3" href="?page=terms">Terms of Service</a>
                <a class="grey-text text-lighten-4 right mr-3" href="?page=cookies">Cookie Policy</a>
            </div>
        </div>
    </footer>

    <!-- Initialize Additional Materialize Components -->
    <script>
        $(document).ready(function() {
            // Initialize form selects
            $('select').formSelect();

            // Initialize tooltips
            $('.tooltipped').tooltip();
        });
    </script>

    <?php if(isset($pageSpecificJS)): ?>
    <script src="<?php echo $pageSpecificJS; ?>"></script>
    <?php endif; ?>

    <!-- Google Analytics -->
    <?php if(ConfigManager::get('analytics.enabled', false)): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo ConfigManager::get('analytics.id'); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo ConfigManager::get('analytics.id'); ?>');
    </script>
    <?php endif; ?>
</body>
</html>
