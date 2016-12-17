<?php 
//session start here
session_start();
$total=0;
$_SESSION['order']=0;
include("connection.php");
if(isset($_GET['action'])){
	$action=$_GET['action'];
	$code=$_GET['itcode'];
	$quantity=$_REQUEST['quantity'];
	switch($action){
		case 'add':
		   $sql="SELECT * FROM `recproduct` WHERE `itemid`='$code';";
			$res=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($res)){
	
				$pro[]=$row;
			
                   $itemarray=array($pro[0]['itemid']=>array("name"=>$pro[0]['name'],"price"=>$pro[0]['price'],"quantity"=>$_POST['quantity']));
				   if(!empty($_SESSION['cart_item'])){
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
                    $_SESSION['cart_item']=$itemarray;
				   }
			}
				   break;
	    case 'remove':
		     foreach($_SESSION['cart_item'] as $k => $v){
				   if($code == $k){
					   unset($_SESSION['cart_item'][$k]);
				   }
	}
	break; 
	case 'update':
	foreach($_SESSION['cart_item'] as $k => $v){
				   if($code == $k){
					   $_SESSION['cart_item'][$k]['quantity']=$quantity;
				   }
	}
	break;
	}
	
	                  ?> <a href="rcartcheck.php?actionn=empty">empty</a>
					  <?php
                    foreach($_SESSION['cart_item'] as $k => $item){
						?>
						<form action="rcartcheck.php?action=update&itcode=<?php echo $k; ?>" method="post">
						<table border="1" width="100%"> 
						<tr><td><?php echo "name:".$item['name']; ?>
						<td><?php echo "price:".$item['price']; ?>
						<td><input type="number" value="<?php echo $item['quantity']; ?>" name="quantity">
							<td><?php echo "itemid".$k; ?>
						
						<?php $_SESSION['order']+=1;
						$total+=($item['quantity']*$item['price']);
						?>
</td><td>
					<a href="rcartcheck.php?action=remove&itcode=<?php echo $k; ?>">remove cart</a></td>
					<td>
					<input type="submit" value="update" >
					</form></td>
						</tr></table>
					<?php
					   
					}	
                   echo "total is".$total;		
                    echo "total order is".$_SESSION['order'];				   
			     
				   
}
if(isset($_GET['actionn'])){
	        unset($_SESSION['cart_item']);
		
}
//unset($_SESSION['cart_item']);
?>


<?php
include("connection.php");
$sql=" SELECT * FROM `recproduct` ;";
$res=mysqli_query($conn,$sql);
mysqli_set_charset($conn,"utf-8");
while($row=mysqli_fetch_assoc($res)){
	?>
	
	<div style="display:inline-block;background-color:#888;outline:1px solid #444;box-shadow:3px 3px 5px #666,-3px 3px 5px #666;margin:15px;">
	<center>
	<form action="cartitems.php?action=add&itcode=<?php echo $row['itemid']; ?>" method="post" enctype="multipart/form-data">
	<div style="display:block;">
	<img src="<?php echo $row['image']; ?>" height="40%" width="200px" alt="product image">
    </div>
    <div style="display:block;"><span><?php echo $row['name']; ?></span>
    </div>
	 <div style="display:block;"><span><?php echo $row['price']; ?></span>
    </div>
	 <div style="display:block;"><span><?php echo $row['available']; ?></span>
    </div>
	<div><center><input type="number" name="quantity" value="1">
	<input type="hidden" name="tab" value="offrproduct"></center></div>
	<div><center><input type="submit" name="addtocart" value="add to cart"></center></div>
    </form>	
	</center>
</div>	

	<?php 
	}
  mysqli_close($conn); 
 ?>