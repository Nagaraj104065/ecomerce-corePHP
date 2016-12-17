<?php
 session_start();

 if(isset($_SESSION['order'])){
 $_SESSION['order'];}
  if(isset($_SESSION['itemsearch'])){
	$_SESSION['itemsearch'];
 }
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="R.nagaraj ">
<meta charset="utf-8">
    <!-- description about the site //-->
    
    <meta name="description" content="shopwalkin is your best shopping companion">
  
   <!-- keywords for search engine //-->
     
   <meta type="keywords" content="shopwalkin, online-shop, shop, offline store">
<title>Shopwalkin | HOME PAGE</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="css/css2home.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	   <?php 
if(isset($_POST['email'])){
include("connection.php");
$email=htmlentities(htmlentities(mysqli_real_escape_string($conn,$_POST['email'])));
$pass=htmlentities(htmlentities(mysqli_real_escape_string($conn,$_POST['pass'])));
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT `id`,`name` FROM `test` WHERE `email` = '$email' AND `password`='$pass'";
$res=mysqli_query($conn , $sql);
if($res){
 $row=mysqli_num_rows($res);
 if($row > 0){
	 while($row=mysqli_fetch_array($res)){
	$_SESSION['id']=$row["id"];
	$_SESSION['name']=$row["name"];
	$iid=$row['id'];
	$stt="UPDATE `chat` SET `status` = 'online' WHERE `chat`.`cust_id` = '$iid';";
	mysqli_query($conn , $stt);
	$stt1="UPDATE `test` SET `status` = 'online' WHERE `id` ='$iid' ";
    mysqli_query($conn , $stt1);
	echo "<script>alert('Your username and password is correct!');
	</script>";
	header("location:test.php");
}
	 
}
else{
	echo "<script>alert('Enter the Correct username and Password');</script>";
}

}
else{
	echo "query is not coorect".mysqli_error();
}
}
?>

</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand navbarheader" href="index.php" ><img src="final logo.png" alt="logo" height="50px" style="margin-top:-10px;"/></a> </div>
   
    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="feedback.php">Help <span class="sr-only">(current)</span></a> </li>
		  <li class="dropdown">
    <button class="btn btn-default dropdown-toggle btnn" type="button" data-toggle="dropdown">MEN
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="1111" href="#">clothing <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='clothing' AND `cust_type`='men'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

	<a href="index.php?option=cat&cname=<?php echo "clothing"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "men"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>

	        <li class="dropdown-submenu">
        <a class="test" tabindex="1111" href="#">Shoes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='shoes' AND `cust_type`='men'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

		<a href="index.php?option=cat&cname=<?php echo "shoes"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "men"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>

<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Accessories<span class="caret"></span></a>
        <ul class="dropdown-menu">
<?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='accessories' AND `cust_type`='men'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>
	<ul>
		<a href="index.php?option=cat&cname=<?php echo "accessories"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "men"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
	</ul>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
	  
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">lingeria and innerwear <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='lingeria and innerwear' AND `cust_type`='men'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

	<a href="index.php?option=cat&cname=<?php echo "lingeria and innerwear"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "men"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
	  
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">designer wear <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='designer wear' AND `cust_type`='men'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

	<a href="index.php?option=cat&cname=<?php echo "designer wear"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "men"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
    </ul>
  </li>
  
  
  <li class="dropdown">
    <button class="btn btn-default dropdown-toggle btnn" type="button" data-toggle="dropdown">WOMEN
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">clothing <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='clothing' AND `cust_type`='women'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

	<a href="index.php?option=cat&cname=<?php echo "clothing"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "women"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>

	        <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Shoes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='shoes' AND `cust_type`='women'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

		<a href="index.php?option=cat&cname=<?php echo "shoes"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "women"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>

<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Accessories<span class="caret"></span></a>
        <ul class="dropdown-menu">
<?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='accessories' AND `cust_type`='women'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>
	<ul>
		<a href="index.php?option=cat&cname=<?php echo "accessories"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "women"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
	</ul>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
	  
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">lingeria and innerwear <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='lingeria and innerwear' AND `cust_type`='women'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

	<a href="index.php?option=cat&cname=<?php echo "lingeria and innerwear"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "women"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
	  
	      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">designer wear <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='designer wear' AND `cust_type`='women'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>

	<a href="index.php?option=cat&cname=<?php echo "designer wear"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "women"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
    </ul>
  </li>
		
         <li class="dropdown">
    <button class="btn btn-default dropdown-toggle btnn" type="button" data-toggle="dropdown">Kid
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">boy <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='girl' AND `cust_type`='kid'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>
		<a href="index.php?option=cat&cname=<?php echo "boy"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "kid"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>

	        <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Girl <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php
