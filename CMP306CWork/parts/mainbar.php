<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand d-none d-lg-block" href="index.php">CMP306</a>
    <a class="navbar-brand d-lg-none mob-brand" href="index.php">CMP306</a>
    <!--<a class="nav-link d-none d-lg-block" href="account.php">Login</a>
    <a class="nav-link d-lg-none mob-nav-text" href="account.php">Login</a>-->
    <?php
    if (isset($_SESSION['uid'])) {
        echo '<p class="text-light">'.$_SESSION['username'].'</p>';
        echo '<a class="nav-link d-none d-lg-block" href="scripts/server/controller/logout.php">'.
            'Logout</a>';
        echo '<a class="nav-link d-lg-none mob-nav-text" href="scripts/server/controller/'.
            'logout.php">Logout</a>';
        echo '<div class="btn-group">';
        echo '  <button class="btn btn-primary dropdown-toggle" type="button" '.
            'data-toggle="dropdown">';
        echo $_SESSION['username'];
        echo '  </button>';
        echo '  <div class="dropdown-menu">';
        echo '      <a class="dropdown-item" href="scripts/server/controller/logout.php">Logout</a>';
        echo '  </div>';
        echo '</div>';
    }
    else {
        echo '<a class="nav-link d-none d-lg-block" href="account.php">Login</a>';
        echo '<a class="nav-link d-lg-none mob-nav-text" href="account.php">Login</a>';
    }
    ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainPages">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainPages">
        <ul class="navbar-nav mr-auto">
            <!--Week One-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk1Dropdown" role="button"
                   data-toggle="dropdown">Week 1</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_one.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk1DropdownMob" role="button"
                   data-toggle="dropdown">Week 1</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_one.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php">Tutorial</a>
                </div>
            </li>

            <!--Week Two-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk2Dropdown" role="button"
                   data-toggle="dropdown">Week 2</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_two.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekTwo">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk2DropdownMob" role="button"
                   data-toggle="dropdown">Week 2</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_two.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekTwo">Tutorial</a>
                </div>
            </li>

            <!--Week Three-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk3Dropdown" role="button"
                   data-toggle="dropdown">Week 3</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_three.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekThree">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk3DropdownMob" role="button"
                   data-toggle="dropdown">Week 3</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_three.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekThree">Tutorial</a>
                </div>
            </li>

            <!--Week Four-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk4Dropdown" role="button"
                   data-toggle="dropdown">Week 4</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_four.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekFour">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk4DropdownMob" role="button"
                   data-toggle="dropdown">Week 4</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_four.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekFour">Tutorial</a>
                </div>
            </li>

            <!--Week Five-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk5Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 5
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_five.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekFive">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk5DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 5
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_five.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekFive">Tutorial</a>
                </div>
            </li>

            <!--Week Six-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk6Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 5
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_six.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekSix">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk6DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 6
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_six.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekSix">Tutorial</a>
                </div>
            </li>
        </ul>
    </div>
</nav>