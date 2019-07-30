<?php 
extract($_POST);
$mysqli = new mysqli('localhost', 'root','','governmentid');
if($mysqli->connect_errno > 0){
die('Unable to connect to database [' . $db->connect_error . ']');
}
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phonenumber"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$psw = $_POST["psw"];
$query = "INSERT INTO users VALUES ('$name','$email','$phone','$dob','$gender','$psw')";
$insert_row = $mysqli->query($query);
if($insert_row)	{
		 	 header("Location:login.html");

  			echo '<script language="javascript">';
  			echo 'alert(message successfully sent)';  //not showing an alert box.
  			echo '</script>';
		}
else		{
    		die('Error : (". $mysqli->errno .") '. $mysqli->error);
		}
	?>