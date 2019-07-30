<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "governmentid";
// Create connection
$con= new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed:<br>".$con->connect_error);}
$email =$_POST['email'];
$psw=$_POST['psw'];
$sql = "SELECT * FROM users WHERE email = '$email' AND psw = '$psw'" ;
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) == 1) {
			header("location:database3.php");
} else {
echo"unscccessful login";}
?>
