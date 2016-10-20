<?php
	session_start();
	if (!isset($_SESSION['login']) AND $_SESSION['login']!=1 AND $_SESSION['login']!=2) 
	{
		header('location:login.php');
	}
	else
	{
		if ($_SESSION['login']==2 AND $_SESSION['username']!=$_GET['uname']) 
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
		<title>Update Student Details</title> 
	</head>	
	
	<body id="body">
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
		<div class="login" id="pumpup">
			<form action="updatestu.php" method="POST">
				<?php
					include "connect.php";
					$uname=$_GET['uname'];
					$sql=mysql_query("SELECT * FROM  student WHERE username='$uname' ");
					$res=mysql_fetch_assoc($sql);
					if ($res) 
					{
						
						echo '
							<span id="forum">Student Name:</span><br>
							<input type="text" value="'.$res['name'].'" name="sname" style="margin-top:0px;" required></br></br>
							<span id="forum">Register Number:</span><br>
							<input class="margin" type="text" value="'.$res['reg_no'].'" name="rno" style="margin-top:0px;" required><br></br>
							<span id="forum">Date of Birth(in YYYY/MM/DD):</span><br>
							<input type="text" value="'.$res['dob'].'" name="dob" style="margin-top:0px;" required></br></br>
							<span id="forum">Branch:</span><br>
							<input type="text" value="'.$res['branch'].'" name="branch" style="margin-top:0px;" required></br></br>
							<span id="forum">Tenth Percentage:</span><br>
							<input type="text" value="'.$res['10th_percentage'].'" name="tperc" style="margin-top:0px;" required></br></br>
							<span id="forum">Twelfth Percentage:</span><br>
							<input type="text" value="'.$res['12th_percentage'].'" name="twperc" style="margin-top:0px;" required></br></br>
							<span id="forum">B.E Aggregate:</span><br>
							<input type="text" value="'.$res['b.e_aggr'].'" name="bperc" style="margin-top:0px;" required></br></br>
							<span id="forum">Livebacks:</span><br>
							<input type="text" value="'.$res['livebacks'].'" name="lbl" style="margin-top:0px;" required></br></br>	
							<span id="forum">Deadbacks:</span><br>
							<input type="text" value="'.$res['deadbacks'].'" name="dbl" style="margin-top:0px;" required></br></br>
							<span id="forum">Caste:</span><br>						
							<input type="text" value="'.$res['caste'].'" name="caste" style="margin-top:0px;" required></br></br>
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