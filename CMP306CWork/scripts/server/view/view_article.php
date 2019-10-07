<?php
require_once ROOT.'scripts/server/view_controller.php';
require_once ROOT.'scripts/server/model/api_article.php';
include_once ROOT.'scripts/server/model/api_image.php';
require_once ROOT.'scripts/server/view/article.php';

class ArticleView extends ViewController
{
    public static function allForPoison($poison_id)
    {
        $article_data = ArticleAPI::getAllArticlesForPoison(self::scrub($poison_id));
        $article_array = json_decode($article_data, true);
        $scrubbed_articles = self::scrubArray($article_array);

        $all_articles = array();
        foreach ($scrubbed_articles as $each_article) {
            $image_data = ImageAPI::getMainImageForArticle($each_article['article']);
            $image_array = json_decode($image_data, true);
            $scrubbed_images = self::scrubArray($image_array);
            if (!$image_array) {
                $next_article = new Article(
                    $each_article['article'],
                    $each_article['title'],
                    $each_article['author'],
                    $each_article['video'],
                    $each_article['text']);
                array_push($all_articles, $next_article);
            }
            else {
                $next_article = new Article(
                    $each_article['article'],
                    $each_article['title'],
                    $each_article['author'],
                    $each_article['video'],
                    $each_article['text'],
                    $scrubbed_images[0]['image'],
                    $scrubbed_images[0]['source'],
                    $scrubbed_images[0]['title'],
                    $scrubbed_images[0]['alttext']);
                array_push($all_articles, $next_article);
            }
        }

        return $all_articles;
    }

    public static function single($article_id)
    {
        //$article_data = ArticleAPI::getArticleById($article_id);
        $article_array = json_decode(ArticleAPI::getArticleById(
            self::scrub($article_id)), true);
        $scrubbed_array = self::scrubArray($article_array);

        $article = new Article(
            $scrubbed_array[0]['article'],
            $scrubbed_array[0]['title'],
            $scrubbed_array[0]['author'],
            $scrubbed_array[0]['video'],
            $scrubbed_array[0]['text']);

        return $article;
    }
}
?>