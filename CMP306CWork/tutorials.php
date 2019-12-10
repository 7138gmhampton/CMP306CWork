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
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekOne">Week 1</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekTwo">Week 2</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekThree">Week 3</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekFour">Week 4</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekFive">Week 5</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekSix">Week 6</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekSeven">Week 7</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekEight">Week 8</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekNine">Week 9</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekTen">Week 10</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekEleven">Week 11</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#tabWeekTwelve">Week 12</a>
        </div>
    </nav>

    <!--Tabs Content-->
    <div id="tabcontentTutorials" class="tab-content">
        <article class="tab-pane fade" id="tabWeekOne" role="tabpanel">
            <section class="container mt-3 border border-secondary">
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
            <section class="container mt-3 border border-secondary">
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
            <section class="container mt-3 border border-secondary">
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
        </article>
        <article id="tabWeekTwo" class="tab-pane fade" role="tabpanel">
            <!--Database Diagrams-->
            <section class="container mt-3 border border-secondary">
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
            <section class="container mt-3 border border-secondary">
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
                                            <td>ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is auto incremented and the primary key</td>
                                        </tr>
                                        <tr>
                                            <td>Article ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is a foreign key for the Article table</td>
                                        </tr>
                                        <tr>
                                            <td>User ID Number</td>
                                            <td>Integer</td>
                                            <td></td>
                                            <td>This is a foreign key for the User table</td>
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
            </section>
        </article>
        <article id="tabWeekThree" class="tab-pane fade" role="tabpanel">
            <!--MVC Framework-->
            <div class="container mt-3 border border-secondary">
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
        </article>
        <article id="tabWeekFour" class="tab-pane fade">
            <!--Security Evaluation-->
            <section class="container mt-3 border border-secondary">
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
                <table class="table border border-secondary">
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
            <section class="container mt-3 border border-secondary">
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
                <pre><code>
                    session_start();<br />

                    if (time() - $_SESSION['last_access'] > 600)<br />
	                    //Redirect to logout<br />
                    else $_SESSION['last_access'] = time();<br />
                </code></pre>
            </section>
        </article>
        <article id="tabWeekFive" class="tab-pane fade">
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">Form Security</h3>
                <p>
                    The registration and login forms have multiple layers to the deployment of 
                    security on their utilisation. Firstly, at the level of the client, various 
                    validity checks are made on the form data using JavaScript/jQuery functions. 
                    This ensures that when the form is submitted there are no empty fields and 
                    the contents are appropriate - e.g. the email address is of the correct 
                    pattern. This is imperative for the submission of passwords for new 
                    accounts. The verification check disallows passwords shorter than eight 
                    characters and for passwords under fifteen characters, the inclusion of at 
                    least one lowercase letter, uppercase letter, numeral and symbol are 
                    mandated. This gradation is to all the use of pass phrases as an 
                    alternative.
                </p>
                <p>
                    At the Controller level - i.e. login and register scripts in PHP - the 
                    submissions are  further processed by sanitising the components that may 
                    have been input by the user. This sanitisation is achieved through the 
                    application of PHP's built-in functions to trim excess white space, escape 
                    salshes and character integra to HTML. This sanitisation protects against 
                    various script injection attacks. Please note, the View side of the 
                    framework also undertakes such protections to prevent second-order attacks.
                </p>
                <p>
                    Finally, at the Model level, through the employment of PDO, the commands 
                    submitted to the database are done so with prepared statements. This ensures 
                    that SQL injections are ineffective.
                </p>
            </section>
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">Weaknesses of this Site</h3>
                <div id="accordionWeakness" class="accordion">
                    <div class="card">
                        <div id="cardheadPwordDict" class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapsePwordDict">
                                    Password Dictionary Check
                                </button>
                            </h4>
                        </div>
                        <div id="collapsePwordDict" class="collapse show" 
                             data-parent="#accordionWeakness">
                            <div class="card-body">
                                Though the current protections ameliorate the effect of brute 
                                force solving the users&rsquo; passwords, there is little 
                                countermeasure to dictionary attacks. This could be relieved by 
                                check prospective passwords against lists of the most common and 
                                either disallowing them or otherwise &lsquo;nudging&rsquo; the 
                                user to select a different password.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div id="cardheadEmailVerify" class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseEmailVerify">
                                    Email Verification
                                </button>
                            </h4>
                        </div>
                        <div id="collapseEmailVerify" class="collapse"
                            data-parent="#accordionWeakness">
                            <div class="card-body">
                                The email address provided by the user at registration is not 
                                checked for authenticity. A simple verification email containing 
                                a prepared link could be sent to the address provided before an 
                                account is considered active.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div id="cardheadCaptcha" class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseCaptcha">
                                    CAPTCHA
                                </button>
                            </h4>
                        </div>
                        <div id="collapseCaptcha" class="collapse"
                            data-parent="#accordionWeakness">
                            <div class="card-body">
                                At present, there are no checks to ensure that accounts are not 
                                created by bots. Through the use of a system such as CAPTCHA, 
                                this vulnerability could be lessened.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div id="cardheadLogging" class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseLogging">
                                    Logging
                                </button>
                            </h4>
                        </div>
                        <div id="collapseLogging" class="collapse"
                            data-parent="#accordionWeakness">
                            <div class="card-body">
                                Currently, none of the interactions between the components 
                                produces any activity logs. These would be most critical for the 
                                interactions between the API and the database to determine the 
                                sequence of events that led to a loss or breach.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <article id="tabWeekSix" class="tab-pane fade">
            <!--MVC Aims and Benefits-->
            <section class="container mt-3 border border-secondary">
                <h2 class="h2">MVC Frameworks</h2>
                <h3 class="h3">Aim</h3>
                <p>
                    The Model-View-Controller design pattern focusses on dividing the elements 
                    of data (Model), display (View) and manipulation (Controller) into disparate 
                    sections. This enhances the separation of concerns and eases development of 
                    units conforming to the single responsibility principle.
                </p>
                <h3 class="h3">Benefits</h3>
                <p>
                    Due to the improved separations of concerns for a site developed within an 
                    MVC framework, the various components have better encapsulation and are thus 
                    more weakly tied to one another. This finer grained modularity engenders 
                    more material reuse leading to DRYer code that is easier to read and 
                    maintain.<br />
                    Additionally, with such separation, re-engineering becomes a more direct 
                    task. For example, switching to a web service for the data will require 
                    drastic changes to be made only to the Model components.
                </p>
            </section>
            <!--RPC-->
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">JSON-RPC</h3>
                <p>
                    To utilise Remote Procedure Calls to retrieve and manipulate data, the 
                    various View and Controller components submit a POST (or alternatively GET) 
                    request to the remote source containing JSON; XML-RPC is also available. 
                    Here, the request is submitted using PHP’s cURL library but HTTP submission 
                    methods would be viable (e.g. AJAX). This remote call is made instead of a 
                    call to the responsible Model component.
                </p>
                <img class="img-fluid" src="images/RPC.png" alt="MVC and Remote Diagram"/>
                <p>
                    In order to fulfill the RPC request, the JSON-RPC version; an ID number, the 
                    function name and any arguments must sent. For creations and updates, this 
                    necessitates knowing the appropriate keys and allowed input for their 
                    attendant values. In the cases of retrieval and deletions, the parameters 
                    will relate to search/limiting criteria.
                </p>
            </section>
        </article>
        <article id="tabWeekSeven" class="tab-pane fade">
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">Internet of Things Sensors</h3>
                <p>
                    This system recorded the values of four different metrics - system voltage, 
                    light level, external and internal temperatures. Recording both the voltage 
                    and the light level were achieved within built-in functions of the Electric 
                    Imp API.
                </p>
                <p>
                    For the temperatures, thermistors attached across voltage dividers were 
                    employed to determine the temperatures. These thermistors were both negative 
                    coefficient and thus their resistance would fall higher temperatures. The 
                    temperature was calculated from a given resistance with the the following 
                    equation: 
                </p>
                <p>
                    $$T = { &beta; \over \ln(R/r_&infin;) }$$
                </p>
                <p>
                    Where \(&beta;\) is the beta parameter - a trait of the thermistor, found on 
                    its datasheet - \(R\) is the measured resistance in &Omega; and 
                    \(r_&infin; = {R_0}e^{-&beta;/T_0}\), \(R_0\) and \(T_0\) being the 
                    resistance of the thermistor and temperature at 25&deg;C. The function in 
                    the code to calculate this was:
                </p>
                <pre class="border border-primary px-3">
                    <code>
