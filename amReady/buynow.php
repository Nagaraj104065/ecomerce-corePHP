<?php 
session_start();
if(isset($_SESSION['id'])){
	echo "<h1>welcome to Shopwalkin Payment Method</h1>".$_SESSION['name'];
	
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
  <!--
  	  nag=$.noConflict();
  nag(document).ready(function($){

	 nag("#credit").on("change",function(e){
		 nag("#cpane").addClass("well");
		 $("#opt").show();
	 });
		 nag("#credit1").on("change",function(e){
		nag("#cpane").removeClass("well");
         nag("#opt").hide();		
		 });
		 nag("#addcard").on("click",function(e){
			var name=nag("#cName").val();
			var no=nag("#cNum").val();
			var mt=nag("#Cmont").val();
			var yr=nag("#Cyear").val();
			if( name =='' && no =='' && mt =='' && yr ==''){
				alert("fill everything");
				
			}else{
			nag("#test").text(name+" "+no+" "+mt+" "+yr);
			nag.ajax({
				url:"nagac.php",
				type:"POST",
			    data:{'name':name,'number':no,'month':mt,'year':yr},
				success:function(d,s){
					nag("#test").html(d);
					alert(s);
				}
			});
			}
 			
		 });
		 
  });
  //-->
  </script>
<title>Shopwalkin | PAYMENT</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="bootstrap.css">
	<style>
	.smaal{
		width:80px;
		line-height:1.7;
		margin:12px;
		padding:10px;
		}
		.smaal1{
		width:200px;
		line-height:1.7;
		margin:12px;
		padding:10px;
		}
		.sathya{
	    width:150px;
		line-height:1.2;
		margin:12px;
		padding:5px;
		}
		#opt{
			display:none;
		}
	</style>
	
	</head>
	<body>
	
	<?php 
if(isset($_REQUEST['itemid'])){
include("connection.php");
$prodetail=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['itemid'])));
$swis=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['swis'])));
$storeid='';
if(is_numeric($swis)){
switch($swis){
	case 1:
	$table='slides';
	break;
	case 2:
	$table='fproduct';
	break;
	case 3:
	$table='recproduct';
	break;
	case 4:
	$table='offrproduct';
	break;
	case 5:
	$table='items';
	break;
}
$id1=$_SESSION['id'];
$sql=" SELECT `image` , `price` , `details`,`storeid` FROM $table WHERE `itemid`='$prodetail' ;";
$sql2="SELECT * FROM `test` WHERE id=$id1;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$res1=mysqli_query($conn,$sql2);
$row1=mysqli_fetch_assoc($res1);
if(!empty($row1['address'])){
?>
<div class="container">
<div class="row">
<div class="col-lg-10">
<div style="border:1px solid #eee;margin:30px;padding:20px;line-height:1.23;">
<h3 class="">Payment Method</h3>
<hr />
<form action="orders.php" enctype="multipart/form-data" method="POST">
<div id="cpane" >
<input type="radio" value="Credit Card" name="cash" id="credit">
<label>Credit Card </label><br/><img src="credit-cards.png" alt="Credit card methods"><label>We'll save this card so you can use it again later.</label>
<br/>
<table id="opt"><tr><th>Name</th><th>card Number</th><th>Expiration Date</th></tr>
<tr>
<td><input type="text" name="cName" class="form-group smaal1" id="cName" value=""></td>
<td><input type="text" name="cNum" class="form-group smaal1" id="cNum" value=""></td>
<td>
<select name="Cmont" class="form-group smaal" id="Cmont">
<option value="choose month">M<span class="caret"></span></option> 
<?php 
for($i=1;$i<=12;$i++){
?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}?>
</select>
<select name="Cyear" class="form-group smaal" id="Cyear">
<option value="choose year">Y<span class="caret"></span></option> 
<?php 
for($i=1991;$i<=2020;$i++){
?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}?>
</select>
</td>
</tr>
<tr>
<td colspan="3"><div class="btn btn-info" value="Add your Card" id="addcard">Add your Card</div></td>
</tr>
</table>
</div>
<br/>
<input type="radio" value="Depti Card" name="cash" id="credit1" required>
<label>Depit Card</label>
<br/>
<select name="dcard_name" class="sathya" required>
<option value="choose bank">Choose Bank<span class="caret"></span></option> 
<option value="State Bank of India">State Bank of India</option>
<option value="State Bank of India">State Bank of India</option>
<option value="State Bank of India">State Bank of India</option>
</select>
<br/>
<hr/>
<input type="radio" value="Cash on Delivery" name="cash" id="credit1" required>
<label>Cash on Delivery</label>
</div>
<hr/>
</div>
<div class="col-lg-2">
<div class="well">
<button type="submit" name="click2pay" class="btn btn-sucess">continue
</button>
</div>
</div>


</div>

<div class="row">
<div class="col-lg-12">
<input type="hidden" value="<?php echo $prodetail; ?>" name="nagd">
<input type="hidden" value="<?php echo $table; ?>" name="nagt">
<button type="submit" name="click2pay" class="btn btn-sucess">continue
</button>
</form>
</div>
</div>
</div>
<hr/>
<footer>
<div class="container" style="top:90% !important">
<div class="text-center">
<p class="small">Need help?Check our <a href="#">help pages or contact us 24x7</a></p>
<p><a href="#">Conditions of Use | Privacy Notice </a>© 2016,Shopwalkin.com, Inc. and its affiliates</p>
</div>
</div>
<div id="test"></div>
</footer>
<?php 
}
else{
?>
<form  method="POST" enctype="multipart/form-data">
<input type="text" placeholder="Enter your Street name with no" name="street">	
<input type="text" placeholder="Enter your city name" name="city">
<input type="number" placeholder="Enter your postal code" name="postal">		
<button type="submit" name="submitadress">Register Address</button>
</form>	
	</body>
	</html>
	
	<?php
	if(isset($_POST['submitadress'])){
		include("connection.php");
		$street=$_POST['street'];
		$id=$_SESSION['id'];
		//$street=mysqli_real_escape_string($conn,$street);
		$city=$_POST['city'];
		//$city=mysqli_real_escape_string($conn,$city);
		$postal=$_POST['postal'];
		//$postal=mysqli_real_escape_string($conn,$postal);*/
$sql = "UPDATE `test` SET `address` = '$street $city $postal' WHERE `test`.`id` =$id ;";
		$res=mysqli_query($conn,$sql);
		if($res){
			echo "submitted";
		}
		else{
			echo "not submitted".mysqli_error($conn);
		}
	}
?>
<?php
}}
}
else{
	include("404.html");
}
}
else{
	echo "sorry you have to login to buy the product";
	?>
	<script>
	function red(){
		alert("you have to sign in");
		window.open("test.php");
	}
	function fun(){
		setTimeout(red(),3000);
	}
	fun();
	</script>
	<?php
}
?>