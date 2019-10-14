<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/controller/control_comment.php';

CommentController::create($_POST['article'], $_POST['user'], $_POST['content']);

header('Location: ../../../article_display.php?id='.$_POST['article']);
die();
?>