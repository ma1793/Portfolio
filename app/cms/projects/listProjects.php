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
                    <h1 class="page-title">List of Projects</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary"><i class="icon-plus"></i> New Project</button>

                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Client</th>
                                    <th>Course</th>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th style="width: 26px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Loan Servicing</td>
                                    <td>This project is an Loan Servicing app...</td>
                                    <td>JCF INVERSIONES</td>
                                    <td>Desing Project</td>
                                    <td>February 2015</td>
                                    <td>Web Development</td>
                                    <td>
                                        <a href="../projects/editproject.php"><i class="icon-pencil"></i></a>
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

            <?php include '../../shared/web/footer/footerCMS.php'; ?>

    </body>
</html>


