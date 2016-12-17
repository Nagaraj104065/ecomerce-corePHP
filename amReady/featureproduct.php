<?php session_start();
?>
<?php 
if(isset($_SESSION['usr_id'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopwalkin | Rigistration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script> 
<!--
$(document).ready(function(){
	$("#strid").on("change",function(){
		var vall=$(this).val();
		 $("#strname").html(vall);
		$.ajax({url:'strtex.php',
		     type:'post',
			 data:{'strid':vall},
			 success:function(a,b){
				 $("#strname").html(a);
				  $("#strname1").val(a);
			
			 }
			 });
	});
	
///-->
</script>
<style>
<!--
body{
	background:-webkit-linear-gradient(top,#ccff99 70%,#9999ff, #8B9DC3);
	background-attachment:fixed;
	padding:5px;
	color:#456;
}
.datas{
	padding:15px;
	margin:15px;
	position:absolute;
	left:30%;
	top:10%;
}
table,tr{
		padding:15px;
	margin:15px;
}
td{
	padding:5px;
}
h1{
	color:#ff6600;
}
-->
</style>
<?php
if(isset($_POST['submit'])){
$price=htmlentities($_POST['price']);
$delamnt=htmlentities($_POST['delamnt']);
$detail=htmlentities($_POST['details']);
$name=htmlentities($_POST['name']);
$storeid=htmlentities($_POST['storeid']);
$storename=htmlentities($_POST['storename']);
$model=htmlentities($_POST['model']);
$brand=htmlentities($_POST['brand']);
$color=htmlentities($_POST['color']);
$size=htmlentities($_POST['size']);
$avail=htmlentities($_POST['avail']);
$offer=htmlentities($_POST['offer']);
$cust_type=htmlentities($_POST['cust_type']);
$cname=htmlentities($_POST['cname']);
$subcat=htmlentities($_POST['subcat']);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
include("connection.php");
//$sql="INSERT INTO `fproduct` (`image`,`price`,`details`,`name`,`storeid`,`catagories`) VALUES 	('$target_file','$price','$detail','$name','$storeid','$cata');";
$sql = "INSERT INTO `fproduct` (`image`, `price`, `details`, `brand`, `color`,`storeid`, `cname`,`cust_type`,`subcat`, `offers`,`size`,`delamnt`,`available`,`storename`,`name`) VALUES ('$target_file','$price','$detail','$brand','$color','$storeid','$cname','$cust_type','$subcat','$offer','$size','$delamnt','$avail','$storename','$name');";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<h1>inserted</h1>";
}else{
	echo "database not inserted".mysqli_error($conn);
}
	mysqli_close($conn);
}
?>
</head>
<body onload="myFunction()" style="margin:0;">



<div>
<h1>UPLOAD PRODUCTS for FEATURE</h1>
</div>
<div class="datas">
<form method="POST" enctype="multipart/form-data" >
<table>
<tr>
<td>
<label>upload image</label>
</td>
<td>
 <input type="file" name="fileToUpload">
</td>
</tr>
<tr>
<td>
<label>pricce</label>
</td>
<td>
<input type="text" placeholder="Enter the price" name="price">
</td>
</tr>
<tr>
<td>
<label>name</label>
</td>
<td>
<input type="text" placeholder="Enter the item name" name="name">
</td>
</tr>
<tr>
<td>
<label>Delivery Amount</label>
</td>
<td>
<input type="text" placeholder="Enter the delivery amount" name="delamnt">
</td>
</tr>
<tr>
<td>
<label>model</label>
</td>
<td>
<input type="text" placeholder="Enter the model" name="model">
</td>
</tr>
<tr>
<td>
<label>brand</label>
</td>
<td>
<select name="brand">
<option>Select brands</option>
<?php
include("connection.php");
$sqli=" SELECT * FROM `tbl_brands` ;";
$ress=mysqli_query($conn,$sqli);
while($row1=mysqli_fetch_assoc($ress)){
	?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['brand'];?></option>
<?php 
}
?>

</select>
</td>
</tr>
<tr>
<td>
<label>color</label>
</td>
<td>
<select name="color">
<option>Select Color</option>
<?php
include("connection.php");
$sqli1=" SELECT * FROM `color` ;";
$ress1=mysqli_query($conn,$sqli1);
while($row2=mysqli_fetch_assoc($ress1)){
	?>
<option value="<?php echo $row2['colorid'];?>"><?php echo $row2['color'];?></option>
<?php 
}
?>

</select>
</td>
</tr>
<tr>
<td>
<label>Size</label>
</td>
<td>
<select name="size">
<option>Select Size</option>
<?php
include("connection.php");
$sqli111=" SELECT * FROM `size` ;";
$ress111=mysqli_query($conn,$sqli111);
while($row12=mysqli_fetch_assoc($ress111)){
	?>
<option value="<?php echo $row12['id'];?>"><?php echo $row12['size'];?></option>
<?php 
}
?>

</select>
</td>
</tr>
<tr>
<td>
<label>name</label>
</td>
<td>
<input type="text" placeholder="Enter item name" name="name">
</td>
</tr>
<tr>
<td>
<label>store id</label>
</td>
<td>
<input type="number" placeholder="Enter the store id" name="storeid" id="strid" value="0">
<input type="hidden" name="storename" id="strname1" value=''>
<p id="strname">enter the store id stores</p>
</td>
</tr>

<tr>
<td>
<label>Availability</label>
</td>
<td>
<input type="number" placeholder="Enter the how many items available" name="avail">
</td>
</tr>
<tr>
<td>
<label>Details</label>
</td>
<td>
<input type="text" placeholder="Enter your Mobile no" name="details" >
</td>
</tr>
<tr>
<td>
<label>offer</label>
</td>
<td>
<input type="text" placeholder="Enter the offer" name="offer">
</td>
</tr>
<tr>
<td>
<label>customer type</label>
</td>
<td>
<select name="cust_type">
<option>Choose customer type</option>
<option value="men">men</option>
<option value="women">women</option>
<option value="kid">kid</option>
<option value="all">all</option>
</select>
</td>
</tr>
<tr>
<td>
<label>catagoerie name</label>
</td>
<td>
<input type="text" placeholder="Enter the catagorie name shirt ,accessories" name="cname">
</td>
</tr>
<tr>
<td>
<label>sub catagoerie name</label>
</td>
<td>
<input type="text" placeholder="Enter the sub catagorie name " name="subcat">
</td>
</tr>
<tr>
<td>
<input class="btn btn-default" type="submit" value="submit" name="submit">
</td>
<td>
<input class="btn" type="reset" value="Reset" >
</td>
</tr>
</form>

</body>
</html>


<?php }
else{
	include("404.html");
}
?>















































