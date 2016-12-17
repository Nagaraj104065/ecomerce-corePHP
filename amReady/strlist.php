<?php 
session_start();
if(isset($_SESSION['id'])){
	echo "<mark>welcome to Shopwalkin</mark>".$_SESSION['name'];
	?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	background:#330303;
	color:white;
	
}
.div{
	outline:1px solid #200;
}
</style>
</head>
<body>
<?php
if(isset($_REQUEST['storeid'])){
include("connection.php");

$swis=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['swis'])));
$storeid='';
if(is_numeric($swis)){
$storeid=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['storeid'])));
$itemid=strip_tags(htmlentities(mysqli_real_escape_string($conn,$_REQUEST['itemid'])));
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
$sql=" SELECT * FROM `stores` WHERE `strid`='$storeid' ;";
$res=mysqli_query($conn,$sql);
if($res){
$num=mysqli_num_rows($res);
if($num>0){
while($row=mysqli_fetch_assoc($res)){
	?>
	<div style="display:inline-block;outline:1px solid #200;">
    <div style="display:block;outline:1px solid #200;width:200px;line-height:2;"><span><?php echo "<abbr>Store id:</abbr>".$row['strid']; ?></span>
    </div>
	 <div style="display:block;outline:1px solid #200;width:200px;line-height:2;"><span><?php echo "<abbr>Store name:</abbr>".$row['strname']; ?></span>
    </div>
	 <div style="display:block;outline:1px solid #200;width:200px;line-height:2;"><span><?php echo "<abbr>Store address:</abbr>".$row['straddr']; ?></span>
    </div>
</div>	
	
 
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCCKeTBDiC07aTuqN375-9-7JewgZckKX4">
</script>

<script>
<?php 
$lat=$row['lat'];
$lang=$row['lang']; ?>
var myCenter=new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lang; ?>);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<center>
<div id="googleMap" style="width:500px;height:380px;outline:1px solid black;padding:10px;margin:15px;background-color:#fff;"></div>
</center>
<?php 
}}
else{
	echo "there is no address";
}}
else{
	echo "no stores ".mysqli_error($conn);
	}
  mysqli_close($conn); 
}
else{
include("404.html");	
}
}
 ?>
</body>
</html>
<?php	
}
else{
	echo "sorry you have to login";
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