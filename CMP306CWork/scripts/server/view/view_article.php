<?php
require_once ROOT.'scripts/server/model/api_article.php';
include_once ROOT.'scripts/server/model/api_image.php';
require_once ROOT.'scripts/server/view/article.php';

class ArticleView
{
    public static function allForPoison($poison_id)
    {
        $article_data = ArticleAPI::getAllArticlesForPoison($poison_id);
        $article_array = json_decode($article_data, true);
        $all_articles = array();

        foreach ($article_array as $each_article) {
            $image_data = ImageAPI::getMainImageForArticle($each_article['article']);
            $image_array = json_decode($image_data, true);
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
                    $image_array[0]['image'],
                    $image_array[0]['source'],
                    $image_array[0]['title'],
                    $image_array[0]['alttext']);
                array_push($all_articles, $next_article);
            }
        }

        return $all_articles;
    }

    public static function single($article_id)
    {
        //$article_data = ArticleAPI::getArticleById($article_id);
        $article_array = json_decode(ArticleAPI::getArticleById($article_id), true);

        $article = new Article(
            $article_array[0]['article'], 
            $article_array[0]['title'],
            $article_array[0]['author'],
            $article_array[0]['video'],
            $article_array[0]['text']);

        return $article;
    }
}
?>