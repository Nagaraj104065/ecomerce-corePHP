<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <script src="jquery-1.11.3.min.js"></script>

<link rel="stylesheet" href="css/css2home.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li class="dropdown-submenu"><a class="test" tabindex="1111" href="#">color<span class="caret"></span></a>
<ul class="dropdown-menu">
<?php
include("connection.php");
$sql="SELECT `colorid`,`color` FROM `color`;";
$result=mysqli_query($conn,$sql);
?>
<form id="data" action="test.php?option=feature" method="POST" enctype="multipart/form-data">
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

<li class="dropdown-submenu"><a class="test" tabindex="1" href="#">size<span class="caret"><span></a>
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
<li class="dropdown-submenu"><a class="test" tabindex="1" href="#">Brands<span class="caret"><span></a>
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
//if(isset($_POST['submit'])){
	include("connection.php");
	@$where='';

	if(isset($_POST['color']) && is_numeric($_POST['color'])){
	$color=$_POST['color'];
	$where="WHERE";
	}
	if(isset($_POST['size']) && is_numeric($_POST['size'])){
	$size=$_POST['size'];
	$where="WHERE";
	}
	if(isset($_POST['brand']) && is_numeric($_POST['brand'])){
	$brand=$_POST['brand'];
	$where="WHERE";
	}
	if(isset($_POST['store']) && is_numeric($_POST['store'])){
	$store=$_POST['store'];
	$where="WHERE";
	}
	if(isset($_POST['price']) && is_numeric($_POST['price'])){
	$price=$_POST['price'];
	$where="WHERE";
	}

	

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
$filter[]= " `price` BETWEEN $price1 ";
}else{
	$brand='';
}

	//this for page ination //
$reclimit=4;
$sqli = "SELECT * FROM `fproduct` $where".implode('OR ',$filter);
$result=mysqli_query($conn,$sqli);
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
	//closed//
$sql = "SELECT * FROM `fproduct` $where".implode('OR ',$filter) ."limit $offset,$reclimit;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
<div class="col-sm-4 col-md-4 col-lg-3 col-xs-6 proimg">
      <div class="thumbnail">
<a href="test.php?option=proenq&pro=<?php echo $row['itemid']; ?>&swis=2"><img src="<?php echo $row['image']; ?>" height="300px" width="230px" alt="product image" class="img-responsive img"></a>
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
} ?>
<div class="col-lg-12">
<?php
//paqge ination 
if($rows > $reclimit){
	?><nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">     
 
 <?php
for($i=0;$i<$numpages;$i++){
	$j=$i-1;
	$k=$i+1;
	echo "<li><a href='test1.php?option=feature&page=$j'>$k</a></li>";
}
}
?>
<?php if(($page > 0 )&& ($left_rec > $reclimit)){ ?>
<li><a href="test1.php?option=feature&page=<?php echo $page?>">next</a></li>
<li><a href="test1.php?option=feature&page=<?php echo $prev?>">prev</a></li>
<?php }
else if($page==0){ ?>
<li><a href="test1.php?option=feature&page=<?php echo $page?>">next</a></li>
<?php 
} 
else if($left_rec <= $reclimit){ ?>
<li><a href="test1.php?option=feature&page=<?php echo $prev?>">prev</a></li>	
<?php
}?>
</ul>
</nav>
</div>
<?php
//closed

mysqli_close($conn);
//}
?>
	<?php


?>

</body>
</html>