<?php include_once('app/banner.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Home Page Banner</h3>                            
                </div>
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Home Page Banner<span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                                  
                            <div class="col-lg-12" >
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
   <label class="control-label col-sm-2" for="product_name">Banner Caption: </label>
      <div class="col-sm-10">
        <input type="text" name="caption" value="" placeholder="Enter caption" class="form-control">
      </div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="product_name">Select Banner Images: </label>
      <div class="col-sm-10">
        <input type="file" name="img[]" multiple="multiple" class="form-control" accept="image/*">
      </div>
</div>
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" name="UploadBanner" id="UploadBanner" class="btn btn-primary">Upload banner</button>
        <a href="" name="reset" class="btn btn-primary">Reset</a>
      </div>
    </div>
  </form>
                                </div> 

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    <div class="col-md-12 col-lg-12" >
                                        <hr>
                                    <h3>Banners</h3>
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>banner</th>                  
                                        <th>Caption</th>                 
                                        <th>Action</th>              
                                                                               
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php echo $bannerlisttable; ?>
                                    
                                </tbody>
                            </table>
                                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
          
        </div>
        <!-- /#page-wrapper -->

   <?php include_once('footer.php'); ?>

