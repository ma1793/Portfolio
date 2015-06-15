<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
       <script src="editBlog.js"></script>
    </head>
    <body>

        <?php include '../../shared/web/menu/menuCMS.php'; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include '../../shared/web/sidebar/sidebarCMS.php'; ?>

                <div class="span9">
                    <h1 class="page-title">Edit Blog Entry</h1>
                    <div class="btn-toolbar">
                        <button onclick="updateBlog()" class="btn btn-primary"><i class="icon-save"></i> Update</button>
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
                                    <input type="text" value="" class="input-xlarge" id="ID_blog_titulo">
                                    <label>Post Date</label>
                                    <input type="text" class="input-xlarge" id="ID_blog_fecha">
                                    <label>Description</label>
                                    <textarea class="input-xlarge"  rows="3" id="ID_blog_descripcion" style="width: 75%;" ></textarea>

                                </form>
                                                                    <button onclick="javascript:location.href='../blog/listComments.php'" class="btn btn-primary"><i class="icon-folder-open"></i> Comments</button>

                            </div>
                            <div class="tab-pane fade" id="profile">
                                <form id="tab2">
                                    <label>Link URL</label>
                                    <input type="text" id="ID_blog_imagenLink" style="width: 75%; ">
                                </form>
                            </div>
                        </div>

                    </div>

            

                </div>
            </div>

            <?php include '../../shared/web/footer/footerCMS.php'; ?>

    </body>
</html>