function tempfromresistance(resistance)
{
    local temperature=beta_param math.log(resistance/r_sub_inf);
    return temperature;
}
                    </code>
                </pre>
                <p>
                    As the API can only read voltage from its pins, this could be converted - 
                    due to the presence of a voltage divider - with th following function:
                </p>
                <pre class="border border-primary px-3">
                    <code>
function resistancefromvoltage(voltage)
{
    local resistance=(voltage_system * standard_resistance voltage) - standard_resistance;
    return resistance;
}
                    </code>
                </pre>
                <p>
                    The operation of the various sensors was qualitatively tested - e.g. the 
                    temperature sensors were warmed and it was confirmed that the recorded 
                    temperature increased. Thes tests produced expected changes in both 
                    direction and magnitude. It was noted, however, that the temperatures 
                    recorded were higher than expected by ~10&degC. If this device were to be 
                    prepared for deployment, it would have to undergo calibration to produce 
                    reliable outputs.
                </p>
            </section>
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">Complete Code</h3>
                <pre class="pre-scrollable">
                    <code>
//Hardware Setup
id &lt;- hardware.getdeviceid();
external &lt;- hardware.pin8;
external.configure(analog_in);
internal &lt;- hardware.pin9;
internal.configure(analog_in);
led5 &lt;- hardware.pin5;
led7 &lt;- hardware.pin7;
led5.configure(digital_out);
led7.configure(digital_out);

