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
	
});

</script>
<style>
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
</style>
</head>
<body onload="myFunction()" style="margin:0;">



<div>
<h1>UPLOAD PRODUCTS for Regular Items</h1>
</div>
<div class="datas">
<form action="itemup.php" method="POST" enctype="multipart/form-data" >
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













