include("connection.php");
$sql = "SELECT * FROM `catagories` WHERE `cname`='girl' AND `cust_type`='kid'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	?>
		<a href="index.php?option=cat&cname=<?php echo "boy"; ?>&subcat=<?php echo $row['subcat'];?>&cust_type=<?php echo "kid"; ?>"><li><?php echo $row['subcat']; ?>
	</li></a>
<?php	
}
mysqli_close($conn);
?>
  </ul>
      </li>
    </ul>
  </li>
		
		
      </ul>
    <!--  <form class="navbar-form navbar-right" role="search" action="searchitem.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Shopwalkin | Discover Products & Stores" name="item">
        </div>
        <button type="submit" class="btn btn-default" name="search">Searcht</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right hidden-sm">
        <li><a href="cartitems.php">Cart:<?php  if(isset($_SESSION['order'])){echo $_SESSION['order'];}?></a> </li>
        <li class="dropdown">    <?php 
	if(isset($_SESSION['id'])){
   	include("njaskh.php");
   ?> <a href="sign.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
		
		<?php echo $_SESSION['name']; ?><span class="caret"></span></a>
           <ul class="dropdown-menu" style="color:#fff !important;">
            <li><a href="trackorder.php">orders</a> </li>
            <li><a href="#"> Shopwalkin wallet cash</a></li>
            <li><a href="profile.php?profile=<?php echo encrypt($_SESSION['id']); ?>">Profile</a> </li>
            <li><a href="logout.php">Log out</a> </li>
          </ul>
		  <?php
	}else{
		  ?>
		  <li>  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">signin</button> </li>
		  <?php
		  }
		  ?>		  
        </li>
      </ul>
	  <form class="navbar-form navbar-right" role="search" action="test.php?option=search" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class="form-control search" placeholder="Shopwalkin | Discover Products & Stores" name="item">
        </div>
      <button type="submit" class="btn btn-default" name="search">Search</button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav> 
