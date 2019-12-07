<?php
//Session
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title></title>

    <link rel="stylesheet" type="text/css" href="general_styles.css" />

</head>
<body>
    <!--Main Navbar-->
    <?php
    include_once ROOT.'parts/mainbar.php';
    ?>

    <!--Switch Lights-->
    <div class="container">
        <div class="row text-center">
            <div class="col-6-md">
                <h3 class="h3">Red</h3>
                <a class="btn btn-primary" 
                   href="https://agent.electricimp.com/muY_i1VpM46A?state=1&colour=red">
                    On
                </a>
                <a class="btn btn-secondary"
                    href="https://agent.electricimp.com/muY_i1VpM46A?state=0&colour=red">
                    Off
                </a>
            </div>
            <div class="col-6-md">
                <h3 class="h3">Red</h3>
                <a class="btn btn-primary"
                    href="https://agent.electricimp.com/muY_i1VpM46A?state=1&colour=green">
                    On
                </a>
                <a class="btn btn-secondary"
                    href="https://agent.electricimp.com/muY_i1VpM46A?state=0&colour=green">
                    Off
                </a>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>