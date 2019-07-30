<?php
extract($_POST);
$mysqli = new mysqli("localhost", "root", "","governmentid"); 

/*if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$psw = $_POST['psw'];
if($name !='' && ($email !='' || $phone!='')&& $psw!=''){
//Insert Query of SQL
*/
$query = INSERT INTO users VALUES ('$name', '$email', '$gender', '$dob' , '$phone' , '$psw');
$var_insert = $mysqli->query($query)
if($var_insert)
{header("location:reg.html");
}
else{
die('Error("$mysqli->errno")'.$mysqli->error);
}
}
//mysql_close($connection); // Closing Connection with Server
?>