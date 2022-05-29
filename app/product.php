<?php
include 'session.php';
require_once('functions.php');

if(empty($_SESSION['admin_email'])) {
header('location: index.php');
exit();
}

$directory="storage_dir/";
if (isset($_POST['addproduct'])) {
  $product_name=checkdata($_POST['product_name']);
  $product_url=$_POST['product_url'];
  $product_code=$_POST['product_code'];
  $product_short_desc=$_POST['product_short_desc'];
  $product_long_desc=$_POST['product_long_desc'];
  $product_technical_specification=$_POST['product_technical_specification'];
  $product_price=$_POST['product_price'];
  $product_discount=$_POST['product_discount'];
	$product_stock=$_POST['product_stock'];
	$target_file = md5(uniqid(rand(), true))."_".($_FILES['product_images']['name']);
	 if(move_uploaded_file($_FILES['product_images']['tmp_name'],$directory.$target_file)){
	 	   $product_images=$target_file;
            if(!empty($product_images)){
            	$addproduct_stm=insertUpdateDelete("INSERT INTO `products`(`product_url`, `product_name`, `product_code`, `product_images`, `product_short_desc`, `product_long_desc`, `product_technical_specification`, `product_price`, `product_discount`, `product_stock`, `product_edit_date`, `product_date`) VALUES ('".$product_url."', 
                '".$product_name."',
                '".$product_code."',
                '".$product_images."',
                '".$product_short_desc."',
                '".$product_long_desc."',
                '".$product_technical_specification."',
                '".$product_price."',
                '".$product_discount."',
                '".$product_stock."',
                '',
                NOW()
              )");
            	if ($addproduct_stm) {
            		errorMassageBox("Add successfully.", "success");
            	}else{

            		errorMassageBox("try again.", "danger");
            	}
            }else{
            	errorMassageBox("Logo not upload properly.", "danger");
            }
	 }else{
	 	errorMassageBox("Logo not upload properly.", "danger");
	 }
}

// $product_category_table="";
//       $product_category_stm=selectData("SELECT * FROM `product_category` ORDER BY `product_category`.`id` DESC");
//       if (count($product_category_stm)>0) {
//             $i=1;
//             foreach ($product_category_stm as $value) {
//                   $product_category_table.= '
//                   <tr>
//                   <td>'.$i++.'</td>
//                   <td>
//                   <a href="sub-product.php?id='.$value->id.'">
//                   <img src="'.$directory.$value->logo.'" style="width:50px; height:50px;" alt=""> 
//                   </a>
//                   </td>
//                   <td>
//                   <a href="sub-product.php?id='.$value->id.'" >'.$value->name.'
//                   </a>
//                   </td>
//                   <td>
                 
//                   <a class="deleteclass" href="product.php?delete_product_category='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a>
//                   </td>
//                   </tr>';
//             }
//       }

//       //
//       if(isset($_GET['delete_product_category']) && !empty($_GET['delete_product_category'])){
//             if (insertUpdateDelete("DELETE FROM `product_category` WHERE id='".$_GET['delete_product_category']."'")) {
//                   header('location: product.php');
//             }else{
//                   errorMassageBox("Please try after sometime.", "danger");
//             }
//       }


//      //------------------sub-product.php------------------------------------------
     
//       if(isset($_POST['addsubproduct'])){            
//             $product_category=checkdata($_POST['product_category']);
//             $product_subcategory=checkdata($_POST['product_subcategory']);
//             if(!empty($product_subcategory) && !empty($product_category)){
//                    $addsubproduct_stm=insertUpdateDelete("INSERT INTO `product_sub_category`(`product_category`, `product_subcategory`, `upload`) VALUES ('".$product_category."', '".$product_subcategory."', NOW())");
//                   if ($addsubproduct_stm) {
//                         errorMassageBox("Add successfully.", "success");
//                   }else{
//                         errorMassageBox("try again.", "danger");
//                   }
//             }else{
//                    errorMassageBox("try again.", "danger");
//             }
           
//       }
//      if(isset($_GET['id']) && !empty($_GET['id'])){
//       $product_category=$_GET['id'];
//       $fetchcategory=selectData("SELECT * FROM `product_category` WHERE id='".$_GET['id']."'");
//       if (count($fetchcategory)>0) {
//             $product_category_name=$fetchcategory[0]->name;
//             $product_category_logo=$directory.$fetchcategory[0]->logo;
//       }
//          $product_sub_category_table="";
//       $product_sub_category_stm=selectData("SELECT * FROM `product_sub_category` WHERE product_category='".$_GET['id']."' ORDER BY `product_sub_category`.`id` DESC");
//       if (count($product_sub_category_stm)>0) {
//             $i=1;
//             foreach ($product_sub_category_stm as $value) {
//                   $product_sub_category_table.= '
//                   <tr>
//                   <td>'.$i++.'</td>  
//                   <td>'.$product_category_name.'</td>               
//                   <td>
//                   <a href="add-content-product.php?id2='.$value->id.'&id='.$product_category.'" >'.$value->product_subcategory.'
//                   </a>
//                   </td>
//                   <td>
                 
