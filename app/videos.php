<?php 
include 'session.php';
require_once('functions.php');
if(empty($_SESSION['admin_email'])) {
header('location: index.php');
exit();
}


if (isset($_POST['addvideoscategory'])) {
      $category=$_POST['category'];
            $stm=insertUpdateDelete("INSERT INTO `video_category`(`category`, `uploaddate`) VALUES ('".$category."', NOW())");
                  if($stm) {
                        errorMassageBox("Add successfully.", "success");
                  }else{
                        errorMassageBox("try again.", "danger");
                  }
}


if (isset($_POST['addvideos'])) {
      $title=$_POST['title'];
      $category=$_POST['category'];
	$link=$_POST['link'];
		$stm=insertUpdateDelete("INSERT INTO `videos`( `title`, `category`, `link`, `upload`) VALUES ('".$title."', '".$category."', '".$link."', NOW())");
            	if($stm) {
            		errorMassageBox("Add successfully.", "success");
            	}else{
            		errorMassageBox("try again.", "danger");
            	}
}

         if(isset($_GET['delete_videos']) && !empty($_GET['delete_videos'])){
            if (insertUpdateDelete("DELETE FROM `videos` WHERE id='".$_GET['delete_videos']."'")) {
                  echo '<script>
                  alert("Video has been deleted successfully.");
                  window.location.href="videos.php";
                  </script>';
            }else{
                  errorMassageBox("Please try after sometime.", "danger");
            }
      }

      $videostable="";
      $videostable_stm=selectData("SELECT * FROM `videos` ORDER BY `videos`.`id` DESC");
      if (count($videostable_stm)>0) {
            $i=1;

            foreach ($videostable_stm as $value) {
                  $category;
                        if ($value->category=='1') {
                            $category="Bhajan Gallery";
                        }else if ($value->category=='2'){
                             $category="Motivational Stories";
                        }else if ($value->category=='3'){
                             $category="Our Programme";
                        }
                  $videostable.= '
                  <tr>
                  <td>'.$i++.'</td>                 
                  <td>'.$value->title.'</td>                 
                  <td>'.$category.'</td>                 
                  <td>'.$value->link.'</td>
                  <td>                 
                  <a class="deleteclass" href="videos.php?delete_videos='.$value->id.'" title="delete">
                  <i class="fa fa-trash-o" ></i>
                  </a>
                  </td>
                  </tr>';
            }
      }


 


?>