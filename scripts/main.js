/**
 * Main JavaScript for Houses on the Air website
 * Contains core functionality for UI components and interactive features
 * Uses British English terminology in comments and user-facing text
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialise mobile navigation menu
    initMobileNav();

    // Initialise tooltips
    initTooltips();

    // Initialise address lookups
    initAddressLookup();

    // Smooth scrolling for anchor links
    initSmoothScroll();

    // Handle forms with AJAX
    initAjaxForms();

    // Initialise Materialize components
    initMaterializeComponents();
});

/**
 * Initialises mobile navigation menu
 */
function initMobileNav() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    if (mobileMenuToggle && mobileNav) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            mobileNav.classList.toggle('open');
            mobileMenuToggle.classList.toggle('active');

            // Toggle the aria-expanded attribute for accessibility
            const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true' || false;
            mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileNav.contains(e.target) && !mobileMenuToggle.contains(e.target) && mobileNav.classList.contains('open')) {
                mobileNav.classList.remove('open');
                mobileMenuToggle.classList.remove('active');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
}

/**
 * Initialises tooltip functionality
 */
function initTooltips() {
    const tooltips = document.querySelectorAll('[data-tooltip]');

    tooltips.forEach(tooltip => {
        tooltip.addEventListener('mouseenter', function() {
            const tooltipText = this.getAttribute('data-tooltip');

            // Create tooltip element
            const tooltipEl = document.createElement('div');
            tooltipEl.className = 'tooltip';
            tooltipEl.textContent = tooltipText;

            // Position and append to body
            document.body.appendChild(tooltipEl);

            // Get element position
            const rect = this.getBoundingClientRect();
            tooltipEl.style.top = rect.top - tooltipEl.offsetHeight - 10 + 'px';
            tooltipEl.style.left = rect.left + (rect.width / 2) - (tooltipEl.offsetWidth / 2) + 'px';

            // Add visible class after position is set
            setTimeout(() => {
                tooltipEl.classList.add('visible');
            }, 10);
        });

        tooltip.addEventListener('mouseleave', function() {
            const tooltipEl = document.querySelector('.tooltip');
            if (tooltipEl) {
                tooltipEl.classList.remove('visible');
                setTimeout(() => {
                    if (tooltipEl.parentNode) {
                        tooltipEl.parentNode.removeChild(tooltipEl);
                    }
                }, 300);
            }
        });
    });
}

/**
 * Initialises UK postcode lookup functionality
 */
function initAddressLookup() {
    const postcodeInputs = document.querySelectorAll('.postcode-lookup');

    postcodeInputs.forEach(input => {
        const lookupBtn = input.nextElementSibling;
        const addressSelect = document.querySelector('#' + input.getAttribute('data-target'));

        if (lookupBtn && addressSelect) {
            lookupBtn.addEventListener('click', function() {
                const postcode = input.value.trim();
                if (postcode) {
                    lookupAddress(postcode, addressSelect);
                }
            });
        }
    });
}

/**
 * Looks up addresses for a given postcode using an address API
 * @param {string} postcode - UK postcode to look up
 * @param {HTMLElement} selectElement - Select element to populate with addresses
 */
function lookupAddress(postcode, selectElement) {
    // Display loading state
    selectElement.innerHTML = '<option>Looking up addresses...</option>';

    // Example API call - replace with actual UK address lookup API
    fetch(`https://api.example.com/address-lookup?postcode=${encodeURIComponent(postcode)}`)
        .then(response => response.json())
        .then(data => {
            selectElement.innerHTML = '<option value="">Select an address</option>';

            if (data.addresses && data.addresses.length) {
                data.addresses.forEach(address => {
                    const option = document.createElement('option');
                    option.value = address.id;
                    option.textContent = address.formatted_address;
                    selectElement.appendChild(option);
                });
            } else {
                selectElement.innerHTML = '<option value="">No addresses found</option>';
            }
        })
        .catch(error => {
            console.error('Error looking up addresses:', error);
            selectElement.innerHTML = '<option value="">Error looking up addresses</option>';
        });
}

/**
 * Initialises smooth scrolling for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Offset for fixed header
                    behavior: 'smooth'
                });

                // Update URL with hash for direct linking
                history.pushState(null, null, targetId);
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
            }, 100);
        }
    }
}

/**
 * Initialises AJAX form submissions
 */
