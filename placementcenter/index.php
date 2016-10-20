<?php
session_start();
if(!isset($_SESSION['login']))
{
	$_SESSION['login']=-1;
}
?>
<html>
	<head>
		<meta http-equiv="Page-Enter" content="revealTrans(Duration=2.0,Transition=7)">
		<link rel="stylesheet" href="style/index.css" type="text/css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />`
		<title>Training & Placement Office</title>
	</head>	
	
	<body>
		<div class="header">
			<div id="title">
				<h1 id="head">Training and Placement Office</h1>
			</div>
			<div id="options">
				<h3 class="menu" id="home"><a href="index.php">Home</a></h3>
					
				<h3 class="menu" id="login"><a href="pages/login.php"><?php if(isset($_SESSION['login']) AND $_SESSION['login']!=-1) echo $_SESSION['username']; else echo "Login";?></a></h3>
				<?php
				if(isset($_SESSION['login']) AND $_SESSION['login']!=-1)
				{	
					echo '<h3 class="menu" id="signup"><a href="pages/logout.php">Log Out</a></h3>';
				}
				else
				{
					echo '<h3 class="menu" id="signup"><a href="pages/new.php">Sign up</a></h3>';
				}
				?>	
				<h3 class="menu" id="aboutus"><a href="pages/aboutus.php">About Us</a></h3>

				<h3 id="blank"><a href="index.php">  </a></h3>				
			</div>				
		</div>
		<center><img id="fav" src="images/pc.png"></center>
	</body>		
</html>