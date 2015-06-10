<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include '../shared/web/header/header.php'; ?>
    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" style="padding: 0px">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top"><div class="C_nombreTitulo"></div></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">About</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#blog">Blog</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="page-scroll">
                            <a href="cms/login.html" data-toggle="modal">Admin</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-pict"></div>
                        </div>
                        <div class="intro-text">
                            <span class="name"><div class="C_nombreTitulo"></div></span>
                            <hr class="star-light">
                            <span class="skills"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Portfolio Grid Section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Portfolio</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="../../assets/img/portfolio/jcfInversiones.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="../../assets/img/portfolio/snake.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="../../assets/img/portfolio/mvCatalog.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-12 portfolio-item">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="../../assets/img/portfolio/flexcore.jpg" class="img-responsive" alt="">
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <?php include '/about/about.php'; ?>
    
    <!-- Blog Section -->
   <?php include '/blog/blog.php'; ?>


    <!-- Contact Section -->
    <section  class="success" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form role="form">
                        <fieldset>
                            <!--<legend>User Info:</legend>-->
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-1">Works:</label>
                                <div class="col-sm-4 col-sm-offset-5">
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                            Si
                                        </label>
                                    </div>
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-1">
                                    <label>Ocupation:</label>
                                </div>
                                <div class="col-sm-9 ">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact1" value="opcion_1"> Director
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact2" value="opcion_1"> Analyst
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact4" value="opcion_1"> Developer
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="checkboxContact6" value="opcion_1"> Other
                                    </label>
                                    <p></p>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <!--<legend>User Review</legend>-->
                            <div class="form-group">
                                <div class="btn-group btn-input clearfix">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle form-control" data-toggle="dropdown">
                                        <span data-bind="label">Select The Project That You Think That Is More Interesting</span>&nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a >JCF Inversiones</a></li>
                                        <li><a >Snake Javascript</a></li>
                                        <li><a>Flex Core</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control input-sm" min="0" max="10" placeholder="Your Review About The Site">
                            </div>
                        </fieldset>
                        <fieldset>
                            <!--<legend>Color Schema:</legend>-->
                            <div class="row">
                                <div class="form-group">
                                    <label id = "ID_Text_ColorSchema"> Select A New Color Schema For The Site</label>
                                </div>
                                <div class=" col-sm-3 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Color 1:</label>
                                        <input type="color" name="favcolor" value="#003366">
                                        <p></p>
                                        <label>Color 2:</label>
                                        <input type="color" name="favcolor" value="#3399FF">

                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label >Transparency</label>
                                        <input type=range min=0 max=5 value=3 id=fader>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <span class="btn btn-default btn-file">
                                            Upload Background <input type="file">
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control input-sm" placeholder="From this Date">
                                    </div>
                                </div>


                            </div>
                        </fieldset>
                        <input type="submit" value="Submit" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Cartago<br>Cartago, Costa Rica</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Currículum Vitae</h3>
                        <a href="https://dl.dropboxusercontent.com/u/106554818/My_CV.pdf" class="btn btn-lg btn-outline">
                            <i class="fa fa-download"></i> Download CV
                        </a>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100004109747382" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/100966159634693787177/" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="http://cr.linkedin.com/pub/michael-s-varela/b2/ab5/67b" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; mvsportfolio.net 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Loan Servicing</h2>
                            <hr class="star-primary">
                            <img src="../../assets/img/portfolio/jcfInversiones.png" class="img-responsive img-centered" alt="">
                            <p>This project is an Loan Servicing app for <b>JCFInversiones</b>, with this it is possible to create loans, make pays and others. Also it contains  differents types of users. for example only the admin user can delete a loan.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="">JCF INVERSIONES</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a>February 2015</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a>Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Snake Javascript</h2>
                            <hr class="star-primary">
                            <img src="../../assets/img/portfolio/snake.png" class="img-responsive img-centered" alt="">
                            <p>Snake javascript is a game, that it's posible to play online with a "Drag and Drop" controller, implemented for a course of languajes of programming.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="">ITCR Project</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a>June 2013</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a>Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>MV Catalog</h2>
                            <hr class="star-primary">
                            <img src="../../assets/img/portfolio/mvCatalog.png" class="img-responsive img-centered" alt="">
                            <p>This a catalog app  focused on sellers side. With <b>MV Calog</b>, the seller can get a control of their costumers and the products that they buy and alot of  other important functions. </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="">ITCR Project</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a>November 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a>Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Flex Core</h2>
                            <hr class="star-primary">
                            <img src="../../assets/img/portfolio/flecore2.jpg" class="img-responsive img-centered" alt="">
                            <p>This is a client app to make online pays like BillPocket, also <b>Flex Core</b> use RFID cards to simulate the real Debit or Credit card. </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="">ITCR Project</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a>September 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a>Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../shared/web/header/headerEnd.php'; ?>
</body>


</html>
