<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <ul class="nav pull-right">

                    </ul>
                    <a class="brand" href="../projects/listProjects.php"><span class="second">Admin</span></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="dialog span4">
                    <div class="block">
                        <div class="block-heading">Sign In</div>
                        <div class="block-body">
                            <form>
                                <label>Username</label>
                                <input type="text" class="span12">
                                <label>Password</label>
                                <input type="password" class="span12">
                                <a href="../projects/listProjects.php" class="btn btn-primary pull-right">Sign In</a>
                                <label class="remember-me"><input type="checkbox"> Remember me</label>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>

                    <p><a href="">Forgot your password?</a></p>
                </div>
            </div>
    </body>
</html>


