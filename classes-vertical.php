<div class="w3-responsive">
    <table id="tbl01" class="w3-table w3-striped w3-border w3-bordered w3-centered">
        <thead>
            <tr class="w3-black">
                <th>SPORTS GT-1</th>
                <th>SPORTS GT-2</th>
                <th>OTHER</th>
            </tr>
        </thead>
        <tbody>
            <tr style="white-space: nowrap;">
                <td><?php echo classexists("SGT1BB", "SGT-1 BB"); ?></td>
                <td><?php echo classexists("SGT2BB", "SGT-2 BB"); ?></td>
                <td><?php echo classexists("L", "Luxury"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td><?php echo classexists("SGT1SB", "SGT-1 SB"); ?></td>
                <td><?php echo classexists("SGT2SB", "SGT-2 SB"); ?></td>
                <td><?php echo classexists("MP", "Mid-Priced"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo classexists("E", "Economy"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo classexists("S", "Sundae"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo classexists("T", "Truck/SUV"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo classexists("R", "Retro"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo classexists("V", "Vintage"); ?></td>
            </tr>
            <tr style="white-space: nowrap;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo classexists("AF", "Alt-Fuel"); ?></td>
            </tr>
        </tbody>
    </table>
</div>
