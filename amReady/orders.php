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
  nj=$.noConflict();
  nj(document).ready(function($){
	  nj("#promo").on("click",function(e){
		var pid=nj("#promoid").val();  
		nj("#promostatus").text(pid);
		nj("#proid").val(pid);
		nj.ajax({
			url:'promcheck.php',
			type:'POST',
			data:{'proid':pid},
			success:function(a,b){
				nj("#promostatus").html(a+b);
				nj("#proid").val(a);
				nj("#nagaa").text(a);
				alert(b);
			}
		});
	  });
  });
  </script>
  </head>
  <body>
  <?php
//if(isset($_POST['click2pay'])){
include("connection.php");
$id=$_SESSION['id'];
if($_POST['cash']==''){
echo "select cash method";
      echo "<script>alert('select cash method');</script>";
	header("location:test.php");
}
else{
$pmethod=$_POST['cash'];
$itemid=$_POST['nagd'];
$tab=$_POST['nagt'];
$quant=1;
//echo "<h1>".$id.$pmethod.$itemid.$tab."</h1>";
$sql ="SELECT `address`,`name` FROM `test` WHERE id=$id";
$sql2="SELECT * FROM `$tab` WHERE `itemid`=$itemid;";
$exe=mysqli_query($conn,$sql);
$exe1=mysqli_query($conn,$sql2);
$user=mysqli_fetch_assoc($exe);
$items=mysqli_fetch_assoc($exe1);
}
//$sql = "INSERT INTO `orders` (`id`, `itemid`, `cust_id`, `status`, `amount`, `ordate`, `deldate`, `candate`) VALUES (\'1\', \'1\', \'1\', \'processing\', \'1233\', \'12-12-2016\', \'\', \'\')";
?>
<div class="container-fluid">
<img src="final logo.png" alt="logo" height="50px" style="margin-top:-10px;"/><h3>Review your orders</h3>
<div class="row">
<div class="col-lg-9">
<div style="border:1px solid #eee">
<div class="row">
<div class="col-lg-3">
<div style="border:1px solid #eee;margin:20px;pading:10px;height:250px;">
<h4>Shipping Address</h4>
<hr />
<h5><?php echo $user['name']; ?></h5>
<br/>
<address><?php echo $user['address']; ?></address>
</div>
</div>
<div class="col-lg-3" style="border:1px solid #eee;margin:20px;pading:10px;height:250px;">
<h4>Payment Method</h4><hr/><?php echo $pmethod; ?></p>

</div>
<div class="col-lg-3" style="border:1px solid #eee;margin:20px;pading:10px;height:250px;">
<form action="shipping.php" method="POST" enctype="multipart/form-data">
<label>Promotional code
</label>
<hr /><input type="text" id="promoid" name="quant" value="" placeholder="enter your promo id" style="border:1px solid #eee;padding:10px;width:250px;" >
<br />
<div name="promo" id="promo" class="btn btn-info" >submit</div>
<div id="promostatus"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3" style="border:1px solid #eee;height:290px;"> 
<div style="margin:10px;pading:20px;">
<div>
<button type="submit" name="order" class="btn btn-info" value="place your order">
Place Your Oder
</button>
</div>
<hr />
<table>
<input type="hidden" value="<?php echo $items['delamnt']; ?>" name="del">
<input type="hidden" value="<?php echo $user['address']; ?>" name="naga">
<input type="hidden" value="<?php echo $pmethod; ?>" name="pmethod">
<tr><td colsapn="2" align="center">Order Summery</td></tr>
<tr><input type="hidden" value="<?php echo $tab; ?>" name="tab">
<td>Item:</td>  <td><?php echo $items['price']; ?><input type="hidden" value="<?php echo $itemid; ?>" name="nagd"></td></tr>
<tr><td>Delivery charges:</td><td><?php echo $items['delamnt']; ?></td></tr>
<tr><td>Offer:</td><td><?php echo $items['offers']; ?></td></tr>
<tr><td><p>Total</p></td><td><?php $total=($quant*($items['price']-($items['price']/(100/$items['offers']))));?><?php echo $total; ?></td></tr>
<tr><td colspan="2">----------------------</td></tr> 
<tr>
<td>
<label>Size</label>
</td>
<td>
<select name="size" required>
<option>Select Size</option>
<?php
include("connection.php");
$sqli111=" SELECT * FROM `size` ;";
$ress111=mysqli_query($conn,$sqli111);
while($row12=mysqli_fetch_assoc($ress111)){
	?>
<option value="<?php echo $row12['size'];?>"><?php echo $row12['size'];?></option>
<?php 
}
?>

</select>
</td>
</tr>
<tr><td>Quantity:</td><td><input type="number"  style="width:70px;" id="quant" name="quant" value="<?php echo $quant; ?>"></td></tr>
<tr><td>promoapliance:</td><td><input type="hidden"  style="width:70px;" id="proid" name="proid" value="0"><span id="nagaa"></span></td></tr>
<input type="hidden" value="<?php echo $total; ?>" name="amount">
</table>
</form>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<u><h3>Estimated delivery within <mark>24 HOURS</mark></h3></u>
<div class="row">
<div class="col-lg-3">
<img src="<?php echo $items['image'];?>" height="250px" alt="product image">
</div>
<div class="col-lg-3">
<solid>Product Name:<?php echo $items['name'];?></solid><br />
<p>Price :<?php echo $items['price'];?></solid></p>
<p>Offer :<?php echo $items['offers'];?></solid></p>
<i>quantity is:1</i><br/>
<address>Strore is:<?php echo $items['storename'];?></address>
</div>
</div>
</div>
</div>
<?php
//}
?>
<footer>
<div class="container" style="top:90% !important;">
<hr />
<div class="text-center">
<p class="small">Need help?Check our <a href="#">help pages or contact us 24x7</a></p>
<p><a href="#">Conditions of Use | Privacy Notice </a>© 2016,Shopwalkin.com, Inc. and its affiliates</p>
</div>
</div>
</footer>
</body>
</html>
<?php
}
?>