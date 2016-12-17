<?php
session_start();
echo "session created";
?>
<?php
if(isset($_POST['swid'])){
include("connection.php");
$ctd=$_SESSION['str_id'];
$ctd=htmlentities(mysqli_real_escape_string($conn,$_POST['ctd']));
$swid=htmlentities(mysqli_real_escape_string($conn,$_POST['swid']));
$sql = "SELECT `recived`,`sent` FROM `chat` WHERE `storeid`='$ctd' AND sender_cust='$swid';";

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
$rec="UPDATE `chat` SET `msg_status` = 'seen' WHERE `storeid` ='$ctd' AND `recived`='$rec';";
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
?>