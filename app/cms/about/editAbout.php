<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
               <script src="editAbout.js"></script>


    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>

                <div class="span9">
                    <h1 class="page-title">Edit About</h1>
                    <div class="btn-toolbar">
                        <button onclick="updateAbout()"class="btn btn-primary"><i class="icon-save"></i> Update </button>
                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Contact Info</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">
                                <form id="tab">
                                    <label>Name</label>
                                    <input type="text" class="input-xlarge" id="ID_about_nombre">
                                    <label>Name Title</label>
                                    <input type="text" class="input-xlarge" id="ID_about_nombreTitulo">
                                    <label>Title</label>
                                    <input type="text"  class="input-xlarge" style="width: 75%;" id="ID_about_titulo">
                                    <label>Description</label>
                                    <textarea class="input-xlarge"  rows="3" id="ID_about_descripcion" style="width: 75%;" ></textarea>
                                    <label>Mission Portfolio</label>
                                    <textarea class="input-xlarge"  rows="3" id="ID_about_mision" style="width: 75%;" ></textarea>
                                    <label>Phone</label>
                                    <input type="text" class="input-xlarge" id="ID_about_telefono">
                                    <label>Email</label>
                                    <input type="email" class="input-xlarge" id="ID_about_email">


                                </form>
                            </div>
                           
                        </div>

                    </div>


                </div>
            </div>
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>


