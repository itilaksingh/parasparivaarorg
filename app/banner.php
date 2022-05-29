<?php 
include 'session.php';
require_once('functions.php');
$directory="storage_dir/";
if(isset($_POST['UploadBanner'])){
	$caption="";
	$caption=$_POST['caption'];
	$banners=multiImageUploader($directory);
	if(count($banners)>0){
		$value="";		
		for ($i=0; $i<count($banners); $i++) {
		if($i==(count($banners)-1)){
			$value.="('".$caption."', '".$banners[$i]."', NOW())"; 
		}else{
			$value.="('".$caption."', '".$banners[$i]."', NOW()), ";
					}
		}
	}
	$insertquery="INSERT INTO `banner`(`caption`, `banner`, `uploaddate`) VALUES".$value;
	$insertstm=insertUpdateDelete($insertquery);
	if($insertstm){
	errorMassageBox("banners uploaded successfully.", "success");
	}else{
	errorMassageBox("Please try again...", "success");
	}	
}


$bannerlisttable="";
      $bannerstmtable=selectData("SELECT * FROM `banner` ORDER BY `banner`.`id` DESC");
      if (count($bannerstmtable)>0) {
            $i=1;
            foreach ($bannerstmtable as $value) {
                  $bannerlisttable.= '
                  <tr>
                  <td>'.$i++.'</td>
                  <td><img src="'.$directory.$value->banner.'" style="width:50px; height:50px;" alt="">
                  </td>
                  <td>'.$value->caption.'</td>
                  <td>
                 
                  <a class="deleteclass" href="banner.php?delete_banner='.$value->id.'" title="delete">
                  <i class="fa fa-trash-o" ></i>
                  </a>
                  </td>
                  </tr>';
            }
      }

       if(isset($_GET['delete_banner']) && !empty($_GET['delete_banner'])){
            if (insertUpdateDelete("DELETE FROM `banner` WHERE id='".$_GET['delete_banner']."'")) {
                  header('location: banner.php');
            }else{
                  errorMassageBox("Please try after sometime.", "danger");
            }
      }     
?>