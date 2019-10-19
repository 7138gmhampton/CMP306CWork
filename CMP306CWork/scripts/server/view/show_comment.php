<?php
require_once '../../../config.php';
require_once ROOT.'scripts/server/view/view_comment.php';

$comment = CommentView::single($_POST['comment']);

$comment_array = array('comment' => $comment->getID(), 'content' => $comment->getContent());
$comment_send = json_encode($comment_array);

echo $comment_send;
?>