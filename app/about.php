<?php 
include 'session.php';
require_once('functions.php');

if(isset($_POST['UpdateAboutUs'])){
	$title=$_POST['title'];
	$content=$_POST['content'];
	if (empty($title)) {
		errorMassageBox("Title Required", "danger");
	}else if(empty($content)){
		errorMassageBox("Content Required", "danger");
	}else{
		$UpdateAboutUsStm=insertUpdateDelete("UPDATE `about` SET `title` = '".$title."', `content` = '".$content."', updatedate=NOW() WHERE id='1'");
		if ($UpdateAboutUsStm) {
			errorMassageBox("About us content updated successfully.", "success");
		}else{
			errorMassageBox("Please try again...", "danger");
		}
	}
}

$UpdateAboutUsFetchStm=selectData("SELECT * FROM `about` WHERE id='1'");
$title=$UpdateAboutUsFetchStm[0]->title;
$content=$UpdateAboutUsFetchStm[0]->content;

?>