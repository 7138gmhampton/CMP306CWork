<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>Login/Signup</title>

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
    include_once ROOT.'parts/mainbar.html';
    ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-7">
                <div class="card border border-secondary">
                    <div class="card-header">
                        <h3 class="h3">Login</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="#inputLoginEmail">Email Address</label>
                                <input id="inputLoginEmail" class="form-control" name="email"
                                       type="email" />
                            </div>
                            <div class="form-group">
                                <label for="#inputLoginPassword">Password</label>
                                <input id="inputLoginPassword" class="form-control" 
                                       name="password" type="password" />
                            </div>
                            <div class="form-group">
                                <button id="btnLogin" class="btn btn-primary" type="button">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border border-secondary">
                    <div class="card-body">
                        <form id="formRegister" action="scripts/server/controller/signup.php" 
                              method="post">
                            <h3 class="h3">Registration</h3>
                            <div class="form-group">
                                <label for="#inputRegisterEmail">Email Address</label>
                                <input id="inputRegisterEmail" class="form-control" 
                                       name="email" type="email" />
                            </div>
                            <div class="form-group">
                                <label for="#inputRegisterUsername">Username</label>
                                <input id="inputRegisterUsername" class="form-control" 
                                       name="username" type="text" />
                                <small class="form-text text-muted">This must be unique</small>
                            </div>
                            <div class="form-group">
                                <label for="#inputRegisterPassword">Password</label>
                                <input id="inputRegisterPassword" class="form-control" 
                                       name="password" type="password" />
                                <label for="#inputRegisterConfirm">Confirm Password</label>
                                <input id="inputRegisterConfirm" class="form-control" 
                                       type="password" />
                                <small id="txtRegisterPasswordError" class="text-danger"></small>
                            </div>
                            <div class="form-group text-center">
                                <button id="btnRegister" class="btn btn-primary" type="button">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>

    <!--Other scripts-->
    <script src="scripts/client/account.js"></script>
</body>
</html>