<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Sign up</title> 
	</head>	
	
	<body id="body">
		<div class="header">
			<div id="title">
				<h1 id="head">Training and Placement Office</h1>
			</div>
			<div id="options">
				<h3 class="menu2" id="home2"><a href="../index.php">Home</a></h3>
				
				<h3 class="menu2" id="login"><a href="login.php"><?php if(isset($_SESSION['login']) AND $_SESSION['login']!=-1) echo $_SESSION['username']; else echo "Login";?></a></h3>
				<?php
				if(isset($_SESSION['login']) AND $_SESSION['login']!=-1)
				{	
					echo '<h3 class="menu2" id="signup"><a href="logout.php">Log Out</a></h3>';
				}
				else
				{
					echo '<h3 class="menu2" id="signup"><a href="new.php">Sign up</a></h3>';
				}
				?>
					
				<h3 class="menu2" id="aboutus2"><a href="aboutus.php">About Us</a></h3>

				<h3 id="blank"><a href="../index.php">  </a></h3>				
			</div>
			<div class="body"></div>			
		</div>
		<center><div class="tint">
			<img src="../images/uvce.jpg" id="uvce">
			<h3 id="idh">University Visvesvaraya College of Engineering was built by Sir M Visvesvaraya in 1917. UVCE is known for its placements and it falls in the list of top 5 colleges of Bangalore for the same. Close to 90 companies visit the UVCE campus every year, giving away close to 900 offers annually. The UVCE Placement portal maintains details of the companies visiting the batch of 2015-16.</h3>
			<h2 class="h-text-2">About us</h2>
			<h3 id="idh"> The Training and Placement Office, UVCE manages the Placement activities of the college. 11 B.E Placement coordinators, together from ECE, CSE, ISE, EEE, Mechanical and 8 Placement coordinators from various branches of ME are chosen to handle the placements. The Placement officer, <a href="viewpo.php" id="link">Dr K B Raja</a> is responsible for monitoring all the activitis of the TPO.  </h3>
		</div></center>
	</body>
</html>