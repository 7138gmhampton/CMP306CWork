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

    <title>CMP306 Coursework Week 3 Practical</title>

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

    <!--Summary Cards-->
    <div class="container-fluid">
        <?php
        include_once ROOT.'scripts/server/view/poison.php';
        include_once ROOT.'scripts/server/view/view_poison.php';

        $poisons = PoisonView::all();
        $max_cards_in_row = 3;
        $counter = 0;

        foreach ($poisons as $poison) {
            if ($counter % $max_cards_in_row == 0)
                echo '<div class="card-group">';
            $poison->buildCard();
            if ($counter % $max_cards_in_row == $max_cards_in_row - 1)
                echo '</div>';

            ++$counter;
        }
        ?>
    </div>

    <?php
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>