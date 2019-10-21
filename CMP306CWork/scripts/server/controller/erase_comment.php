<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/controller/control_comment.php';

CommentController::delete($_POST['user'], $_POST['comment']);
?>