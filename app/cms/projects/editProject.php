<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
       <script src="editProject.js"></script>


    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>

                <div class="span9">
                    <h1 class="page-title">Edit Project</h1>
                    <div class="btn-toolbar">
                        <button  onclick="updateProyecto()" class="btn btn-primary"><i class="icon-save" ></i> Update </button>
                        <button  onclick="addProyecto()" class="btn btn-primary"><i class="icon-save" ></i> Save </button>
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
                                    <input id="P_titulo" type="text" >
                                    <label>Description</label>
                                    <textarea id="P_descripcion" rows="3" style="width: 75%; ">
                                    </textarea>
                                    <label>Client</label>
                                    <input type="text" id="P_cliente" >
                                    <label>Course</label>
                                   <input type="text" id="P_nombreCurso">
                                    <label>Date</label>
                                    <input type="date" id="P_fecha">
                                    <label>Service</label>
                                    <input type="text" id="P_servicio">
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <form id="tab2">
                                    <label>Link URL</label>
                                    <input type="text" id="P_imagenLink" style="width: 75%; ">
                                </form>
                            </div>
                        </div>

                    </div>

                                   <?php include '../../shared/web/modal/modalCMS.php'; ?>

                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>

    </body>
</html>



