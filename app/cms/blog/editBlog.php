<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>

    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>

                <div class="span9">
                    <h1 class="page-title">Edit Blog Entry</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                        <a href="#myModal" data-toggle="modal" class="btn">Delete</a>
                        <div class="btn-group">
                        </div>
                    </div>

                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Blog Info</a></li>
                            <li><a href="#profile" data-toggle="tab">Blog Picture</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <form id="tab">
                                    <label>Title</label>
                                    <input type="text" value="DYNAMIC WEB PAGE 'SERVER SIDE VS CLIENT SIDE'" class="input-xlarge">
                                    <label>Post Date</label>
                                    <input type="text" value="Posted on February 24, 2015 at 8:46 PM" class="input-xlarge">
                                    <label>Description</label>
                                    <textarea rows="6" class="input-xlarge">Importance Of Both Sides:
                                Most websites make use of both a client side and a server side language. Although there are things both can do, there are some things which can only be done server side, and there are some things which can only be done client side.

                                Front-end scripting is good for anything that requires user interaction, such as a simple game. Back-end scripting is good for anything that requires dynamic data to be loaded, such as a notice that tells the user they’re logged in.
                                    </textarea>




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

            <?php include '../../shared/web/footer/footerCMS.php'; ?>

    </body>
</html>


