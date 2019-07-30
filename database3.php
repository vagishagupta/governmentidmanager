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

?>

<html>
<head>
	<title>Government id documents</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
	<header class="head_file">
		
		<div ><a href="logout.php">LOGOUT</a></div>
			</div>
	</header>
	
	<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>-->
	<div>
		<nav id="c">
		<ul class="navigation_custtom">
  			<li><a href="project_page.html" class="item-menu">HOME</a></li>   		
 			<li class="open-drop"><a class="item-menu" href="aadhar.html">AADHAR</a></li>  			
  			<li class="open-drop"><a class="item-menu" href="pan.html">PAN</a></li>    			
  			<li><a class="item-menu" href="passport.html">PASSPORT</a></li> 				
  			<li><a class="item-menu" href="#">CONTACT</a></li>
  						
		</ul>
	</nav>
	</div>
	<div style="top: 300px">
		<h1>YOUR DOCUMENTS</h1>		

		<?php
		?>

	</div>
</body>
</html>
