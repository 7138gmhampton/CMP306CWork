<?php
require_once ROOT.'scripts/server/view/api_article.php';
require_once ROOT.'scripts/server/view/article.php';

class ArticleView
{
    public static function articlesForPoison($poison_id)
    {
        $article_data = ArticleAPI::getAllArticlesForPoison($poison_id);
        $article_array = json_decode($article_data, true);
        $all_articles = array();

        foreach ($article_array as $each_article) {
            $next_article = new Article(
                $each_article['article'],
                $each_article['title'],
                $each_article['author'],
                $each_article['video'],
                $each_article['text']);
            array_push($all_articles, $next_article);
        }

        return $all_articles;
    }
}
?>