<?php 
include 'session.php';
require_once('functions.php');

if(isset($_POST['addmainmenu'])){
	$main_menu=$_POST['main_menu'];
	if (empty($main_menu)) {
		errorMassageBox("Please enter Main menu name.", "danger");
	}else{
		$addmainmenustm=insertUpdateDelete("INSERT INTO `menu`(`main_menu`, `uploaddate`) VALUES ('".$main_menu."', NOW())");
		if ($addmainmenustm) {
			errorMassageBox("Main Menu added successfully.", "success");
		}else{
			errorMassageBox("Please try again...", "danger");
		}
	}
}

if(isset($_POST['addsubmenu'])){
	$main_menu=$_POST['main_menu'];
	$submenu=$_POST['submenu'];
	if (empty($main_menu)) {
		errorMassageBox("Please select main menu tab.", "danger");
	}else if (empty($submenu)) {
		errorMassageBox("Please enter Sub menu name.", "danger");
	}else{
		$addsubmenuStm=insertUpdateDelete("INSERT INTO `submenu`(`main_menu`, `submenu`, `uploaddate`) VALUES ('".$main_menu."', '".$submenu."', NOW())");
		if ($addsubmenuStm) {
			errorMassageBox("Sub Menu added successfully.", "success");
		}else{
			errorMassageBox("Please try again...", "danger");
		}
	}
}

if(isset($_GET['delete_submenu']) && !empty($_GET['delete_submenu'])){
            if (insertUpdateDelete("DELETE FROM `submenu` WHERE id='".$_GET['delete_submenu']."'")) {
                  echo '<script>
                  alert("Sub-menu has been deleted successfully.");
                  window.location.href="menu.php";
                  </script>';
            }else{
                  errorMassageBox("Please try after sometime.", "danger");
            }
      }
 if(isset($_GET['delete_main_menu']) && !empty($_GET['delete_main_menu'])){
            if (insertUpdateDelete("DELETE FROM `menu` WHERE id='".$_GET['delete_main_menu']."'")) {
                  echo '<script>
                  alert("Main-menu has been deleted successfully.");
                  window.location.href="menu.php";
                  </script>';
            }else{
                  errorMassageBox("Please try after sometime.", "danger");
            }
      }     


 $main_menu_table="";
      $main_menu_table_stm=selectData("SELECT * FROM `menu` ORDER BY `menu`.`id` DESC");
$select_main_menu="";
      if (count($main_menu_table_stm)>0){
            $i=1;
            foreach ($main_menu_table_stm as $value) {
            	$select_main_menu.='
            	<option value="'.$value->id.'">'.ucfirst($value->main_menu).'</option>';
            	$submenulist="";
            	$selectsubmenu=selectData("SELECT * FROM `submenu` WHERE main_menu='".$value->id."'");
            	if(count($selectsubmenu)>0){
            		$j=1;
            		foreach ($selectsubmenu as $data) {
            			$submenulist.=$j++.'. '.$data->submenu.'
            		<a class="deleteclass" href="menuedit.php?submenu='.$data->id.'" title="Edit"><i class="fa fa-pencil-square" ></i>
                  </a>
                  <a class="deleteclass" href="menu.php?delete_submenu='.$data->id.'" title="delete"><i class="fa fa-trash-o" ></i>
                  </a>
                  <br>';
            		}
            	}

                  $main_menu_table.= '
                  <tr>
                  <td>'.$i++.'</td>                
                  <td>'.$value->main_menu.'</td>
                  <td>'.$submenulist.'</td>
                  <td> 
                  <a class="deleteclass" href="menuedit.php?main_menu='.$data->id.'" title="Edit"><i class="fa fa-pencil-square" ></i>
                  </a>                
                  <a class="deleteclass" href="menu.php?delete_main_menu='.$value->id.'" title="Delete the menu">
                  <i class="fa fa-trash-o" ></i>
                  </a>
                  </td>
                  </tr>';
            }
      }

?>