<?php
@$opt=$_GET['option'];
if($opt==""){
	?>
<div class="container-fluid" style="margin-top:14px;margin-right:-10px;">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
		  
            <div class="item active"> <?php
include("connection.php");
$sql=" SELECT * FROM `slides` LIMIT 5,1 ;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
	?> <a href="index.php?option=slide&offer=<?php echo $row['itemid']; ?>&offers=<?php echo $row['offers'];?>"><img class="slideimg" src="<?php echo $row['image']; ?>" alt="thumb" height="200px"></a>

              <div class="carousel-caption"> Hi i am nagaraj			  </div>
            </div>
<?php ?>
<div class="item">  <?php
include("connection.php");
$sql=" SELECT * FROM `slides` LIMIT 6,1 ;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
	?><a href="index.php?option=slide&offer=<?php echo $row['itemid']; ?>&offers=<?php echo $row['offers'];?>"><img class="slideimg" src="<?php echo $row['image']; ?>" alt="thumb"></a><?php ?>
              <div class="carousel-caption"> Carousel caption 2. Here goes slide description. Lorem ipsum dolor set amet. </div>
            </div>
<?php
include("connection.php");
$sql=" SELECT * FROM `slides` LIMIT 7,1 ;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
	?>
            <div class="item"> <a href="index.php?option=slide&offer=<?php echo $row['itemid']; ?>&offers=<?php echo $row['offers'];?>"><img class="slideimg" src="<?php echo $row['image']; ?>" alt="thumb" height="100px" width="160px"></a>
			<?php ?>
              <div class="carousel-caption"> Carousel caption 3. Here goes slide description. Lorem ipsum dolor set amet. </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
    <hr>
  </div>
  <div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">FEATURE PRODUCT</h4>
</div>
  <div class="container feat">
   <div class="row">
  <?php
include("connection.php");
$sql=" SELECT * FROM `fproduct` LIMIT 8;";
$res=mysqli_query($conn,$sql);
mysqli_set_charset($conn,"utf-8");
while($row=mysqli_fetch_assoc($res)){
	?>
	<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
     <div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail"> <a href="index.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=2"> <img src="<?php echo $row['image']; ?>" alt="Thumbnail Image 1" class="img-responsive img"></a>
        <div class="caption">
			<ul class="list-unstyled">
           <li><?php echo "&#8377;".$row['price']; ?>  <span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
		   <li><span><?php echo $row['storename']; ?></span></li>
		  <li><input type="hidden" name="tab" value="fproduct"></li>
		  <li><button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button></li>
          <!--<p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p> -->
		  </ul>
		  </div>
      </div>
    </div>
	</form>
	
	<?php 
	}
  mysqli_close($conn); 
 ?>
  </div> 
  </div>
  <div class="container">
  <div class="more"><a href="index.php?option=feature"><button class="btn btn-sucess but" >more<span>></span></button></a></div>
  </div>
  <div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">RECOMMENDED PRODUCTS</h4>
</div>
<div class="container rec">

  <div class="row">
  <?php
include("connection.php");
$sql=" SELECT * FROM `recproduct` LIMIT 8;";
$res=mysqli_query($conn,$sql);
mysqli_set_charset($conn,"utf-8");
while($row=mysqli_fetch_assoc($res)){
	?>
	<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
    <div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail"> <a href="index.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=3"> <img src="<?php echo $row['image']; ?>" alt="Thumbnail Image 1" class="img-responsive img"></a>
        <div class="caption">
		<ul class="list-unstyled">
          <li><?php echo "&#8377;".$row['price']; ?> <span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
		  <li><span><?php echo $row['storename']; ?></span></li>
		  <li><input type="hidden" name="tab" value="recproduct"></li>
		  <li><button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button></li>
          <!--<p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p> -->
		 </ul>
		 </div>
      </div>
    </div>
	</form>
	
	<?php 
	}
  mysqli_close($conn); 
 ?>
   
  </div>
 </div>
  <div class="container">
  <div class="more"><a href="index.php?option=recomended"><button class="btn btn-sucess but">more<span>></span></button></a></div>
  </div>
 <div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">OFFER PRODUCT</h4></div>
<div class="container offr">
<div class="row">
  <?php
include("connection.php");
$sql=" SELECT * FROM `offrproduct` LIMIT 8;";
$res=mysqli_query($conn,$sql);
mysqli_set_charset($conn,"utf-8");
while($row=mysqli_fetch_assoc($res)){
	?>
	<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
	  <div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail"> <a href="index.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=4"> <img src="<?php echo $row['image']; ?>" alt="Thumbnail Image 1" class="img-responsive img"></a>
        <div class="caption">
			<ul class="list-unstyled">
          <li><?php echo "&#8377;".$row['price']; ?>  <span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
		  <li><span><?php echo $row['storename']; ?></span></li>
		  <li><input type="hidden" name="tab" value="offrproduct"></li>
		  <li><button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button></li>
          <!--<p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p> -->
		</ul>
		</div>
      </div>
    </div>
	</form>
	
	<?php 
	}
  mysqli_close($conn); 
 ?>
 </div>
 </div>
  <div class="container">
  <div class="more"><a href="index.php?option=offer"><button class="btn btn-sucess but">more<span>></span style="font-size:23px;"></button></a></div>
  </div>
  <?php
}
else{
	switch($opt){
		case 'search':
		?>
	 <div class="container" style="padding:14px;">	<h4 style="font-family:jokerman">SHOPWALKIN PRODUCT</h4> </div>
<div class="container offr">
<div class="row">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">color<span class="caret"></span></a>
<ul class="dropdown-menu">
<?php
include("connection.php");
$sql="SELECT `colorid`,`color` FROM `color`;";
$result=mysqli_query($conn,$sql);
?>
<form id="data" action="test.php?option=search" method="POST" enctype="multipart/form-data">
<?php
while($colors=mysqli_fetch_assoc($result)){
?>
<li><input type="checkbox" id="color" name="color[]" value="<?php echo $colors['colorid'];?>"><span><?php echo $colors['color'];?></span></li>  
<?php 
}?>
<li>
<?php
mysqli_close($conn);
?>
</ul>
</li>

<li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">size<span class="caret"><span></a>
<ul class="dropdown-menu">
<?php
include("connection.php");
$sql="SELECT `id`,`size` FROM `size`;";
$result=mysqli_query($conn,$sql);
while($colors=mysqli_fetch_assoc($result)){
?>
<li><input type="checkbox" id="size-<?php echo $colors['size'];?>" value="<?php echo $colors['id'];?>" name="size[]"><span><?php echo $colors['size'];?></span></li>  
<?php 
}?>

<?php
mysqli_close($conn);
?>
</ul>
</li>
<li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Brands<span class="caret"><span></a>
<ul class="dropdown-menu">
<?php
include("connection.php");
$sql="SELECT `id`,`brand` FROM `tbl_brands`;";
$result=mysqli_query($conn,$sql);
while($colors=mysqli_fetch_assoc($result)){
?>
<li><input type="checkbox" id="brand-<?php echo $colors['brand'];?>" value="<?php echo $colors['id'];?>" name="brand[]"><span><?php echo $colors['brand'];?></span></li>  
<?php 
}
mysqli_close($conn);
?>
</ul>
</li>
<li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Stores<span class="caret"><span></a>
<ul class="dropdown-menu">
<?php
include("connection.php");
$sql="SELECT `strid`,`strname` FROM `stores`;";
$result=mysqli_query($conn,$sql);
while($colors=mysqli_fetch_assoc($result)){
?>
<li><input type="checkbox" id="brand-<?php echo $colors['strname'];?>" value="<?php echo $colors['strid'];?>" name="store[]"><span><?php echo $colors['strname'];?></span></li>  
<?php 
}
mysqli_close($conn);
?>
</ul>
</li>
<li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Price<span class="caret"><span></a>
<ul class="dropdown-menu">
<li><input type="radio" id="price-500" value="0-500" name="price"><span>0-500</span></li>
<li><input type="radio" id="price-500" value="500-1000" name="price"><span>500-1000</span></li>  
<li><input type="radio" id="price-500" value="1000-5000" name="price"><span>1000-5000</span></li>  
<li><input type="radio" id="price-500" value="5000-10000" name="price"><span>5000-10000</span></li>  
</ul>
</li>
<li><input type="submit" name="submit" value="Filter"></li>
</form>
</ul>
</div>
</div>
</div>
</div>
<?php
	@$and='';
	include("connection.php");
	if(isset($_POST['color'])){
	$color=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['color'])));
		$and="AND";
	}
	if(isset($_POST['size'])){
	$size=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['size'])));
	$and="AND";
	}
	if(isset($_POST['brand'])){
	$brand=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['brand'])));
