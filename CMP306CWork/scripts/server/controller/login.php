<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../../../config.php';
require_once ROOT.'scripts/server/view/view_user.php';
session_start();

$user = UserView::singleByEmail($_POST['email']);

if ($user->getID() != null && password_verify($_POST['password'], $user->getPassword())) {
    $_SESSION['uid'] = $user->getID();
    $_SESSION['username'] = $user->getUsername();
    header('Location: ../../../index.php');
    die();
}
else {
    session_unset();
    session_destroy();
    header('Location: ../../../account.php?error=1');
    die();
}
?>