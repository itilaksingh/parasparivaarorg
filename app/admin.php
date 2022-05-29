<?php
include 'session.php';
require_once('functions.php');

if(isset($_POST['addstaff'])){
$username=checkdata($_POST['username']);
$email=checkdata($_POST['email']);
$newpassword=checkdata($_POST['newpassword']);
$confirmpassword=checkdata($_POST['confirmpassword']);
if (empty($username) || empty($newpassword) || empty($email) || empty($confirmpassword)) {
	errorMassageBox("All Fields are required to add staff member..", "danger");
}else if($newpassword!=$confirmpassword){
errorMassageBox("Password and Confirm Password did not match.", "danger");
}else{
	$stm=selectData("SELECT * FROM `admin_tbl` WHERE username='".$username."' AND email='".$email."'");
	if(count($stm)>0){
		errorMassageBox("Username and Email Id is already register.", "danger");
	}else{
		$insertstm=insertUpdateDelete("INSERT INTO `admin_tbl`(`username`, `password`, `email`, `uploadDate`) VALUES ('".$username."', '".$newpassword."', '".$email."', NOW())");
		if($insertstm){
			errorMassageBox("Member add successfully.", "danger");
		}else{
			errorMassageBox("Please try after some time.", "danger");
		}
			}

	} 
}


if(isset($_POST['changepassword'])){
	$oldpassword=checkdata($_POST['oldpassword']);
	$newpassword=checkdata($_POST['newpassword']);
	$confirmpassword=checkdata($_POST['confirmpassword']);
	if(empty($oldpassword) || empty($newpassword) || empty($confirmpassword)){
		errorMassageBox("All Fields are required.", "danger");
	}else if($newpassword!=$confirmpassword){
		errorMassageBox("Password and Confirm Password did not match.", "danger");
	}else 
	if(count(selectData("SELECT * FROM `admin_tbl` WHERE password='".$oldpassword."' AND email='".$_SESSION['admin_email']."'"))>0){
		$updatepassword=insertUpdateDelete("UPDATE `admin_tbl` SET `password`='".$newpassword."' WHERE email='".$_SESSION['admin_email']."'");
		if ($updatepassword) {
			errorMassageBox("Password has been changed successfully.", "danger");
		}else{
		errorMassageBox("Please try  after some time.", "danger");
		}
	}else{
		errorMassageBox("Old password is incorrect", "danger");
	}

}

$adduserpermission='style="display:none"';
if(isset($_SESSION['permission']) && !empty($_SESSION['permission']) && $_SESSION['permission']=='1'){
	$adduserpermission='style="display:block"';
}


$usertables="";

	$stm=selectData("SELECT * FROM `admin_tbl` WHERE permission!='1' ORDER BY `admin_tbl`.`admin_id` DESC");
	if(count($stm)>0){
		$i=1;
		foreach ($stm as $value) {
			$usertables.='<tr>
			<td>'.$i++.'</td>
			<td>'.$value->username.'</td>
			<td>'.$value->email.'</td>
			<td>'.$value->uploadDate.'</td>
			<td><a href="settings.php?delete_user='.$value->admin_id.'" title="Delete"class="deleteclass"><i class="fa fa-trash-o"></i></a></td>
			

			</tr>';
		}
	}


	   if(isset($_GET['delete_user']) && !empty($_GET['delete_user'])){
            if (insertUpdateDelete("DELETE FROM `admin_tbl` WHERE admin_id='".$_GET['delete_user']."'")) {
                  header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
                  errorMassageBox("Please try after sometime.", "danger");
            }
      }

?>