//                   <a class="deleteclass" href="sub-product.php?delete_product_subcategory='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a>
//                   </td>
//                   </tr>';
//             }
//       } 
//      }

//         if(isset($_GET['delete_product_subcategory']) && !empty($_GET['delete_product_subcategory'])){
//             if (insertUpdateDelete("DELETE FROM `product_sub_category` WHERE id='".$_GET['delete_product_subcategory']."'")) {
//                   header('Location: ' . $_SERVER['HTTP_REFERER']);
//             }else{
//                   errorMassageBox("Please try after sometime.", "danger");
//             }
//       }


//       //---------------------------- add-content-product.php----------------------------------------

//       if(isset($_GET['id']) && isset($_GET['id2']) && !empty($_GET['id2']) && !empty($_GET['id'])){
//       $product_category=$_GET['id'];
//       $fetchcategory=selectData("SELECT * FROM `product_category` WHERE id='".$_GET['id']."'");
//       if (count($fetchcategory)>0) {
//             $product_category_name=$fetchcategory[0]->name;           
//             }
//       $fetchsubcategory=selectData("SELECT * FROM `product_sub_category` WHERE id='".$_GET['id2']."'");
//       if (count($fetchsubcategory)>0) {
//             $product_sub_category_name=$fetchsubcategory[0]->product_subcategory;           
//             }

//          $addcontentproduct_genrate=selectData("SELECT * FROM `add_content_product` WHERE product_category='".$product_category."' AND product_subcategory='".$_GET['id2']."' ");
//          if(count($addcontentproduct_genrate)>0){
//            $addcontentproduct_id=$addcontentproduct_genrate[0]->id;
//            $introduction=$addcontentproduct_genrate[0]->introduction;
//            $introduction_img=$addcontentproduct_genrate[0]->introduction_img;
//            $usp=$addcontentproduct_genrate[0]->usp;
//            $usp_img=$addcontentproduct_genrate[0]->usp_img;
//            $unique=$addcontentproduct_genrate[0]->unique1;
//            $unique_img=$addcontentproduct_genrate[0]->unique1_img;
//            $standard_size=$addcontentproduct_genrate[0]->standard_size;
//            $standard_size_img=$addcontentproduct_genrate[0]->standard_size_img;
//            $application=$addcontentproduct_genrate[0]->application;
//            $application_img=$addcontentproduct_genrate[0]->application_img;
//            $technical_specifiaction=$addcontentproduct_genrate[0]->technical_specifiaction;
//            $technical_specifiaction_img=$addcontentproduct_genrate[0]->technical_specifiaction_img;

//          }else{
//            $insertnewaddcontentproduct=insertUpdateDelete("INSERT INTO `add_content_product`(`product_category`, `product_subcategory`, `introduction`, `introduction_img`, `usp`, `usp_img`, `unique1`, `unique1_img`, `standard_size`, `standard_size_img`, `application`, `application_img`, `technical_specifiaction`, `technical_specifiaction_img`, `upload`) VALUES ('".$product_category."', '".$_GET['id2']."', '', '', '', '', '', '', '', '', '', '', '', '', NOW())");
//            if ($insertnewaddcontentproduct) {
//                header("Refresh:0");
//            }
//          }  

//       }

//       if(isset($_POST['addrange'])){
//         $name=checkdata($_POST['name']); 
//         $designnumber=checkdata($_POST['designnumber']); 
//         $rang=checkdata($_POST['rang']); 
//         $colourtexture=checkdata($_POST['colourtexture']); 
//         $finishdisplayedin=checkdata($_POST['finishdisplayedin']); 
//         $availablefinish=checkdata($_POST['availablefinish']); 
//         $add_content_product=checkdata($_POST['add_content_product']); 
//             $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//        if(move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file)){
//                $img=$target_file;
//             if(!empty($img)){
//                   $addpackage_stm=insertUpdateDelete("INSERT INTO `range`(`name`, `img`, `designnumber`, `rang`, `colourtexture`,  `finishdisplayedin`,  `availablefinish`, `add_content_product`, `upload`) VALUES ('".$name."', '".$img."', '".$designnumber."', '".$rang."', '".$colourtexture."',  '".$finishdisplayedin."',  '".$availablefinish."', '".$add_content_product."', NOW())");
//                   if ($addpackage_stm) {
//                         errorMassageBox("Add successfully.", "success");
//                   }else{
//                         errorMassageBox("try again.", "danger");
//                   }
//             }else{
//                   errorMassageBox("Logo not upload properly.", "danger");
//             }
//        }else{
//             errorMassageBox("Logo not upload properly.", "danger");
//        }       
//       }


