<?php include_once('app/dashboard.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List of Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Users <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                        

                            <div class="row">
                                 <div class="col-md-12 col-lg-12" >
                                    
                                     <table width="100%" class="table display table-striped table-bordered table-hover " id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Uidcode</th>                                     
                                        <th>Block/Active</th>                                     
                                        <th>Email</th>                                     
                                        <th>fullname</th>                                     
                                        <th>accounttype</th>                                   
                                        <th>gender</th>                                     
                                        <th>age</th>                                     
                                        <th>maritalstatus</th>                                 
                                        <th>country</th>                                     
                                        <th>state</th>                                     
                                        <th>city</th>                                     
                                        <th>Action</th>                           
                                    </tr>
                                </thead>
                                <tbody id="resultData" ><?php echo $TotalRegisterUserstable; ?></tbody>
                                    </table>
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