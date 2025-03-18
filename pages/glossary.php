<?php
$pageTitle = "Amateur Radio Glossary - HOTA";
$pageDescription = "Comprehensive glossary of amateur radio terms, abbreviations, and Q-codes used in Houses on the Air (HOTA) and general ham radio operations.";

// Build category lists
$categories = [
    'general' => 'General Ham Radio',
    'hota' => 'HOTA Specific',
    'modes' => 'Operating Modes',
    'technical' => 'Technical Terms',
    'abbreviation' => 'Abbreviations',
    'q-code' => 'Q-Codes'
];

// Term of the Day - simplified implementation
$terms = [
    ['HOTA', 'Houses on The Air', 'hota'],
    ['QSO', 'A conversation or contact between amateur radio operators', 'q-code'],
    ['Activator', 'An operator who sets up and operates from a residential location for HOTA purposes', 'hota'],
    ['ADIF', 'Amateur Data Interchange Format - standardized format for exchanging amateur radio logs', 'technical'],
    ['QRP', 'Low power operation, typically 5W or less', 'q-code']
];
$termIndex = date('z') % count($terms); // Day of year mod number of terms
$todaysTerm = $terms[$termIndex];
?>

<div class="container">
    <h1>Amateur Radio Glossary</h1>

    <!-- Breadcrumbs -->
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="?page=resources">Resources</a></li>
            <li>Glossary</li>
        </ul>
    </div>

    <p class="flow-text">This glossary provides definitions for common amateur radio terms, abbreviations, and Q-codes used in HOTA operations.</p>

    <!-- Term of the Day -->
    <div class="card blue-grey lighten-5">
        <div class="card-content">
            <div class="row valign-wrapper">
                <div class="col s12 m9">
                    <span class="card-title"><i class="material-icons left">auto_stories</i>Term of the Day</span>
                    <h4><?= htmlspecialchars($todaysTerm[0]) ?></h4>
                    <p class="flow-text"><?= htmlspecialchars($todaysTerm[1]) ?></p>
                </div>
                <div class="col s12 m3 center-align hide-on-small-only">
                    <i class="material-icons term-of-day-icon"><?= $todaysTerm[2] == 'hota' ? 'home' : 'radio' ?></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="card">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left">search</i>Find a Term</span>

            <div class="row">
                <div class="input-field col s12 m8">
                    <i class="material-icons prefix">search</i>
                    <input type="text" id="glossary-search" class="autocomplete" placeholder="Type to search...">
                    <label for="glossary-search">Search</label>
                </div>
                <div class="input-field col s12 m4">
                    <select id="category-filter">
                        <option value="all">All Categories</option>
                        <?php foreach($categories as $value => $label): ?>
                            <option value="<?= $value ?>"><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Filter by Category</label>
                </div>
            </div>

            <!-- Alphabet Index -->
            <div class="alphabet-index center-align">
                <div class="alphabet-letter active" data-letter="all">ALL</div>
                <?php foreach(range('A', 'Z') as $letter): ?>
                    <div class="alphabet-letter" data-letter="<?= strtolower($letter) ?>"><?= $letter ?></div>
                <?php endforeach; ?>
                <div class="alphabet-letter" data-letter="num">#</div>
            </div>
        </div>
    </div>

    <!-- Glossary Content -->
    <div class="glossary-container">
        <!-- General Ham Radio Terms -->
        <div class="card">
            <div class="card-content">
                <span class="card-title"><i class="material-icons left">radio</i>Ham Radio Terminology</span>

                <dl class="glossary-list">
                    <dt id="amateur-radio" data-letter="a">Amateur Radio <span class="category-tag general">General</span></dt>
                    <dd>A radio service for self-training, intercommunication and technical investigations carried out by licensed individuals interested in radio technique solely with a personal aim and without pecuniary interest.</dd>

                    <dt id="band" data-letter="b">Band <span class="category-tag general">General</span></dt>
                    <dd>A range of radio frequencies allocated for a specific purpose. Amateur radio operators are licensed to transmit on various bands.</dd>

                    <dt id="callsign" data-letter="c">Callsign <span class="category-tag general">General</span></dt>
                    <dd>A unique identifier assigned to licensed amateur radio operators typically consisting of a prefix indicating the country, followed by a number and additional letters.</dd>

                    <dt id="dx" data-letter="d">DX <span class="category-tag general">General</span></dt>
                    <dd>Distance or distant station. "Working DX" refers to making contacts with stations in far-away countries.</dd>

                    <dt id="field-day" data-letter="f">Field Day <span class="category-tag general">General</span></dt>
                    <dd>An annual amateur radio exercise where operators set up temporary stations in outdoor locations to practice emergency communications.</dd>

                    <dt id="hota" data-letter="h">HOTA <span class="category-tag hota">HOTA</span></dt>
                    <dd>Houses on The Air. An amateur radio activity where operators activate from or make contact with stations operating from residential locations.</dd>

                    <dt id="activator" data-letter="a">Activator <span class="category-tag hota">HOTA</span></dt>
                    <dd>An amateur radio operator who sets up and operates from a residential location for HOTA purposes.</dd>

                    <dt id="hunter" data-letter="h">Hunter <span class="category-tag hota">HOTA</span></dt>
                    <dd>An amateur radio operator who makes contacts with HOTA activators and collects addresses for award purposes.</dd>

                    <dt id="qrm" data-letter="q">QRM <span class="category-tag q-code">Q-Code</span></dt>
                    <dd>Interference from other stations. Used to indicate man-made interference is affecting communications.</dd>

                    <dt id="qrn" data-letter="q">QRN <span class="category-tag q-code">Q-Code</span></dt>
                    <dd>Natural interference. Used to indicate that natural atmospheric noise is affecting communications.</dd>

                    <dt id="qrp" data-letter="q">QRP <span class="category-tag q-code">Q-Code</span></dt>
                    <dd>Low power operation, typically defined as 5 watts or less for CW (Morse code) and 10 watts or less for voice modes.</dd>

                    <dt id="qsl" data-letter="q">QSL <span class="category-tag q-code">Q-Code</span></dt>
                    <dd>Confirmation of receipt. QSL cards are physical cards exchanged between operators to confirm a contact.</dd>

                    <dt id="qso" data-letter="q">QSO <span class="category-tag q-code">Q-Code</span></dt>
                    <dd>A conversation or contact between amateur radio operators.</dd>

                    <dt id="qth" data-letter="q">QTH <span class="category-tag q-code">Q-Code</span></dt>
                    <dd>Location or station location. "My QTH is London" means "I am located in London".</dd>

                    <dt id="ssb" data-letter="s">SSB <span class="category-tag abbreviation">Abbreviation</span></dt>
                    <dd>Single Sideband. An efficient form of amplitude modulation where only one sideband is transmitted.</dd>

                    <dt id="cw" data-letter="c">CW <span class="category-tag abbreviation">Abbreviation</span></dt>
                    <dd>Continuous Wave. Refers to Morse code transmissions using on-off keying of a carrier wave.</dd>

                    <dt id="ft8" data-letter="f">FT8 <span class="category-tag modes">Mode</span></dt>
                    <dd>A digital mode developed by Joe Taylor (K1JT) for weak-signal communication with 15-second transmit/receive cycles.</dd>

                    <dt id="adif" data-letter="a">ADIF <span class="category-tag technical">Technical</span></dt>
                    <dd>Amateur Data Interchange Format. A standardized format for exchanging amateur radio logbook information between different software applications.</dd>

                    <dt id="antenna" data-letter="a">Antenna <span class="category-tag technical">Technical</span></dt>
                    <dd>A device that converts radio frequency (RF) electrical signals to electromagnetic waves for transmission, or vice versa for reception.</dd>

                    <dt id="swr" data-letter="s">SWR <span class="category-tag abbreviation">Abbreviation</span></dt>
                    <dd>Standing Wave Ratio. A measure of how efficiently RF power is transmitted from the source through a transmission line to a load.</dd>
                </dl>
            </div>
        </div>
    </div>

    <!-- Suggest a Term -->
    <div class="card-panel deep-purple lighten-5 mt-4">
        <div class="row valign-wrapper">
            <div class="col s12 m8">
                <h3><i class="material-icons left">add_circle</i>Missing a Term?</h3>
                <p class="flow-text">We're always expanding our glossary. If you know a term that should be included, please let us know!</p>
            </div>
            <div class="col s12 m4 center-align">
                <a href="#suggest-term-modal" class="btn-large deep-purple modal-trigger waves-effect waves-light">
                    <i class="material-icons left">edit</i>Suggest a Term
                </a>
            </div>
        </div>
    </div>

    <!-- Suggest Term Modal -->
    <div id="suggest-term-modal" class="modal">
        <div class="modal-content">
            <h4>Suggest a Term</h4>
            <p>Fill out this form to suggest a new term for inclusion in our glossary.</p>

            <div class="row">
                <form class="col s12" id="suggest-term-form" data-ajax="true" data-result-container="#suggest-result">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="suggest-name" name="suggest-name" type="text" class="validate" required>
                            <label for="suggest-name">Your Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="suggest-email" name="suggest-email" type="email" class="validate" required>
                            <label for="suggest-email">Your Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="suggest-term" name="suggest-term" type="text" class="validate" required>
                            <label for="suggest-term">Term or Abbreviation</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <select id="suggest-category" name="suggest-category" required>
                                <option value="" disabled selected>Select Category</option>
                                <?php foreach($categories as $value => $label): ?>
                                    <option value="<?= $value ?>"><?= $label ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Term Category</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="suggest-callsign" name="suggest-callsign" type="text">
                            <label for="suggest-callsign">Your Callsign (optional)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="suggest-definition" name="suggest-definition" class="materialize-textarea validate" required></textarea>
                            <label for="suggest-definition">Definition or Explanation</label>
                        </div>
                    </div>
                    <div id="suggest-result"></div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-light btn-flat">Cancel</a>
            <button type="submit" form="suggest-term-form" class="waves-effect waves-light btn blue-grey darken-1">Submit</button>
        </div>
    </div>

    <!-- Back to Top -->
    <div class="fixed-action-btn">
        <a href="#top" class="btn-floating btn-large blue-grey darken-1" id="back-to-top">
            <i class="large material-icons">arrow_upward</i>
        </a>
    </div>
