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
                    <li class="active"><a href="listBlog.html">List, Add/Remove Entry</a></li>
                    <li ><a href="editBlog.html">Edit Blog Entry</a></li>
                </ul>

                <div class="nav-header" data-toggle="collapse" data-target="#accounts-menu"><i class="icon-user"></i>Contact<span class="label label-info">+1</span></div>
                <ul id="accounts-menu" class="nav nav-list collapse in">
                    <li ><a href="editContact.html">Edit Contact Info</a></li>
                </ul>
            </div>
        </div>
        <div class="span9">
            <h1 class="page-title">List of Entries</h1>
            <div class="btn-toolbar">
                <button class="btn btn-primary"><i class="icon-plus"></i> New Blog Entry</button>
                <div class="btn-group">
                </div>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Post Date</th>
                        <th>Description</th>
                        <th style="width: 26px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>DYNAMIC WEB PAGE "SERVER SIDE VS CLIENT SIDE"</td>
                        <td>Posted on February 24, 2015 at 8:46 PM</td>
                        <td>Most websites make use of both a client side and...</td>
                        <td>
                            <a href="editBlog.html"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>

            <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the item?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
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


