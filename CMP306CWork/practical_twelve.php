<?php
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>CMP306 Week 12 Practical</title>

    <link rel="stylesheet" type="text/css" href="general_styles.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    <!--Main Navbar-->
    <?php
    include_once ROOT.'parts/mainbar.php';
    ?>

    <!--Article Summary-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul id="listArticles" class="list-group articles-list">
                    <!--<li><button class="list-group-item list-group-item-action" value="42">Example of something to put in here</button></li>-->
                </ul>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>

    <!--Article Creation Form-->

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>

    <!--Bs Js-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--Other Scripts-->
    <script src="scripts/client/practical_twelve.js"></script>
</body>
</html>