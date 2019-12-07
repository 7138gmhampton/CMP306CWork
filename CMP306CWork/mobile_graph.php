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

    <title>CMP306 Week 9 Ten Latest Graphed</title>

    <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/_assets/css/jqm-demos.css" />
    <link rel="shortcut icon" href="https://demos.jquerymobile.com/1.4.5/favicon.ico" />
    <script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
    <script src="https://demos.jquerymobile.com/1.4.5/_assets/js/index.js"></script>
    <script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
    
</head>
<body class="ui-mobile-viewport ui-overlay-a">
    <div class="ui-page ui-page-theme ui-page-active" data-role="page">
        <div class="ui-header ui-bar-inherit" data-role="header" role="banner">
            <h1 class="ui-title" role="heading">Current Reading</h1>
        </div>
        <div class="ui-content" role="main">
            
        </div>
    </div>

    <script src="scripts/client/mobile_always_current.js"></script>
</body>
</html>