//Constants
const pin_range=65535.0;
const beta_param=3988;
const standard_temp=298.15;
const r_sub_inf=0.0155223;
const standard_resistance=10000.0;
voltage_system &lt;- hardware.voltage();

function setled(options)
{
    led &lt;- options.led;
    if (options.led== "red")
        led &lt- led5;
    else led &lt;- led7;
    led.write(options.state);
    server.log("light:" + options.state);
}

function resistancefromvoltage(voltage)
{
    local resistance=(voltage_system * standard_resistance voltage) - standard_resistance;
    return resistance;
}

function tempfromresistance(resistance)
{
    local temperature=beta_param math.log(resistance/r_sub_inf);
    return temperature;
}

function readtemperature(pin_read)
{
    local voltage=pin_read * voltage_system pin_range;
    local resistance=resistanceFromVoltage(voltage);
    local temperature=tempFromResistance(resistance);
    return temperature;
}

function takereading()
{
    //Readings
    local temperature_external=readTemperature(external.read());
    local temperature_internal=readTemperature(internal.read());
    local light_level=hardware.lightlevel();

    //Log to server/database
    local c8str=format("%.01f", temperature_external - 273.15);
    local c9str=format("%.01f", temperature_internal - 273.15);
    local voltage_text=format("%.01f", voltage_system);
    local light_text=format("%", light_level);
    local sensor_reading={
        "device": id,
        "external": c8str,
        "internal": c9str,
        "voltage": voltage_text,
        "light": light_text
        };

    agent.send("reading", sensor_reading);
    imp.wakeup(20, takereading);
}

