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
		<link rel="stylesheet" href="../style/main.css" type="text/css" />
		<title>Admin Login</title>
	</head>	
	<body>
		<div class="menu-wrap">
    		<div class="header">
				<div id="title">
					<h1 id="head">Training and Placement Office</h1>
				</div>
			</div>
    		<nav class="menu">
        		<ul class="clearfix">
		            <li><a href="../index.php" class="nav">Home</a></li>
		            <li>
		                <a href="#" class="nav">Admin Settings<span class="arrow">&#9660;</span></a>
		 
		                <ul class="sub-menu">
		                    <li><a href="addadmin.php">Add admin</a></li>		       
		                    <li><a href="deladmin.php">Delete admin</a></li>
		                </ul>
		            </li>
		            <li><a href="#" class="nav">Account Settings<span class="arrow">&#9660;</span></a>
		            	<ul class="sub-menu">
		                    <li><a href="changeusername.php">Change username</a></li>
		                    <li><a href="changepwd.php">Change password</a></li>
		                </ul>
		            </li>
		            <li><a href="logout.php" class="nav">Log Out</a></li>
		        </ul>
		    </nav>
		</div>
		<?php
			include "connect.php";
			echo "<marquee behavior='alternate' scrollamount='8'><h4> Welcome ".$_SESSION['username']."</h4></marquee>";
		?>
		<div class="buttons">
			<a href="addpc.php"><button>Add Placement Coordinator</button></a></br>
			<a href="delpc.php"><button>Delete Placement Coordinator</button></a></br>
			<a href="#"><button onclick="uname();">Update Placement Coordinator</button></a></br>
			<a href="viewpc.php"><button>View Placement Coordinators</button></a></br>
			<a href="viewpo.php"><button>View Placement Officer</button></a>
		</div>
		<script type="text/javascript">
			function uname()
			{
				var x=prompt("Please enter the username of the PC to be updated");
				window.location.href='uppc.php?uname='+x;
			}
		</script>
	</body>
	
	
	
</html>