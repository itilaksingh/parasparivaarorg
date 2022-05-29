 </div>
    <!-- /#wrapper -->
  <!-- jQuery -->
    <script src="<?php getBaseUrl('assets/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php getBaseUrl('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php getBaseUrl('assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php getBaseUrl('assets/dist/js/sb-admin-2.js'); ?>"></script>  
    <script src="<?php getBaseUrl('js/mainscript.js'); ?>"></script>  

    <!-- Morris Charts JavaScript -->
    <script src="<?php getBaseUrl('assets/vendor/raphael/raphael.min.js');?>"></script>
    <script src="<?php getBaseUrl('assets/vendor/morrisjs/morris.min.js');?>"></script>
    <script src="<?php getBaseUrl('assets/data/morris-data.js'); ?>" ></script>    
    <script src="<?php getBaseUrl('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php getBaseUrl('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php getBaseUrl('assets/vendor/datatables-responsive/dataTables.responsive.js');?>"></script>
  
<script type="text/javascript">
    
      window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);

          $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

  
<script type="text/javascript">
    
      window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>
</body>

</html>
