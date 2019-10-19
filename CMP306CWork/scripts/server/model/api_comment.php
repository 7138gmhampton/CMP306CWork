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

    public static function getSingleComment($comment_id)
    {
        $command = 'SELECT psn_comment.comment, psn_content, psn_comment.user '.
            'psn_user.username, psn_comment.article '.
            'FROM psn_comment '.
            'JOIN psn_user ON psn_comment.user = psn_user.user '.
            'WHERE psn_comment.comment = :comment_id';

        $response = self::selectWhere($command, ':comment_id', $comment_id);

        return $response;
    }

    public static function createComment($comment_data)
    {
        $command = 'INSERT INTO psn_comment (article, user, content) '.
            'VALUES (:article_id, :user_id, :content)';
        $comment_array = json_decode($comment_data, true);

        try {
            $statement = self::prepareStatement($command);
            $statement->bindParam(':article_id', $comment_array['article']);
            $statement->bindParam(':user_id', $comment_array['user']);
            $statement->bindParam(':content', $comment_array['content']);

            $statement->execute();
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }
    }

    public static function updateComment($comment_data)
    {
        $command = 'UPDATE psn_comment '.
            'SET content = :content '.
            'WHERE comment = :id';
        $comment_array = json_decode($comment_data, true);

        try {
            $statement = self::prepareStatement($command);
            $statement->bindParam(':content', $comment_array['content']);
            $statement->bindParam(':id', $comment_array['comment']);

            $statement->execute();
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }
    }
}
?>