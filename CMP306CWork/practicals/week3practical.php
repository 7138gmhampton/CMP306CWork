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
    include '../parts/mainbar.html';
    ?>

    <!--Summary Cards-->
    <div class="container-fluid">
        <?php
        require 'scripts/server/database.php';
        include_once 'scripts/server/poison.php';
        include 'scripts/server/poison_card_builder.php';

        //$database = new Database();

        //$summaries = Database::getPoisonSummaries();
        $summaries = Database::getPoisonSummaryClasses();
        $counter = 0;
        $max_cards_in_row = 3;

        //foreach ($summaries as $poison) {
        //    if ($counter % $max_cards_in_row == 0)
        //        echo '<div class="row">';
        //    echo '  <div class="col-lg">';
        //    //buildPoisonCard($poison[0],$poison[1],$poison[2],$poison[3]);
        //    //buildSummaryCard($poison[0],$poison[1],$poison[2],$poison[3],$poison[4],$poison[5]);
        //    buildPoisonSummaryCard($poison);
        //    echo '  </div>';
        //    if ($counter % $max_cards_in_row == $max_cards_in_row-1)
        //        echo '</div>';

        //    ++$counter;
        //}

        //include 'scripts/server/article_card_builder.php';

        //$groups = Database::getArticleGroups();
        //$counter = 0;

        //foreach ($groups as $group) {
        //    if ($counter % $max_cards_in_row == 0)
        //        echo '<div class="row">';
        //    echo '  <div class="col-lg">';
        //    buildArticleCard($group[0],$group[1],$group[2],$group[3],$group[4]);
        //    echo '  </div>';
        //    if ($counter % $max_cards_in_row == $max_cards_in_row-1)
        //        echo '</div>';

        //    ++$counter;
        //}

        $counter = 0;

        foreach ($summaries as $poison) {
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
    include '../parts/footer.php';
    ?>
</body>
</html>