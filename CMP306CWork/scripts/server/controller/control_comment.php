<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_comment.php';

class CommentController extends ViewController
{
    public static function create($article_id, $user_id, $content)
    {
        $comment_array = array(
            'article' => self::scrub($article_id),
            'user' => self::scrub($user_id),
            'content' => self::scrub($content));
        $comment_data = json_encode($comment_array);

        CommentAPI::createComment($comment_data);
    }
}
?>