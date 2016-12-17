<?php
include("connection.php");
session_start();
if(isset($_SESSION['str_id'])){
$iid=$_SESSION['str_id'];
$stt="UPDATE `chat` SET `status` = 'offline' WHERE `chat`.`cust_id` ='$iid' ";
$res=mysqli_query($conn , $stt);
$stt1="UPDATE `stores` SET `status` = 'offline' WHERE `strid` ='$iid' ";
$res1=mysqli_query($conn , $stt1);
if($res){
unset($_SESSION['str_id']);
unset($_SESSION['str_name']);
header('location:index.php');
}
}
else{
	include("404.html");
}
?>