<?php
    //include_once 'functions.php';
    include_once 'functions-nccc.php';

    global $fmchannel;
    $fmchannel = 98.5;
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title><?php include 'pageTitle-nccc.html' ?></title>

            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
            <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
            <meta http-equiv="Pragma" content="no-cache">
            <meta http-equiv="Expires" content="0">
            <meta http-equiv="refresh" content="30">
            <meta name="viewport" content="width=device-width,initial-scale=1">

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="stylesheet.css">

            <!-- <script src="#"></script> -->
        </head>

        <body>
            <div class="w3-container page-container">

                <!-- Page Title Section -->
                <?php echo sectionInclude("pageTitle-nccc.html", "page-title"); ?>

                <!-- Event Title Section -->
                <?php echo sectionInclude("files/eventName.html", "event-title"); ?>

                <!-- Sponsorship Section -->
                <?php echo sectionInclude("sponsors-nccc.html", "sponsors"); ?>

                <!-- Event Supplementals Section -->
                <?php echo sectionIncludeHtml("files/EventSupplementals.pdf", "Event Supplementals and Schedule", '<div class="w3-panel w3-center event-supplementals">', '</div>'); ?>

                <!-- Live Audio Section -->
                <?php echo sectionIncludeHtml("files/liveaudio.html", "Click here for live audio broadcast", '<div class="w3-panel w3-center audio-broadcast">', '</div>'); ?>

                <!-- FM Channel Section -->
                <?php
                    if ($fmchannel != 0)
                    {
                        echo '<div class="w3-panel w3-center fm-channel">';
                        echo 'Local Site FM Channel: '.$fmchannel.'';
                        echo '</div>';
                    }
                ?>

                <!-- Run Ticker Section -->
                <?php echo sectionInclude("files/RunTickerTable.php", "run-ticker"); ?>

                <!-- Class Links Section -->
                <div class="w3-panel w3-center classes">
                    <div class="w3-padding panel-heading">CLASSES</div>
                    <div class="w3-padding w3-hide-large scroll">SCROLL -></div>
                    <?php include 'classes-nccc.php' ?>
                </div>

                <!-- RAW Times Section -->
                <div class="w3-panel w3-center w3-resposive raw">
                    <table id="tblRaw" class="w3-table w3-striped w3-border w3-bordered w3-centered data-table">
                        <thead>
                            <tr class="panel-heading">
                                <th align="center" colspan="3">
                                    RAW
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo fileexists("RawDay1.html", "RAW Day 1") ?>
                                </td>
                                <td>
                                    <?php echo fileexists("RawDay2.html", "RAW Day 2") ?>
                                </td>
                                <td>
                                    <?php echo fileexists("RawOverall.html", "RAW Overall") ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Run/Work Order Section -->
                <div class="w3-panel w3-center">
                    <?php include 'runOrder.php' ?>
                </div>

                <!-- Copyright Section -->
                <div class="w3-panel w3-center">
                    <table class="w3-table w3-centered">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Timing and Live Results, Powered by:</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.ProntoTimingSystem.com">
                                        <img src="http://www.ProntoTimingSystem.com/ProntoLogo.jpg" width="270" height="110">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.ProntoTimingSystem.com">www.ProntoTimingSystem.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    OFFICIAL Timing System of the SCCA National Solo Program
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Available for your region</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.prontotimingsystem.com/"><font face="Arial" size="-2">Copyright &copy; Pronto Timing System 2007-2021 All Rights Reserved.</font></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="Arial" size="-2">No part of this website may be copied or reporoduced without Pronto Timing System's and IndySCCA's written consent.</font>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </html>
