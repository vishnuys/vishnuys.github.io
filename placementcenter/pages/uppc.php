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
		<title>Update PC Details</title> 
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
			<form action="updatepc.php" method="POST">
				<?php
					include "connect.php";
					$uname=$_GET['uname'];
					$sql=mysql_query("SELECT * FROM  pc WHERE username='$uname' ");
					$res=mysql_fetch_assoc($sql);
					if ($res) 
					{
						
						echo '
							<span id="forum">Name:</span><br>
							<input type="text" value="'.$res['name'].'" name="pname" style="margin-top:0px;" required></br></br>
							<span id="forum">Register Number:</span><br>
							<input class="margin" type="text" value="'.$res['reg_no'].'" name="rno" style="margin-top:0px;" required><br></br>
							<span id="forum">Branch:</span><br>
							<input type="text" value="'.$res['branch'].'" name="branch" style="margin-top:0px;" required></br></br>
							<span id="forum">Username:</span><br>
							<input type="text" value="'.$res['username'].'" name="uname" style="margin-top:0px;" readonly>
							<input type="submit" value="Update PC Details" required>';
					}
					else
					{

						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Username does not exist. Please try again.')
							window.location.href='admin.php'
							</SCRIPT>");
					}					
				?>
			</form>
		</div>
	</body>	
</html>