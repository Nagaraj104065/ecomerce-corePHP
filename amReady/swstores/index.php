<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
</script>
<style>
<!--
body{
    backgroun:#979;
	background-color: #444;  
}

.vertical-offset-100{
    padding-top:100px;
}
-->
</style>
<?php 
 if(isset($_POST['email'])){
include("connection.php");
$email=htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
$pass=htmlentities(mysqli_real_escape_string($conn,$_POST['pass']));
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT `strid`,`strname` FROM `stores` WHERE `mail` = '$email' AND `password`='$pass'";
$res=mysqli_query($conn , $sql);
if($res){
 $row=mysqli_num_rows($res);
 if($row > 0){
	 while($row=mysqli_fetch_array($res)){
	$_SESSION['str_id']=$row["strid"];
	$_SESSION['str_name']=$row["strname"];
	$iid=$row['strid'];
	$stt="UPDATE `chat` SET `status` = 'online' WHERE `chat`.`storeid` = '$iid';";
	mysqli_query($conn , $stt);
	$stt1="UPDATE `stores` SET `status` = 'online' WHERE `id` ='$iid' ";
    mysqli_query($conn , $stt1);
	echo "<script>alert('Your username and password is correct!');
	</script>";
	header("location:storechat.php");
}
	 
}
else{
	echo "<script>alert('Enter the Correct username and Password');</script>";
}

}
else{
	echo "query is not coorect".mysqli_error();
}
}
?>
</head>
<body>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<h1>welcome to shopwalkin</h1>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="POST" enctype="multipart/form-data">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="pass" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login"><a href="storedetail.php"  class="form-group">sign up</a>
						<a href="str_forget.php"  class="form-group">forget password</a>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>