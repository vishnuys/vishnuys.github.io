<?php
	session_start();
	if (!isset($_SESSION['login']) AND $_SESSION['login']!=1) 
	{
		header('location:login.php');		
	}
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Add Company</title> 
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

				<h3 id="blank"><a href="../index.php">  </a></h3>				
			</div>
			<div class="body"></div>			
		</div>
		<div class="login">
			<form action="newcomp.php" method="POST">
				<input type="text" placeholder="Company Name" name="cname" required><br>
				<input type="text" placeholder="CTC Offered in Lakhs" name="ctc" required><br>
				<input type="text" placeholder="PC Handler" name="handler" required><br>
				<input type="text" placeholder="Percentage Criteria" name="percri" required><br>
				<input type="text" placeholder="No. of Livebacks Allowed" name="live" required><br>
				<input type="text" placeholder="No. of Deadbacks Allowed" name="dead" required><br><br>
				<span id="forum">Last date to register:</span>
				<input type="date" value="<?php echo date('Y-m-d')?>" name="date" required><br>
				<input type="submit" value="Add Company"></a>
			</form>
		</div>
	</body>	
</html>