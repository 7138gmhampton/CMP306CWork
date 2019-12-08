<?php
//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
?>
<!--<!DOCTYPE html>-->
<html lang="en-gb" class="ui-mobile">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />
    <!--<base href="https://demos.jquerymobile.com/1.4.5/pages-single-page/" />-->
    <meta name="viewport" content="width = device-width, initial-scale = 1" />

    <title>CMP306 Week 9 Most Recent</title>

    <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    <!--<link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="../_assets/css/jqm-demos.css" />
    <link rel="shortcut icon" href="../favicon.ico" />
    <script src="../js/jquery.js"></script>
    <script src="../_assets/js/index.js"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js"></script>-->
    <link rel="stylesheet" href="general_styles.css" />
    <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/_assets/css/jqm-demos.css" />
    <link rel="shortcut icon" href="https://demos.jquerymobile.com/1.4.5/favicon.ico" />
    <script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
    <script src="https://demos.jquerymobile.com/1.4.5/_assets/js/index.js"></script>
    <script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
    
</head>
<body class="ui-mobile-viewport ui-overlay-a">
    <div class="ui-page ui-page-theme ui-page-active" data-role="page">
        <?php
        include 'parts/mobile_panel.html';
        ?>
        <div class="ui-header ui-bar-inherit" data-role="header" role="banner">
            <h1 class="ui-title" role="heading">Current Reading</h1>
        </div>
        <div class="ui-content" role="main">
            <!--Device ID-->
            <h2 class="ui-bar ui-bar-a">Device ID</h2>
            <div class="ui-body">
                <?php
                include_once ROOT.'scripts/server/view/view_iot.php';

                $current = IoTView::current();

                echo '<p>'.$current->getId().'</p>';
                ?>
            </div>

            <!--Voltage-->
            <h2 class="ui-bar ui-bar-a">Voltage</h2>
            <div class="ui-body">
                <?php
                echo '<p>'.$current->getVoltage().'V</p>';
                ?>
            </div>

            <!--Light Level-->
            <h2 class="ui-bar ui-bar-a">Light Level</h2>
            <div class="ui-body">
                <?php
                echo '<p>'.$current->getLight().'</p>';
                ?>
            </div>

            <!--Temperatures-->
            <h2 class="ui-bar ui-bar-a">Temperatures</h2>
            <div class="ui-body">
                <?php
                echo '<p>'.$current->getIntTemp().'&degC</p>';
                echo '<p>Internal</p>';
                echo '<p>'.$current->getExtTemp().'&degC</p>';
                ?>
            </div>
        </div>
        <?php
        include 'parts/mobile_footer.html';
        ?>
    </div>
</body>
</html>