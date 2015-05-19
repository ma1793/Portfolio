<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.8.1.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>


</head>


<body>
<!--<![endif]-->

<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <ul class="nav pull-right">

                <li id="fat-menu" class="dropdown">
                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i> Stephen
                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="../index.html">Logout</a></li>
                    </ul>
                </li>

            </ul>
            <a class="brand" href="listPortfolio.html"><span class="second">Admin</span></a>
        </div>
    </div>
</div>


<div class="container-fluid">

    <div class="row-fluid">
        <div class="span3">
            <div class="sidebar-nav">
                <div class="nav-header" data-toggle="collapse" data-target="#portfolio-menu"><i class="icon-briefcase"></i>Portfolio</div>
                <ul id="portfolio-menu" class="nav nav-list collapse in">

                    <li ><a href="listPortfolio.html">List, Add/Remove Project</a></li>
                    <li ><a href="editPortfolio.html">Edit Project</a></li>

                </ul>

                <div class="nav-header" data-toggle="collapse" data-target="#blog-menu"><i class="icon-rss"></i>Blog<span class="label label-info">+1</span></div>
                <ul id="blog-menu" class="nav nav-list collapse in">
                    <li ><a href="listBlog.html">List, Add/Remove Entry</a></li>
                    <li ><a href="editBlog.html">Edit Blog Entry</a></li>
                </ul>

                <div class="nav-header" data-toggle="collapse" data-target="#accounts-menu"><i class="icon-user"></i>Contact<span class="label label-info">+1</span></div>
                <ul id="accounts-menu" class="nav nav-list collapse in">
                    <li class="active" ><a href="editContact.html">Edit Contact Info</a></li>
                </ul>
            </div>
        </div>

        <div class="span9">
            <h1 class="page-title">Edit Contact</h1>
            <div class="btn-toolbar">
                <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                <div class="btn-group">
                </div>
            </div>
            <div class="well">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Contact Info</a></li>
                    <li><a href="#profile" data-toggle="tab">Contact Picture</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="home">
                        <form id="tab">
                            <label>Name</label>
                            <input type="text" value="Stephen Varela" class="input-xlarge">
                            <label>Title</label>
                            <input type="text" value="Web Developer - Computer Engineering Student - Embedded Systems" class="input-xlarge">
                            <label>Description</label>
                            <textarea rows="6" class="input-xlarge">I'm a Computer Engineering student with interest of different Hardware/Software projects. In Hardware one of the main are the Embedded Systems, and in Software, one could be the Web Development.</textarea>
                            <label>Mission Portfolio</label>
                            <textarea rows="6" class="input-xlarge">The mission of this portfolio is to show some of my projects and a little about me.
                                And also can give to the user the posibility of interact with the site by a blog or with the contact in where the user can select a new color schema.</textarea>
                            <label>Phone</label>
                            <input type="text" value="+(506)8613-1801" class="input-xlarge">
                            <label>Email</label>
                            <input type="email" value="ms.varela17@gmail.com" class="input-xlarge">


                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <form id="tab2">
                            <label>Upload Picture</label>
                            <input type="file" class="input-xlarge">
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>



    <footer>
        <hr>


        <p>&copy; 2015 <a href="">Admin Portfolio</a></p>
    </footer>




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>













</body>
</html>


