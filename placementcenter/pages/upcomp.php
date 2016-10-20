<?php
	session_start();
	if(!isset($_SESSION['login']) AND $_SESSION['login']!=1)
	{	
		header('location:login.php');		
	}	
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Update Company Details</title> 
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
			<form action="updatecomp.php" method="POST">
				<?php
					include "connect.php";
					$cname=$_GET['cname'];
					$sql=mysql_query("SELECT * FROM  company WHERE name='$cname' ");
					$res=mysql_fetch_array($sql);
					if ($res) 
					{					
						echo '
							<span id="forum">Company Name:</span><br>
							<input type="text" value="'.$res[0].'" name="cname" style="margin-top:0px;" readonly></br></br>
							<span id="forum">CTC:</span><br>
							<input class="margin" type="text" value="'.$res[1].'" name="ctc" style="margin-top:0px;" required><br></br>
							<span id="forum">Handler:</span><br>
							<input type="text" value="'.$res[2].'" name="handler" style="margin-top:0px;" required></br></br>
							<span id="forum">Criteria:</span><br>
							<input type="text" value="'.$res[3].'" name="criteria" style="margin-top:0px;" required></br></br>
							<span id="forum">Livebacks:</span><br>
							<input type="text" value="'.$res[4].'" name="live" style="margin-top:0px;" required></br></br>
							<span id="forum">Deadbacks:</span><br>
							<input type="text" value="'.$res[5].'" name="dead" style="margin-top:0px;" required><br><br>	
							<span id="forum">Last Date to register:</span><br>
							<input type="date" value="'.$res[6].'" name="date" style="margin-top:0px;" required>
							<input type="submit" value="Update Company Details" required>';
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