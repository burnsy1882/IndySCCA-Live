<?php
    include_once 'functions.php';

    global $fmchannel;
    $fmchannel = 0;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <Title>Pronto Timing System Live Timing</Title>
        <meta http-equiv="refresh" content="30">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- <link rel="stylesheet" href="rs.css">
        <link rel="stylesheet" href="BlackOpsOne.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->
        <style type="text/css">
            th:not(:first-child) {
                border-left: 1px solid #fff;
            }
            td:not(:first-child){
                border-left: 1px solid #ddd;
            }
        </style>
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
                                <?php include 'files/eventName.html' ?>
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="style1">
                                Event Sponsored By:
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="http://indyscca.org"><img src="http://indyscca.org/information/logosGraphicsDistribution/IndyRegion75thLogo_fullSize.jpg" height="200"></a>
                            <?php echo sponsorexists("secondary.jpg", "test")?>
                        </td>
                    </tr>

                    <?php echo fileexistshtml("Event_Supps.pdf", false, "Event Supps and Schedule", '<tr><td><span class="style1">', '</span></td></tr>'); ?>

                    <?php echo fileexistshtml("liveaudio.html", false, "Click here for live audio broadcast", '<tr><td><span class="style1">', '</span></td></tr>'); ?>

                    <?php
                        if ($fmchannel != 0)
                        {
                            echo '<tr><td><span class="style1">';
                            echo '<b>Local Site FM Channel: '.$fmchannel.'</b>';
                            echo '<span></td></tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <br />

        <!-- Run Ticker -->
        <div align="center">
            <span class="style1">
                <?php include 'files/RunTickerTable.php' ?>
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
                    <thead>
                        <tr class="w3-black" valign="bottom">
                            <th align="center" colspan="3">
                                <font face="Arial">
                                    <b>PAX</b>
                                </font>
                            </th>
                        </tr>
                    </head>
                    <tbody>
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
                    <thead>
                        <tr class="w3-black" valign="bottom">
                            <th align="center" colspan="3">
                                <font face="Arial">
                                    <b>RAW</b>
                                </font>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
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
                <a href="http://www.prontotimingsystem.com/"><font face="Arial" size="-2">Copyright &copy; Pronto Timing System 2007-2020 All Rights Reserved.</font></a>
            </span>
            <br />
            <span>
                <font face="Arial" size="-2">No part of this website may be copied or reporoduced without Pronto Timing System's and IndySCCA's written consent.</font>
            </span>
        </div>
    </body>
</html>
