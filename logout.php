<?php 
session_start();
if(isset($_GET['req'])){
if($_GET['req']=='logout'){
	unset($_SESSION['admin_email']);
	unset($_SESSION['admin_id']);
	unset($_SESSION['username']);
	session_destroy();
	if(empty($_SESSION['admin_id']) && empty($_SESSION['admin_email'])){
		header('Location: index.php?req=logout');
		exit();
	}
}	
}


?>