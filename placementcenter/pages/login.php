<?php
session_start();
if(isset($_SESSION['login']))
{
	if ($_SESSION['login']==5) 
	{
		header('location:admin.php');
	}
	else if ($_SESSION['login']==1) 
	{
		header('location:pc.php');
	}
	else if ($_SESSION['login']==2) 
	{
		header('location:student.php');
	}
}
else
	{
		header('location:login.php');
	}
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Login</title> 
	</head>	
	
	<body>
		<div class="header">
			<div id="title">
				<h1 id="head">Training and Placement Office</h1>
			</div>
			<div id="options">
				<h3 class="menu2" id="home2"><a href="../index.php">Home</a></h3>
					
				<h3 class="menu2" id="login"><a href="login.php">Login</a></h3>
						
				<h3 class="menu2" id="signup"><a href="new.php">Sign up</a></h3>
					
				<h3 class="menu2" id="aboutus"><a href="aboutus.php">About Us</a></h3>

				<h3 id="blank"><a href="../index.php">  </a></h3>				
			</div>
			<div class="body"></div>			
		</div>
		<div class="login">
			<form action="signin.php" method="POST">
				<input type="text" placeholder="Username" name="user" required><br>
				<input type="password" placeholder="Password" name="password" required><br>
				<input type="submit" value="Login"></a>
			</form>
		</div>
	</body>
</html>