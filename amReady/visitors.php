<?php 

include("connection.php");

$sqql = "SELECT * FROM `visitors`";
$ress=mysqli_query($conn , $sqql);
if($ress){
 $row=mysqli_num_rows($ress);
 if($row > 0){
echo "number of visitors is".$row;
 }
}
 mysqli_close($conn);
?>