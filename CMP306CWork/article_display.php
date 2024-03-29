﻿<?php
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
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
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
        <?php
        include_once ROOT.'scripts/server/view/view_image.php';

        $images = ImageView::allForArticle($_GET['id']);

        if (count($images) > 0) {
            echo '<div class="container d-none d-lg-block">';
            echo '  <div id="carouselImages" class="carousel slide" data-ride="carousel">';
            echo '      <div class="carousel-inner article-carousel">';

            $first = true;

            foreach ($images as $image) {
                $image->buildCarousel($first);
                $first = false;
            }

            echo '      </div>';
            echo '          <a class="carousel-control-prev" href="#carouselImages" '.
                'role="button" data-slide="prev">';
            echo '              <span class="carousel-control-prev-icon"></span>';
            echo '          </a>';
            echo '          <a class="carousel-control-next" href="#carouselImages" '.
                'role="button" data-slide="next">';
            echo '              <span class="carousel-control-next-icon"></span>';
            echo '          </a>';
            echo '  </div>';
            echo '</div>';
        }
        ?>

        <!--Text of Article-->
        <div class="container my-3">
            <?php
            echo '<p>'.$article->getText().'</p>';
            ?>
        </div>

        
        <footer class="container px-5">
            <!--'More About' Video-->
            <?php
            if ($article->getVideo()) {
                echo '<section class="container">';
                echo '  <h2 class="h2">Also Related</h2>';
                echo '  <div class="embed-responsive embed-responsive-4by3 px-5 mx-5">';
                echo '      <iframe src="'.$article->getVideo().'">';
                echo '          <p>Apologies the content has failed to load</p>';
                echo '      </iframe>';
                echo '  </div>';
                echo '</section>';
            }
            ?>

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
                            if ($each_comment->getUser() == $_SESSION['uid'])
                                $each_comment->buildEditableRow();
                            else $each_comment->buildRow();
                        ?>
                    </tbody>
                </table>

                <!--Comment Submission-->
                <?php
                if (isset($_SESSION['uid'])) {
                    echo '<form id="formComment" '.
                        'action="scripts/server/controller/submit_comment.php" method="post">';
                    echo '<input class="d-none" name="article" value="'.$article->getID().'" />';
                    echo '<input name="user" value="'.$_SESSION['uid'].'" type="hidden" />';
                    echo '  <div class="row">';
                    echo '      <div class="col-lg-10">';
                    echo '          <textarea class="form-control" name="content" rows="2">'.
                        '</textarea>';
                    echo '      </div>';
                    echo '      <div class="col-lg-2">';
                    echo '          <button id="btnComment" class="btn btn-secondary" '.
                        'type="button">Submit</button>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</form>';
                }
                ?>

                <!--Comment Edits-->
                <div id="modalEdit" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Comment</h5>
                                <button class="close" type="button" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <form id="formEdit" 
                                  action="scripts/server/controller/edit_comment.php" 
                                  method="post">
                                <div class="modal-body">
                                    <input id="inputEditId" name="comment" type="hidden" />
                                    <input id="inputEditOriginal" type="hidden" />
                                    <textarea id="inputEditReplace" class="form-control" name="content" 
                                              rows="3"></textarea>
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button id="btnCancelEdit" class="btn btn-secondary" type="button">
                                    Cancel
                                </button>
                                <button id="btnSubmitEdit" class="btn btn-primary" type="button">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Comment Deletion-->
                <div id="modalDelete" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm deletion?</h5>
                                <form>
                                    <?php
                                    echo '<input id="inputUserId" type="hidden" '.
                                        'value="'.$_SESSION['uid'].'" />';
                                    ?>
                                    <input id="inputDeleteCommentId" type="hidden" />
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button id="btnNoDelete" class="btn btn-secondary" type="button">
                                    No
                                </button>
                                <button id="btnYesDelete" class="btn btn-warning" type="button">
                                    Yes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </article>
    
    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>

    <!--Other Scripts-->
    <script src="scripts/client/article.js"></script>
</body>
</html>