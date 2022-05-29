<?php
include 'session.php';
require_once('functions.php');

// users funtions  start
if(isset($_GET['active_block'])){
      $active_block=$_GET['active_block'];
      $id=$_GET['id'];
      $active_block_stms=insertUpdateDelete("UPDATE `registration` SET `active_block`='".$active_block."' WHERE id='".$id."'");
}

// $TotalRegisterUserstable="";
// $otalRegisterUsersStm=selectData("SELECT * FROM `registration` ORDER BY `registration`.`id` DESC");
// $TotalRegisterUsers=count($otalRegisterUsersStm);
//       if (count($otalRegisterUsersStm)>0) {
//             $i=1;
//             foreach ($otalRegisterUsersStm as $value) {

//                   if ($value->active_block==='1') {
//                       $active_block_btn='<a href="users.php?active_block=0&id='.$value->id.'" title="Block the user!" class="btn btn-success btn-sm deleteclass" > Active </a>';
//                   }else{
//                         $active_block_btn='<a href="users.php?active_block=1&id='.$value->id.'" title="Active the user!" class="btn btn-danger btn-sm deleteclass" > Block </a>';
//                   }

//                   $TotalRegisterUserstable.= '<tr><td>'.$i++.'</td><td>'.$value->uidcode.'</td>
//                   <td>'.$active_block_btn.'</td>
//                   <td>'.$value->email.'</td>
//                   <td>'.$value->fullname.'</td>
//                   <td>'.$value->accounttype.'</td>
//                   <td>'.$value->gender.'</td>
//                   <td>'.$value->age.'</td>
//                   <td>'.$value->maritalstatus.'</td>
//                   <td>'.$value->country.'</td>
//                   <td>'.$value->state.'</td>
//                   <td>'.$value->city.'</td>                  
//                   <td>
//                   <a class="deleteclass" href="product.php?delete_product_category='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a>
//                   </td>
//                   </tr>';
//             }
//       }

// //user section ends

//    // comunity sections start
      
// if(isset($_GET['delete_community']) && !empty($_GET['delete_community'])){
//             if (insertUpdateDelete("DELETE FROM `community_tb` WHERE id='".$_GET['delete_community']."'")) {
//                 errorMassageBox("Community Deleted Successfully.", "danger");
//             }else{
//                   errorMassageBox("Please try after sometime.", "danger");
//             }
//       }

// $editcommunity_id="";
// $editcommunity_name="";
// if (isset($_GET['editcommunity']) && !empty($_GET['editcommunity'])) {
//       $editcommunity=selectData("SELECT * FROM `community_tb` WHERE id='".$_GET['editcommunity']."'");
//       $editcommunity_id=$editcommunity[0]->id;
//       $editcommunity_name=$editcommunity[0]->community;
// }


// if (isset($_POST['addcommunity'])){
//       $community=$_POST['community'];
//       $id=$_POST['id'];
//       if (!empty($_POST['community']) && empty($_POST['id'])) {
//       $addcommunity_stm=insertUpdateDelete("INSERT INTO `community_tb`(`community`) VALUES ('".$community."')");
//       if ($addcommunity_stm){
//             errorMassageBox("Community Add Successfully.", "success");   
            
//             }else{
//                errorMassageBox("Sql injection error", "danger");   
//             }
//       }else if (!empty($_POST['community']) && !empty($_POST['id'])){
//             $updatecommunity_stm=insertUpdateDelete("UPDATE `community_tb` SET `community`='".$community."' WHERE id='".$id."' ");
//       if ($updatecommunity_stm){
//             errorMassageBox("Community Update Successfully.", "success");         
//             }else{
//             errorMassageBox("Sql injection error", "danger");   
//             }
//       }else{
//             errorMassageBox("Please enter community name.", "danger");
//       }
      
// }
//    $totalcommunitytable="";
// $totalcommunityStm=selectData("SELECT * FROM `community_tb` ORDER BY `community_tb`.`id` DESC");
// $totalcommunity=count($totalcommunityStm);
//       if ($totalcommunity>0){
//             $i=1;
//             foreach ($totalcommunityStm as $value) {
//                   $totalcommunitytable.= '
//                   <tr>
//                   <td>'.$i++.'</td>
//                   <td>'.$value->community.'</td>                  
//                   <td>
//                   <a class="deleteclass" href="community.php?delete_community='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a> &nbsp;
//                    <a class="deleteclass" href="community.php?editcommunity='.$value->id.'" title="Edit">
//                   <i class="fa fa-pencil" ></i>
//                   </a>
//                   </td>
//                   </tr>';
//             }
//       }

// //community section ends

// //religion section start
//          if(isset($_GET['delete_religion']) && !empty($_GET['delete_religion'])){
//             if (insertUpdateDelete("DELETE FROM `religion` WHERE id='".$_GET['delete_religion']."'")) {
//                 errorMassageBox("Religion Deleted Successfully.", "danger");
//             }else{
//                   errorMassageBox("Please try after sometime.", "danger");
//             }
//       }

