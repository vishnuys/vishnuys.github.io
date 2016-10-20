<?php
	session_start();
	if(isset($_SESSION['login']))
	{	
		if ($_SESSION['login']==5 OR $_SESSION['login']==1) 
		{
		}
		else
		{
			header('location:login.php');
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
		<title>Placement Coordinator Details</title> 
	</head>	
	
	<body>
		<div class="header">
			<div id="title">
				<h1 id="head">Training and Placement Office</h1>
			</div>
			<div id="options">
				<h3 class="menu2" id="home"><a href="../index.php">Home</a></h3>
					
				<h3 class="menu2" id="back" onclick="history.go(-1);">Back</h3>
						
				<h3 class="menu2" id="accset"><a href="accset.php">Account Settings</a></h3>
					
				<h3 class="menu2" id="aboutus"><a href="logout.php">Log Out</a></h3>				
			</div>
			<div class="body"></div>			
		</div>
		<div class="login">
			<form action="pcdet.php" method="POST">
				<input type="text" placeholder="PC Name" name="pname" required></br>
				<input class="margin" type="text" placeholder="Register Number" name="rno" required><br>
				<input type="text" placeholder="Branch" name="branch" required>
				<input type="text" placeholder="Username" name="uname" required>
				<input type="submit" value="Add PC Details" required>
			</form>
		</div>
	</body>	
</html>