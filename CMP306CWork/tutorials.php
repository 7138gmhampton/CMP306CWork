<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title>CMP306 Tutorials/Evaluations</title>

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
    include_once ROOT.'parts/mainbar.html';
    ?>

    <!--Tutorials and Evaluations-->

    <!--Tabs Nav-->
    <nav class="container">
        <div class="nav nav-tabs" id="navTutorials" role="tablist">
            <a class="nav-item nav-link" id="navtabWeekOne" data-toggle="tab" href="#tabWeekOne">
                Week 1
            </a>
            <a class="nav-item nav-link" id="navtabWeekTwo" data-toggle="tab" href="#tabWeekTwo">
                Week 2
            </a>
        </div>
    </nav>

    <!--Tabs Content-->
    <div class="tab-content" id="tabcontentTutorials">
        <div class="tab-pane fade show active" id="tabWeekOne" role="tabpanel">
            <div class="container mt-3 border">
                <h2 class="h2">Tutorial Question 1</h2>
                <p>
                    Bootstrap employs a flexible grid: 12 columns within each row and these components
            will shrink or grow with the viewport. Elements can be set to take up differing
            numbers of columns – e.g. a 4-column element will try to fill a third of the row
            container’s width. More complicated arrangements can be achieved by nesting rows,
            and their attendant columns, within other columns. To prevent smaller/narrower
            screens becoming overwhelmed, particular columnar arrangements can be set for
            certain ‘classes’ of screen width. For example, a row with 4 columns in a row for
            screens classed as large or bigger can be set to rearrange the items in 2 columns
            for medium screens and a single column for anything smaller.
                </p>
            </div>
            <div class="container mt-3 border">
                <h2 class="h2">Tutorial Question 2</h2>
                <p>
                    Bootstrap has classes that can make deployment of dropdown menus, pagination and
            navs simple. The ‘broadest’ menu selections will be included in the navbar which
            will appear at the top of every page. More specific usages will be applied utilising
            the Bootstrap classes as necessary. To ensure accurate replication of menus (in
            particular the main navbar), the menus will be written in separate PHP/HTML files
            and then ‘included’ on the required pages using PHP scripting.
                </p>
            </div>
            <div class="container mt-3 border">
                <h2 class="h2">Tutorial Question 3</h2>
                <div class="accordion" id="accordianQuestionThree">
                    <!--Modal Section-->
                    <div class="card">
                        <div class="card-header" id="headerModal">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseModal">
                                    Modal Boxes
                                </button>
                            </h3>
                        </div>
                        <div class="collapse show" id="collapseModal"
                            data-parent="#accordianQuestionThree">
                            <div class="card-body">
                                <p>
                                    These allow for highly focussed dialogs to be displayed and
                            highlighted. Ideal for use when critical information must be
                            displayed to the user, particularly when it requires a response
                            (e.g. payment confirmation).
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Carousel Section-->
                    <div class="card">
                        <div class="card-header" id="headerCarousel">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseCarousel">
                                    Carousels
                                </button>
                            </h3>
                        </div>
                        <div class="collapse" id="collapseCarousel"
                            data-parent="#accordianQuestionThree">
                            <div class="card-body">
                                <p>
                                    Useful for displaying a number of images in a slideshow with the
                            prepared code. Rather than tiling a number of smaller images or
                            linking between multiple pages, many images can be given a set
                            space on the page that they then share.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Cards Section-->
                    <div class="card">
                        <div class="card-header" id="headerCard">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseCard">
                                    Cards
                                </button>
                            </h3>
                        </div>
                        <div class="collapse" id="collapseCard"
                            data-parent="#accordianQuestionThree">
                            <div class="card-body">
                                <p>
                                    Allows for the grouping of related elements to be displayed together
                            with a clear delineation of their unit. They are especially useful
                            when records are drawn from a database as the fields will follow
                            the same format each time allowing them to be applied to multiple
                            cards in the same manner.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Breadcrumbs Secction-->
                    <div class="card">
                        <div class="card-header" id="headerBreadcrumb">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseBreadcrumb">
                                    Breadcrumbs
                                </button>
                            </h3>
                        </div>
                        <div class="collapse" id="collapseBreadcrumb"
                            data-parent="#accordianQuestionThree">
                            <div class="card-body">
                                <p>
                                    Allows backwards navigation easier by showing, and linking, the
                            hierarchy of the current page within the website as a whole.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Accordion Collapse Section-->
                    <div class="card">
                        <div class="card-header" id="headerAccordian">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseAccordian">
                                    Accordian Collapse Groups
                                </button>
                            </h3>
                        </div>
                        <div class="collapse" id="collapseAccordian"
                            data-parent="#accordianQuestionThree">
                            <div class="card-body">
                                <p>
                                    This collapsible group allows for only a single section to be
                            expanded at a time. This ensures that the group cannot be entirely
                            expanded – taking up unnecessary space. N.B. This text is contained
                            within an example of such a grouping.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabWeekTwo" role="tabpanel">
            <p>This is something else</p>
        </div>
    </div>

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>
</body>
</html>