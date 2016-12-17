<!DOCTYPE html>
<html>
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

<style>
input{
	padding:20px;
	margin:20px;
	background-color:#222;
	width:60%;
	color:white;
}
textarea{
	padding:20px;
	margin:20px;
	background-color:#222;
	-webkit-box-sizzing:border-box;
	color:white;
}

</style>
<head>
<?php
if(isset($_POST['feedback'])){
include("queryexec.php");
$name=htmlentities($_POST['name']);
$mail=htmlentities($_POST['email']);
$no=htmlentities($_POST['no']);
$msg=htmlentities($_POST['msg']);
$sql = "INSERT INTO `feedback` (`name`, `mail`, `mobno`, `msg`) VALUES ('$name', '$mail', '$no', '$msg')";
execute($sql);
}
?>
</head>
<body bgcolor="#004">

<h1  style="background-color:#005;color:#fff;padding:35px;margin-left:-10px;margin-right:-10px;margin-top:-10px;height:5%;width:100%;display:block;">Feedback</h1>
<div style="background-color:#008;color:#fff;margin-top:0px;margin-left:10%;width:50%;padding:35px;box-sizzing:border-box;margin-top:0%;position:;">
<br />
<br />
<br />
<br />
<br />
<br />
<div  id="back">

<form method="POST" enctype="multipart/form-data">
<input type="text" name="name" placeholder="Enter your name" required><br />
<input type="email" name="email" placeholder="Enter your email" required><br />
<input type="text" name="no" placeholder="Enter your mobile no" required><br />
<textarea cols="30" name="msg" rows="5"> Enter your Feedback :-)</textarea><br />
<input type="submit" name="feedback" value="click to feedback">
</form>
</div>
</div>
</body>
</html>