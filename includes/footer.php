</main> <!-- Properly close main tag -->

    <footer class="page-footer blue-grey darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Houses on the Air</h5>
                    <p class="grey-text text-lighten-4">An amateur radio program celebrating architectural heritage through radio communication.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="?page=privacy">Privacy Policy</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=cookies">Cookies</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=gdpr">GDPR</a></li>
                        <li><a class="grey-text text-lighten-3" href="?page=contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © <?php echo date('Y'); ?> Houses on the Air
                <a class="grey-text text-lighten-4 right" href="?page=opensource">Open Source</a>
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

            // Initialize dropdowns
            var dropdownElems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdownElems, {
                coverTrigger: false,
                constrainWidth: false
            });
        });
    </script>
</body>
</html>
