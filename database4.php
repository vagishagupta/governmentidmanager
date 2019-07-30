<?php 
extract($_POST);
$mysqli = new mysqli('localhost', 'root','','governmentid');
if($mysqli->connect_errno > 0){
die('Unable to connect to database [' . $db->connect_error . ']');
}
$email = $_POST["email"];
$aadhar = $_POST["aadhar"];
$pan = $_POST["pan"];
$passport = $_POST["passport"];
$query = "INSERT INTO documents VALUES ('$email','$aadhar','$pan','$passport')";
$insert_row = $mysqli->query($query);
if($insert_row)	{
		 	 header("Location:loginphp.php");

  			echo '<script language="javascript">';
  			echo 'alert(message successfully sent)';  //not showing an alert box.
  			echo '</script>';
		}
else		{
    		die('Error : (". $mysqli->errno .") '. $mysqli->error);
		}
	?>