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
                <select name="band[]" required>
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
                    <option value="1.25m">1.25m</option>
                    <option value="70cm">70cm</option>
                    <option value="33cm">33cm</option>
                    <option value="23cm">23cm</option>
                    <option value="13cm">13cm</option>
                    <option value="9cm">9cm</option>
                    <option value="6cm">6cm</option>
                    <option value="3cm">3cm</option>
                    <option value="1.25cm">1.25cm</option>
                </select>
                <label for="mode">Mode:</label>
                <select name="mode[]" required>
                    <option value="SSB">SSB</option>
                    <option value="CW">CW</option>
                    <option value="FM">FM</option>
                    <option value="AM">AM</option>
                    <option value="DIGI">DIGI</option>
                    <option value="RTTY">RTTY</option>
                    <option value="PSK31">PSK31</option>
                    <option value="PSK63">PSK63</option>
                    <option value="PSK125">PSK125</option>
                    <option value="FT8">FT8</option>
                    <option value="FT4">FT4</option>
                    <option value="JT65">JT65</option>
                    <option value="JT9">JT9</option>
                    <option value="MFSK">MFSK</option>
                    <option value="HELL">HELL</option>
                    <option value="OLIVIA">OLIVIA</option>
                    <option value="CONTESTI">CONTESTI</option>
                    <option value="FST4">FST4</option>
                    <option value="FST4W">FST4W</option>
                    <option value="MSK144">MSK144</option>
                    <option value="QRA64">QRA64</option>
                    <option value="ISCAT">ISCAT</option>
                    <option value="JT6M">JT6M</option>
                    <option value="FT8CALL">FT8CALL</option>
                    <option value="ROS">ROS</option>
                    <option value="SIM31">SIM31</option>
                    <option value="THOR">THOR</option>
                    <option value="THROB">THROB</option>
                    <option value="DOMINO">DOMINO</option>
                </select>
                <label for="rst_sent">RST Sent:</label>
                <select name="rst_sent[]" required>
                    <?php for ($i = 59; $i >= 10; $i--): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <label for="rst_rcvd">RST Received:</label>
                <select name="rst_rcvd[]" required>
                    <?php for ($i = 59; $i >= 10; $i--): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <label for="address">Station Address:</label>
                <input type="text" name="address[]" required>
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
