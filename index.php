<?php
    include_once 'functions.php';
?>
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
                            <img src="">
                        </td>
                    </tr>
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
                                <?php include 'eventName.html' ?>
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
                <?php echo fileexists("Event_Supps.pdf", "Event Supps and Schedule", false)?>
            </span>
        </div>

        <br />

        <!-- FM Channel -->
        <div align="center">
            <span class="style1">
                <b>Local Site FM Channel: </b>
            </span>
        </div>

        <br />

        <!-- Run Ticker -->
        <div align="center">
            <span class="style1">
                <?php include 'RunTickerTable.php' ?>
            </span>
        </div>

        <br />

        <!-- List of classes -->
        <div align="center">
            <span class="style1">
                <?php include 'classes.php' ?>
            </span>
        </div>

        <br />

        <!-- PAX -->
        <div align="center">
            <span class="style1">
                <table style="width:90%" id="tbl01" class="w3-table w3-striped w3-border w3-bordered w3-centered">
                    <tbody>
                        <tr class="w3-black" valign="bottom">
                            <th align="center" colspan="3">
                                <font face="Arial">
                                    <b>PAX</b>
                                </font>
                            </th>
                        </tr>

                        <tr valign="bottom">
                            <td align="center">
                                <font face="Arial">
                                    <?php echo fileexists("PaxIndexDay1.html", "PAX Day 1") ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php echo fileexists("PaxIndexDay2.html", "PAX Day 2") ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php echo fileexists("PaxIndexOverall.html", "PAX Overall") ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </span>
        </div>

        <br />

        <!-- RAW -->
        <div align="center">
            <span class="style1">
                <table style="width:90%" id="tbl01" class="w3-table w3-striped w3-border w3-bordered w3-centered">
                    <tbody>
                        <tr class="w3-black" valign="bottom">
                            <th align="center" colspan="3">
                                <font face="Arial">
                                    <b>RAW</b>
                                </font>
                            </th>
                        </tr>

                        <tr valign="bottom">
                            <td align="center">
                                <font face="Arial">
                                    <?php echo fileexists("RawDay1.html", "RAW Day 1") ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php echo fileexists("RawDay2.html", "RAW Day 2") ?>
                                </font>
                            </td>
                            <td align="center">
                                <font face="Arial">
                                    <?php echo fileexists("RawOverall.html", "RAW Overall") ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </span>
        </div>

        <br />

        <!-- Run/Work -->
        <div align="center">
            <span class="style1">
                <?php include 'runOrder.php' ?>
            </span>
        </div>

        <br />

        <!-- Footer -->
        <div align="center">
            <span class="style1">
                <font face="Arial" size="-2">Copyright &copy; Pronto Timing System 2007-2020 All Rights Reserved.</font>
            </span>
        </div>
    </body>
</html>
