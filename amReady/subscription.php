<html>
<head>
</head>
<body>
<?php 
if(isset($_POST['subscribe'])){
include("connection.php");
$mail=$_POST['mail'];
$sql = "INSERT INTO `subscribtion` (`mail`) VALUES ('$mail')";
$res=mysqli_query($conn,$sql);
if(!$res){
	echo "not inserted".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<div>
<form method="POST" enctype="multipart/form-data">
<input type="mail" placeholder="enter your mail id" name="mail">
<input type="submit" value="subscribe me" name="subscribe">
</form>
</div>
</body>
</html>