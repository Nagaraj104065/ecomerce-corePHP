<?php
include("connection.php");
session_start();
if(isset($_SESSION['id'])){
$iid=$_SESSION['id'];
$stt="UPDATE `chat` SET `status` = 'offline' WHERE `chat`.`cust_id` ='$iid' ";
$res=mysqli_query($conn , $stt);
$stt1="UPDATE `test` SET `status` = 'offline' WHERE `id` ='$iid' ";
$res1=mysqli_query($conn , $stt1);
if($res){
unset($_SESSION['id']);
unset($_SESSION['name']);
session_destroy();
header('location:test.php');
}
}
else{
	include("404.html");
}
?>