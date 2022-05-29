<?php include_once('app/admin.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Setting</h1>              
                               
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Settings <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body" >
                            <div class="row">
                                   <div class="col-lg-6">
                                    <h5>Change Password</h5>
                                    <form role="form" method="post" action="">
                                    
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" placeholder="Old password" name="oldpassword">
                                        </div>
                                             <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="newpassword" class="form-control" placeholder="New password" >
                                        </div>
                                             <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password" >
                                        </div>
                                      
                                        <button type="submit" class="btn btn-success" name="changepassword">Save</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                  <div class="col-lg-6" <?php echo $adduserpermission; ?>>
                                     <h5>Add New User</h5>
                                    <form role="form" method="post" action="">
                                        <div class="form-group">
                                            <label>Username:</label>
                                            <input type="text" name="username" class="form-control" placeholder="username">
                                        </div>
                                         <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email ">
                                        </div>     
                                              <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="newpassword" class="form-control" placeholder="New password" >
                                        </div>
                                             <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password" >
                                        </div>   
                                         <button type="submit" class="btn btn-success" name="addstaff">Save</button>
                                        <button type="reset" class="btn btn-default">Reset</button>                               
                                    </form>
                                  </div>
                             
                           
                                <div class="col-md-12 col-lg-12" <?php echo $adduserpermission; ?>>
                                        <hr>
                                    <h3>List of User</h3>
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>                                            
                                        <th>Username</th>                                     
                                        <th>Email</th>                                     
                                        <th>Date</th>                                     
                                        <th>Action</th>                                   
                                                                               
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php echo $usertables; ?>
                                    
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
