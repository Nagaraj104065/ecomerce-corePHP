<?php
session_start();
if(isset($_SESSION['id'])){
include("connection.php");
$id=$_SESSION['id'];
if(isset($_REQUEST['action'])){
	$itid=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['nage'])));

	$ittab=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['nags'])));
	$idd=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['id'])));
	$date=date("d-m-Y,h:ia");
		if(is_numeric($itid) && is_numeric($idd)){
	$del="DELETE FROM `orders` WHERE `orders`.`cust_id` = $id AND `itemid`=$itid AND `table`='$ittab' AND `id`=$idd;";
	$item=mysqli_query($conn,$del);
	if($item){
		$can="INSERT INTO `cancelPro` (`itemid`, `table`, `cust_id`,`sno`,`date`) VALUES ($itid,'$ittab',$id,$idd,'$date');";
		mysqli_query($conn,$can);
		echo "Removed<a href='trackorder.php' onclick='javascript:window.history.back()' style='background:#888;color:#fff;';'>Back</a>";
	}
	else{
		echo "error".mysqli_error($conn);?><script>alert("not removed");</script>
		<?php
	}
	}
	
mysqli_close($conn);
}
else{
		include("404.html");
}
}
?>