$and="AND";
	}
	if(isset($_POST['store'])){
	$store=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['store'])));
$and="AND";
	}
	if(isset($_POST['price'])){
	$price=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['price'])));
$and="AND";
	}
	
/*$string="0-500";
	$where=array();
	$where1=explode('-',$string);
	$where[]="($where1[0],$where1[1])";
	echo implode('AND',$where);
	$str=implode(',',$where);
	if(strstr($str,',')){
		echo "contain comma"; 
	}
	*/


@$filter=array();
//$sql = "SELECT * FROM `items`";
if(isset($color)&&isset($filter)){
$filter[]= " `color`IN (".implode(',',$color).")";
}else{
	$color1='';
}
if(isset($size)&&isset($filter)){
$filter[]= " `size`IN (".implode(',',$size).")";
}else{
	$size='';
}
if(isset($brand)&&isset($filter)){
$filter[]= " `brand`IN (".implode(',',$brand).")";
}else{
	$brand='';
}
if(isset($store)&&isset($filter)){
$filter[]= " `storeid`IN (".implode(',',$store).")";
}else{
	$brand='';
}
if(isset($price)&&isset($filter)){
$filter[]= " `price` BETWEEN $price1 ;";
}else{
	$brand='';
}

if(isset($_POST['item'])){
$_SESSION['itemsearch']=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['item'])));
}
$items=$_SESSION['itemsearch'];
$item=strtolower("$items");

$sql = "SELECT * FROM `items` where `model`='$item' OR `storename`='$item' OR `cname`='$item' OR `subcat`='$item' $and".implode('OR ',$filter);
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail">
<a href="index1.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=5"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" class="img-responsive img">
   <div class="caption">
			<ul class="list-unstyled text-center">
<li>&#8377;<span><?php echo $row['price']; ?></span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="items">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
	</ul>
		</div>
      </div>
    </div>
	</form>
<?php 
} mysqli_close($conn);
//}
?>
	<?php


?>

