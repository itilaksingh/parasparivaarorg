<?php include_once('app/reviews.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Reviews</h3>                            
                </div>
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Reviews<span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                          
                            <div class="col-lg-12" >
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
   <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" name="name" value="" required="required" placeholder="Enter name" class="form-control">
      </div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="location">Location:</label>
      <div class="col-sm-10">
        <input type="text" name="location" value="" placeholder="Enter location" class="form-control">
      </div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="reviews">Reviews:</label>
      <div class="col-sm-10">
        <textarea name="reviews" id="reviews" class="form-control" rows="5" placeholder="Enter the reviews" required="required"></textarea>
      </div>
</div>
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" name="submitreviews" id="submitreviews" class="btn btn-primary">Submit Review</button>
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
                                    <h3>Reviews</h3>
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name: </th>                  
                                        <th>Location:</th>                 
                                        <th>Reviews:</th>                 
                                        <th>Action</th>                    
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php echo $reviewslisttable; ?>
                                    
                                </tbody>
                            </table>
                                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
          
        </div>
        <!-- /#page-wrapper -->

   <?php include_once('footer.php'); ?>

