<?php
/**
 * Include set of functions for use in this site
 */
include_once 'functions.php';
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title><?php include 'pageTitle.html'; ?></title>

            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
            <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
            <meta http-equiv="Pragma" content="no-cache">
            <meta http-equiv="Expires" content="0">
            <meta http-equiv="refresh" content="30">
            <meta name="viewport" content="width=device-width,initial-scale=1">

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="stylesheet.css">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="script.js"></script>
        </head>

        <body>
            <div class="w3-container page-container">

                <!-- Page Title Section -->
                <?php echo sectionInclude("pageTitle.html", "page-title"); ?>

                <!-- Event Title Section -->
                <?php //echo sectionInclude("files/eventName.html", "event-title"); ?>
                <?php echo eventTitleInclude("files/eventName.html", "event-title"); ?>

                <!-- Sponsorship Section -->
                <?php echo sectionInclude("sponsors.html", "sponsors"); ?>

                <!-- Event Supplementals Section -->
                <?php echo sectionLinkInclude("files/EventSupplementals.pdf", "event-supplementals", "Event Supplementals and Schedule"); ?>

                <!-- Live Audio Section -->
                <?php echo sectionLinkInclude("files/liveaudio.html", "audio-broadcast", "Click here for live audio broadcast"); ?>

                <!-- FM Channel Section -->
                <?php
                /**
                 * If a number other than 0 was set in functions.php, show a line on the website indicating what frequency is in use
                 */
                if ($fmChannel != 0)
                {
                    echo '<div class="w3-panel w3-center fm-channel">';
                    echo 'Local Site FM Channel: '.$fmChannel.'';
                    echo '</div>';
                }
                ?>

                <!-- Run Ticker Section -->
                <?php echo sectionInclude("files/RunTickerTable.php", "w3-responsive run-ticker"); ?>

                <!-- Class Links Section -->
                <div class="w3-panel w3-center classes">
                    <div class="w3-padding panel-heading">CLASSES</div>
                    <div class="w3-padding scroll">SCROLL -></div>
                    <?php
                    if ($horizontalClasses)
                    {
                        include 'classes-horizontal.php';
                    }
                    else
                    {
                        include 'classes-vertical.php';
                    }
                    ?>
                </div>

                <!-- PAX Times Section -->
                <div class="w3-panel w3-center w3-responsive pax">
                    <table id="tblPax" class="w3-table w3-striped w3-border w3-bordered w3-centered data-table">
                        <thead>
                            <tr class="panel-heading">
                                <th colspan="3">
                                    PAX
                                </th>
                            </tr>
                        </head>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo tableFileExists("PaxIndexDay1.html", "PAX Day 1"); ?>
                                </td>
                                <td>
                                    <?php echo tableFileExists("PaxIndexDay2.html", "PAX Day 2"); ?>
                                </td>
                                <td>
                                    <?php echo tableFileExists("PaxIndexOverall.html", "PAX Overall"); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                                    <?php echo tableFileExists("RawDay1.html", "RAW Day 1"); ?>
                                </td>
                                <td>
                                    <?php echo tableFileExists("RawDay2.html", "RAW Day 2"); ?>
                                </td>
                                <td>
                                    <?php echo tableFileExists("RawOverall.html", "RAW Overall"); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Novice Times Section -->
                <div class="w3-panel w3-center w3-resposive raw">
                    <table id="tblRaw" class="w3-table w3-striped w3-border w3-bordered w3-centered data-table">
                        <thead>
                            <tr class="panel-heading">
                                <th align="center" colspan="3">
                                    Novice
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                    <?php echo tableFileExists("NoviceIndexDay1.html", "Novice Day 1"); ?>
                                </td>
                                <td>
                                    <?php echo tableFileExists("NoviceIndexDay2.html", "Novice Day 2"); ?>
                                </td>
                                <td>
                                    <?php echo tableFileExists("NoviceIndexOverall.html", "Novice Overall"); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Run/Work Order Section -->
                <div class="w3-panel w3-center run-order">
                    <?php include 'runOrder.php'; ?>
                </div>

                <!-- Copyright Section -->
                <div class="w3-panel w3-center copyright">
                    <table class="w3-table w3-centered">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Timing and Live Results, Powered by:</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://www.ProntoTimingSystem.com">
                                        <img src="https://www.ProntoTimingSystem.com/ProntoLogo.jpg" width="270" height="110">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://www.ProntoTimingSystem.com">www.ProntoTimingSystem.com</a>
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
                                    <a href="https://www.prontotimingsystem.com/"><font face="Arial" size="-2">Copyright &copy; Pronto Timing System 2007-2023 All Rights Reserved.</font></a>
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
