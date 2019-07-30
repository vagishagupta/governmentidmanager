<?php
extract($_POST);
$conn=new mysqli("localhost","root","","governmentid");
if($conn->connect_error)
{
 die("Connection failed".$conn->connect->error);
}
$sql="SELECT * FROM users WHERE email='$email' and psw='$psw' ";
$result=mysqli_query($conn,$sql);
$rc=$result->num_rows;
$sql1 ="SELECT name from users where email='$email'";
$result1=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result1);

$sql2 = "SELECT aadhar,pan,passport FROM documents WHERE email = '$email' ";
		$result2 = mysqli_query($conn,$sql2);
		

if($rc==1)
{
 session_start();
 $_SESSION['email']=$email;
 setcookie('user',$email,time()+60*60*60*60*60*24);
 setcookie('pass',$psw,time()+60*60*60*60*60*24);
 echo "<h1 align=\"center\" style=\"font-family: Luminari, fantasy;font-size: 60px; color:black;\">Hello ".$row['name']."</h1>";
 echo "<h1 align=\"center\" style=\"font-family: Luminari,
fantasy;font-size: 60px; color:black;\">Welcome to governmentiddoc.com </h1>";
	
	while($row1 = mysqli_fetch_assoc($result2)){

		echo'<div id="detail"><div id="detail1">Your aadhar card number: '.$row1['aadhar'].'</div>
			<div id="detail2">Your PAN Card: '.$row1['pan'].'</div>
			<div id="detail3">Your Passport Number:'.$row1['passport'].'</div></div>';
}
if(!mysqli_fetch_assoc($result2))
		{
			echo '<div id="detail"><a href="enterdetail.html"> Enter/Update documents details></a></div>';
		}
echo'<div id="logout"><a href="logout.php">LOGOUT</a></div>';
}
else
{
 echo "<h1>Login failed.....Please try again</h1>";
}

$conn->close();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>:: Login Success ::</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body style="background-image: url('b4.jpg');background-size:
cover;background-position: center;">
 </body>
 </html>