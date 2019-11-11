<?php
//Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../../../config.php';
require_once ROOT.'scripts/server/view/view_article.php';

header('Content-Type: text/xml; charset=utf-8',true);

$xml = new DOMDocument('1.0', 'UTF-8');
$rss = $xml->createElement('rss');
$rss_node = $xml->appendChild($rss);
$rss_node->setAttribute('version', '2.0');
$rss_node->setAttribute("xmlns:dc","http://purl.org/dc/elements/1.1/"); //xmlns:dc (info http://j.mp/1mHIl8e )
$rss_node->setAttribute("xmlns:content","http://purl.org/rss/1.0/modules/content/"); //xmlns:content (info http://j.mp/1og3n2W)
$rss_node->setAttribute("xmlns:atom","http://www.w3.org/2005/Atom");//xmlns:atom (http://j.mp/1tErCYX )S
//$date_f = date("D, d M Y H:i:s T", time());
//$build_date = gmdate(DATE_RFC2822, strtotime($date_f));

//Channel Element
$channel = $xml->createElement('channel');
$channel_node = $rss_node->appendChild($channel);

//Atom Link
$channel_atom_link = $xml->createElement('atom:link');
$channel_atom_link->setAttribute('href',
    'https://mayar.abertay.ac.uk/~0407435/CMP306cwk/scripts/server/view/article_feed.php');
$channel_atom_link->setAttribute('rel', 'self');
$channel_atom_link->setAttribute('type', 'application/rss+xml');
$channel_node->appendChild($channel_atom_link);

//General Attributes
$channel_node->appendChild($xml->createElement('title', 'Latest Poison Articles'));
$channel_node->appendChild($xml->createElement('description',
    'The latest news articles discussing poisons and toxins'));
$channel_node->appendChild($xml->createElement('link',
    'https://mayar.abertay.ac.uk/~0407435/CMP306cwk/'));

//Apply Articles
$articles = ArticleView::lastFive();
//var_dump($articles);
foreach ($articles as $article) {
    $article_element = $xml->createElement('article');
    $article_element->setAttribute('id', $article->getID());
    $article_node = $channel_node->appendChild($article_element);
    $article_node->appendChild($xml->createElement('title', $article->getTitle()));
    if ($article->getAuthor())
        $article_node->appendChild($xml->createElement('author', $article->getAuthor()));
    if ($article->getVideo())
        $article_node->appendChild($xml->createElement('text', $article->getVideo()));
}

echo $xml->saveXML();
?>