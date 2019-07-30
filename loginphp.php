<?php
error_reporting(E_ERROR | E_PARSE);
  ?> 

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
	<script src="script.js" type="text/javascript">
	</script>
</head>
<body id="login1">
	<div id="logintext">
		<h1>GOVERNMENT IDs AND DOCs MANAGER</h1>
		<div id="qoute">
			Your go-to website for managing all your official government documents and IDs!
		</div>
	</div>

	<div id="login">
		<form name="loginform" name="login" action="login.php" method="post" onsubmit="formValidation()">
			<h1>LOGIN</h1>		     
		      <hr>
		      <label><b>Email</b></label>
		      <input type="email" placeholder="Enter Email" name="email" value="<?php echo Cookie_check(1) ?>" required/>

		      <label><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="psw" value="<?php echo Cookie_check(2) ?>" required/>

		      <button type="submit" class="signin"><b>SIGN IN</b></button>
		      <button type="submit" class="signup"><b><a href="registration.html">SIGNUP</a></b></button>
		  </form>
		</div>
</body>

<?php 
session_start();
    function Cookie_check($x){    
    if ($x==1)    
    { 
    	if (isset($_COOKIE['user']))      
    	{
    		return $_COOKIE['user'];      
		}      
    	else         
    	return;    
	}    
    else   
     {      
     	if (isset($_COOKIE['pass']))      
     		{
     			return $_COOKIE['pass'];      
     		}     
     	else
     		return;    
	 }    
	}  
  ?>
</html>