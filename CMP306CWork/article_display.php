<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>Article</title> <!--TODO: Dynamic title-->

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
    include_once ROOT.'parts/mainbar.html';
    ?>

    <article>
        <!--Title and Author-->
        <header>
            <div class="container">
                <?php
                include_once ROOT.'scripts/server/view/view_article.php';

                $article = ArticleView::single($_GET['id']);

                echo '<h1 class="h1">'.$article->getTitle().'</h1>';
                echo '<h3 class="h3 text-muted">'.$article->getAuthor().'</h3>'
                ?>
            </div>
        </header>

        <!--Carousel of Images-->
        <div class="container">
            <div id="carouselImages" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner article-carousel">
                    <?php
                    include_once ROOT.'scripts/server/view/view_image.php';

                    $images = ImageView::allForArticle($_GET['id']);
                    $first = true;

                    foreach ($images as $image) {
                        $image->buildCarousel($first);
                        $first = false;
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselImages" role="button" 
                   data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carouselImages" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <!--Text of Article-->

        <!--More About Video-->

    </article>
    
    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>