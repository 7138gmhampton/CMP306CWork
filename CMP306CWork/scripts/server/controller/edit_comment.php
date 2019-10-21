<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/controller/control_comment.php';

CommentController::edit($_POST['comment'], $_POST['content']);
?>