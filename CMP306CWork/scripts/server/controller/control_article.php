<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_article.php';

class ArticleController extends ViewController
{
    public static function create($title, $author, $video_link, $text)
    {
        $article_array = array(
            'title' => self::scrub($title),
            'author' => self::scrub($author),
            'video' => self::scrub($video_link),
            'text' => self::scrub($text));
        $article_data = json_encode($article_array);

        ArticleAPI::createArticle($article_data);
    }
}
?>