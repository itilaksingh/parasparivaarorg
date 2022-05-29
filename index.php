<?php include_once('app/loginSystem.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $AdminPanelName; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php  getBaseUrl('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php  getBaseUrl('assets/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php getBaseUrl('assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php getBaseUrl('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
    </script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h3><?php echo $AdminPanelName; ?> Admin</h3>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" title="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" title="password" name="password" type="password" value="">
                                </div>                              
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block btn-sm" name="login" type="submit" title="login"> Login</button>
                                <div class="text-center"><a href="forgot-password.php" title="Reset password">Forgot Password</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php getBaseUrl('assets/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php getBaseUrl('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php getBaseUrl('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php getBaseUrl('assets/dist/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
