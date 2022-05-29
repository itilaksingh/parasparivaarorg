<?php
include 'app/session.php';
require_once('app/functions.php');



$TotalRegisterUsers=count(selectData("SELECT * FROM `registration`"));
$totalcommunity=count(selectData("SELECT * FROM `community_tb`"));


if(isset($_POST['checkdublicatedata'])){
      $tablename=$_POST['tablename'];
      $columnname=$_POST['columnname'];
      $value=$_POST['value'];
      $resultcount=count(selectData("SELECT * FROM `".$tablename."` WHERE ".$columnname."='".$value."'"));
      if($resultcount>0){
            echo $value.' already exist!';
      }
} ?>