agent.on("led", setled);
takereading();
                    </code>
                </pre>
            </section>
        </article>
        <article id="tabWeekEight" class="tab-pane fade">
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">IoT Data Flow</h3>
                <figure class="figure">
                    <img src="images/dfd.jpg" class="figure-img img-fluid" />
                    <figcaption class="figure-caption">
                        Data Flow Diagram for the Sensor Device
                    </figcaption>
                </figure>
                <p>
                    This diagrams shows that the various sensors input their information as 
                    reading on their attached pins. The 'device' component then converts these 
                    readings to appropriate units, groups these and appends its identifier 
                    before passing it to the 'agent'. The main function of the 'agent' is to 
                    encode the reading as JSON object before it is attached to a Http POST and 
                    sent to the PHP script. The script submits a command to the database 
                    containing the reading it received.
                </p>
            </section>
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">Non-relational Database</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Data Type</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Device Identifier</td>
                            <td>VARCHAR</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Time Stamp</td>
                            <td>Date/Time</td>
                            <td>Is set as the time the record is generated</td>
                        </tr>
                        <tr>
                            <td>Sensor Reading</td>
                            <td>VARCHAR</td>
                            <td>The contents of this field are in the form of a JSON object</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    This database makes use of a non-relational reference by storing all of the 
                    sensor readings in a single field. To ensure that such readings are 
                    recoverable, they are stored in the field as a JSON object. This 'NoSQL' 
                    manner of storage has some advantages. These include being able to change 
                    the manner of storing the data without a comprehensive restructure, 
                    scalability and the graceful handling of sub-par data.
                </p>
            </section>
        </article>
        <article id="tabWeekNine" class="tab-pane fade"></article>
        <article id="tabWeekTen" class="tab-pane fade">
            <!--RSS-->
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">RSS</h3>
                <p>
                    RSS feeds, and the related Atom Syndication Format, are delivered as 
                    well-formed XML. The root element is the 'rss' - which has the version as an 
                    attribute - currently 2.0 - with a single 'channel' child. This 'channel' 
                    element must have, at a minimum, title; description and link child elements 
                    attached. The elements pertaining to the individual items of the feed's 
                    material are also appended to this node.
                </p>
                    <!--<br />-->
                <p>
                    On my site, the RSS feed of the latest five articles is generated through 
                    the following method. The API acquires the five most recent articles (via a 
                    LIMIT statement) and arranges them into an associative array. In the PHP 
                    script, a DOMDocument object is created and the necessary elements, see 
                    above, appended. Then, utilising a loop, the material elements (the article, 
                    its title, author and content) are added. Finally, the DOMDocument is 
                    serialised into well-formed XML and echoed onto the page.
                </p>
            </section>
        </article>
        <article id="tabWeekEleven" class="tab-pane fade"></article>
        <article id="tabWeekTwelve" class="tab-pane fade">
            <section class="container mt-3 border border-secondary">
                <h3 class="h3">Representational State Transfer (REST)</h3>
                <p>
                    In this site, the resources can be accessed via a REST interface by 
                    submitting requests to the appropriate PHP script - hereafter, the reseource 
                    script - found in the 'rest' folder. To get an article and its pertinent 
                    information, for instance, a request with a URL ending in 
                    '/rest/articles.php' must be sent. Any attendant responses are returned as 
                    JSON objects.
                </p>
                <p>
                    The resource scripts contain a switch statement that allows different 
                    requests methods to be utilised for different operations. For example, the 
                    GET method can return a single or many resources and the PUT/POST methods 
                    can create resources. The functions that are called from the switch 
                    statement then make use of the pre-existing MVC framework to achieve their 
                    respective objectives.
                </p>
                <p>
                    The functionality of this REST API has been demonstrated through the 
                    implementation of an 'admin' page that can be used to view the hundred most 
                    recent articles and summaries of their contents. There is also a form to add 
                    new articles. This page uses AJAX requests, through the REST interface, to 
                    populate the list of articles; the summary display of any selected article 
                    and submission of any new articles.
                </p>
                <p>
                    To improve the security of this interface, it could be made a requirement of 
                    any of the functions that their submissions must be accompanied by some 
                    permission indicator. This could a fixed indicator but would be safer if 
                    based on a session key or other derived token.
                </p>
            </section>
        </article>
    </div>

    <!--Footer-->
    <?php
    include_once ROOT.'parts/footer.html';
    ?>

    <!--CDN-->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <!--Other scripts-->
    <script src="scripts/client/tutorial.js"></script>
</body>
</html>