<?php session_start();
?>
<?php 
if(isset($_SESSION['usr_id'])){

unset($_SESSION['usr_id']);
unset($_SESSION['usr_name']);
header('location:jacks.php');
 }
else{
	include("404.html");
}
?>


