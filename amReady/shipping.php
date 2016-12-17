<?php
session_start();
if(isset($_SESSION['id'])){
if(isset($_POST['order'])){
include("connection.php");
$id=$_SESSION['id'];
$itemid=strip_tags(mysqli_real_escape_string($conn,$_POST['nagd']));
$table=strip_tags(mysqli_real_escape_string($conn,$_POST['tab']));
$quantity=strip_tags(mysqli_real_escape_string($conn,$_POST['quant']));
$amount=strip_tags(mysqli_real_escape_string($conn,$_POST['amount']));
$address=strip_tags(mysqli_real_escape_string($conn,$_POST['naga']));
$proid=strip_tags(mysqli_real_escape_string($conn,$_POST['proid']));
$del=strip_tags(mysqli_real_escape_string($conn,$_POST['del']));
$size=strip_tags(mysqli_real_escape_string($conn,$_POST['size']));
if($proid>0){
$per=100/$proid;
$amount=(($amount/$per)*$quantity)-$del;
}else{
$amount=(($amount)*$quantity)-$del;
}
$pmethod=$_POST['pmethod'];
$date=date("d-m-Y,h:ia");
$sql = "INSERT INTO `orders` (`itemid`,`table`, `cust_id`,`quantity`, `status`, `amount`, `ordate`, `paymethod`,`address`,`size`) VALUES ('$itemid','$table','$id','$quantity','placed order','$amount','$date','$pmethod','$address','$size');";
$exe=mysqli_query($conn,$sql);
if($exe){
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
  <script></script>
  </head>
  <body style="background:#eee;">
  <div class="container">
  <h3><u>Your Shipping Detail</u></h3>

	<!--- review-->
	<div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Review Your Order & Complete Checkout
                    </h2>
                    <hr/>
                    <a href="test.php" class="btn btn-info" style="width: 100%;">Add More Products & Services</a>
                    <hr/>
                    <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="" method="post" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                     
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>Quantity</li>
                                                                    <li>Size</li>
                                                                    <li>promo appliance</li>
																	<li>deleiver charge</li>
                                                                </ul>
                                                            </td>
                                                            <td>
															 <ul>
															 <li><b><?php echo $quantity; ?></b></li>
                                                               <li> <b><?php echo $size; ?></b></li>
																<li><b><?php echo $proid; ?></b></li>
																<li><b><?php echo $del; ?></b></li>
																</ul>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;"><?php echo $amount; ?></span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;"><a style="width:100%;"
                                                                                        
                                                                                        href="trackorder.php"
                                                                                        class=" btn btn-success"
                                                                                        >Continue
                                            to Billing Information»</a></div>
                                    </h4>
                                </div>
                            </div>
               
                    
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>



	</body>
	</html>
	<?php
}
else{
	echo  "SORRY ! ERROR OCCURRED <a href='#'>CONTACT ADMIN</a>".mysqli_error($conn);
}
}}
else{
	include("404.html");
}
?>