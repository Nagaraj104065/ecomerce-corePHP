<?php 
//session start here
session_start();
$total=0;
$_SESSION['order']=0;
include("connection.php");
if(isset($_GET['action'])){
	$action=$_GET['action'];
	if(isset($_GET['itcode'])){$code=$_GET['itcode'];}
$swis=$_POST['swis'];
	if(is_numeric($swis)){
switch($swis){
	case 1:
	$table='slides';
        $tabs=1;
	break;
	case 2:
	$table='fproduct';
        $tabs=2;
	break;
	case 3:
	$table='recproduct';
 $tabs=3;
	break;
	case 4:
	$table='offrproduct';
 $tabs=4;
	break;
	case 5:
	$table='items';
 $tabs=5;
	break;
}

	if(isset($_REQUEST['quantity'])){
	$quantity=$_REQUEST['quantity'];
	}else{
		$quantity=1;
	}
	switch($action){
		case 'add':
		   $sql="SELECT * FROM $table WHERE `itemid`='$code';";
			$res=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($res)){
	
				$pro[]=$row;
				$itemarray=array($pro[0]['itemid']=>array("name"=>$pro[0]['name'],"price"=>$pro[0]['price'],"quantity"=>$quantity,"table"=>$table,"itcode"=>$code,"tabs"=>$tabs));
				   if(isset($_SESSION['cart_item'])){
				  if(in_array($pro[0]['itemid'],$_SESSION['cart_item'])){
					   foreach($_SESSION['cart_item'] as $k => $v){
						   if($pro[0]['itemid']== $k){
						   $_SESSION['cart_item'][$k]['quantity']=$_POST['quantity'];
					   }
				   }
				   
				  }  else{
					 $_SESSION['cart_item']=array_merge($_SESSION['cart_item'],$itemarray); 
				 
				   }
				   
				   }
				   else{
					   //echo "your cart is empty";
                    $_SESSION['cart_item']=$itemarray;
				   }
			}
				   break;
	    case 'remove':
		       if(isset($_SESSION['cart_item'])){
		     foreach($_SESSION['cart_item'] as $k => $v){
				   if($code == $k){
					   unset($_SESSION['cart_item'][$k]);
				   }
			   }}
	break; 
	case 'update':
	if(isset($_SESSION['cart_item'])){
	foreach($_SESSION['cart_item'] as $k => $v){
				   if($code == $k){
					   $_SESSION['cart_item'][$k]['quantity']=$quantity;
				   }
	}}
	break;
	 
	}
	
		
}
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
	width:100%;
	background-color:rgba(54,5,5,0.7);
	padding:15px;
	margin:15px;
	margin-left:-1px;
	margin-right:-1px;
	margin-top:-5px;
}
body,a{
	background-color:#333938;
	color:white;
	font-size:20px;
	
}
th{
	background:#220000;
	margin:20px;
	padding:20px;
}
td{
	margin:20px;
	padding:20px;
}
input[type="number"]{
	width:30px;
}
input[type="submit"],button{
	padding:15px;
	line-height:2;
	width:14em;
	color:#fff;
	background:#550000;
	border:0px;
}
.a{
	padding:15px;
	line-height:2;
	width:14em;
	color:#fff;
	background:#550000;
	border:0px;
}
mark{
	padding:15px;
	margin:15px;
}

</style>
</head>
<body><table border="1"> 
<h1>Cart Items</h1>
<tr>
<th>Item Name</th>
<th>Item Price</th>
<th>Item quantity</th>
<th>Remove cart</th>
<th>update</th>

<th>buy now</th>
</tr>
	        
					  <?php if(isset($_SESSION['cart_item'])){
						  	
                    foreach($_SESSION['cart_item'] as $k => $item){
						?>
						<form action="cartitems.php?action=update&itcode=<?php echo $k; ?>" method="post">
					
						<tr><td><?php echo $item['name']; ?>
						<td><?php echo $item['price']; ?>
						<td><input type="number" value="<?php echo $item['quantity']; ?>" name="quantity">
						
						
						<?php $_SESSION['order']+=1;
						$total+=($item['quantity']*$item['price']);
						?>
<td>
					<a href="cartitems.php?action=remove&itcode=<?php echo $k; ?>"><button type="button">remove cart</button></a></td>
					<td>
					<input type="submit" value="update" >
					</form></td>
					
				<td>
			<a href="index.php?option=proenq&pro=<?php echo $_SESSION['cart_item'][$k]['itcode']; ?>&swis=<?php echo $_SESSION['cart_item'][$k]['tabs']; ?>">buy now</a>
				</td>
					</form>
						</tr>
					<?php
					   
					  }	?>
					  </table> <?php
                   echo "<mark>total is".$total."</mark>";		
                    echo "<mark>total order is".$_SESSION['order']."</mark>";				  
					  }
?>
<a href="index.php" class="a">continue shopping</a>
</body>
</html>