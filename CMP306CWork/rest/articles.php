<?php
require_once '../config.php';
require_once ROOT.'scripts/server/view/view_article.php';

function get_article($id)
{
    $article = ArticleView::single($id);

    $article_array = array(
        'article' => $article->getID(),
        'title' => $article->getTitle(),
        'author' => $article->getAuthor(),
        'video'=> $article->getVideo(),
        'text'=>$article->getText(),
        'image'=>$article->getImage());

    $response = json_encode($article_array);
    echo $response;
}

function get_articles()
{
    $all_articles = ArticleView::recent();
    $articles_array = array();

    foreach ($all_articles as $each_article)
        array_push($articles_array, $each_article->getAssocArray());

    $response = json_encode($articles_array);
    echo $response;
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': 
        if (isset($_GET['id']))
            get_article($_GET['id']);
        else get_articles();
        break;
}
?>