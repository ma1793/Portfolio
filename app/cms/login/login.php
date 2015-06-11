<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../../shared/web/header/headerCMS.php'; ?>
        <script src="login.js"></script>

    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <ul class="nav pull-right">

                    </ul>
                    <a class="brand" href="listPortfolio.html"><span class="second">Admin</span></a>
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
                                <label>Password</label>
                                <input type="password" id="passwordLogin" class="span12">
                                
                                <a class="btn btn-primary pull-right" onclick="verifAdmin()">Sign In</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>

                    <p><a onclick="showPass()">Forgot your password?</a></p>
                </div>
            </div>
    </body>
</html>



