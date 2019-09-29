<?php
require_once ROOT.'scripts/server/model/database.php';

class ImageAPI extends Database
{
    public static function getFirstArticleImage($article_id)
    {
        $command = 'SELECT psn_image.image, psn_image.source, psn_image.title, psn_image.alttext '.
            'FROM psn_article_image '.
            'JOIN psn_image ON psn_article_image.image = psn_image.image '.
            'WHERE article = :id '.
            'LIMIT 1';
        $result = null;

        try {
            $connection = self::makeConnection();
            $statement = $connection->prepare($command);
            $statement->bindParam(':id', $article_id);

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

    public static function getAllImagesForArticle($article_id)
    {
        $command = 'SELECT psn_image.image, psn_image.source, psn_image.title, psn_image.alttext '.
            'FROM psn_article_image '.
            'JOIN psn_image ON psn_article_image.image = psn_image.image '.
            'WHERE article = :id';
        //$result = null;

        //try {
        //    $statement = self::prepareStatement($command);
        //    $statement->bindParam(':id', $article_id);

        //    $statement->execute();

        //    $result = 
        //}

        $response = self::selectWhere($command, ':id', $article_id);

        return $response;
    }
}
?>