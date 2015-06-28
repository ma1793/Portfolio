<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="listProjects.js"></script>
    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>
                <div class="span9">
                    <h1 class="page-title">List of Projects</h1>
                    <div class="btn-toolbar">
                        <button class="btn btn-primary" onclick="javascript:location.href='../projects/editProject.php?id=0&estado=0'" ><i class="icon-plus"></i> New Project</button>
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
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th>Course</th>
                                    <th style="width: 26px;"></th>
                                </tr>
                            </thead>
                            <tbody id="tablaProyectos">
       
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

                    <?php include '../../shared/web/modal/modalCMS.php'; ?>


                </div>
            </div>

            <?php include '../../shared/web/footer/footerCMS.php'; ?>

    </body>
</html>


