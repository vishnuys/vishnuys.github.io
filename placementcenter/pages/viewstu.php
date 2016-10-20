<?php
	session_start();
	if (!isset($_SESSION['login']) AND $_SESSION['login']!=1 AND $_SESSION['login']!=2) 
	{
		header('location:login.php');
	}
	else
	{
		if ($_SESSION['login']==2 AND $_SESSION['username']!=$_GET['sname']) 
		{
			echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('You are not allowed to view this page.')
			window.location.href='student.php'
			</SCRIPT>";
		}
	}
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Add Placement Coordinator</title> 
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
				$name=$_GET['sname'];
				$sql=mysql_query("SELECT * FROM student WHERE name LIKE '$name' OR username LIKE '$name'");
				$res=mysql_fetch_array($sql);
				if ($res) 
				{					
				  	echo "<h1 id='name'>".$res[0]."</h1>
				  		  <h4>Name : ".$res[0]."</h4>
				  		  <h4>Register No. : ".$res[1]."</h4>
				  		  <h4>Date of Birth : ".$res[2]."</h4>
				  		  <h4>Branch : ".$res[3]."</h4>
				  		  <h4>Tenth Percentage : ".$res[4]."</h4>
				  		  <h4>Twelfth Percentage : ".$res[5]."</h4>
				  		  <h4>B.E. Percentage : ".$res[6]."</h4>
				  		  <h4>Live Backs : ".$res[7]."</h4>
				  		  <h4>Dead Backs : ".$res[8]."</h4>
				  		  <h4>Caste : ".$res[9]."</h4>
				  		  <h4>Username : ".$res[10]."</h4>";
				}
				else
					echo "<h4>No such entry found<h4>";
			?>
		</div>
	</body>
</html>