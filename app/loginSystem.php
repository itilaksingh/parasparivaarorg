<?php
session_start(); 
require_once('functions.php');
if(!empty($_SESSION['admin_email'])){
		header('Location: dashboard.php');
		exit();
	}
if(isset($_POST['login'])){
$username=checkdata($_POST['username']);
$password=checkdata($_POST['password']);
if (empty($username) || empty($password)) {
	errorMassageBox("Please enter your username and password.", "danger");
}else{
	$stm=selectData("SELECT * FROM `admin_tbl` WHERE username='".$username."' AND password='".$password."' Limit 1");
	if(count($stm)>0){
		$_SESSION['admin_email']=$stm[0]->email;
		$_SESSION['admin_id']=$stm[0]->admin_id;
		$_SESSION['username']=$stm[0]->username;
		$_SESSION['permission']=$stm[0]->permission;
		header('Location: dashboard.php');
		exit();
	}else{
		errorMassageBox("Invalid username and password.", "danger");
	}

}


}


if(isset($_POST['reset'])){
$email=checkdata($_POST['email']);
if (empty($email)) {
	errorMassageBox("Please enter your register email address.", "danger");
}else{
$stm=selectData("SELECT * FROM `admin_tbl` WHERE email='".$email."' Limit 1");
	
if(count($stm)>0){
		$htm="
		Dear ".$email.",
		<br>
		Your password is ".$stm[0]->password." 
		";
		$mailstm=mailsendfunction($email, '', 'Forgot Password', $htm);
		if($mailstm){
			errorMassageBox("Forgot password mail has been sent your register email.", "success");
		}else{
			errorMassageBox("Error Please try again.", "danger");
		}
		// echo $htm;
}else{
	errorMassageBox("Invalid email address.", "danger");
}
	
}


}



?>