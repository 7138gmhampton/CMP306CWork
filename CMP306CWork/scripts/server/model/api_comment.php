<?php
require_once ROOT.'scripts/server/model/database.php';

class CommentAPI extends Database
{
    public static function getAllCommentsForArticle($article_id)
    {
        $command = 'SELECT psn_comment.comment, psn_comment.content, psn_comment.user, '.
            'psn_user.username '.
            'FROM psn_comment '.
            'JOIN psn_user ON psn_comment.user = psn_user.user '.
            'WHERE psn_comment.article = :article_id';

        $response = self::selectWhere($command, ':article_id', $article_id);

        return $response;
    }
}
?>