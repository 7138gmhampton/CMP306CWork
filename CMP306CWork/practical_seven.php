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
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
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
                <div class="container m-3">
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
            </div>
            <div class="col-6-md">
                <div class="container m-3">
                    <h3 class="h3">Green</h3>
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