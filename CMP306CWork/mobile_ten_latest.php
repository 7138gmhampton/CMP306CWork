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
            <h1 class="ui-title" role="heading">Latest Readings</h1>
        </div>
        <div class="ui-content" role="main">
            <table id="tableReads" data-role="table" class="ui-responsive">
                <thead>
                    <tr>
                        <th data-priority="1">Time</th>
                        <th data-priority="persist">Temperature(&deg;) Int/Ext</th>
                        <th data-priority="2">Light Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once ROOT.'scripts/server/view/view_iot.php';

                    $recent_readings = IoTView::recent(10);

                    foreach ($recent_readings as $reading) {
                        echo '<tr>';
                        echo '  <th>'.$reading->getTime().'</th>';
                        echo '  <td>'.$reading->getIntTemp().'/'.$reading->getExtTemp().'</td>';
                        echo '  <td>'.$reading->getLight().'</td>';
                    }
                    ?>
                </tbody>
            </table>
            <p>
                The row with the greatest difference between the external and internal temperature 
                is coloured <b class="most-row">green</b> and that with the least 
                <b class="least-row">red</b>.
            </p>
        </div>
        <?php
        include 'parts/mobile_footer.html';
        ?>
    </div>

    <!--Other Scripts-->
    <script src="scripts/client/mobile_ten_latest.js"></script>
</body>
</html>