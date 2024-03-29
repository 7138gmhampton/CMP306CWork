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
        <!--Bs Js-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <!--Main Navbar-->
        <?php
        include 'parts/mainbar.php';
        ?>
        <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">CMP306</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainPages">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainPages">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="wk1Dropdown" role="button"
                           data-toggle="dropdown">Week 1</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Practical</a>
                            <a class="dropdown-item" href="#">Comments</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>-->

        <!--Jumbo Title-->
        <div class="jumbotron d-none d-lg-block">
            <h1 class="display-1">CMP306 Coursework</h1>
            <h2 class="display-2">Gareth M. Hampton</h2>
        </div>

        <!--Buttons to Weeks and Tutorials-->
        <div class="container my-3">
            <div class="row text-center">
                <div class="col">
                    <a class="btn btn-primary page-button my-1" href="tutorials.php">Tutorials and Evaluations</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_one.php">Week 1</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_two.php">Week 2</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_three.php">Week 3</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_four.php">Week 4</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_five.php">Week 5</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_six.php">Week 6</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_seven.php">Week 7</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_eight.php">Week 8</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_nine.php">Week 9</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_ten.php">Week 10</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_eleven.php">Week 11</a>
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-primary page-button my-1" href="practical_twelve.php">Week 12</a>
                </div>
            </div>
        </div>

        <!--<footer>
            <p>Gareth M. Hampton</p>
            <p>0407435</p>
        </footer>-->
        <?php
        include_once ROOT.'parts/footer.html';
        ?>
    </body>
</html>