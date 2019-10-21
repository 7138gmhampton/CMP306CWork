<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Session
session_start();

include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>Article Listing</title>

    <link rel="stylesheet" type="text/css" href="general_styles.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <!--Bs Js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!--Main Navbar-->
    <?php
    include ROOT.'parts/mainbar.php';
    ?>

    <!--Title Display-->
    <div class="container">
        <?php
        include_once ROOT.'scripts/server/view/view_poison.php';

        $poison = PoisonView::single($_GET['id']);

        echo '<h1 class="h1">'.$poison->getName().' Articles</h1>';
        ?>
    </div>

    <!--Listing of Articles-->
    <div class="container">
        <?php
        include_once ROOT.'scripts/server/view/view_article.php';

        $articles = ArticleView::allForPoison($_GET['id']);

        if (empty($articles)) echo '<h3 class="h3 text-center">No Articles for this Poison</h3>';

        foreach ($articles as $article)
            if ($article->getImage())
                $article->buildCardWithPic();
            else $article->buildCard();
        ?>
    </div>

    <?php
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>