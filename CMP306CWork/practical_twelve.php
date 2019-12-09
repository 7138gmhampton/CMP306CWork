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
                <ul id="listArticles" class="list-group">
                    <!--<li><button class="list-group-item list-group-item-action" value="42">Example of something to put in here</button></li>-->
                </ul>
            </div>
            <div id="divSummary" class="col-md-8 article-summary">
                <article class="h-100">
                    <!--<header>
                        <h2 class="h2">Example Title</h2>
                        <p>Example Author</p>
                    </header>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Facilisis mauris sit amet massa vitae tortor. Suspendisse in est ante in. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Morbi tristique senectus et netus et. Volutpat est velit egestas dui id ornare arcu odio. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi. Ut porttitor leo a diam sollicitudin tempor id eu. Commodo quis imperdiet massa tincidunt. Congue quisque egestas diam in arcu cursus euismod quis. Ornare arcu dui vivamus arcu felis. Lectus arcu bibendum at varius. Nec tincidunt praesent semper feugiat nibh sed. Urna cursus eget nunc scelerisque viverra mauris in. Aliquam ultrices sagittis orci a scelerisque. Sed augue lacus viverra vitae congue eu consequat.
                        <br />
                        Nec dui nunc mattis enim ut. A arcu cursus vitae congue. Est ante in nibh mauris cursus mattis molestie a iaculis. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Imperdiet dui accumsan sit amet nulla facilisi morbi. Pellentesque nec nam aliquam sem et tortor consequat id porta. Id semper risus in hendrerit gravida rutrum quisque. Lorem dolor sed viverra ipsum nunc aliquet. Aliquet risus feugiat in ante metus. Diam volutpat commodo sed egestas egestas.
                        <br />
                        Dictumst quisque sagittis purus sit amet. Non consectetur a erat nam at. Laoreet id donec ultrices tincidunt. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. Vestibulum mattis ullamcorper velit sed ullamcorper. Feugiat sed lectus vestibulum mattis ullamcorper velit. Enim sed faucibus turpis in eu mi bibendum neque egestas. Praesent semper feugiat nibh sed pulvinar proin gravida. Elementum facilisis leo vel fringilla est ullamcorper eget. Semper eget duis at tellus at urna condimentum mattis pellentesque. Senectus et netus et malesuada fames ac turpis. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Risus quis varius quam quisque id diam vel quam. Purus ut faucibus pulvinar elementum. Mi eget mauris pharetra et. Tristique nulla aliquet enim tortor at auctor urna nunc.
                        <br />
                        Aliquam malesuada bibendum arcu vitae elementum curabitur. Malesuada proin libero nunc consequat interdum varius. Nam aliquam sem et tortor consequat. Nisi quis eleifend quam adipiscing vitae proin sagittis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. At volutpat diam ut venenatis tellus in metus. Lectus arcu bibendum at varius vel pharetra vel. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Eget dolor morbi non arcu risus. Imperdiet nulla malesuada pellentesque elit eget gravida. Scelerisque fermentum dui faucibus in. Aliquam ut porttitor leo a diam. Risus sed vulputate odio ut enim. Mollis nunc sed id semper risus in hendrerit.
                        <br />
                        Lacinia at quis risus sed vulputate odio. Scelerisque fermentum dui faucibus in ornare. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Sed risus pretium quam vulputate dignissim suspendisse in est. Convallis convallis tellus id interdum velit laoreet. Augue lacus viverra vitae congue. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Feugiat vivamus at augue eget arcu dictum. Massa vitae tortor condimentum lacinia quis. Mi sit amet mauris commodo quis imperdiet massa. Leo integer malesuada nunc vel risus commodo viverra maecenas accumsan. Commodo quis imperdiet massa tincidunt nunc. Diam maecenas ultricies mi eget mauris pharetra et ultrices neque. Venenatis tellus in metus vulputate eu scelerisque. Imperdiet dui accumsan sit amet nulla facilisi. Ipsum dolor sit amet consectetur. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Massa sed elementum tempus egestas sed sed risus. Interdum velit laoreet id donec ultrices tincidunt.
                    </p>-->
                </article>
            </div>
        </div>
    </div>
    

    <!--Article Creation Form-->

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