</div>
</div>
	<?php	//include("searchitem.php");
		break;
		case 'cart':
		include("cartitems.php");
		break;
		case 'cat':
?>
	 <div class="container" style="padding:14px;">	<h4 style="font-family:jokerman">SHOPWALKIN PRODUCT</h4> </div>
<div class="container offr">
<div class="row">
<?php
if(isset($_GET['cname'])&&isset($_GET['cust_type'])&&isset($_GET['subcat'])){
	include("connection.php");
$cname=strip_tags(mysqli_real_escape_string($conn,$_GET['cname']));
$cust_type=strip_tags(mysqli_real_escape_string($conn,$_GET['cust_type']));
$subcat=strip_tags(mysqli_real_escape_string($conn,$_GET['subcat']));

$sql=" SELECT * FROM `items` WHERE `cname`='$cname' AND `cust_type`='$cust_type' AND `subcat`='$subcat';";
$res=mysqli_query($conn,$sql);
$numm=mysqli_num_rows($res);
if($numm > 0){
while($row=mysqli_fetch_assoc($res)){
	?>
	<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
	<div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail">
	<!-- product image redirect from this page //-->
     <a href="index.php?option=proenq&pro=<?php echo $row['itemid']; ?>&tab=items">
	<img src="<?php echo $row['image']; ?>" height="400px" width="400px" alt="product image" >
	</a>
	   <div class="caption">
			<ul class="list-unstyled text-center">
	<li> <?php echo "price:".$row['price']; ?>  <span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
<input type="hidden" name="tab" value="items">
	<li> <?php echo "store:".$row['storename']; ?></li>
	<li><input type="submit" name="addtocart" value="add to cart" class="btn btn-primary"></li>
	</ul>
		</div>
      </div>
    </div>
	</form>

	<?php 
	}
  mysqli_close($conn);
}
else{
	include("404.html");
} 
}else{
	echo "file not found";
}
 ?>
     </div>	
 </div>
<?php 
break;
case 'offer':
?>
<h4 style="font-family:jokerman">OFFER PRODUCT</h4></div>
<div class="container offr">
<div class="row">
  <?php

  include("filtnojq.php");
 ?>
 </div>
 </div>
 <?php
break;
case 'recomended':
?>
<div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">RECOMMENDED PRODUCTS</h4>
</div>
<div class="container rec">

  <div class="row">
  <?php

  include("rec.php");
 ?>
   
  </div>
 </div>
 <?php
break;
case 'feature':

?>
 <div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">FEATURE PRODUCT</h4>
</div>
  <div class="container feat">
   <div class="row">
  <?php

    include("feat.php");
 ?>
  </div> 
  </div>
  <?php
 

break;	
case 'proenq':

if(isset($_REQUEST['pro'])){
include("connection.php");
$prodetail=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['pro'])));
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
$sql=" SELECT * FROM $table WHERE `itemid`='$prodetail' ;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<div class="container">
<!-- chat with store //-->
<div style="" id="chatbox">
<h3 style="" class="h3ct">
chat with Shopwalkin | Store-<?php echo $row['storename']; ?></h3>
<div style="" id="refresh">
<p>Loading............................
</p></div>
<div style="" class="sock">
<form action="#" method="POST" enctype="multipart/form-data">
<input type="text" placeholder="enter your text" name="send" style="" id="msg"> 
<input type="hidden" id="std" value="<?php $storeid=$row['storeid']; echo $row['storeid']; ?>">
<input type="button" value="send" id="sendd" style="">
</div>

</div>
<!--closed//-->
<table class="table" align="center" valign="top">
<tr>
<td colspan="2">
<center>
	<img src="<?php echo $row['image']; ?>" height="400px" width="360px" alt="product image" id="proShow">
