<section class="container">
    <h2>Log Entry</h2>

    <p>Use the form below to generate an ADIF file for your logbook. Fill in your callsign and the callsign, date, time, band, mode, RST sent and received, and address for each station you contacted. Click "Add Another Entry" to add more contacts to your logbook. When you're finished, click "Generate ADIF" to download your logbook in ADIF format.</p>
    <p>For more information on ADIF, see the <a href="https://adif.org/" rel="nofollow" target="_blank">ADIF website</a>.</p>
    <form id="logEntryForm">
        <div>
            <label for="userCallsign">Your Callsign:</label>
            <input type="text" id="userCallsign" name="userCallsign" required>
        </div>
        <div id="entries">
            <div class="entry">
                <label for="call">Contacted Station Callsign:</label>
                <input type="text" name="call[]" required>
                <label for="date">Date:</label>
                <input type="date" name="date[]" required>
                <label for="time">Time:</label>
                <input type="time" name="time[]" required>
                <label for="band">Band:</label>
                <input name="band[]" required>
                <label for="mode">Mode:</label>
                <input type="text" name="mode[]" required>
                <label for="rst_sent">RST Sent:</label>
                <input type="text" name="rst_sent[]" required>
                <label for="rst_rcvd">RST Received:</label>
                <input type="text" name="rst_rcvd[]" required>
                <label for="address">Station Address:</label>
                <input type="text" name="address[]" required>
                <hr>
            </div>
        </div>
        <button type="button" onclick="addEntry()">Add Another Entry</button>
        <button type="submit">Generate ADIF</button>
    </form>

    <script>
    function addEntry() {
        const entry = document.querySelector('.entry').cloneNode(true);
        document.getElementById('entries').appendChild(entry);
    }

    document.getElementById('logEntryForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const userCallsign = formData.get('userCallsign');
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
                address: formData.getAll('address[]')[i]
            });
        }
        generateADIF(entries, userCallsign);
    });

    function generateADIF(entries, userCallsign) {
        let adif = '';
        entries.forEach(entry => {
            adif += `<CALL:${entry.call.length}>${entry.call} `;
            adif += `<QSO_DATE:${entry.date.length}>${entry.date.replace(/-/g, '')} `;
            adif += `<TIME_ON:${entry.time.length}>${entry.time.replace(/:/g, '')} `;
            adif += `<BAND:${entry.band.length}>${entry.band} `;
            adif += `<MODE:${entry.mode.length}>${entry.mode} `;
            adif += `<RST_SENT:${entry.rst_sent.length}>${entry.rst_sent} `;
            adif += `<RST_RCVD:${entry.rst_rcvd.length}>${entry.rst_rcvd} `;
            adif += `<ADDRESS:${entry.address.length}>${entry.address} `;
            adif += `<STATION_CALLSIGN:${userCallsign.length}>${userCallsign} `;
            adif += '<EOR>\n';
        });
        downloadADIF(adif);
    }

    function downloadADIF(adif) {
        const blob = new Blob([adif], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'log.adi';
        a.click();
        URL.revokeObjectURL(url);
    }
    </script>

</section>
