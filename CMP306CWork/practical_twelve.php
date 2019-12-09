<?php
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>CMP306 Week 12 Practical</title>

    <link rel="stylesheet" type="text/css" href="general_styles.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    <!--Main Navbar-->
    <?php
    include_once ROOT.'parts/mainbar.php';
    ?>

    <!--Article Summary-->
    <div class="container border">
        <h1 class="h1">Recent Articles</h1>
        <div class="row">
            <div class="col-md-4 article-summary">
                <div id="listArticles" class="list-group"></div>
            </div>
            <div id="divSummary" class="col-md-8 article-summary"></div>
        </div>
    </div>
    

    <!--Article Creation Form-->
    <div class="container border">
        <h1 class="h1">Add Article</h1>
        <form>
            <div class="form-group">
                <label for="txtTitle">Title</label>
                <input id="txtTitle" name="title" class="form-control" />
            </div>
            <div class="form-group">
                <label for="txtAuthor">Author</label>
                <input id="txtAuthor" name="author" class="form-control" />
            </div>
            <div class="form-group">
                <label for="txtText">Text</label>
                <textarea id="txtText" name="text" class="form-control" rows="7"></textarea>
            </div>
            <div class="form-group text-center">
                <button id="btnSubmit" class="btn btn-primary">Submit</button>
                <button class="btn btn-secondary" type="reset">Clear</button>
            </div>
        </form>
    </div>

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>

    <!--Bs Js-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--Other Scripts-->
    <script src="scripts/client/practical_twelve.js"></script>
</body>
</html>