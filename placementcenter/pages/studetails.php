<?php
	session_start();
	if(!isset($_SESSION['login']) OR $_SESSION['login']==-1)
	{
		header('location:login.php');	
	}
	else
	{
		
	}

?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Student Details</title> 
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
		<div class="login" id="pumpup">
			<form action="studet.php" method="POST">
				<input type="text" placeholder="Student Name" name="sname" required></br>
				<input class="margin" type="text" placeholder="Register Number" name="rno" required><br><br>
				<span id="forum">Date of Birth:</span><br>
				<input type="date" value="1994-01-01" name="dob" required><br>
				<input list="branch" placeholder="Branch" name="branch" required><br>
				<datalist id="branch">
				  <option value="Civil">
				  <option value="CSE">
				  <option value="ECE">
				  <option value="EEE">
				  <option value="ISE">
				  <option value="Mech">
				</datalist>
				<input type="text" placeholder="10th Percentage" name="tperc" required>
				<input type="text" placeholder="12th Percentage" name="twperc" required>
				<input type="text" placeholder="B.E Aggregate" name="bperc" required>
				<input type="number" min="0" max="5" placeholder="Live Backlogs" name="lbl" required>
				<input type="number" min="0" max="5" placeholder="Dead Backlogs" name="dbl" required>
				<input list="caste" placeholder="Caste" name="caste" required>
				<datalist id="caste">
				  <option value="GM">
				  <option value="OBC">
				  <option value="SC">
				  <option value="ST">
				  <option value="Other">
				</datalist>
				<input type="text" placeholder="Username" name="uname" required>
				<input type="submit" value="Add Student Details" required>
			</form>
		</div>
	</body>	
</html>