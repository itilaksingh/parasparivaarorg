<?php 
include 'session.php';
require_once('functions.php');
$directory="storage_dir/";
if(isset($_POST['submitreviews'])){
      $name=$_POST['name'];
      $location=$_POST['location'];
	$reviews=$_POST['reviews'];
      if (empty($name)) {
            errorMassageBox("Please enter name the reviewed person", "success");
      }else if (empty($reviews)) {
          errorMassageBox("Please enter the reviews.", "success");
      }else{
          $insertquery="INSERT INTO `reviews`(`review`, `location`, `name`, `uploaddate`) VALUES ('".$reviews."', '".$location."', '".$name."', NOW())";
      $insertstm=insertUpdateDelete($insertquery);
      if($insertstm){
      errorMassageBox("Reviews uploaded successfully.", "success");
      }else{
      errorMassageBox("Please try again...", "success");
            }  
      }		
}
if(isset($_GET['delete_review']) && !empty($_GET['delete_review'])){
            if (insertUpdateDelete("DELETE FROM `reviews` WHERE id='".$_GET['delete_review']."'")) {
                 errorMassageBox("Review delete successfully.", "danger");
            }else{
                  errorMassageBox("Please try after sometime.", "danger");
            }
} 
$reviewslisttable="";
      $reviewslisttablestm=selectData("SELECT * FROM `reviews` ORDER BY `reviews`.`id` DESC");
      if (count($reviewslisttablestm)>0) {
            $i=1;
            foreach ($reviewslisttablestm as $value) {
                  $reviewslisttable.= '
                  <tr>
                  <td>'.$i++.'</td>
                  <td>'.$value->name.'</td>
                  <td>'.$value->location.'</td>
                  <td>'.$value->review.'</td>
                  <td>
                 
                  <a class="deleteclass" href="reviews.php?delete_review='.$value->id.'" title="delete">
                  <i class="fa fa-trash-o" ></i>
                  </a>
                  </td>
                  </tr>';
            }
      }

    
?>