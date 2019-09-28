<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
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
    include ROOT.'parts/mainbar.html';
    //echo '<p>Check</p>';
    ?>

    <!--Title Display-->
    <div class="container">
        <?php
        //$poison_id = $_GET['id'];

        //include 'scripts/server/database.php';
        //include 'scripts/server/poison.php';

       //echo '<p>Check</p>';

        //$poison = Database::getPoison($poison_id);
        //$test = Database::getPoison(2);
        //$test = Database::getPoisonSummaryClasses();

        //echo '<p>Check '.$test[0]->getName().'</p>';

        //echo $poison->getID();

        //echo '<p>Check</p>';

        //include_once ROOT.'scripts/server/view/poison.php';
        include_once ROOT.'scripts/server/view/view_poison.php';

        $poison = PoisonView::singlePoison($_GET['id']);

        echo '<h1 class="h1">'.$poison->getName().' Articles</h1>';
        ?>
    </div>

    <?php
    //echo '<p>Check</p>';
    ?>
    

    <!--Listing of Articles-->
    <div class="container">
        <?php
        //include 'scripts/server/article.php';

        //$articles = Database::getArticlesForPoison($_GET['id']);

        include_once ROOT.'scripts/server/view/view_article.php';

        $articles = ArticleView::articlesForPoison($_GET['id']);

        foreach ($articles as $article)
            if ($article->getImage())
                $article->buildCardWithPic();
            else $article->buildCard();
        ?>
    </div>

    <?php
    //include 'parts/footer.html';
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>