<?php ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <Title>Pronto Timing System Live Timing</Title>
        <meta http-equiv="refresh" content="30">
        <style type="text/css"></style>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <!-- Header -->
        <div align="center">
            <table style="width:90%" class="w3-table w3-centered">
                <tbody>
                    <tr>
                        <td>
                            <span class="style1">
                                <b>
                                    <big>Pronto Timing System Live Timing</big>
                                </b>
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="style1">
                                <big>2020 IndySCCA Solo</big>
                                <br />
                                <big>July 25, 2020</big>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br />

        <!-- Event Supps -->
        <div align="center">
            <span class="style1">
                <a href="./Event_Supps.pdf">Event Supps and Schedule</a>
            </span>
        </div>

        <br />

        <!-- FM Channel -->
        <div align="center">
            <span class="style1">
                <b>Local Site FM Channel: 90.3</b>
            </span>
        </div>

        <br />

        <!-- Run Ticker -->
        <div align="center">
            <span class="style1">
                <!-- ticker -->
            </span>
        </div>

        <br />

        <!-- List of classes -->
        <div align="center">
            <span class="style1">
                <!-- classes -->
                <table style="width:90%" id="tbl01" class="w3-table w2-striped w3-border w3-bordered w3-centered">
                    <tbody>
                        <tr class="w3-black" align="center" valign="middle">
                            <td>
                                <font face="Arial" size="+1">
                                    <b>STREET</b>
                                </font>
                            </td>
                            <td>
                                <font face="Arial" size="+1">
                                    <b>STREET TOURING</b>
                                </font>
                            </td>
                            <td>
                                <font face="Arial" size="+1">
                                    <b>STREET PREPARED</b>
                                </font>
                            </td>
                            <td>
                                <font face="Arial" size="+1">
                                    <b>PREPARED</b>
                                </font>
                            </td>
                            <td>
                                <font face="Arial" size="+1">
                                    <b>STREET MOD/CAM</b>
                                </font>
                            </td>
                            <td>
                                <font face="Arial" size="+1">
                                    <b>MODIFIED</b>
                                </font>
                            </td>
                        </tr>

                        <tr valign="bottom">
                            <td align="center">
                                <font face="Arial">
                                    <?php
                                        if (file_exists("SS.php"))
                                        {
                                            echo '<b>SS</b>';
                                        } else {
                                            echo 'SS';
                                        }
                                    ?>
                                    /
                                    <?php
                                        if (file_exists("SSL.php"))
                                        {
                                            echo '<b>SSL</b>';
                                        } else {
                                            echo 'SSL';
                                        }
                                    ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php
                                        if (file_exists("STH.php"))
                                        {
                                            echo '<b>STH</b>';
                                        } else {
                                            echo 'STH';
                                        }
                                    ?>
                                    /
                                    <?php
                                        if (file_exists("STHL.php"))
                                        {
                                            echo '<b>STHL</b>';
                                        } else {
                                            echo 'STHL';
                                        }
                                    ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php
                                        if (file_exists("SSP.php"))
                                        {
                                            echo '<b>SSP</b>';
                                        } else {
                                            echo 'SSP';
                                        }
                                    ?>
                                    /
                                    <?php
                                        if (file_exists("SSPL.php"))
                                        {
                                            echo '<b>SSPL</b>';
                                        } else {
                                            echo 'SSPL';
                                        }
                                    ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php
                                        if (file_exists("XP.php"))
                                        {
                                            echo '<b>XP</b>';
                                        } else {
                                            echo 'XP';
                                        }
                                    ?>
                                    /
                                    <?php
                                        if (file_exists("XPL.php"))
                                        {
                                            echo '<b>XPL</b>';
                                        } else {
                                            echo 'XPL';
                                        }
                                    ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php
                                        if (file_exists("SM.php"))
                                        {
                                            echo '<b>SM</b>';
                                        } else {
                                            echo 'SM';
                                        }
                                    ?>
                                    /
                                    <?php
                                        if (file_exists("SML.php"))
                                        {
                                            echo '<b>SML</b>';
                                        } else {
                                            echo 'SML';
                                        }
                                    ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php
                                        if (file_exists("AM.php"))
                                        {
                                            echo '<b>AM</b>';
                                        } else {
                                            echo 'AM';
                                        }
                                    ?>
                                    /
                                    <?php
                                        if (file_exists("AML.php"))
                                        {
                                            echo '<b>AML</b>';
                                        } else {
                                            echo 'AML';
                                        }
                                    ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </span>
        </div>
    </body>
</html>
