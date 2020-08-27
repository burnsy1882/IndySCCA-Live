<div class="w3-border" style="width:90%;">

    <div class="w3-bar w3-border-bottom w3-light-grey">
        <a class="w3-bar-item w3-button w3-dark-grey" onclick="openClass(event, 'STREET')">STREET</a>
        <a class="w3-bar-item w3-button" onclick="openClass(event, 'ST')">STREET TOURING</a>
        <a class="w3-bar-item w3-button" onclick="openClass(event, 'SP')">STREET PREPARED</a>
        <a class="w3-bar-item w3-button" onclick="openClass(event, 'SM')">STREET MODIFIED</a>
    </div>

    <div id="STREET" class="w3-container classes w3-animate-opacity" style="display:block;">
        <?php echo classexists("SSR"); ?><br />
        <?php echo classexists("SS"); ?><br />
        <?php echo classexists("AS"); ?><br />
        <?php echo classexists("BS"); ?><br />
        <?php echo classexists("CS"); ?><br />
        <?php echo classexists("DS"); ?><br />
        <?php echo classexists("ES"); ?><br />
        <?php echo classexists("FS"); ?><br />
        <?php echo classexists("HS"); ?><br />
    </div>

    <div id="ST" class="w3-container classes w3-animate-opacity" style="display: none;">
        <?php echo classexists("STH"); ?><br />
        <?php echo classexists("STR"); ?><br />
        <?php echo classexists("STS"); ?><br />
        <?php echo classexists("STU"); ?><br />
        <?php echo classexists("STX"); ?><br />
    </div>

    <div id="SP" class="w3-container classes w3-animate-opacity" style="display: none;">
        <?php echo classexists("SSP"); ?><br />
        <?php echo classexists("ASP"); ?><br />
        <?php echo classexists("BSP"); ?><br />
        <?php echo classexists("CSP"); ?><br />
        <?php echo classexists("DSP"); ?><br />
        <?php echo classexists("ESP"); ?><br />
        <?php echo classexists("FSP"); ?><br />
    </div>
    
    <div id="SM" class="w3-container classes w3-animate-opacity" style="display: none;">
        <?php echo classexists("SSM"); ?><br />
        <?php echo classexists("SM"); ?><br />
        <?php echo classexists("SMF"); ?><br />
        <?php echo classexists("SMS"); ?><br />
    </div>

</div>

<script>
    function openClass(evt, className) {
        var i;
        var x = document.getElementsByClassName("classes");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        var activebtn = document.getElementsByClassName("w3-button");
        for (i = 0; i < x.length; i++) {
            activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(className).style.display = "block";
        evt.currentTarget.className += " w3-dark-grey";
    }
</script>