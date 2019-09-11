<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>CMP306 Coursework Week 1 Practical</title>

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

    <!--Summary Cards-->
    <div class="container-fluid">
        <?php
        require 'scripts/server/database.php';
        include 'scripts/server/poison_card_builder.php';

        //$database = new Database();

        $summaries = Database::getSummaries();
        $counter = 0;

        foreach ($summaries as $poison) {
            if ($counter % 4 == 0) 
                echo '<div class="row">';
            echo '  <div class="col-3">';
            buildPoisonCard($poison[0],$poison[1],$poison[2],$poison[3]);
            echo '  </div>';
            if ($counter % 4 == 3)
                echo '</div>';

            ++$counter;
        }
        ?>
    </div>

    <footer>
        <p>Gareth M. Hampton</p>
        <p>0407435</p>
    </footer>
</body>
</html>