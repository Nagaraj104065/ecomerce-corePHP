<?php session_start();
?>
<?php 
if(isset($_SESSION['usr_id'])){
?>

<!DOCTYPE html>
<html>
<head>
<style>
input{
	padding:20px;
	margin:20px;
	background-color:#222;
	width:40%;
	color:white;
}
textarea{
	padding:20px;
	margin:20px;
	background-color:#222;
	-webkit-box-sizzing:border-box;
	color:white;
}

</style>
<head>
<?php
if(isset($_POST['offer'])){
include("queryexec.php");
$img="photos/";
$img.=htmlentities($_FILES['slideimages']['name']);
$no=htmlentities($_POST['no']);
$sql = "INSERT INTO `slides` (`image`, `offers`) VALUES ('$img','$no')";
if($sql){
	echo "<mark>inserted</mark>";
}
else{
echo "<mark>not inserted</mark>";
}
execute($sql);
uptest("slideimages");
}
?>
</head>
<body bgcolor="#004">
<h1  style="background-color:#005;color:#fff;padding:35px;margin-left:-10px;margin-right:-10px;margin-top:-10px;position:fixed;height:5%;width:100%;display:block;">update slide detail</h1>
<div style="background-color:#008;color:#fff;margin-top:0px;margin-left:10%;width:50%;padding:35px;box-sizzing:border-box;margin-top:0%;position:;">
<br />
<br />
<br />
<br />
<br />
<br />
<form method="POST" enctype="multipart/form-data">
<input type="file" name="slideimages" value="choose image"><br />
<input type="number" name="no" placeholder="enter the offer"><br />
<input type="submit" name="offer" value="update offer">
</form>

</div>
</body>
</html>
<?php }
else{
	include("404.html");
}
?>
