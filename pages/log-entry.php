<section class="container">
    <h2>Log Entry</h2>

    <div class="card-panel blue-grey lighten-4">
        <p>Use the form below to generate an ADIF file for your logbook. Fill in your callsign and the callsign, date, time, band, mode, RST sent and received, frequency, and address for each station you contacted. Click "Add Another Entry" to add more contacts to your logbook. When you're finished, click "Generate ADIF" to download your logbook in ADIF format.</p>
        <p>For more information on ADIF, see the <a href="https://adif.org/" rel="nofollow" target="_blank">ADIF website</a>.</p>
    </div>

    <form id="logEntryForm" class="col s12">
        <div class="row">
            <div class="input-field col s12 m6">
                <input type="text" id="userCallsign" name="userCallsign" required>
                <label for="userCallsign">Your Callsign:</label>
            </div>
        </div>

        <div id="entries">
            <div class="entry card-panel">
                <h5>Contact #1</h5>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" name="call[]" required>
                        <label>Contacted Station Callsign:</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="date" name="date[]" required>
                        <label>Date:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="time" name="time[]" required>
                        <label>Time (UTC):</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select name="band[]" required>
                            <option value="" disabled selected>Choose band</option>
                            <option value="160m">160m</option>
                            <option value="80m">80m</option>
                            <option value="60m">60m</option>
                            <option value="40m">40m</option>
                            <option value="30m">30m</option>
                            <option value="20m">20m</option>
                            <option value="17m">17m</option>
                            <option value="15m">15m</option>
                            <option value="12m">12m</option>
                            <option value="10m">10m</option>
                            <option value="6m">6m</option>
                            <option value="4m">4m</option>
                            <option value="2m">2m</option>
                            <option value="70cm">70cm</option>
                            <option value="23cm">23cm</option>
                        </select>
                        <label>Band:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <select name="mode[]" required>
                            <option value="" disabled selected>Choose mode</option>
                            <option value="SSB">SSB</option>
                            <option value="AM">AM</option>
                            <option value="FM">FM</option>
                            <option value="CW">CW</option>
                            <option value="FT8">FT8</option>
                            <option value="FT4">FT4</option>
                            <option value="RTTY">RTTY</option>
                            <option value="PSK31">PSK31</option>
                            <option value="PSK63">PSK63</option>
                            <option value="JT65">JT65</option>
                            <option value="JT9">JT9</option>
                            <option value="JS8">JS8</option>
                            <option value="WSPR">WSPR</option>
                        </select>
                        <label>Mode:</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" name="frequency[]" placeholder="e.g. 14.250" required>
                        <label>Frequency (MHz):</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="rst_sent[]" placeholder="e.g. 59" required>
                        <label>RST Sent:</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" name="rst_rcvd[]" placeholder="e.g. 57" required>
                        <label>RST Received:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="address[]" placeholder="e.g. 123 Main Street, London, SW1A 1AA" required>
                        <label>Station Address (important for HOTA awards!):</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="notes[]" placeholder="Optional notes about this contact">
                        <label>Notes:</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button type="button" class="btn blue-grey" onclick="addEntry()">Add Another Entry</button>
                <button type="submit" class="btn blue-grey darken-1">Generate ADIF</button>
            </div>
        </div>
    </form>

    <div id="adifResult" class="card-panel blue-grey lighten-4" style="display:none;">
        <h4>Generated ADIF</h4>
        <p>Your ADIF file has been generated. Click the download button below to save it.</p>
        <button id="downloadBtn" class="btn blue-grey darken-1">Download ADIF</button>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="adifContent" class="materialize-textarea" readonly></textarea>
                <label for="adifContent">ADIF Content</label>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize select elements
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });

    let entryCount = 1;

    function addEntry() {
        entryCount++;
        const entryContainer = document.getElementById('entries');
        const entryTemplate = document.querySelector('.entry').cloneNode(true);

        // Reset values in the clone
        const inputs = entryTemplate.querySelectorAll('input');
        inputs.forEach(input => {
            input.value = '';
        });

        // Reset selects
        const selects = entryTemplate.querySelectorAll('select');
        selects.forEach(select => {
            select.selectedIndex = 0;
        });

        // Update title
        entryTemplate.querySelector('h5').textContent = `Contact #${entryCount}`;

        // Reinitialize Materialize select in the new entry
        entryContainer.appendChild(entryTemplate);
        M.FormSelect.init(entryTemplate.querySelectorAll('select'));
    }

    document.getElementById('logEntryForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const userCallsign = formData.get('userCallsign');

        let adif = "ADIF Export\n";
        adif += "<ADIF_VER:5>3.1.0\n";
        adif += "<PROGRAMID:4>HOTA\n";
        adif += "<PROGRAMVERSION:3>1.0\n";
        adif += "<EOH>\n\n";

        const entries = [];
        for (let i = 0; i < formData.getAll('call[]').length; i++) {
            entries.push({
                call: formData.getAll('call[]')[i],
                date: formData.getAll('date[]')[i],
                time: formData.getAll('time[]')[i],
                band: formData.getAll('band[]')[i],
                mode: formData.getAll('mode[]')[i],
                rst_sent: formData.getAll('rst_sent[]')[i],
                rst_rcvd: formData.getAll('rst_rcvd[]')[i],
                frequency: formData.getAll('frequency[]')[i],
                address: formData.getAll('address[]')[i],
                notes: formData.getAll('notes[]')[i]
            });
        }

        generateADIF(entries, userCallsign);
    });

    function generateADIF(entries, userCallsign) {
        let adif = "ADIF Export\n";
        adif += "<ADIF_VER:5>3.1.0\n";
        adif += "<PROGRAMID:4>HOTA\n";
        adif += "<PROGRAMVERSION:3>1.0\n";
        adif += "<EOH>\n\n";

        entries.forEach(entry => {
            // Convert date format from YYYY-MM-DD to YYYYMMDD
            const formattedDate = entry.date.replace(/-/g, '');

            // Convert time format from HH:MM to HHMMSS
            const formattedTime = entry.time.replace(/:/g, '') + '00';

            adif += `<CALL:${entry.call.length}>${entry.call}\n`;
            adif += `<QSO_DATE:8>${formattedDate}\n`;
            adif += `<TIME_ON:6>${formattedTime}\n`;
            adif += `<BAND:${entry.band.length}>${entry.band}\n`;
            adif += `<MODE:${entry.mode.length}>${entry.mode}\n`;
            adif += `<RST_SENT:${entry.rst_sent.length}>${entry.rst_sent}\n`;
            adif += `<RST_RCVD:${entry.rst_rcvd.length}>${entry.rst_rcvd}\n`;
            adif += `<FREQ:${entry.frequency.length}>${entry.frequency}\n`;
            adif += `<STATION_CALLSIGN:${userCallsign.length}>${userCallsign}\n`;

            // Add the address field - crucial for HOTA awards!
            if (entry.address && entry.address.trim() !== '') {
                adif += `<ADDRESS:${entry.address.length}>${entry.address}\n`;
            }

            // Add notes if provided
            if (entry.notes && entry.notes.trim() !== '') {
                adif += `<COMMENT:${entry.notes.length}>${entry.notes}\n`;
            }

            adif += "<EOR>\n\n";
        });

        // Display the ADIF content
        document.getElementById('adifContent').value = adif;
        M.textareaAutoResize(document.getElementById('adifContent'));
        document.getElementById('adifResult').style.display = 'block';

        // Set up download button
        document.getElementById('downloadBtn').onclick = function() {
            downloadADIF(adif, userCallsign);
        };

        // Scroll to the result section
        document.getElementById('adifResult').scrollIntoView({ behavior: 'smooth' });
    }

    function downloadADIF(adif, userCallsign) {
        const blob = new Blob([adif], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        const timestamp = new Date().toISOString().replace(/[:.]/g, '').slice(0, 14);
        a.download = `${userCallsign}_${timestamp}.adi`;
        a.click();
        URL.revokeObjectURL(url);
    }
    </script>
</section>
