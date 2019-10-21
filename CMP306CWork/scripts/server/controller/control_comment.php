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

    public static function edit($comment_id, $new_content)
    {
        $comment_array = array(
            'comment' => self::scrub($comment_id),
            'content' => self::scrub($new_content));
        $comment_data = json_encode($comment_array);

        CommentAPI::updateComment($comment_data);
    }

    public static function delete($user_id, $comment_id)
    {
        $comment_id = self::scrub($comment_id);

        CommentAPI::deleteComment($user_id, $comment_id);
    }
}
?>