<?php
//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Session
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>CMP306 Coursework Week 11</title>

    <link rel="stylesheet" type="text/css" href="general_styles.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    <!--Main Navbar-->    
    <?php
    include_once ROOT.'parts/mainbar.html';
    ?>

    <!--News Feed Display-->
    <div class="container">
        <div class="row row-cols-3">
            <?php
            //Programmatic listing of Wired newsfeed
            $wired_rss = file_get_contents('https://www.wired.com/feed/rss');
            $xml_feed = simplexml_load_string($wired_rss);
            $xsl_processor = new XSLTProcessor();
            $xsl_style_sheet = simplexml_load_file('wired_feed.xslt');
            $xsl_processor->importStylesheet($xsl_style_sheet);

            $display_output = $xsl_processor->transformToXml($xml_feed);
            echo $display_output;
            //var_dump($display_output);
            ?>
        </div>
    </div>

    <!--Footer-->    
    <?php
    include_once ROOT.'parts/footer.html';
    ?>
    <!--Bs Js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>