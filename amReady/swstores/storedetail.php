<html>
<head>
<style>
input{
	padding:20px;
	margin:5px;
	width:60%;
}

</style>
<?PHP
if(isset($_POST['store'])){
	require("queryexec.php");
	$storename=htmlentities($_POST['storename']);
	$storeaddr=htmlentities($_POST['storeaddr']);
	$lat=htmlentities($_POST['lat']);
	$pass=htmlentities($_POST['pass']);
	$email=htmlentities($_POST['email']);
	$cpass=htmlentities($_POST['cpass']);
	$lang=htmlentities($_POST['lang']);
	$descc=htmlentities($_POST['descc']);
	if($cpass == $pass){
   $sql = "INSERT INTO `stores` (`strname`, `straddr`,`lat`,`lang`,`description`,`password`,`mail`) VALUES ('$storename','$storeaddr','$lat','$lang','$descc','$pass','$email');";
   $connn=execute($sql);
   if($connn){
	   echo "<script>alert('not inserted');</script> not insertd";
   }
   else{
	   echo "inserted<script>alert('inserted');</script>";
   }
	}
	else{
		  echo "<script>alert('password not matched');</script>";
		   echo 'password not matched';
	}
}
?>
</head>
<body bgcolor="#400">
<h1  style="background-color:#500;color:#fff;padding:35px;margin-left:-10px;margin-right:-1px;margin-top:-10px;">Sign up for Store owners</h1>
<div style="background-color:#600;color:#fff;margin-top:0px;margin-left:10%;width:50%;padding:35px;">
<center>
<form method="POST" enctype="multipart/form-data">
<input type="text" name="storename" placeholder="Enter the store name"><br />
<input type="text" name="storeaddr" placeholder="Enter store address"><br />
<input type="text" name="lat" placeholder="Enter the latatiude of the store"><br />
<input type="text" name="lang" placeholder="Enter the langitude of the store"><br />
<input type="email" name="email" placeholder="Enter the email"><br />
<input type="password" name="pass" placeholder="Enter the password"><br />
<input type="password" name="cpass" placeholder="confirm the password"><br />
<input type="text" name="descc" placeholder="Enter the langitude of the store Descripton"><br />
<input type="submit" name="store" value="submit">
</form>
</center>
</div>
</body>
</html>