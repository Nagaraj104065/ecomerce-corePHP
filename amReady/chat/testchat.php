<?php
if(!empty($_POST['ctd'])){
include("connection.php");
$ctd=htmlentities(mysqli_real_escape_string($conn,$_POST['ctd']));
$sql = "SELECT * FROM `chat` WHERE `cust_id`=$ctd;";

$result=mysqli_query($conn, $sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
	?>
<div style="margin:0px;padding:5px;color:#5f0305;">
<?php
echo $row['sent'];
?></div>
<div style="margin-left:41px;padding:2px;">
<?php
$rec=$row['recived'];
$rec="UPDATE `chat` SET `msg_status` = 'seen' WHERE `cust_id` ='$ctd' AND `recived`='$rec';";
mysqli_query($conn,$rec);
echo $row['recived'];
?>
</div>
<?php
}
?> 

<?php
}
mysqli_close($conn);
}
else{
	echo "file not found";
}
?>
