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
                    <h1 class="page-title">Edit Project</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                        <a href="#myModal" data-toggle="modal" class="btn">Delete</a>
                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Project Info</a></li>
                            <li><a href="#profile" data-toggle="tab">Project Picture</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <form id="tab">
                                    <label>Title</label>
                                    <input type="text" value="LOAN SERVICING" >
                                    <label>Description</label>
                                    <textarea rows="6">This project is an Loan Servicing app for JCFInversiones, with this it is possible to create loans, make pays and others. Also it contains differents types of users. for example only the admin user can delete a loan.
                                    </textarea>
                                    <label>Client</label>
                                    <input type="text" value="JCF INVERSIONES" >
                                    <label>Course</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value=""></option>
                                            <option value="0">Project Desing</option>
                                            <option value="1">Data Bases</option>
                                            <option value="2">New Course</option>
                                        </select>     

                                    </div>

                                    <label>Date</label>
                                    <input type="text" value="February 2015" >
                                    <label>Service</label>
                                    <input type="text" value="Web Development" >



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



