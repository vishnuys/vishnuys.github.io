<?php
	session_start();
	if (!isset($_SESSION['login']) OR $_SESSION['login']!=2) 
	{
		header('location:login.php');
	}
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>View Companies</title> 
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
		<div class="tint">
		<?php	
			include "connect.php";		
			$name=$_SESSION['username'];
			$sql=mysql_query("SELECT name,reg_no,branch FROM student WHERE username='$name'");
			$res=mysql_fetch_array($sql);
			if ($res) 
			{
				$cname=$_GET['cname'];				
				$ins=mysql_query("INSERT INTO $cname (name,reg_no,branch) values ('$res[0]','$res[1]','$res[2]')");
				if ($ins) 
				{
					echo "<h2>Registered Successfully.</h2>";
				}
				else
					die(mysql_error());
			}
			else
			{
				echo "<h2>You are not allowed to view this</h2>";
			}
			//<h2>Successfully registered.</h2>
		?>
		</div>
	</body>
</html>