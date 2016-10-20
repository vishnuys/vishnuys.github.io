<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>View Placement Officer</title> 
	</head>	
	
	<body>
		<div class="header">
			<div id="title">
				<h1 id="head">Training and Placement Office</h1>
			</div>
			<div id="options">
				<h3 class="menu2" id="home2"><a href="../index.php">Home</a></h3>
					
				<h3 class="menu2" id="login"><a href="login.php"><?php if(isset($_SESSION['login']) AND $_SESSION['login']!=-1) echo $_SESSION['username']; else echo "Login";?></a></h3>
				<?php
				session_start();	
				if(isset($_SESSION['login']) AND $_SESSION['login']!=-1)
				{	
					echo '<h3 class="menu2" id="signup"><a href="logout.php">Log Out</a></h3>';
				}
				else
				{
					echo '<h3 class="menu2" id="signup"><a href="new.php">Sign up</a></h3>';
				}
				?>
					
				<h3 class="menu2" id="aboutus"><a href="aboutus.php">About us</a></h3>				
			</div>
			<div class="body"></div>			
		</div>
		<center><div class="tint">
			<img src="../images/kbr.jpg" id="kbr">
			<h1 id="h">Dr. K B Raja</h1>
			<h3>Professor<br> Dept. of ECE</h3>
			<h5>Placement Officer since 2013</h5>
		</div></center>
	</body>
</html>