// $editreligion_id="";
// $editreligion_name="";
// if (isset($_GET['editreligion']) && !empty($_GET['editreligion'])) {
//       $editreligion=selectData("SELECT * FROM `religion` WHERE id='".$_GET['editreligion']."'");
//       $editreligion_id=$editreligion[0]->id;
//       $editreligion_name=$editreligion[0]->religion;
// }

// if (isset($_POST['addreligion'])){
//       $religion=$_POST['religion'];
//       $id=$_POST['id'];
//       if (!empty($_POST['religion']) && empty($_POST['id'])) {
//       $addreligion_stm=insertUpdateDelete("INSERT INTO `religion`(`religion`, `date`) VALUES ('".$religion."', NOW())");
//       if ($addreligion_stm){
//             errorMassageBox("Religion Add Successfully.", "success");   
            
//             }else{
//                errorMassageBox("Sql injection error", "danger");   
//             }
//       }else if (!empty($_POST['religion']) && !empty($_POST['id'])){
//             $updatereligion_stm=insertUpdateDelete("UPDATE `religion` SET `religion`='".$religion."' WHERE id='".$id."' ");
//       if ($updatereligion_stm){
//             errorMassageBox("religion Update Successfully.", "success");         
//             }else{
//             errorMassageBox("Sql injection error", "danger");   
//             }
//       }else{
//             errorMassageBox("Please enter religion name.", "danger");
//       }
      
// }
// $totalreligiontable="";
// $totalreligionStm=selectData("SELECT * FROM `religion` ORDER BY `religion`.`id` DESC");
// $totalreligion=count($totalreligionStm);
//       if ($totalreligion>0) {
//             $i=1;
//             foreach ($totalreligionStm as $value) {
//                   $totalreligiontable.= '
//                   <tr>
//                   <td>'.$i++.'</td>
//                   <td>'.$value->religion.'</td>                  
//                   <td>
//                   <a class="deleteclass" href="religion.php?delete_religion='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a> &nbsp;
//                    <a class="deleteclass" href="religion.php?editreligion='.$value->id.'" title="Edit">
//                   <i class="fa fa-pencil" ></i>
//                   </a>
//                   </td>
//                   </tr>';
//             }
//       }
//    //religion section ends

//       //caste section start here
//               if(isset($_GET['delete_caste']) && !empty($_GET['delete_caste'])){
//             if (insertUpdateDelete("DELETE FROM `caste` WHERE id='".$_GET['delete_caste']."'")) {
//                 errorMassageBox("caste deleted Successfully.", "danger");
//             }else{
//                   errorMassageBox("Please try after sometime.", "danger");
//             }
//       }

// $editcaste_id="";
// $editcaste_name="";
// if (isset($_GET['editcaste']) && !empty($_GET['editcaste'])) {
//       $editreligion=selectData("SELECT * FROM `caste` WHERE id='".$_GET['editcaste']."'");
//       $editcaste_id=$editreligion[0]->id;
//       $editcaste_name=$editreligion[0]->caste;
// }

// if (isset($_POST['addcaste'])){
//       $caste=$_POST['caste'];
//       $id=$_POST['id'];
//       if (!empty($_POST['caste']) && empty($_POST['id'])) {
//       $addcaste_stm=insertUpdateDelete("INSERT INTO `caste`(`caste`, `date`) VALUES ('".$caste."', NOW())");
//       if ($addcaste_stm){
//             errorMassageBox("caste Add Successfully.", "success");   
            
//             }else{
//                errorMassageBox("Sql injection error", "danger");   
//             }
//       }else if (!empty($_POST['caste']) && !empty($_POST['id'])){
//             $updatereligion_stm=insertUpdateDelete("UPDATE `caste` SET `caste`='".$caste."' WHERE id='".$id."' ");
//       if ($updatereligion_stm){
//             errorMassageBox("caste Update Successfully.", "success");         
//             }else{
//             errorMassageBox("Sql injection error", "danger");   
//             }
//       }else{
//             errorMassageBox("Please enter caste name.", "danger");
//       }
      
// }
// $totalcastetable="";
// $totalcasteStm=selectData("SELECT * FROM `caste` ORDER BY `caste`.`id` DESC");
// $totalcaste=count($totalcasteStm);
//       if ($totalcaste>0) {
//             $i=1;
//             foreach ($totalcasteStm as $value) {
//                   $totalcastetable.= '
//                   <tr>
//                   <td>'.$i++.'</td>
//                   <td>'.$value->caste.'</td>                  
//                   <td>
//                   <a class="deleteclass" href="caste.php?delete_caste='.$value->id.'" title="delete">
//                   <i class="fa fa-trash-o" ></i>
//                   </a> &nbsp;
//                    <a class="deleteclass" href="caste.php?editcaste='.$value->id.'" title="Edit">
//                   <i class="fa fa-pencil" ></i>
//                   </a>
//                   </td>
//                   </tr>';
//             }
//       }
      //caste section ends here
      ?>
