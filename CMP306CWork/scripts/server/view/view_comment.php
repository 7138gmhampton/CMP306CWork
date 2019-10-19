<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_comment.php';
require_once ROOT.'scripts/server/view/comment.php';

class CommentView extends ViewController
{
    public static function allForArticle($article_id)
    {
        $comment_data = CommentAPI::getAllCommentsForArticle(self::scrub($article_id));
        $comment_array = json_decode($comment_data, true);
        $all_comments = array();

        foreach ($comment_array as $each_comment) {
            $next_comment = new Comment(
                $each_comment['comment'],
                self::scrub($article_id),
                $each_comment['user'],
                self::scrub($each_comment['username']),
                self::scrub($each_comment['content']));
            array_push($all_comments, $next_comment);
        }

        return $all_comments;
    }

    public static function single($comment_id)
    {
        $comment_array = json_decode(CommentAPI::getCommentById(self::scrub($comment_id)), true);

        $comment = new Comment(
            $comment_array[0]['comment'],
            $comment_array[0]['article'],
            $comment_array[0]['user'],
            self::scrub($comment_array[0]['username']),
            self::scrub($comment_array[0]['content']));

        return $comment;
    }
}
?>