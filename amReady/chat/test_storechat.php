<?php
session_start();
?>
<?php
if(isset($_POST['ctd'])){
include("connection.php");
$ctd=htmlentities(mysqli_real_escape_string($conn,$_POST['ctd']));
$sql = "SELECT `recived`,`sender_cust`,`sent` FROM `chat` WHERE `storeid`='$ctd' AND `msg_status`='seen' order by id desc;";
$rec="UPDATE `chat` SET `msg_status` = 'seen' WHERE `storeid` ='$ctd';";
mysqli_query($conn,$rec);
$result=mysqli_query($conn, $sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
	?>
<div style="margin:0px;padding:5px;color:#5f0305;">
</div>
<div style="margin-left:41px;padding:2px;">
<?php
$rec=$row['recived'];

echo "message recived from this ids";
$tid=$row['sender_cust'];
$slq="select * from test where id=$tid;";
$rg=mysqli_query($conn,$slq);
$cust=mysqli_fetch_assoc($rg);
echo "<form><input type='hidden' value='".$row['sender_cust']."'></form>";
echo "<a href='str_talk2cust.php?swid=".$row['sender_cust']."' id='check'>".$row['sender_cust'].$cust['name']."</a><br/>";

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
