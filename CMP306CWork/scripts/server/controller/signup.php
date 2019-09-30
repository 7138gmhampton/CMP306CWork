<?php
require_once '../../../../config.php';
require_once ROOT.'scripts/server/controller/control_user.php';
require_once ROOT.'scripts/server/view/view_user.php';

UserController::create($_POST['email'], $_POST['username'], $_POST['password']);

if (UserView::valid($_POST['email'])) {
    header('Location: ../../../../index.php');
    die();
}
else {
    echo '<p>Something went wrong</p>';
}
?>