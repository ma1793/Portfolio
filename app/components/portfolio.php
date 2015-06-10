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
                    <a class="navbar-brand" href="#page-top"><div class="A_nombreTitulo"></div></a>
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
                            <span class="name"><div class="A_nombreTitulo"></div></span>
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
                    <div id="portafolioLista">
                        
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
    <?php include '/contact/contact.php'; ?>



    <!-- Footer -->
    <?php include '/footer/footer.php'; ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div id="portaforioModals">
    </div>
    <?php include '../shared/web/header/headerEnd.php'; ?>
</body>


</html>
