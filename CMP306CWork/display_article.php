<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>Article</title>

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
    include 'parts/mainbar.html';
    ?>

    <!--Title and Author-->
    <header>
        <div class="container">
            <?php
            require 'scripts/server/database.php';

            $article_code = $_GET['id'];
            $article = Database::getArticle($_GET['id']);

            echo '<h1 class="h1">'.$article['title'].'</h1>';
            echo '<h3 class="h3 text-muted">'.$article['author'].'</h3';
            ?>
        </div>
    </header>
    <!--Video (If available)-->

    <!--Text of Article-->
    <div class="container">
        <?php
        echo '<p>'.$article['text'].'</p>';
        ?>
    </div>

    <!--<div class="container">
        <footer>
            <p>Gareth M. Hampton</p>
            <p>0407435</p>
        </footer>
    </div>-->    
    <?php
    include 'parts/footer.html';
    ?>
</body>
</html>