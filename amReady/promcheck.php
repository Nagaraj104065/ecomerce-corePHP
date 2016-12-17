<?php
session_start();
if(isset($_SESSION['id'])){
if(isset($_POST['proid'])){
include("connection.php");
$z=0;
$proid=strip_tags(mysqli_real_escape_string($conn,$_POST['proid']));
$id=$_SESSION['id'];
$sql2="UPDATE `promodata` SET `status` = 'not valid' WHERE `promodata`.`promoid` = '$proid';";
$sql="SELECT `promodata`.`offers`,`promodata`.`status` FROM `promodata` INNER JOIN promousers ON promodata.id=promousers.id AND promousers.cust_id=$id AND promousers.promoid='$proid';";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num>0){
	$sol=mysqli_fetch_assoc($res);
	if($sol['status']=="valid"){
	print($sol['offers']);
	mysqli_query($conn,$sql2);
	}
	else{
    print("0");
	}
}
else{
	echo $z.mysqli_error($conn);
}
mysqli_close($conn);
}
}
?>