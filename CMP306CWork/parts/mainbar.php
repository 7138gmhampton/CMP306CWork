<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand d-none d-lg-block" href="index.php">CMP306</a>
    <a class="navbar-brand d-lg-none mob-brand" href="index.php">CMP306</a>
    <?php
    if (isset($_SESSION['uid'])) {
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
                    Week 6
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

            <!--Week Seven-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk7Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 7
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_seven.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekSeven">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk7DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 7
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_seven.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekSeven">Tutorial</a>
                </div>
            </li>

            <!--Week Eight-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk8Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 8
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_eight.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekEight">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk8DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 8
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_eight.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekEight">Tutorial</a>
                </div>
            </li>

            <!--Week Nine-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk9Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 9
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_nine.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekNine">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk9DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 9
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_nine.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekNine">Tutorial</a>
                </div>
            </li>

            <!--Week Ten-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk10Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 10
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_ten.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekTen">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk10DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 10
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_ten.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekTen">Tutorial</a>
                </div>
            </li>

            <!--Week Eleven-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk11Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 11
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_eleven.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekEleven">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk11DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 11
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_eleven.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekEleven">Tutorial</a>
                </div>
            </li>

            <!--Week Twelve-->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" id="wk12Dropdown" role="button"
                    data-toggle="dropdown">
                    Week 12
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="practical_twelve.php">Practical</a>
                    <a class="dropdown-item" href="tutorials.php#tabWeekTwelve">Tutorial</a>
                </div>
            </li>
            <li class="nav-item dropdown d-lg-none">
                <a class="nav-link dropdown-toggle mob-nav-text" href="#" id="wk12DropdownMob" role="button"
                    data-toggle="dropdown">
                    Week 12
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item mob-nav-text" href="practical_twelve.php">Practical</a>
                    <a class="dropdown-item mob-nav-text" href="tutorials.php#tabWeekTwelve">Tutorial</a>
                </div>
            </li>
        </ul>
    </div>
</nav>