</div>

<style>
/* Alphabetical Index */
.alphabet-index {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px 0;
    gap: 3px;
}
.alphabet-letter {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #eceff1;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.2s;
}
.alphabet-letter:hover { background-color: #cfd8dc; }
.alphabet-letter.active {
    background-color: #607d8b;
    color: white;
}

/* Glossary List */
.glossary-list dt {
    font-weight: 700;
    font-size: 1.2rem;
    border-bottom: 1px solid #eceff1;
    padding: 10px 0 5px;
    color: #455a64;
    scroll-margin-top: 100px;
}
.glossary-list dd {
    margin: 0 0 20px 0;
    padding: 5px 0 15px 20px;
    line-height: 1.5;
}

/* Category Tags */
.category-tag {
    font-size: 0.8rem;
    font-weight: 400;
    padding: 2px 8px;
    border-radius: 12px;
    margin-left: 8px;
    color: white;
    vertical-align: middle;
}
.category-tag.general { background-color: #546e7a; }
.category-tag.hota { background-color: #00897b; }
.category-tag.q-code { background-color: #7e57c2; }
.category-tag.modes { background-color: #f57c00; }
.category-tag.technical { background-color: #0288d1; }
.category-tag.abbreviation { background-color: #689f38; }

/* Other Styles */
.term-of-day-icon {
    font-size: 6rem;
    color: #607d8b;
    opacity: 0.8;
    margin-top: 20px;
}
.mt-4 { margin-top: 2rem; }
#back-to-top {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s, visibility 0.3s;
}
#back-to-top.visible {
    opacity: 1;
    visibility: visible;
}
.highlight-term {
    background-color: #ffecb3;
    padding: 0 3px;
}

@media only screen and (max-width: 600px) {
    .alphabet-letter {
        width: 30px;
        height: 30px;
        font-size: 0.85rem;
    }
    #back-to-top {
        bottom: 20px;
        right: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Materialize components
    M.FormSelect.init(document.querySelectorAll('select'));
    M.Modal.init(document.querySelectorAll('.modal'));

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    // Glossary filtering
    const glossaryTerms = document.querySelectorAll('dt');
    const searchInput = document.getElementById('glossary-search');
    const categoryFilter = document.getElementById('category-filter');
    const alphabetLetters = document.querySelectorAll('.alphabet-letter');

    // Search and category filter
    function filterGlossary() {
        const searchTerm = searchInput.value.toLowerCase();
        const category = categoryFilter.value;

        // Reset alphabet filter visual state
        alphabetLetters.forEach(l => l.classList.remove('active'));
        document.querySelector('.alphabet-letter[data-letter="all"]').classList.add('active');

        glossaryTerms.forEach(term => {
            const termText = term.textContent.toLowerCase();
            const termCategory = term.querySelector('.category-tag').classList[1];
            const termDef = term.nextElementSibling.textContent.toLowerCase();

            // Category and search filter
            const categoryMatch = (category === 'all' || termCategory === category);
            const searchMatch = !searchTerm || (termText.includes(searchTerm) || termDef.includes(searchTerm));

            if (categoryMatch && searchMatch) {
                term.style.display = 'block';
                term.nextElementSibling.style.display = 'block';

                // Highlight search terms
                if (searchTerm) {
                    highlightSearchTerm(term, searchTerm);
                    highlightSearchTerm(term.nextElementSibling, searchTerm);
                } else {
                    removeHighlights(term);
                    removeHighlights(term.nextElementSibling);
                }
            } else {
                term.style.display = 'none';
                term.nextElementSibling.style.display = 'none';
            }
        });
    }

    // Apply event listeners
    searchInput.addEventListener('keyup', filterGlossary);
    categoryFilter.addEventListener('change', filterGlossary);

    // Alphabet filter functionality
    alphabetLetters.forEach(letter => {
        letter.addEventListener('click', function() {
            // Reset other filters
            searchInput.value = '';
            categoryFilter.value = 'all';
            M.FormSelect.init(categoryFilter);

            // Update active state
            alphabetLetters.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            const filterLetter = this.getAttribute('data-letter');

            glossaryTerms.forEach(term => {
                const termLetter = term.getAttribute('data-letter');

                if (filterLetter === 'all') {
                    term.style.display = 'block';
                    term.nextElementSibling.style.display = 'block';
                } else if (filterLetter === 'num' && !isNaN(termLetter.charAt(0))) {
                    term.style.display = 'block';
                    term.nextElementSibling.style.display = 'block';
                } else if (termLetter === filterLetter) {
                    term.style.display = 'block';
                    term.nextElementSibling.style.display = 'block';
                } else {
                    term.style.display = 'none';
                    term.nextElementSibling.style.display = 'none';
                }
            });
        });
    });

    function highlightSearchTerm(element, searchTerm) {
        removeHighlights(element);
        let html = element.innerHTML;
        const regex = new RegExp(`(${searchTerm})`, 'gi');
        html = html.replace(regex, '<span class="highlight-term">$1</span>');
        element.innerHTML = html;
    }

    function removeHighlights(element) {
        element.innerHTML = element.innerHTML.replace(/<span class="highlight-term">(.*?)<\/span>/g, '$1');
    }
});
</script>
