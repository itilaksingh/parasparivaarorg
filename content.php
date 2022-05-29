<?php include_once('app/content.php'); ?>
<?php include_once('header.php');?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Content</h3>                            
                </div>
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Content <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                        <div class="row">                  

<?php if(isset($_GET['main_menu']) || isset($_GET['submenu'])){ ?>
                        <div class="col-lg-12" >
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
   <label class="control-label col-sm-2" for="product_name">Heading: <span class="text-danger"><b>*</b></span></label>
      <div class="col-sm-10">
        <input type="text" name="heading" value="<?php echo $heading; ?>" class="form-control">
         <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
      </div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="product_name">Select Image: </label>
      <div class="col-sm-5">
        <input type="file" name="img[]" multiple="multiple" class="form-control" accept="image/*">
      </div>
      <div class="col-sm-5">
        <?php 
        $img_extension = pathinfo($img, PATHINFO_EXTENSION);
        if(!empty($img_extension)){
          echo '<img src="'.$directory.$img.'" style="width: 200px; height: 140px; ">';
        }
        ?>
          <input type="hidden" name="oldimg" value="<?php echo $img; ?>" class="form-control">
      </div>
</div>
<div class="form-group">
      <div class="col-sm-12">
        <textarea class="form-control" rows="2" name="content"><?php echo $content; ?></textarea>
        <script>CKEDITOR.replace( 'content' );</script>
      </div>
</div>
    <div class="form-group">        
      <div class="col-sm-offset-0 col-sm-8">
        <button type="submit" name="uploadpagecontent" id="uploadpagecontent" class="btn btn-primary">Save</button>
        <a href="" name="reset" class="btn btn-primary">Reset</a>
      </div>
    </div>
  </form>
                                </div> 
                              <?php }else{?>

                                     <div class="col-md-12 col-lg-12" >
                                    <h3>All Pages</h3>
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>    
                                        <th>Pages</th>                          
                                        <th>Action</th>                        
                                                                               
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php echo $listofpage; ?>
                                    
                                </tbody>
                            </table>
                                </div>
                              <?php } ?>

                            </div>
                            <!-- /.row (nested) -->
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

   <?php include_once('footer.php'); ?>

