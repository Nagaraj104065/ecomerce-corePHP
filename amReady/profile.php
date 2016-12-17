 <?php session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopwalkin | Customer Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="css/css2profile.css">
</head>
<body>
<div class="container">
  <h3><u>Your Profile</u></h3>
</div>

<?php
 if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
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
$sql="SELECT `id`,`name`,`email`,`address` FROM `test` WHERE `id`='$id';";
$res=mysqli_query($conn , $sql);
if($res){
 $row=mysqli_num_rows($res);
 if($row > 0){
	 while($row=mysqli_fetch_array($res)){
	?>

	 <div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="cover.jpg" alt="Profile image "/>
        <img align="left" class="fb-image-profile thumbnail" src="profile.jpg" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo $row["name"];?></h1>
            <p><?php echo $row["email"];?></p>
			<p><?php echo $row["address"];?></p>
			<p><a href="cpass.php">Change Password</a></p>
			<?php if(isset($_SESSION['order'])){?>
			<p>Orders    <?php echo $_SESSION['order'];?></p>
			<?php }?>
		   <p><a href="index.php">Go to Home</a></p>
        </div>
    </div>
</div> <!-- /container -->
<?php }?>
</body>
<?php
}
}
else{
	include("404.html");
}	
}
else{
	include("404.html");
}
?>

</body>
</html>