function initAjaxForms() {
    document.querySelectorAll('form[data-ajax="true"]').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = form.querySelector('[type="submit"]');
            const resultContainer = document.querySelector(form.getAttribute('data-result-container') || '#form-result');

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.classList.add('disabled');

                if (submitBtn.getAttribute('data-loading-text')) {
                    submitBtn.dataset.originalText = submitBtn.textContent;
                    submitBtn.textContent = submitBtn.getAttribute('data-loading-text');
                }
            }

            if (resultContainer) {
                resultContainer.innerHTML = '<div class="progress"><div class="indeterminate"></div></div><p class="center-align">Processing your request...</p>';
                resultContainer.style.display = 'block';
            }

            fetch(form.action, {
                method: form.method || 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (resultContainer) {
                    if (data.success) {
                        resultContainer.innerHTML = `<div class="card-panel green lighten-4"><h5><i class="material-icons left">check_circle</i>${data.message || 'Success!'}</h5>${data.html || ''}</div>`;

                        // Clear form if successful and not specified otherwise
                        if (form.getAttribute('data-clear-on-success') !== 'false') {
                            form.reset();
                        }
                    } else {
                        resultContainer.innerHTML = `<div class="card-panel red lighten-4"><h5><i class="material-icons left">error</i>${data.message || 'An error occurred.'}</h5>${data.html || ''}</div>`;
                    }
                }
            })
            .catch(error => {
                console.error('Error submitting form:', error);
                if (resultContainer) {
                    resultContainer.innerHTML = '<div class="card-panel red lighten-4"><h5><i class="material-icons left">error</i>A system error occurred.</h5><p>Please try again later or contact support if the problem persists.</p></div>';
                }
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('disabled');

                    if (submitBtn.dataset.originalText) {
                        submitBtn.textContent = submitBtn.dataset.originalText;
                    }
                }
            });
        });
    });
}

/**
 * Initialises Materialize components
 */
function initMaterializeComponents() {
    // Dropdown menus
    const dropdowns = document.querySelectorAll('.dropdown-trigger');
    if (window.M && dropdowns.length) {
        M.Dropdown.init(dropdowns, {
            coverTrigger: false,
            constrainWidth: false
        });
    }

    // Collapsible elements
    const collapsibles = document.querySelectorAll('.collapsible');
    if (window.M && collapsibles.length) {
        M.Collapsible.init(collapsibles);
    }

    // Modal dialogs
    const modals = document.querySelectorAll('.modal');
    if (window.M && modals.length) {
        M.Modal.init(modals);
    }

    // Select inputs
    const selects = document.querySelectorAll('select:not(.browser-default)');
    if (window.M && selects.length) {
        M.FormSelect.init(selects);
    }

    // Tabs
    const tabs = document.querySelectorAll('.tabs');
    if (window.M && tabs.length) {
        M.Tabs.init(tabs);
    }

    // Date pickers
    const datePickers = document.querySelectorAll('.datepicker');
    if (window.M && datePickers.length) {
        M.Datepicker.init(datePickers, {
            format: 'dd/mm/yyyy', // UK date format
            yearRange: 50,
            showClearBtn: true,
            i18n: {
                months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                weekdays: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                weekdaysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                weekdaysAbbrev: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                cancel: 'Cancel',
                clear: 'Clear',
                done: 'OK'
            }
        });
    }
}

/**
 * Cookie management utility
 */
const CookieUtil = {
    set: function(name, value, days) {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/; SameSite=Lax';
    },

    get: function(name) {
        const nameEQ = name + '=';
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1);
            if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length));
        }
        return null;
    },

    remove: function(name) {
        this.set(name, '', -1);
    }
};

/**
 * Utility for handling cookie consent banner
 */
const CookieConsent = {
    init: function() {
        const cookieConsent = CookieUtil.get('hota_cookie_consent');
        if (!cookieConsent) {
            this.showBanner();
        }
    },

    showBanner: function() {
        const bannerHTML = `
            <div class="cookie-banner">
                <div class="cookie-content">
                    <p>This site uses cookies to improve your experience. By continuing to browse, you agree to our <a href="?page=cookies">cookie policy</a>.</p>
                    <div class="cookie-buttons">
                        <button class="btn" id="cookie-accept">Accept Cookies</button>
                        <button class="btn-flat" id="cookie-decline">Essential Only</button>
                    </div>
                </div>
            </div>
        `;

        const banner = document.createElement('div');
        banner.innerHTML = bannerHTML;
        document.body.appendChild(banner.firstElementChild);

        document.getElementById('cookie-accept').addEventListener('click', () => {
            CookieUtil.set('hota_cookie_consent', 'full', 365);
            this.hideBanner();
            this.enableAllCookies();
        });

        document.getElementById('cookie-decline').addEventListener('click', () => {
            CookieUtil.set('hota_cookie_consent', 'essential', 365);
            this.hideBanner();
        });
    },

    hideBanner: function() {
        const banner = document.querySelector('.cookie-banner');
        if (banner) {
            banner.classList.add('hiding');
            setTimeout(() => {
                banner.remove();
            }, 400);
        }
    },

    enableAllCookies: function() {
        // Add code here to enable non-essential cookies/tracking
    }
};

// Export utilities for use in other scripts
window.HOTA = window.HOTA || {};
window.HOTA.CookieUtil = CookieUtil;
window.HOTA.CookieConsent = CookieConsent;
