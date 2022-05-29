<?php include_once('app/videos.php'); ?>
<?php include_once('header.php');?>
<style type="text/css">
    iframe{
        width: 50%;
        height: 150px;
    }
</style>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Videos</h3>            
                              
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Videos <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                                  
                            <div class="col-lg-6" >
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title:</label>         
                                <input type="text" name="title"  class="form-control" placeholder="title" autocomplete="off">
                            </div> 
                            <div class="form-group">
                                <label>Category:</label>         
                               <select name="category" class="form-control" required="required">
                                   <option value="">Please select category</option>
                                   <option value="1">Bhajan Gallery</option>
                                   <option value="2">Motivational Stories</option>
                                   <option value="3">Our Programme</option>            
                               </select>
                            </div>  
                            <div class="form-group">
                                <label>Paste Here YouTube Embed Link:</label> 
                                <textarea rows="3" name="link"  class="form-control" placeholder="YouTube Embed Link" required="" autocomplete="off"></textarea>                               
                            </div>  

                                <button type="submit" name="addvideos" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                </form>
                                </div> 
                      <!--   <div class="col-md-6">
                            <form method="post" action="">
                                <div class="form-group">
                                        <label>Enter Category:</label>         
                                        <input type="text" name="category"  class="form-control" placeholder="Enter Category:" autocomplete="off" required="required">
                                    </div>
                                <button type="submit" name="addvideoscategory" class="btn btn-success">Add 
                                </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>
                        </div> -->

                                    <div class="col-md-12 col-lg-12" >
                                        <hr>
                                    <h3>List of videos</h3>
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>    
                                        <th>Title</th>                               
                                        <th>Category</th>                              
                                        <th>Videos</th>                                
                                        <th>Action</th>                                     
                                                                               
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php echo $videostable; ?>
                                    
                                </tbody>
                            </table>
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

