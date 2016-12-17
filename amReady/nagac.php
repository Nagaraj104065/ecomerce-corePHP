<?php 
session_start();
if(isset($_SESSION['id'])){
?>

 <!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="cache-control" content="no-cache"/>  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="R.nagaraj ">
<meta charset="utf-8">

    <!-- description about the site //-->
    
    <meta name="description" content="shopwalkin is your best shopping companion">
  
   <!-- keywords for search engine //-->
     
   <meta type="keywords" content="shopwalkin, online-shop, shop, offline store">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 <?php
if(isset($_POST['name'])){
include("queryexec.php");
$name=$_POST['name'];
$number=$_POST['number'];
$month=$_POST['month'];
$year=$_POST['year'];
$id=$_SESSION['id'];
echo "ya its working".$name.$number.$month.$year;
$sqli = "INSERT INTO `creditHolder` (`cust_id`, `crname`, `crnum`, `cmont`, `cyear`) VALUES ('$id','$name','$number','$month','$year')";
if(execute($sqli)){
	echo "sucess";
}
else{
	echo  "thank you ";
}
}
}
else{
echo "file not found!";
}
?>
</body>
</html>