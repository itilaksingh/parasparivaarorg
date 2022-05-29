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

     <link href="<?php getBaseUrl('assets/vendor/datatables-plugins/dataTables.bootstrap.css'); ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php getBaseUrl('assets/vendor/datatables-responsive/dataTables.responsive.css');?>" rel="stylesheet"> 

    <!-- Morris Charts CSS -->
    <link href="<?php getBaseUrl('assets/vendor/morrisjs/morris.css'); ?>" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo $AdminPanelName; ?> Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">    
                <li>
                    <a target="_blank" href="<?php echo getBaseUrl('../'); ?>" title="Visit your website">
                        <i class="fa fa-globe fa-fw"></i>  Website
                    </a>                   
                    <!-- /.dropdown-alerts -->
                </li>          
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <i class="fa fa-user fa-fw"></i> <?php if(!empty($_SESSION['username'])){ echo ucfirst($_SESSION['username']); }?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php getBaseUrl('settings.php'); ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php getBaseUrl('logout.php?req=logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php getBaseUrl('dashboard.php');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>  
                       
                        <li>
                            <a href="<?php getBaseUrl('menu.php');?>"><i class="fa fa-bars" aria-hidden="true"></i> Manage Menu</a>
                        </li>
                         <li>
                            <a href="<?php getBaseUrl('content.php');?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> Content</a>
                        </li>
                          <li>
                            <a href="<?php getBaseUrl('reviews.php');?>"><i class="fa fa-comments-o" aria-hidden="true"></i> Review</a>
                        </li>
                          <li>
                            <a href="<?php getBaseUrl('videos.php');?>"><i class="fa fa-video-camera" aria-hidden="true"></i> Videos Gallery</a>
                        </li>                      
                        <li>
                            <a href="<?php getBaseUrl('banner.php');?>"><i class="fa fa-image" aria-hidden="true"></i> Banner</a>
                        </li> 
                        <li>
                            <a href="<?php getBaseUrl('about.php');?>"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                        </li>
                        <li>
                            <a href="<?php getBaseUrl('contact-details.php');?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Contact Details</a>
                        </li>  
                        <li>
                            <a href="<?php getBaseUrl('settings.php');?>"><i class="fa fa-gears" aria-hidden="true"></i> Settings</a>
                        </li>              
                   
                    </ul>
                </div>
            </div>
        </nav>