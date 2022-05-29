<?php 
	include 'session.php';
	require_once('functions.php');
	$directory="storage_dir/";
if (isset($_POST['uploadpagecontent'])) {
	$oldimg=$_POST['oldimg'];
	$heading=$_POST['heading'];
	$content=$_POST['content'];
	$img=array('');
	if($_FILES["img"]["size"][0]>0){ 
	$img=multiImageUploader($directory);
	}else{
	$img[0]=$oldimg;
	}
	$id=$_POST['id'];
	if(empty($heading) || empty($content)){
		errorMassageBox("heading and content required.", "danger");
	}else{
	$savecontent=insertUpdateDelete("UPDATE `content` SET `heading`='".$heading."',`img`='".$img[0]."',`content`='".$content."' WHERE id='".$id."'");
	if ($savecontent){
		errorMassageBox("content updated successfully.", "success");
	}else{
		errorMassageBox("Please try again...", "danger");
	}		
		}
}

$heading="";
$id="";
$img="";
$content="";
if (isset($_GET['main_menu']) && !empty($_GET['main_menu']) && !isset($_GET['submenu'])) {	
	$main_menu=$_GET['main_menu'];
	$stm=selectData("SELECT * FROM `content` WHERE main_menu='".$main_menu."' AND submenu=''");
		if(count($stm)>0){
			$id=$stm[0]->id;
			$heading=$stm[0]->heading;
			$img=$stm[0]->img;
			$content=$stm[0]->content;
		}else{
			insertUpdateDelete("INSERT INTO `content`(`main_menu`, `submenu`, `heading`, `img`, `content`, `savedate`) VALUES ('".$main_menu."', '', '', '', '', NOW())");
		}
}else if (isset($_GET['main_menu']) && isset($_GET['submenu']) && !empty($_GET['main_menu']) && !empty($_GET['submenu'])) {	
	$main_menu=$_GET['main_menu'];
	$submenu=$_GET['submenu'];
		$stm=selectData("SELECT * FROM `content` WHERE main_menu='".$main_menu."' AND submenu='".$submenu."'");
		if(count($stm)>0){
			$id=$stm[0]->id;
			$heading=$stm[0]->heading;
			$img=$stm[0]->img;
			$content=$stm[0]->content;
		}else{
			insertUpdateDelete("INSERT INTO `content`(`main_menu`, `submenu`, `heading`, `img`, `content`, `savedate`) VALUES ('".$main_menu."', '".$submenu."', '', '', '', NOW())");
		}
}

$listofpage="";
$menustm=selectData("SELECT * FROM `menu` ORDER BY `id` DESC");
if (count($menustm)>0) {
	$i=1;
	foreach ($menustm as $value) {

		$listofpage.='<tr>
		<td>'.$i++.'</td>
		<td>'.$value->main_menu.'</td>
		<td><a class="deleteclass" href="content.php?main_menu='.$value->id.'" title="Edit"><i class="fa fa-pencil-square" ></i>
                  </a></td>
		</tr>
		';
		$submenustm=selectData("SELECT * FROM `submenu` WHERE main_menu='".$value->id."' ");
		if(count($submenustm)>0){
			foreach ($submenustm as $data){
				$listofpage.='
				<tr>
		<td>'.$i++.'</td>
		<td>'.$data->submenu.'</td>
		<td><a class="deleteclass" href="content.php?submenu='.$data->id.'&main_menu='.$value->id.'" title="Edit"><i class="fa fa-pencil-square" ></i>
                  </a></td>
		</tr>
		';	
			}
		}
		
	}
}
?>