</center>
</td>
<td>
<?php 
if(isset($_SESSION['id'])){
?>
<input type="hidden" id="ctd" value="<?php echo $_SESSION['id']; ?>">
<div id="chatme">Chat with Store</div>
<?php
}
?>
</form>
</td>
</tr>
<tr>
<td colspan="3">
<ul>
<li><span><?php echo "&#8377;".$row['price']; ?></span> <span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
<li><span><?php echo "store is:  ".$row['storename']; ?></li>
<li><span><?php echo $row['details']; ?></li>
</ul>
</td>
</tr>
<tr>
<td class="td">
<a href="strlist.php?storeid=<?php echo $row['storeid']; ?>&swis=<?php echo $swis; ?>&itemid=<?php echo $prodetail; ?>">Walkin to store</a>
</td>
<td class="td"> 
<a href="buynow.php?itemid=<?php echo $prodetail; ?>&swis=<?php echo $swis;?>">Buy now</a>
</td>
<td class="td">
<a href="#">availability <mark><?php echo $row['available']; ?></mark></a>
</td>
</tr>
<tr>
<td colspan="3">
<?php
$sqlii=" SELECT * FROM stores WHERE `id`='$storeid' ;";
$ress=mysqli_query($conn,$sqlii);
$roww=mysqli_fetch_assoc($ress);
echo "<mark>".$row['storename']."</mark>".$roww['description'];
?>
</td>
</tr>
</table>
</div>
<?php 
}
mysqli_close($conn);
}
?>
<div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">Relative PRODUCT</h4>
</div>
  <div class="container feat">
   <div class="row">

<?php 
if(isset($_REQUEST['pro'])){
include("connection.php");
$prodetail=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['pro'])));
$swis=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['swis'])));
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
$reclimit=4;
$sql="SELECT * FROM $table";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
$pags=$rows/$reclimit;
$numpages=ceil($pags);
if(isset($_GET['page'])){
$page=$_GET['page']+1;
$offset=$reclimit*$page;
}
else{
$page=0;
$offset=0;
}
if($page>0){
$prev=$page-2;
}
$left_rec = $rows - ($page * $reclimit);

$sqli=" SELECT `itemid`,`image` , `price` , `details`,`storeid`,`storename`,`offers` FROM $table ORDER BY `itemid` DESC limit $offset,$reclimit;";
$res=mysqli_query($conn,$sqli);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail">
<a href="index.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=<?php echo $swis; ?>"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" class="img-responsive img" ></a>
<div class="caption">
			<ul class="list-unstyled">
<li>&#8377;<span><?php echo $row['price']; ?></span><span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="<?php echo $table; ?>">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
 </ul>
		  </div>
      </div>
    </div>
<?php 
}
?>
<div class="col-lg-12">
<?php
if($rows > $reclimit){
	?><nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">     
 
 <?php
for($i=0;$i<$numpages;$i++){
	$j=$i-1;
	$k=$i+1;
	$link="<li><a href='test.php?option=proenq&pro=$prodetail";
	$link.="&swis=$swis&page=$j'>$k</a></li>";
	echo $link;
}
}
?>
<?php if(($page > 0 )&& ($left_rec > $reclimit)){ ?>
<li><a href="index.php?option=proenq&pro=<?php echo $prodetail; ?>&swis=<?php echo $swis; ?>&page=<?php echo $page?>">next</a></li>
<li><a href="index.php?option=proenq&pro=<?php echo $prodetail; ?>&swis=<?php echo $swis; ?>&page=<?php echo $prev?>">prev</a></li>
<?php }
else if($page==0){ ?>
<li><a href="index.php?option=proenq&pro=<?php echo $prodetail; ?>&swis=<?php echo $swis; ?>&page=<?php echo $page?>">next</a></li>
<?php 
} 
else if($left_rec <= $reclimit){ ?>
<li><a href="index.php?option=proenq&pro=<?php echo $prodetail; ?>&swis=<?php echo $swis; ?>&page=<?php echo $prev?>">prev</a></li>	
<?php
}?>
</ul>
</nav>
</div>
<?php
mysqli_close($conn);
}
?>

</div>
</div>
<?php
}
else{
	include("404.html");
}
}
else{
	include("404.html");
}
break;	
case 'slide':
?>
<div class="container" style="padding:14px;">
<h4 style="font-family:jokerman">OFFERED PRODUCT</h4>
</div>
  <div class="container feat">
   <div class="row">

<?php 
if(isset($_REQUEST['offer'])){
	include("connection.php");
$table="slides";
$offer=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['offers'])));
if(is_numeric($offer)){
$sql=" SELECT `itemid`,`image` , `price` , `details`,`storeid`,`storename`,`offers` FROM $table WHERE `offers` BETWEEN 0 AND $offer ORDER BY `itemid` DESC limit 8;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>&" method="post" enctype="multipart/form-data">
<div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail">
<a href="index.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=1"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" class="img-responsive img" ></a>
<div class="caption">
			<ul class="list-unstyled text-center">
<li>&#8377;<span><?php echo $row['price']; ?></span> <span style="margin-left:20px;">Offer:<?php echo $row['offers']; ?>%</span></li>
<li><span><?php echo $row['storename']; ?></span></li>
 <input type="hidden" name="tab" value="<?php echo $table; ?>">
<button type="submit" name="addtocart" class="btn btn-primary" role="button">Add to Cart<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
 </ul>
		  </div>
      </div>
    </div>
<?php 
}
mysqli_close($conn);
}
else{
include("404.html"); 
}
}
?>

