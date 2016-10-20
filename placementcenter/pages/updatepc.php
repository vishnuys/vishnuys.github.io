<?php	
include "connect.php";
$pname=$_POST['pname'];
$rno=$_POST['rno'];
$branch=$_POST['branch'];
$uname=$_POST['uname'];
if (is_null($pname) OR is_null($rno) OR is_null($branch)) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill all details.')
			window.location.href='pcdetails.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("UPDATE pc SET name='$pname',reg_no='$rno',branch='$branch' WHERE username='$uname'");
	if ($sql) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('PC updated successfully.');					
					window.history.back()
					window.history.back()					
					</SCRIPT>");
	}
	else
	{
		echo '<html>
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
				</body>
			</html>';
		die(mysql_error());
		echo "<SCRIPT LANGUAGE='JavaScript'>
					window.alert('PC details could not be updated. Try again.')
					window.history.back()
					window.history.back()
					</SCRIPT>";
	}
}
?>