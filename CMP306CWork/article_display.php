<?php
//Error Reporting
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
    include_once ROOT.'parts/mainbar.php';
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
        <div class="container d-none d-lg-block">
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
        <div class="container my-3">
            <?php
            echo '<p>'.$article->getText().'</p>';
            ?>
        </div>

        
        <footer class="container px-5">
            <!--'More About' Video-->
            <section class="container">
                <h2 class="h2">Also Related</h2>
                <div class="embed-responsive embed-responsive-4by3 px-5 mx-5">
                    <?php
                    echo '<iframe src="'.$article->getVideo().'">';
                    echo '  <p>Apologies the content has failed to load</p>';
                    echo '</iframe>';
                    ?>
                    <!--<iframe>-->
                    <!--<p>Apologies the content has failed to load</p>
                </iframe>-->
                </div>
            </section>

            <!--Comments-->
            <section class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once ROOT.'scripts/server/view/view_comment.php';

                        $comments = CommentView::allForArticle($article->getID());

                        foreach ($comments as $each_comment)
                            $each_comment->buildRow();
                        ?>
                    </tbody>
                </table>

                <!--Comment Submission-->
                <form>

                </form>
            </section>
        </footer>
    </article>
    
    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>