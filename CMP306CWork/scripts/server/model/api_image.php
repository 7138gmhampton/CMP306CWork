<?php
require_once ROOT.'scripts/server/model/database.php';

class ImageAPI extends Database
{
    public static function getMainImageForArticle($article_id)
    {
        $command = 'SELECT psn_image.image, psn_image.source, psn_image.title, psn_image.alttext '.
            'FROM psn_article_image '.
            'JOIN psn_image ON psn_article_image.image = psn_image.image '.
            'WHERE article = :id '.
            'ORDER BY main DESC '.
            'LIMIT 1';

        $response = self::selectWhere($command, ':id', $article_id);

        return $response;
    }

    public static function getAllImagesForArticle($article_id)
    {
        $command = 'SELECT psn_image.image, psn_image.source, psn_image.title, psn_image.alttext '.
            'FROM psn_article_image '.
            'JOIN psn_image ON psn_article_image.image = psn_image.image '.
            'WHERE article = :id';

        $response = self::selectWhere($command, ':id', $article_id);

        return $response;
    }
}
?>