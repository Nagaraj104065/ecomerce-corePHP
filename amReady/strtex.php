<?php
if(isset($_POST['strid'])){
include("connection.php");
$str=$_POST['strid'];
$sqli1111=" SELECT * FROM `stores` where strid='$str';";
$ress1111=mysqli_query($conn,$sqli1111);
$num=mysqli_num_rows($ress1111);
if($num >0){
while($row122=mysqli_fetch_assoc($ress1111)){
	?>
<?php echo $row122['strname'];?>
<?php 
}
}
else{
	echo "no stores <a href='storedetail.php'>enter the new store detail</a>";
}
mysqli_close($conn);
}
else{
	echo "file not found";
}
?>