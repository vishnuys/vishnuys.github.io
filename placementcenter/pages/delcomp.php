<?php
	session_start();
	if (!isset($_SESSION['login']) OR $_SESSION['login']!=1) 
	{
		header('location:login.php');
	}
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Delete Company</title> 
	</head>	
	
	<body>
		<div class="header">
			<div id="title">
				<h1 id="head">Training and Placement Office</h1>
			</div>
			<div id="options">
				<h3 class="menu2" id="home"><a href="../index.php">Home</a></h3>
					
				<h3 class="menu2" id="back" onclick="history.go(-1);"><a href="">Back</a></h3>
						
				<h3 class="menu2" id="accset"><a href="accset.php">Account Settings</a></h3>
					
				<h3 class="menu2" id="aboutus"><a href="logout.php">Log Out</a></h3>

				<h3 id="blank"><a href="../index.php">  </a></h3>				
			</div>
			<div class="body"></div>			
		</div>
		<div class="login2">
			<form action="deletecomp.php" method="POST">
				<input type="text" placeholder="Name of the company to delete" name="delcomp" required><br>
				<input type="text" placeholder="Your Username" name="user" required><br>
				<input type="password" placeholder="Your Password" name="password" required><br>
				<input type="submit" value="Delete Company"></a>
			</form>
		</div>
	</body>	
</html>