</div>
</div>
<?php
break;	   
}}?>

  <div class="container-fluid well">
    <div class="row">
     <!-- <div class="col-xs-6 col-sm-4 col-md-4 col-lg-7">
        <div class="row"> -->
          <div class="col-sm-4 col-md-3 col-lg-2 col-xs-2">
             <div>
			 <ul class="list-unstyled"><strong>policy</strong>
             <li><a>Terms and Condition</a> </li>
             <li><a>Return policy</a> </li>
             <li><a>IPR policy</a> </li>
             <li><a>Shipping</a> </li>
              <li><a>Privacy</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-2  col-xs-3">
            <div>
              <ul class="list-unstyled">
			  <strong>Shopwalkin Bussiness</strong>
                <li> <a>Sell on Shopwalkin</a> </li>
                <li> <a>FAQ</a> </li>
                <li> <a>Become our Partner</a> </li>
                <li> <a>Advertisement</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-2 col-xs-3">
            <div>
              <ul class="list-unstyled">
			   <strong>Company</strong>
                <li> <a>About us</a> </li>
                <li> <a>Press</a> </li>
                <li> <a>Careers</a> </li>
                <li> <a>Blog</a> </li>
                <li> <a>Team</a> </li>
              </ul>
            </div>
          </div>
		   <div class="col-sm-3 col-md-3 col-lg-3 col-xs-2">
            <div>
              <ul class="list-unstyled">
			   <strong>Follow Us</strong>
                <li> <a>Facebook</a> </li>
                <li> <a>Twitter</a> </li>
                <li> <a>LinkedIN</a> </li>
                <li> <a>Google+</a> </li>
                <li> <a>youTUBE</a> </li>
              </ul>
            </div>
          </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2"> 
        <address>
        <strong>Shopwalkin Technology pvt ltd.</strong><br>
        Madhuravayal<br>
        Chennai<br>
        <abbr title="Phone">P:</abbr> +91 76 67 749930<br>
		<abbr title="Phone">E-mail:</abbr> hello@shopwalkin.com
      </address>
        </div>
  <!--  </div>
        </div>
   -->
	  
 
<?php 
if(isset($_POST['subscribe'])){
include("connection.php");
$mail=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_POST['mail'])));
$sql = "INSERT INTO `subscribtion` (`mail`) VALUES ('$mail')";
$res=mysqli_query($conn,$sql);
if(!$res){
	echo "not inserted".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<form method="POST" enctype="multipart/form-data">
<input type="mail" placeholder="enter your mail id" name="mail" class="sub">
<button type="submit" name="subscribe" class="btn btn-info subbt" title="get more information updates">subscribe me</button>
</form>
</div>
</div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Shopwalkin ©  All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Welcome to Shopwalkin Member</h4>
        </div>
        <div class="modal-body">
   
      <form class="form-signin" method="POST" enctype="multipart/form-data">
        <h6>Please sign in</h6>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
      <center>  <div class="row"><div class="col-lg-5 col-xs-5"><button class="btn btn-lg btn-primary btn-block" type="submit" name="signn">Sign in</button></div>
  <div class="col-lg-5 col-xs-5"><a href="signup.php"><a href="signup.php" class="btn btn-lg btn-primary btn-block">Sign up</a></div></center>
      </form>

        </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php 
include("queryexec.php");
if(isset($_SESSION['visitors'])){
	$_SESSION['visitors']+=1;
}
else{
	$_SESSION['visitors']=1;
}

$visits=$_SESSION['visitors'];
$ip1 = $_SERVER['REMOTE_ADDR'];

$d=date("d-m-Y,h:ia");

$vis="INSERT INTO `visitors` (`ip`,`date`) VALUES ('$ip1','$d');";
execute($vis);
?>
<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.js"></script>
<script src="js/js2home.js"></script>
</body>
</html>