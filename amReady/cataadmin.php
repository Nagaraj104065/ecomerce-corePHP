<?php session_start();
?>
<?php 
if(isset($_SESSION['usr_id'])){
?>

<html>
<head>
<style>
input{
	padding:20px;
	margin:20px;
}
</style>
</head>
<body bgcolor="#444">
<h1  style="background-color:#222;color:#fff;padding:35px;">catagories updatating for admin panel</h1>
<div style="background-color:#555;color:#fff;margin-top:0px;margin-left:10%;width:50%;padding:35px;">
<center>
<form method="POST" enctype="multipart/form-data">
<input type="text" name="cataname" placeholder="Enter the product catagories name"><br />
<input type="text" name="subcat" placeholder="enter the sub catagories"><br />
<select name="custtype">
<option value="men">men</option>
<option value="women">women</option>
<option value="kid">kid</option>
<option value="all">all</option>
</select><br />
<input type="submit" name="cata" value="put catagories into the database">
</form>
</center>
</div>
<?php
error_reporting(0);
if(isset($_POST['cata'])){
include("connection.php");
mysqli_set_charset($conn,"utf8");
$subcat=$_POST['subcat'];
$subcat=htmlentities(mysqli_real_escape_string($conn,$subcat));
$cataname=$_POST['cataname'];
$cataname=htmlentities(mysqli_real_escape_string($conn,$cataname));
$type=$_POST['custtype'];;
$type=htmlentities(mysqli_real_escape_string($conn,$type));
$sql = "INSERT INTO `catagories` (`cust_type`,`cname`,`subcat`) VALUES ('$type','$cataname','$subcat')";
$result=mysqli_query($conn,$sql);
if($result){
	?>
	<script>alert("inserted");</script><?php
}
else{
	?>
	<script>alert("not inserted");</script>
	<?php
	echo "not inserted".mysqli_error(0);
}
}
?>

</body>
</html>

<?php }
else{
	include("404.html");
}
?>
