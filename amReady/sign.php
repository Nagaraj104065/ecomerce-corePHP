<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="R.nagaraj ">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

  <title>Shopwalkin:Sign in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body{
	  background:#eee;
  }
  .ent{
	  background:#888;
	  margin:35px;
	  padding:35px;
	  left:50%;
	  top:50%;
	  height:50%;
	  	  margin-top:20%;
		  //width:70%;
		  }
  input,button{
	  padding:15px;
	  margin:15px;
	  height:50px; !important;
	  width:40% !important;

  }
  a{
	  margin-left:-31px;
	   width:40% !important;
  }
  </style>
 <?php 
 if(isset($_POST['submit'])){
$email=$_POST['email'];
$pass=$_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "shopwalkin.naga";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT `id`,`name` FROM `test` WHERE `email` = '$email' AND `password`='$pass'";
$res=mysqli_query($conn , $sql);
if($res){
 $row=mysqli_num_rows($res);
 if($row > 0){
	 while($row=mysqli_fetch_array($res)){
	echo "id".$row["id"];
	$_SESSION['id']=$row["id"];
	$_SESSION['name']=$row["name"];
	if(isset($_SESSION['name'])){
	header("location:test.php");
	}
}
	 
}
else{
	echo "there is no ids";
}

}
else{
	echo "query is not coorect".mysqli_error();
}
}
?>
  </head>

  <body>
<span class="sign">signin</span>
    <div style="margin-right:auto;background:rgba(100,100,100,0.3);color:#fff;margin-left:auto;width:100%;height:800px;position:absolute;display:none;" class="hed">
	<div style="float:right !important;margin:auto;background:#838383;color:#fff;position:relative;width:50px;px;text-align:center;" class="cancel"><span>X</span></div>
	<div class="cent">

      <form class="form-signin" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
      <center>  <div class="row"><div class="col-lg-5 col-xs-5"><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button></div>
		<div class="col-lg-5 col-xs-5"><a href="signup.php"><a href="signup.html" class="btn btn-lg btn-primary btn-block">Sign up</a></div></center>
      </form>
</div>
    </div> <!-- /container -->


</div>
   <script src="jquery-1.11.3.min.js"></script>
   <script>
   $(document).ready(function(){
	  $(".sign").on("click",function(e){
		  $(this).hide();
		  $(".hed").show(function(e){alert("element is hided");
		  $(".cancel").on("click",function(e){
			  $(".hed").hide("slow",function(e){
				  $(".sign").show();
				  alert("thanks for sign");
				  //$(document).load("test.php");
			  });
		  })
		  });
	  });
	  $
   });

   </script>
   <div class="body"></div>
  </body>
</html>
