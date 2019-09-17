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
    include 'parts/mainbar.html';
    //echo '<p>Check</p>';
    ?>

    <!--Title Display-->
    <div class="container">
        <?php
        $poison_id = $_GET['id'];

        include 'scripts/server/database.php';
        include 'scripts/server/poison.php';

       //echo '<p>Check</p>';

        $poison = Database::getPoison($poison_id);
        //$test = Database::getPoison(2);
        //$test = Database::getPoisonSummaryClasses();

        //echo '<p>Check '.$test[0]->getName().'</p>';

        //echo $poison->getID();

        //echo '<p>Check</p>';

        echo '<h1 class="h1">'.$poison[0]->getName().'</h1>';
        ?>
    </div>

    <?php
    //echo '<p>Check</p>';
    ?>
    

    <!--Listing of Articles-->
</body>
</html>