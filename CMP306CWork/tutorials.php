<?php
//Session
session_start();

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

    <!--<script src="scripts/client/tab_handler.js"></script>-->
</head>
<body>
    <!--Main Navbar-->
    <?php
    include_once ROOT.'parts/mainbar.php';
    ?>

    <!--Tutorials and Evaluations-->

    <!--Tabs Nav-->
    <nav class="container">
        <div class="nav nav-tabs" id="navTutorials" role="tablist">
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekOne">
                Week 1
            </a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekTwo">
                Week 2
            </a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekThree">
                Week 3
            </a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekFour">
                Week 4
            </a>
        </div>
    </nav>

    <!--Tabs Content-->
    <div id="tabcontentTutorials" class="tab-content">
        <div class="tab-pane fade" id="tabWeekOne" role="tabpanel">
            <section class="container mt-3 border">
                <h2 class="h2">Tutorial Question 1</h2>
                <p>
                    Bootstrap employs a flexible grid: 12 columns within each row and these components
                    will shrink or grow with the viewport. Elements can be set to take up differing
                    numbers of columns - e.g. a 4-column element will try to fill a third of the row
                    container's width. More complicated arrangements can be achieved by nesting rows,
                    and their attendant columns, within other columns. To prevent smaller/narrower
                    screens becoming overwhelmed, particular columnar arrangements can be set for
                    certain 'classes' of screen width. For example, a row with 4 columns in a row for
                    screens classed as large or bigger can be set to rearrange the items in 2 columns
                    for medium screens and a single column for anything smaller.
                </p>
            </section>
            <section class="container mt-3 border">
                <h2 class="h2">Tutorial Question 2</h2>
                <p>
                    Bootstrap has classes that can make deployment of dropdown menus, pagination and
                    navs simple. The 'broadest' menu selections will be included in the navbar which
                    will appear at the top of every page. More specific usages will be applied utilising
                    the Bootstrap classes as necessary. To ensure accurate replication of menus (in
                    particular the main navbar), the menus will be written in separate PHP/HTML files
                    and then 'included' on the required pages using PHP scripting.
                </p>
            </section>
            <section class="container mt-3 border">
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
                            expanded - taking up unnecessary space. N.B. This text is contained
                            within an example of such a grouping.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="tabWeekTwo" class="tab-pane fade" role="tabpanel">
            <!--Database Diagrams-->
            <section class="container mt-3 border">
                <h2 class="h2">Database Diagrams</h2>
                
                <!--ERD-->
                <figure class="figure">
                    <img src="images/erd.png" class="figure-img img-fluid" />
                    <figcaption class="figure-caption">
                        This is an Entity-Relationship diagram pertaing to the relational database
                        setup for these pages/articles.
                    </figcaption>
                </figure>

                <!--Relational Schema-->
                <figure class="figure">
                    <img src="images/relation_schema.png" class="figure-img img-fluid" />
                    <figcaption class="figure-caption">
                        This the Relational Schema appropriate to the above displayed ERD.
                    </figcaption>
                </figure>
            </section>

            <!--Tables and their Fields-->
            <section class="container mt-3 border">
                <h2 class="h2">Fields and the Data Types</h2>
                <div id="accordianFields" class="accordion">
                    <!--Image-->
                    <div class="card">
                        <div id="headerImage" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseImage">
                                    Image
                                </button>
                            </h3>
                        </div>
                        <div id="collapseImage" class="collapse" data-parent="#accordianFields">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Data Type</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is auto incremented and the primary key</td>
                                        </tr>
                                        <tr>
                                            <td>Source</td>
                                            <td>VarChar</td>
                                            <td>500</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td>VarChar</td>
                                            <td>500</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Alternative Text</td>
                                            <td>VarChar</td>
                                            <td>500</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--Article-->
                    <div class="card">
                        <div id="headerArticle" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseArticle">
                                    Article
                                </button>
                            </h3>
                        </div>
                        <div id="collapseArticle" class="collapse" data-parent="#accordianFields">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Data Type</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is auto incremented and the primary key</td>
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td>VarChar</td>
                                            <td>300</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Author</td>
                                            <td>VarChar</td>
                                            <td>300</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Video</td>
                                            <td>VarChar</td>
                                            <td>500</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Text</td>
                                            <td>VarChar</td>
                                            <td>20,000</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--Poison-->
                    <div class="card">
                        <div id="headerPoison" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapsePoison">
                                    Poison
                                </button>
                            </h3>
                        </div>
                        <div id="collapsePoison" class="collapse" data-parent="#accordianFields">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Data Type</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is auto incremented and the primary key</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>VarChar</td>
                                            <td>300</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Alternative Name</td>
                                            <td>VarChar</td>
                                            <td>300</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>VarChar</td>
                                            <td>2,000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Image</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is a foreign key for the Image table</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--User-->
                    <div class="card">
                        <div id="headerUser" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseUser">
                                    User
                                </button>
                            </h3>
                        </div>
                        <div id="collapseUser" class="collapse" data-parent="#accordianFields">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Data Type</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is auto incremented and the primary key</td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>VarChar</td>
                                            <td>200</td>
                                            <td>This field must be unique</td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>VarChar</td>
                                            <td>200</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--Comment-->
                    <div class="card">
                        <div id="headerComment" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseComment">
                                    Comment
                                </button>
                            </h3>
                        </div>
                        <div id="collapseComment" class="collapse" data-parent="#accordianFields">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Data Type</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Article ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>
                                                This is a foreign key for the Article table and part of the
                                primary key
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>User ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>
                                                This is a foreign key for the User table and part of the
                                primary key
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Content</td>
                                            <td>VarChar</td>
                                            <td>2,000</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--Poison<>Article-->
                    <div class="card">
                        <div id="headerPoisonArticle" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapsePoisonArticle">
                                    Poison-Article Junction
                                </button>
                            </h3>
                        </div>
                        <div id="collapsePoisonArticle" class="collapse" data-parent="#accordianFields">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Data Type</th>
                                            <th scope="col">Width</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Poison ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>
                                                This is a foreign key for the Poison table
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Article ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>
                                                This is a foreign key for the Article table
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--Article<>Image-->
                    <div class="card">
                        <div id="headerArticleImage" class="card-header">
                            <h3 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseArticleImage">
                                    Article-Image Junction
                                </button>
                            </h3>
                        </div>
                        <div id="collapseArticleImage" class="collapse" data-parent="#accordianFields">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Data Type</th>
                                        <th scope="col">Width</th>
                                        <th scope="col">Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Image ID Number</td>
                                        <td>Integer</td>
                                        <td></td>
                                        <td>
                                            This is a foreign key for the Image table
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Article ID Number</td>
                                        <td>Integer</td>
                                        <td></td>
                                        <td>
                                            This is a foreign key for the Article
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Main Picture</td>
                                        <td>Booloean</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--<table class="table">
                    <thead>
                        <tr><th scope="colgroup">Image</th></tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>This is auto incremented and the primary key</td>
                        </tr>
                        <tr>
                            <td>Source</td>
                            <td>VarChar</td>
                            <td>500</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>VarChar</td>
                            <td>500</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alternative Text</td>
                            <td>VarChar</td>
                            <td>500</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>-->

                <!--Article-->
                <!--<table class="table">
                    <thead>
                        <tr>
                            <th scope="colgroup">Article</th>
                        </tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>This is auto incremented and the primary key</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>VarChar</td>
                            <td>300</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>VarChar</td>
                            <td>300</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Video</td>
                            <td>VarChar</td>
                            <td>500</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Text</td>
                            <td>VarChar</td>
                            <td>20,000</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>-->

                <!--Poison-->
                <!--<table class="table">
                    <thead>
                        <tr>
                            <th scope="colgroup">Poison</th>
                        </tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>This is auto incremented and the primary key</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>VarChar</td>
                            <td>300</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alternative Name</td>
                            <td>VarChar</td>
                            <td>300</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>VarChar</td>
                            <td>2,000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>Integer</td>
                            <td></td>
                            <td>This is a foreign key for the Image table</td>
                        </tr>
                    </tbody>
                </table>-->

                <!--User-->
                <!--<table class="table">
                    <thead>
                        <tr>
                            <th scope="colgroup">User</th>
                        </tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>This is auto incremented and the primary key</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>VarChar</td>
                            <td>200</td>
                            <td>This field must be unique</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>VarChar</td>
                            <td>200</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>-->

                <!--Comment-->
                <!--<table class="table">
                    <thead>
                        <tr>
                            <th scope="colgroup">Comment</th>
                        </tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Article ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>
                                This is a foreign key for the Article table and part of the 
                                primary key
                            </td>
                        </tr>
                        <tr>
                            <td>User ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>
                                This is a foreign key for the User table and part of the
                                primary key
                            </td>
                        </tr>
                        <tr>
                            <td>Content</td>
                            <td>VarChar</td>
                            <td>2,000</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>-->

                <!--Poison<>Article-->
                <!--<table class="table">
                    <thead>
                        <tr>
                            <th scope="colgroup">Poison-Article Junction</th>
                        </tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Poison ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>
                                This is a foreign key for the Poison table
                            </td>
                        </tr>
                        <tr>
                            <td>Article ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>
                                This is a foreign key for the Article table
                            </td>
                        </tr>
                    </tbody>
                </table>-->

                <!--Article<>Image-->
                <!--<table class="table">
                    <thead>
                        <tr>
                            <th scope="colgroup">Article-Image Junction</th>
                        </tr>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Data Type</th>
                            <th scope="col">Width</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Image ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>
                                This is a foreign key for the Image table
                            </td>
                        </tr>
                        <tr>
                            <td>Article ID Number</td>
                            <td>Integer</td>
                            <td></td>
                            <td>
                                This is a foreign key for the Article
                            </td>
                        </tr>
                        <tr>
                            <td>Main Picture</td>
                            <td>Booloean</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>-->
            </section>
        </div>
        <div id="tabWeekThree" class="tab-pane fade" role="tabpanel">
            <!--MVC Framework-->
            <div class="container mt-3 border">
                <h2 class="h2">MVC Framework Appraisal</h2>
                <p>
                    To exemplify the utilisation of the Model-View-Controller framework that has 
                    been applied to site for this practical, the behaviour of the getArticleById 
                    method will described here. After making use of PDO to connect to the 
                    database and form a prepared statement; the query is executed. The result 
                    from the query is then encoded in JSON format - making use of PHP's own 
                    functions to achieve this. The JSON formatted response is returned to the 
                    calling code/object: One of the View or Controller classes. The calling 
                    method/code must then decode the JSON to another format for actual use.<br />
                    In the site created up to week 3, this operation is instanced on the page 
                    that displays any article. As the ID will be provided by a 'get' superglobal, 
                    the method of the View class for articles to return a single article can be 
                    called. This class can take JSON input and convert it to PHP objects to be 
                    used directly on the page. It receives its JSON content by calling the 
                    appropriate API method (see above).<br />
                    Separating out the code that will submit actual queries/commands to the 
                    database - or whatever other back-end is utilised - improves the 
                    encapsulation and abstraction of the data itself. For example, if the 
                    database were to be moved to another server or a new access provided, only 
                    the Model code would have to changed (and, with employment of good OOP, 
                    only in a single place). In fact, due to the fact that the Views and 
                    Controllers taking input from agnostic formats like JSON and XML, the entire 
                    API/Model section can be replaced allowing for the use of an entirely new 
                    technology (e.g. replacing one's own servers with a web service) without 
                    any major changes to the View/Controller code and, indeed, the pages 
                    themselves. Additionally, within this framework roles and actions are better 
                    separated; this will prevent unintended side-effects and allow for better 
                    controls on passed data. Because the Model section of the framework (i.e. 
                    API code) provides its data free from any formatting, the returned data can 
                    be re-used by many View/Controller components without the implementation of 
                    an interface - reducing code duplication. Due to its separation of 
                    components, the framework is more apt for parallel development making it 
                    easier for a group to work on it together.<br />
                </p>
            </div>
        </div>
        <div id="tabWeekFour" class="tab-pane fade">
            <!--Security Evaluation-->
            <section class="container mt-3 border">
                <h2 class="h2">Security</h2>
                <p>
                    Access to the accounts on this site are protected by a password login. To 
                    ensure a minimum strength for the password selected by the user, when 
                    registering certain prerequisites must be met for the password to be 
                    accepted. All passwords must be at least 8 characters long and those that 
                    are less than 15 must contain an uppercase, a digit and a symbol. These 
                    constraints should make brute force password cracking prohibitively 
                    difficult (see below table) but provides lesser protection against 
                    dictionary-based attacks. To cover this weakness, the password could be 
                    checked against a library of common passwords and dictionaries and either 
                    the user could be notified of this surfeit or the password could be rejected 
                    outright.
                </p>
                
                <!--Cracking Table-->
                <table class="table border">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Number of Characters</th>
                            <th scope="col">Elements</th>
                            <th scope="col">Example</th>
                            <th scope="col">Time to Brute-Force Crack</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6</td>
                            <td>All lower case letters</td>
                            <td>mexegy</td>
                            <td>~20s</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>All lower case letters</td>
                            <td>vafgawwa</td>
                            <td>~3 1/2hrs</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Mixture of lowercase, uppercase, digits and symbols</td>
                            <td>1BmA`1p;</td>
                            <td>~1 decade</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>All lower case letters</td>
                            <td>nkkwmymkoyghrao</td>
                            <td>~3,300 years</td>
                        </tr>
                    </tbody>
                    <tfoot class="tfoot-light">
                        <tr>
                            <td scope="colgroup" colspan="4">
                                <small>
                                    Time estimates generated from 
                                    <a href="https://www.betterbuys.com/estimating-password-cracking-times/">BetterBuys: Estimating Password-Cracking Times</a>
                                </small>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <p>
                    It should be noted that, during the login process, if the either the email 
                    address (which is used as an identifier) or the password are entered 
                    incorrectly, the user is notified of the error but not <em>which</em> 
                    contains the error. This makes it more for bad actors to ascertain whether 
                    an email address is even valid (if they have not already ascertained this by 
                    other means, see below for an exemplar, a likely first step).
                </p>
                <p>
                    This type of user logon necessitates that the server holds email addresses 
                    with their attendant passwords. This means that should the contents of this 
                    database come in to the possession of external parties, if everything is in 
                    plain text, the security of the accounts will be completely compromised. To 
                    minimise the fallout of such a breach, the passwords are hashed before being 
                    stored in the database - making use of PHP's provided functions. The default 
                    hashing function on PHP also includes a 'salt'. This extra piece of randomly 
                    generated added to a password before it is hashed text ensures that each 
                    instance of a particular password's hash is unique, thus preventing the 
                    application of 'rainbow tables' (sets of previously generated hashes of 
                    common passwords and dictionary words).
                </p>
                <p>
                    Were this site to involve itself with more sensitive data/transactions, e.g. 
                    handling payment information to sell products, more stringent security 
                    mechanisms would be advisable. At registration, verification of the email 
                    address would be needed to ensure that the registering user has access to 
                    the email account (and isn't a bot either). As unauthorised access to the 
                    account would now have the potential for greater losses/harms, further 
                    protections should be added - two-factor authentication and/or a lockout 
                    after a number of failed access attempts are good candidates.
                </p>
            </section>
            <section class="container mt-3 border">
                <h2 class="h2">Session Timeout</h2>
                <p>
                    If one has access to the php.ini for the server, the maximum time for an 
                    inactive session can be set to 5 mins by changing the gc_maxlifetime 
                    variable to 600. If this file is not accessible then this variable can be 
                    set using the statement session.gc_maxlifetime = 600 in the PHP code on the 
                    page. It must be noted that because this manner of timing out inactive 
                    sessions relies on the garbage collection function it is not particularly 
                    reliable. Should there be a low volume of traffic, the garbage collection 
                    may not be initiated in the server and a session run over the time delimited 
                    by the above variable. For this reason, if one requires a more strict 
                    timeout procedure, it is advised that this be stated directly in the code of 
                    the page (see below for an example).
                </p>
                <code>
                    session_start();<br />

                    if (time() - $_SESSION['last_access'] > 600)<br />
	                    //Redirect to logout<br />
                    else $_SESSION['last_access'] = time();<br />
                </code>
            </section>
        </div>
    </div>

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>

    <script src="scripts/client/common.js"></script>
</body>
</html>