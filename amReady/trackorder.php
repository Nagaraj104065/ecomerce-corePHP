<?php
session_start();
if(isset($_SESSION['id'])){
include("connection.php");
$id=$_SESSION['id'];
?><!DOCTYPE html>
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
	  setInterval(function(){
		  $.ajax({
			  url:'track.php',
			  type:'get',
			  success:function(a,b){
				  $("#track").html(a);
				 
			  }
			  
		  });
	  }
		  ,3000);
		  
  });
  
  </script>
  </head>
  <body>
  <div class="container-fluid">
  <a href="index.php"><img src="final logo.png" alt="logo" height="50px" style="margin-top:-10px;"/>continue Shopping</a>
  </div>
  <div class="container">
  <div class="row">
  <div class="col-lg-10">
  	
	<div id="track">loading...</div>
	
	</div>
	</div>
	</div>
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
if(isset($_REQUEST['action'])){
	$itid=$_REQUEST['nage'];
	$ittab=$_REQUEST['nags'];
	$idd=$_REQUEST['id'];
	$del="DELETE FROM `orders` WHERE `orders`.`cust_id` = $id AND `itemid`=$itid AND `table`='$ittab' AND `id`=$idd;";
	$item=mysqli_query($conn,$del);
	if($item){
		$can="INSERT INTO `cancelPro` (`itemid`, `table`, `cust_id`) VALUES ($itid,'$ittab',$idd);";
		mysqli_query($conn,$can);
		echo "deleed".$del;
	}
	else{
		echo "error".mysqli_error($conn);?><script>alert("not delited");</script>
		<?php
	}
	}
mysqli_close($conn);
}?>