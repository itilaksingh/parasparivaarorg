<?php include_once('app/product.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Product</h3>                             
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <div class="row">
            <div class="col-lg-12">
                <a href="product.php" title="Add New Product" class="btn btn-primary btn-sm">Add Product</a>
                <a href="product.php" title="View Product" class="btn btn-primary btn-sm">View Product</a>
            </div>
            <div class="col-lg-12">
                     <p class="text-danger"><i class="fa fa-link" aria-hidden="true"></i> <?php echo getBaseUrl(); ?><span id="producturla"></span></p>
            </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                                  
                            <div class="col-lg-11" >
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-4" for="product_name">Product Name: <span class="text-danger"><b>*</b></span></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name">
         <input type="hidden" class="form-control" id="product_url" placeholder="Product Name" name="product_url">
      </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-4" for="product_code">Product Code:<span class="text-danger"><b>*</b></span></label>
      <div class="col-sm-4">
        <input type="product_code" class="form-control" id="product_code" placeholder="Product Code" name="product_code">
      </div>
</div>

<div class="form-group">
      <label class="control-label col-sm-4" for="product_images">Product Image:</label>
      <div class="col-sm-4">
        <input type="file" name="product_images" multiple="" class="form-control">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4" for="product_images">Short Description:</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="2" name="product_short_desc"><?php echo ''; ?></textarea>
        <script>CKEDITOR.replace( 'product_short_desc' );</script>
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4" for="product_images">Long Description:</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="5" name="product_long_desc"><?php echo''; ?></textarea>
        <script>CKEDITOR.replace( 'product_long_desc' );</script>
      </div>
</div>

<div class="form-group">
      <label class="control-label col-sm-4" for="product_images">Technical Specification:</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="5" placeholer="" name="product_technical_specification"><?php echo''; ?></textarea>
        <script>CKEDITOR.replace( 'product_technical_specification' );</script>
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-4" for="product_code">Product Price:<span class="text-danger"><b>*</b></span></label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="product_price" placeholder="Product price" name="product_price">
      </div>
      <label class="control-label col-sm-1" for="product_discount">Discount<span class="text-danger"><b>*</b></span></label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="product_discount" placeholder="Discount %" name="product_discount">
      </div>
        <label class="control-label col-sm-1" for="product_stock">Stock<span class="text-danger"><b></b></span></label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="product_stock" placeholder="Stock" name="product_stock">
      </div>
</div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" name="addproduct" id="addproductbtn" class="btn btn-primary">Submit</button>
        <button type="reset" name="reset" class="btn btn-primary">Reset</button>
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

