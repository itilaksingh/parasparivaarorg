<?php 
include 'session.php';
require_once('functions.php');

if(isset($_POST['updatecontactdetails'])){
	$phonenumber=$_POST['phonenumber'];
	$address=$_POST['address'];
	$emails=$_POST['emails'];
	if (empty($address)) {
		errorMassageBox("Address is Required", "danger");
	}else if(empty($emails)){
		errorMassageBox("Emails is Required", "danger");
	}else if(empty($phonenumber)){
		errorMassageBox("Phone numbers is Required", "danger");
	}else{
		$updatecontactdetailsStm=insertUpdateDelete("UPDATE `contactdetails` SET `address`='".$address."',`emails`='".$emails."',`phonenumber`='".$phonenumber."',`updatedate`=NOW() WHERE id='1'");
		if ($updatecontactdetailsStm) {
			errorMassageBox("Contact Details updated successfully.", "success");
		}else{
			errorMassageBox("Please try again...", "danger");
		}
	}
}

$contactdetailsFetchData=selectData("SELECT * FROM `contactdetails` WHERE id='1'");
$address=$contactdetailsFetchData[0]->address;
$emails=$contactdetailsFetchData[0]->emails;
$phonenumber=$contactdetailsFetchData[0]->phonenumber;

?>