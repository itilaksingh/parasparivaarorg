<?php include_once('app/menu.php'); ?>
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
                    <h3 class="page-header">Add Menu</h3>            
                              
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Add Menu <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                                  
                            <div class="col-lg-6" >
                            <form role="form" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Main Menu Name:</label>         
                                <input type="text" name="main_menu"  class="form-control" placeholder="Main menu" autocomplete="off">
                            </div> 
                           

                                <button type="submit" name="addmainmenu" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                </form>
                                </div> 
                            <div class="col-md-6">
                                 <form role="form" action="" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                <label>Main Menu Name:</label>         
                                <select name="main_menu" class="form-control">
                                    <option value="">Please select main tab</option>
                                    <?php echo $select_main_menu; ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Sub Menu Name:</label>         
                                <input type="text" name="submenu"  class="form-control" placeholder="Sub menu" autocomplete="off">
                            </div> 
                           

                                <button type="submit" name="addsubmenu" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                </form>
                                </div>

                                    <div class="col-md-12 col-lg-12" >
                                        <hr>
                                    <h3>Menu Tabs</h3>
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>    
                                        <th>Main Menu</th>                             
                                        <th>Sub-Menu</th>                           
                                        <th>Action</th>                        
                                                                               
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php echo $main_menu_table; ?>
                                    
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

