<?php 
if(($_SERVER['PHP_AUTH_USER'] =="shopwalkin") && ($_SERVER['PHP_AUTH_PW'] =="sshopww")){
	include("njJack.php");
}
else{
	header("WWW-Authenticate: Basic realm= \"admin\"");
	header("HTTP/1.0 401 Unauthorized");
	print("this page protected by http authentication");
}
?>