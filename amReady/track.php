 <?php
session_start();
if(isset($_SESSION['id'])){
	?>
	
	<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="cache-control" content="no-cache"/>  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="R.nagaraj ">
<meta charset="utf-8">

    <!-- description about the site //-->
    
    <meta name="description" content="shopwalkin is your best shopping companion">
  
   <!-- keywords for search engine //-->
     
   <meta type="keywords" content="shopwalkin, online-shop, shop, offline store">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script> 
   $(document).ready(function(){
	
		  
  });
  </script>
	<body>
	<?php
include("connection.php");
$id=$_SESSION['id'];
    $ord="SELECT * FROM `orders` WHERE cust_id=$id;";
	$exe=mysqli_query($conn,$ord);
	$num=mysqli_num_rows($exe);
	echo $num."orders";?>
		<table class="table-bordered table-hover" style="width:90%;margin-left:auto !important;margin-right:auto !important;padding:15px;">
	<tr>
	<th>product name</th>
	<th>product image</th>
	<th>Price</th>
	<th>Size</th>
    <th>order status</th>
	<th>cancel option</th>
	</tr>
	<?php
	while($sol=mysqli_fetch_assoc($exe)){
		$itemid=$sol['itemid'];
		$table=$sol['table'];
	?>
	<tr>
	<td><?php 
	
    $sql="SELECT `name`,`image` FROM $table WHERE itemid=$itemid;";
	$item=mysqli_query($conn,$sql);
	$pro=mysqli_fetch_assoc($item);
    ?>
	<?php echo $pro['name']; ?>
	</td>
	<td><img src="<?php echo $pro['image']; ?>" alt="product image" height="50px" width="50px"></td>
	<td><?php echo $sol['amount']; ?></td>
		<td><?php echo $sol['size']; ?></td>
	<td><?php echo $sol['status']; ?>
	<td><a href="cancel.php?action=cancel&nage=<?php echo $itemid;?>&nags=<?php echo $table;?>&id=<?php echo $sol['id']; ?>" id="cancel">cancel</a></td>
	</tr>
	
	<?php	
}
?></table>
</body>
</html><?php
}
	?>
