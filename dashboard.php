<?php include_once('app/dashboard.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shortcut <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <!-- <i class="fa fa-users fa-5x"></i> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo ''; ?></div>
                                    <div> Content</div>
                                </div>
                            </div>
                        </div>
                        <a href="content.php" title="Content">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <!--  <i class="fa fa-circle fa-5x"></i> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo ''; ?></div>
                                    <div> Review</div>
                                </div>
                            </div>
                        </div>
                        <a href="reviews.php" title=" Review">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <!-- <i class="fa fa-shopping-cart fa-5x"></i> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo ''; ?></div>
                                    <div> Videos Gallery</div>
                                </div>
                            </div>
                        </div>
                        <a href="videos.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <!--  <i class="fa fa-support fa-5x"></i> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div> Banner</div>
                                </div>
                            </div>
                        </div>
                        <a href="banner.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                          

                         
                              
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
        </div>
        <!-- /#page-wrapper -->
     <?php include_once('footer.php');?>