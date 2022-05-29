<?php 
$GLOBALS['AdminPanelName']="parasparivaar.org";
$directory="storage_dir/";


//common functions
function db_connection(){
include('config.php');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn){    
    return $conn;
    }else{
    	echo 'Please check your Database Connection, Thank you. ';
    	exit();
	    }
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}

//base url 
function getBaseUrl($link=null) 
{   
  $currentPath = $_SERVER['PHP_SELF']; 
    $pathInfo = pathinfo($currentPath); 
    $hostName = $_SERVER['HTTP_HOST']; 
      if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://';
}
else {
  $protocol = 'http://';
}
  if(!empty($link)){
    $url=$protocol.$hostName.$pathInfo['dirname']."/".$link;
  }else{
    $url=$protocol.$hostName.$pathInfo['dirname']."/";
  }
  echo $url;
}
//while post or get methoda store in database
function checkdata($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//fecth data from mysql function 
function selectData($query){	
	$selectDatas = array();
    $conn=db_connection();
	$stmt = $conn->prepare($query); 
    $stmt->execute();
   while ($row = $stmt->fetchObject()) {
 	$obj = $row;
	array_push($selectDatas, $obj);
	}
	return $selectDatas;
	$conn = null;
}

//function delete
function insertUpdateDelete($query){
    $conn=db_connection();
    $stmt = $conn->prepare($query); 
    $result=$stmt->execute();
    return $result; 
}


//mail function 
function mailsendfunction($to, $from=null, $subject, $bodymessage){
   //define one email address toh check email working or not
      $to=$to.', developer.test.link@gmail.com';   
    $message = $bodymessage;    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    
    // More headers
    $headers .= 'From: '.$from . "\r\n";

    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    if(mail($to,$subject,$message,$headers)){
            return 1;
    }else{
        return 0;
    }
}

function errorMassageBox($msg, $alerttype){
	$massage="";
	if(!empty($msg)){
		$massage='
		<div style="z-index:  9999;  position:  fixed;  bottom: 0; right:20px;" class="alert alert-'.$alerttype.' alert-dismissable fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>'.$msg.'</strong>
             
    </div>';
	}
	echo  $massage;
	}

 
  // Compress image
function compressImage($source, $destination, $quality) {
            $info = getimagesize($source);
            if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($source);
            elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($source);
            elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($source);
            imagejpeg($image, $destination, $quality);
        }

//multiple image upload
function multiImageUploader($dirPhoto){
    if($_FILES['img']['size']>0){   
    $imgarray = array();
    foreach($_FILES['img']['name'] as $key=>$val){
        $target_file = md5(uniqid(rand(), true))."_".($_FILES['img']['name'][$key]);
        compressImage($_FILES['img']['tmp_name'][$key],$dirPhoto.$target_file,80);
        if(move_uploaded_file($_FILES['img']['tmp_name'][$key],$dirPhoto.$target_file)){
            $imgarray[] = $target_file;
        }
    }
    // $img=json_encode($imgarray);
    return $imgarray;
    }else{
        return 'No Image';
    }
}
?>