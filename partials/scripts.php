<!-- Materialize and custom JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize mobile navigation
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);

    // Initialize dropdown menus
    const dropdowns = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(dropdowns, {
      coverTrigger: false,
      constrainWidth: false,
      hover: true
    });

    // Initialize collapsible elements
    const collapsible = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsible);

    // Initialize tooltips
    const tooltips = document.querySelectorAll('.tooltipped');
    M.Tooltip.init(tooltips);

    // Initialize select elements
    const selects = document.querySelectorAll('select');
    M.FormSelect.init(selects);

    // Initialize modals
    const modals = document.querySelectorAll('.modal');
    M.Modal.init(modals);

    // Initialize tabs
    const tabs = document.querySelectorAll('.tabs');
    M.Tabs.init(tabs);

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        if(this.getAttribute('href') !== '#!' && this.getAttribute('href') !== '#') {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if(target) {
            window.scrollTo({
              top: target.offsetTop - 80,
              behavior: 'smooth'
            });
          }
        }
      });
    });

    // Auto-focus first input in forms
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
      const firstInput = form.querySelector('input:not([type=hidden])');
      if (firstInput) {
        setTimeout(() => {
          firstInput.focus();
        }, 100);
      }
    });

    // Add active class to current page in navigation
    const currentPage = window.location.search.split('page=')[1] || 'home';
    document.querySelectorAll('.sidenav a, .right a').forEach(link => {
      if (link.href.includes(`page=${currentPage}`)) {
        link.classList.add('active');
      }
    });

    // Initialize custom file input styling
    document.querySelectorAll('.file-field input[type="file"]').forEach(fileInput => {
      fileInput.addEventListener('change', function() {
        const fileName = this.files[0]?.name || 'No file chosen';
        const fileText = this.parentElement.nextElementSibling?.querySelector('.file-path');
        if (fileText) {
          fileText.value = fileName;
        }
      });
    });
  });
</script>
<!-- Any additional page-specific scripts would go here -->
