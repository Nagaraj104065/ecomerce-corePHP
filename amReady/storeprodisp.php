<!doctype HTML>
<html>
<head>
<style>

*{
	text-decoration:none;
	-webkit-user-select:none;
}
body{
	background:#eee;
	background-attachment:fixed;
	color:#888 !important;
}
@-webkit-keyframes nimate{
	0%{
		left:-550px;
		background:-webkit-linear-gradient(top,#300,#500 70%);
	}
	100%{
		left:100px;
		background:-webkit-linear-gradient(top,#303,#055 70%);
	}
}
.im:hover{
		box-shadow:5px 5px 2px #333,-5px 0px 2px #333;
}
a{
	color:#888;
}
.relprod{
	width:90%;
	outline:1px solid #ddd;
	height:50%;
	-webkit-animation:animaterel 2s ease-in;
	animation:animaterel 5s;
	position:relative;
	-webkit-transition:2s;
	margin-right:auto;
	margin-left:auto;
	color:#888 !important;
	display:-webkit-flex;
	margin-top:5%;
		background:#fff;
	
}
.prod{
	display:inline-block;
	margin:25px;
	border:1px solid #eee !important;
}
@-webkit-keyframes nimaterel{
	0%{
		width:0px;
		right:0px;
		background:-webkit-linear-gradient(top,#030,#540 70%);
	}
	100%{
		right:100px;
		background:-webkit-linear-gradient(bottom,#343,#055 70%);
	}
}
.tab{
border:1px dotted #888 !important;	
}
input[type="number"]{
	width:30px;
}
input[type="submit"]{
	padding:15px;
	line-height:2;
	width:14em;
	color:#888;
	background:#550000;
	border:0px;
}
.a{
	padding:15px;
	line-height:2;
	width:14em;
	color:#888 !important;
	background:#550000;
	border:0px;
}
li{
	list-style:none;
}
button{
	padding:5px;
	line-height:1.5;
	width:8em;
	color:#eee !important;
	background:#550000;
	border:0px;
}
</style>
</head>
<body> 
<div class="container-fluid">
<div class="row">
<div class="col-lg-6"> 
<form class="navbar-form navbar-right" role="search" method="POST" enctype="multipart/form-data">
        <div class="form-group">
		<select name="item"><?php 
		include("connection.php");
		$sql="SELECT strid,strname FROM stores";
		$res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res)){
		?>
          <option value="<?php echo $row['strid']; ?>"><?php echo $row['strname']; ?></option>
		<?php }?>
		</select>
		  
        </div>
		</div>
		<div class="col-lg-6"> 
        <button type="submit" class="btn btn-default" name="searchstr" title="check product at particular stores">Search product at stores</button>
		</div>
</form>
</div>
</div>

<h1>SHOPWALKIN PRODUCT</h1> 
 <div class="relprod">
<div class="prodetail">

<?php 

if(isset($_POST['searchstr'])){
include("connection.php");
$items=$_POST['item'];
$item=strtolower("$items");
$sql = "SELECT * FROM `items` where `storeid`='$item' ORDER BY `itemid` DESC LIMIT 0,12;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="prod">
<a href="prored.php?pro=<?php echo $row['itemid']; ?>&tab=items"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" ></a>
<ul>
<li>&#8377;<span><?php echo $row['price']; ?></span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="items">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
</ul>
</div>
<?php 
}
mysqli_close($conn);
}
?>

</div>
</div>


<h1>OFFER PRODUCT</h1> 
 <div class="relprod">
<div class="prodetail">

<?php 

if(isset($_POST['searchstr'])){
include("connection.php");
$items=$_POST['item'];
$item=strtolower("$items");
$sql = "SELECT * FROM `offrproduct` where `storeid`='$item' ORDER BY `itemid` DESC LIMIT 0,12;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="prod">
<a href="prored.php?pro=<?php echo $row['itemid']; ?>&tab=offrproduct"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" ></a>
<ul>
<li>&#8377;<span><?php echo $row['price']; ?></span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="items">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
</ul>
</div>
<?php 
}
mysqli_close($conn);
}
?>

</div>
</div>


<h1>RECOMENDED PRODUCT</h1> 
 <div class="relprod">
<div class="prodetail">

<?php 

if(isset($_POST['searchstr'])){
include("connection.php");
$items=$_POST['item'];
$item=strtolower("$items");
$sql = "SELECT * FROM `recproduct` where `storeid`='$item' ORDER BY `itemid` DESC LIMIT 0,12;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="prod">
<a href="prored.php?pro=<?php echo $row['itemid']; ?>&tab=recproduct"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" ></a>
<ul>
<li>&#8377;<span><?php echo $row['price']; ?></span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="items">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
</ul>
</div>
<?php 
}
mysqli_close($conn);
}
?>

</div>
</div>

<h1>FEATURED PRODUCT</h1> 
 <div class="relprod">
<div class="prodetail">

<?php 

if(isset($_POST['searchstr'])){
include("connection.php");
$items=$_POST['item'];
$item=strtolower("$items");
$sql = "SELECT * FROM `fproduct` where `storeid`='$item' ORDER BY `itemid` DESC LIMIT 0,12;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="prod">
<a href="prored.php?pro=<?php echo $row['itemid']; ?>&tab=fproduct"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" ></a>
<ul>
<li>&#8377;<span><?php echo $row['price']; ?></span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="items">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
</ul>
</div>
<?php 
}
mysqli_close($conn);
}
?>

</div>
</div>
<?php include("footer.php");?>
</body>
</html>
 