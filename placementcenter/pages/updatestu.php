<?php	
include "connect.php";
$sname=$_POST['sname'];
$rno=$_POST['rno'];
$dob=$_POST['dob'];
$branch=$_POST['branch'];
$tperc=$_POST['tperc'];
$twperc=$_POST['twperc'];
$bperc=$_POST['bperc'];
$lbl=$_POST['lbl'];
$dbl=$_POST['dbl'];
$caste=$_POST['caste'];
$uname=$_POST['uname'];
if (is_null($sname) OR is_null($rno) OR is_null($branch)) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill all details.')
			window.location.href='pcdetails.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("UPDATE student SET name='$sname',reg_no='$rno',dob='$dob',branch='$branch',10th_percentage=$tperc,12th_percentage=$twperc,`b.e_aggr`=$bperc,livebacks=$lbl,deadbacks=$dbl,caste='$caste' WHERE username='$uname'");
	if ($sql) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Student updated successfully.');					
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
					</body>
				</html>';
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('PC details could not be updated. Try again.')
					window.history.back()
					window.history.back()					
				</SCRIPT>");
		die(mysql_error());
		header('location:pc.php');
	}
}
?>