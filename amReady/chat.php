<?php
if(isset($_POST['ctd'])){
include("connection.php");
$ctd=htmlentities(mysqli_real_escape_string($conn,$_POST['ctd']));
$std=htmlentities(mysqli_real_escape_string($conn,$_POST['std']));
$msg=htmlentities(mysqli_real_escape_string($conn,$_POST['send']));
$sqlii="select `name` from `test` where `id`='$ctd';";
$resultii=mysqli_query($conn, $sqlii);
$name=mysqli_fetch_assoc($resultii);
$msg11='   sent by'.'  id  :'.$ctd.'  name  :'.$name['name'];
$msg1=$msg.$msg11;
$sql = "INSERT INTO `chat` (`cust_id`,`sent`) VALUES ($ctd,'$msg');";
$sqli = "INSERT INTO `chat` (`storeid`,`recived`,`sender_cust`) VALUES ($std,'$msg1','$ctd');";
$result=mysqli_query($conn, $sql);
$resulti=mysqli_query($conn, $sqli);
if($result){
	echo "sent";
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
