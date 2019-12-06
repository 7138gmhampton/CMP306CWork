<?php
//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
?>
<html class="ui-mobile">
<head>
    <base href="https://demos.jquerymobile.com/1.4.5/pages-single-page/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single page</title>
	<link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../favicon.ico">
	<script src="../js/jquery.js"></script>
	<script src="../_assets/js/index.js"></script>
	<script src="../js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body class="ui-mobile-viewport ui-overlay-a">

    <!-- /page -->
    <div data-role="page" data-url="/1.4.5/pages-single-page/" tabindex="0" class="ui-page ui-page-theme-a ui-page-active" style="min-height: 428px;">

	    <!-- /header -->
        <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
		    <h1 class="ui-title" role="heading" aria-level="1">Single page</h1>
	    </div>
    
        <!-- /content -->
	    <div role="main" class="ui-content">
		    <p>This is a single page boilerplate template that you can copy to build your first jQuery Mobile page. Each link or form from here will pull a new page in via Ajax to support the animated page transitions.</p>
		    <p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		    <p>This template is standard HTML document with a single "page" container inside, unlike a <a href="../pages-multi-page/" data-ajax="false" class="ui-link">multi-page template</a> that has multiple pages within it. We strongly recommend building your site or app as a series of separate pages like this because it's cleaner, more lightweight and works better without JavaScript.</p>
	    </div>

        <!-- /footer -->
	    <div data-role="footer" role="contentinfo" class="ui-footer ui-bar-inherit">
		    <h4 class="ui-title" role="heading" aria-level="1">Footer content</h4>
	    </div>
    </div>

        <div class="ui-loader ui-corner-all ui-body-a ui-loader-default">
            <span class="ui-icon-loading"></span>
            <h1>loading</h1>
        </div>
    </body>
</html>