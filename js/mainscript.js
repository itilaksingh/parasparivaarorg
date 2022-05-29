$(document).ready(function(){

	$('.deleteclass').click(function(){
		return confirm("Are sure!");
	});
	$('#productnameid').bind('input', function(){
    $(this).val(function(_, v){
     return v.replace(/\s+/g, '');
    });
   });

 $('#product_name').keyup(function(){
    var product_name=ToSeoUrl($(this).val());
    if(product_name!=""){
        $('#producturla').html(product_name); 
        $('#product_url').val(product_name);
    }else{
        $('#producturla').html('');
        $('#product_url').val('');
    }
    
 }); 

  $('#addproductbtn').click(function(){
    var results=requiredfields("product_name", "product_code", "product_stock");
    if(results=='1'){
      return true
    }else{
      return false;
    }
  });

});


function requiredfields(){
  var filedsarrraylength=arguments.length;
  for (var i=0; i<=arguments.length-1; i++) {
    var fileds=document.getElementById(arguments[i]).value;
    if(fileds=='' || fileds==null || fileds=='undefined'){
      alert(arguments[i]+' this fileds is requied');
      return false;
    }else{
      return 1;
    }
  }
  
}

function ToSeoUrl(url) {
    
      // make the url lowercase         
      var encodedUrl = url.toString().toLowerCase(); 

      // replace & with and           
      encodedUrl = encodedUrl.split(/\&+/).join("-and-")

      // remove invalid characters 
      encodedUrl = encodedUrl.split(/[^a-z0-9]/).join("-");       

      // remove duplicates 
      encodedUrl = encodedUrl.split(/-+/).join("-");

      // trim leading & trailing characters 
      encodedUrl = encodedUrl.trim('-'); 

      return encodedUrl;
    }
//check the data where it is exist or not.
function checkdublicatedata(tablename, columnname, id){
	var value=document.getElementById(id).value;
	if(tablename!="" && columnname!="" && value!=""){
		$.ajax({
			type: "POST",
            url: "ajaxRequest.php",
            ache: false,
            data: {checkdublicatedata : 'checkdublicatedata', tablename: tablename, columnname: columnname, value: value}, 
			success: function(data){            
            if(data!=""){
             	alert(data);
             	document.getElementById(id).value="";
            }	
        }
    });
	}
}

function ajaxrequest(request){
$.ajax({
			type: "GET",
            url: "ajaxRequest.php",
            ache: false,
            data: {request : request}, 
			beforeSend: function (){
				$('#resultData').html('<center><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></center>');		
			}, success: function(data){				
             $('#resultData').html(data);	
        }
    });






}