//       //update introduction
//       if (isset($_POST['updateintroduction'])) {
//             $editor1=($_POST['editor1']);
//             $img=checkdata($_POST['oldimg']);
//             $add_content_product=checkdata($_POST['add_content_product']);
//             if (($_FILES['img']['size'])>0){
//                   $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//                   move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file);
//                   $img=$target_file;
//             }
//             $stm_update=insertUpdateDelete("UPDATE `add_content_product` SET introduction='".$editor1."', introduction_img='".$img."' WHERE id='".$add_content_product."'");
//             if($stm_update){
//                   header("Refresh:0");
//                    errorMassageBox("Update successfully.", "success");
//                }else{
//                    errorMassageBox("Please try again.", "danger");
//                }       
//       }
//    //update usp
//       if (isset($_POST['updateusp'])) {
//             $editor2=($_POST['editor2']);
//             $img=checkdata($_POST['oldimg']);
//             $add_content_product=checkdata($_POST['add_content_product']);
//             if (($_FILES['img']['size'])>0){
//                   $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//                   move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file);
//                   $img=$target_file;
//             }
//             $stm_update=insertUpdateDelete("UPDATE `add_content_product` SET usp='".$editor2."', usp_img='".$img."' WHERE id='".$add_content_product."'");
//             if($stm_update){
//                   header("Refresh:0");
//                    errorMassageBox("Update successfully.", "success");
//                }else{
//                    errorMassageBox("Please try again.", "danger");
//                }       
//       }

//        //update STANDARD-SIZE
//       if (isset($_POST['updatestandersize'])) {
//             $editor3=($_POST['editor3']);
//             $img=checkdata($_POST['oldimg']);
//             $add_content_product=checkdata($_POST['add_content_product']);
//             if (($_FILES['img']['size'])>0){
//                   $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//                   move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file);
//                   $img=$target_file;
//             }
//             $stm_update=insertUpdateDelete("UPDATE `add_content_product` SET standard_size='".$editor3."', standard_size_img='".$img."' WHERE id='".$add_content_product."'");
//             if($stm_update){
//                   header("Refresh:0");
//                    errorMassageBox("Update successfully.", "success");
//                }else{
//                    errorMassageBox("Please try again.", "danger");
//                }       
//       }

//        //update APPLICATION
//       if (isset($_POST['updateapplications'])) {
//             $editor4=($_POST['editor4']);
//             $img=checkdata($_POST['oldimg']);
//             $add_content_product=checkdata($_POST['add_content_product']);
//             if (($_FILES['img']['size'])>0){
//                   $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//                   move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file);
//                   $img=$target_file;
//             }
//             $stm_update=insertUpdateDelete("UPDATE `add_content_product` SET application='".$editor4."', application_img='".$img."' WHERE id='".$add_content_product."'");
//             if($stm_update){
//                   header("Refresh:0");
//                    errorMassageBox("Update successfully.", "success");
//                }else{
//                    errorMassageBox("Please try again.", "danger");
//                }       
//       }
//        //update TECHNICAL-SPECIFIACTION
//       if (isset($_POST['updatetechnicalspecification'])) {
//             $editor5=($_POST['editor5']);
//             $img=checkdata($_POST['oldimg']);
//             $add_content_product=checkdata($_POST['add_content_product']);
//             if (($_FILES['img']['size'])>0){
//                   $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//                   move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file);
//                   $img=$target_file;
//             }
//             $stm_update=insertUpdateDelete("UPDATE `add_content_product` SET technical_specifiaction='".$editor5."', technical_specifiaction_img='".$img."' WHERE id='".$add_content_product."'");
//             if($stm_update){
//                   header("Refresh:0");
//                    errorMassageBox("Update successfully.", "success");
//                }else{
//                    errorMassageBox("Please try again.", "danger");
//                }       
//       }
//        //update unique
//       if (isset($_POST['updateunique'])) {
//             $editor6=($_POST['editor6']);
//             $img=checkdata($_POST['oldimg']);
//             $add_content_product=checkdata($_POST['add_content_product']);
//             if (($_FILES['img']['size'])>0){
//                   $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name']);
//                   move_uploaded_file($_FILES['img']['tmp_name'],$directory.$target_file);
//                   $img=$target_file;
//             }
//             $stm_update=insertUpdateDelete("UPDATE `add_content_product` SET unique1='".$editor6."', unique1_img='".$img."' WHERE id='".$add_content_product."'");
//             if($stm_update){
//                   header("Refresh:0");
//                    errorMassageBox("Update successfully.", "success");
//                }else{
//                    errorMassageBox("Please try again.", "danger");
//                }       
//       }



