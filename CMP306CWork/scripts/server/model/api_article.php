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
        $result = null;

        try {
            $connection = self::makeConnection();
            $statement = $connection->prepare($command);
            $statement->bindParam(':poison_id', $poison_id);

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
}
?>