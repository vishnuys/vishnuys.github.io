<?php
	session_start();
	if (isset($_SESSION['login'])) 
	{
		if ($_SESSION['login']!=5) 
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
		<title>Add Admin</title> 
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
			<form action="newadmin.php" method="POST">
				<input type="text" placeholder="Admin Name" name="name" required></br>
				<input class="margin" type="text" placeholder="Admin Username" name="uname" required><br>
				<input type="password" placeholder="Admin Password" name="pwd" id="pass1" required>
				<input type="password" placeholder="Confirm Password" name="cpwd" id="pass2" onkeyup="checkPass(); return false;" required>
				<input class="margin" type="text" placeholder="Your Username" name="aname" required><br>
				<input type="password" placeholder="Your Password" name="apwd" required>
				<input type="submit" value="Add admin" required>
			</form>
			<script type="text/javascript">
				function checkPass()
				{
				    //Store the password field objects into variables ...
				    var pass1 = document.getElementById('pass1');
				    var pass2 = document.getElementById('pass2');
				    //Store the Confimation Message Object ...
				    var message = document.getElementById('confirmMessage');
				    //Set the colors we will be using ...
				    var goodColor = "#66cc66";
				    var badColor = "#ff6666";
				    //Compare the values in the password field 
				    //and the confirmation field
				    if(pass1.value == pass2.value){
				        //The passwords match. 
				        //Set the color to the good color and inform
				        //the user that they have entered the correct password 
				        pass2.style.backgroundColor = goodColor;
				        message.style.color = goodColor;
				        message.innerHTML = "Passwords Match!"
				    }else{
				        //The passwords do not match.
				        //Set the color to the bad color and
				        //notify the user.
				        pass2.style.backgroundColor = badColor;
				        message.style.color = badColor;
				        window.alert('Passwords do not match. Please enter again.')
				        window.location.href='new.php'
				    }
				}  
			</script>
		</div>
	</body>	
</html>