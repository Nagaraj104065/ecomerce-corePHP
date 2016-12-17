 <?php
$servername = "localhost";
$username = "naga123";
$password = "naga123";
$dbname = "swtest";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
