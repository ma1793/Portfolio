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
            <?php include '../../shared/web/footer/footerCMS.php'; ?>


    </body>
</html>