//       //--------range table--------
//       $rangetable="";
//       if (!empty($addcontentproduct_id)){      
//                  $rangetable_stm=selectData("SELECT * FROM `range` WHERE add_content_product='".$addcontentproduct_id."' ORDER BY `range`.`id` DESC");
//       if (count($rangetable_stm)>0) {
//             $i=1;
//             foreach ($rangetable_stm as $value) {
//                   $rangetable.= '
//                   <tr>
//                   <td>'.$i++.'</td>
//                   <td>                 
//                   <img src="'.$directory.$value->img.'" style="width:50px; height:50px;" alt=""> 
//                    </td>

//                   <td>'.$value->name.'</td>
//                   <td>'.$value->designnumber.'</td>
//                   <td>'.$value->rang.'</td>
//                   <td>'.$value->colourtexture.'</td>
//                   <td>'.$value->finishdisplayedin.'</td>
//                   <td>'.$value->availablefinish.'</td>
                  
//                   <td> 
//                   <a target="_blank" class="" href="../catalog.php?id='.$value->id.'" title="View Product">
//                   <i class="fa fa-eye"></i>
//                   </a> 
//                      <a class="" href="range.php?edit_id='.$value->id.'" title="Edit">
//                   <i class="fa fa-pencil"></i>
//                   </a>                
//                   <a class="deleteclass" href="product.php?delete_range='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a>                
//                   </td>
//                   </tr>';
//             }
//       } 
//       }
//           if(isset($_GET['delete_range']) && !empty($_GET['delete_range'])){
//             if (insertUpdateDelete("DELETE FROM `range` WHERE id='".$_GET['delete_range']."'")) {
//                   header('Location: ' . $_SERVER['HTTP_REFERER']);
//             }else{
//                   errorMassageBox("Please try after sometime.", "danger");
//             }
//       }



//       if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
//           $edit_id=$_GET['edit_id'];
//             $rangestm=selectData("SELECT * FROM `range` WHERE id='".$edit_id."' ");
//             if(count($rangestm)>0){
//                 $designnumber=$rangestm[0]->designnumber;
//                 $name=$rangestm[0]->designnumber;
//                 $colourtexture=$rangestm[0]->colourtexture;
//                 $rang=$rangestm[0]->rang;
//                 $finishdisplayedin=$rangestm[0]->finishdisplayedin;               
//                 $availablefinish=$rangestm[0]->availablefinish;               
//                 $img_position=$rangestm[0]->img_position;
//                 $select_v=$select_h="";    
//                 if($img_position=='0'){
//                   $select_v='selected';
//                 }else if($img_position=='1'){
//                   $select_h='selected';
//                 }           
                
//             }else{
//                header('Location: ' . $_SERVER['HTTP_REFERER']);
//             }
//       }
//         if(isset($_POST['updaterange'])){
//         $edit_id=checkdata($_POST['edit_id']); 
//         $name=checkdata($_POST['name']); 
//         $designnumber=checkdata($_POST['designnumber']); 
//         $rang=checkdata($_POST['rang']); 
//         $colourtexture=checkdata($_POST['colourtexture']); 
//         $finishdisplayedin=checkdata($_POST['finishdisplayedin']); 
//         $availablefinish=checkdata($_POST['availablefinish']);         
//         $img_position=checkdata($_POST['img_position']);         
//                   $updaterangestm=insertUpdateDelete("UPDATE `range` SET `name`='".$name."', `img_position`='".$img_position."', `designnumber`='".$designnumber."',`rang`='".$rang."',`colourtexture`='".$colourtexture."',`finishdisplayedin`='".$finishdisplayedin."',`availablefinish`='".$availablefinish."' WHERE id='".$edit_id."'");
//                   if($updaterangestm){
                     
//                        // errorMassageBox("Updated successfully.", "success");
//                       echo '<script> alert("Updated successfully."); window.location.href="range.php?edit_id='.$edit_id.'"; </script>';  
//                       // header('Location: ' . $_SERVER['HTTP_REFERER']);
//                   }else{
//                         errorMassageBox("try again.", "danger");
//                   }
             
//       }

  
?>