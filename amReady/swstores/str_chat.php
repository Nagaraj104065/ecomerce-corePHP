<?php 
session_start();
?>
<?php
if(isset($_POST['ctd'])){
include("connection.php");
$ctd=htmlentities(mysqli_real_escape_string($conn,$_POST['ctd']));
$std=htmlentities(mysqli_real_escape_string($conn,$_POST['std']));
$msg=htmlentities(mysqli_real_escape_string($conn,$_POST['send']));
$sqlii="select `name` from `stores` where `strid`='$ctd';";
$resultii=mysqli_query($conn, $sqlii);
$name=mysqli_fetch_assoc($resultii);
$msg11='   sent by'.$_SESSION['str_name'];
$msg1=$msg.$msg11;
$sql = "INSERT INTO `chat` (`storeid`,`sent`) VALUES ($ctd,'$msg');";
$sqli = "INSERT INTO `chat` (`cust_id`,`recived`) VALUES ($std,'$msg1');";
$result=mysqli_query($conn, $sql);
$resulti=mysqli_query($conn, $sqli);
if($result){
	echo "sent";
	header("location:storechat.php?swid=$std");
}
else{
	echo "not sent".mysqli_error($conn);
}
mysqli_close($conn);
}
else{
	echo 'file not found';
}
?>
