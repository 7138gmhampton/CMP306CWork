<?php
require_once 'database.php';

class ArticleAPI extends Database
{
    public static function getAllArticlesForPoison($poison_id)
    {
        $command = 'SELECT psn_poison_article.article, psn_article.title, psn_article.author, '.
            'psn_article.video, psn_article.text '.
            'FROM psn_poison_article '.
            'JOIN psn_article ON psn_poison_article.article = psn_article.article '.
            'WHERE psn_poison_article.poison = :poison_id';

        $response = self::selectWhere($command, ':poison_id', $poison_id);

        return $response;
    }

    public static function getArticleById($article_id)
    {
        $command = 'SELECT article, title, author, video, text '.
            'FROM psn_article '.
            'WHERE article = :id';
        $response = null;

        if (self::rowCount('psn_article', 'article', $article_id) == 1)
            $response = self::selectWhere($command, ':id', $article_id);

        return $response;
    }

    public static function getLastFiveArticles()
    {
        $command = 'SELECT article, title, author, video, text '.
            'FROM psn_article '.
            'ORDER BY article DESC '.
            'LIMIT 5';

        try {
            $statement = self::prepareStatement($command);

            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }

        $response = json_encode($result);
        return $response;
    }

    public static function getRecent($how_many)
    {
        $command = 'SELECT article, title, author, video, text '.
            'FROM psn_article '.
            'ORDER BY article DESC '.
            'LIMIT :how_many';

        try {
            $statement = self::prepareStatement($command);
            $statement->bindParam(':how_many', $how_many, PDO::PARAM_INT);

            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }

        $response = json_encode($result);
        return $response;
    }

    public static function createArticle($article_data)
    {
        $command = 'INSERT INTO psn_article (title, author, video, text) '.
            'VALUES (:title, :author, :video, :text)';
        $article_array = json_decode($article_data, true);

        try {
            $statement = self::prepareStatement($command);
            $statement->bindParam(':title',$article_array['title']);
            $statement->bindParam(':author',$article_array['author']);
            $statement->bindParam(':video',$article_array['video']);
            $statement->bindParam(':text',$article_array['text']);

            $statement->execute();
        }
        catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
            return null;
        }
    }
}
?>