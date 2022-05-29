<?php include_once('app/contact-details.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Contact Details</h3>                            
                </div>
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Contact Details<span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                                  
                            <div class="col-lg-12" >
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
   <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="address" placeholder="Address"><?php echo $address; ?></textarea>
      </div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="emails">Email Addressa</label>
      <div class="col-sm-10">
        <input type="text" name="emails" value="<?php echo $emails; ?>" placeholder="Enter caption" class="form-control" autocomplete="off">
      </div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="phonenumber">Phone Numbers </label>
      <div class="col-sm-10">
        <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="Enter caption" class="form-control" autocomplete="off">
      </div>
</div>

   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" name="updatecontactdetails" id="updatecontactdetails" class="btn btn-primary">Update</button>
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
          
        </div>
        <!-- /#page-wrapper -->

   <?php include_once('footer.php'); ?>

