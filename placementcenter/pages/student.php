<?php
	session_start();
	if (isset($_SESSION['login'])) 
	{
		if ($_SESSION['login']!=2) 
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
		<title>Student Login</title>
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
		            <li><a href="../index.php" class="nav2">Home</a></li>
		            <li>
		                <a href="#" class="nav">Student Settings<span class="arrow">&#9660;</span></a>
		 
		                <ul class="sub-menu">
		                    <li><a href="viewstu.php?sname=<?php echo $_SESSION['username']; ?>">View detials</a></li>		       
		                    <li><a href="upstu.php?uname=<?php echo $_SESSION['username']; ?>">Update details</a></li>
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
			<a href="viewcomp.php"><button>View All Companies</button></a></br>
			<a href="viewelicomp.php"><button>View Eligible Companies</button></a></br>
			<a href="#"><button onclick="cname();">Register for company</button></a></br>
			<a href="viewpc.php"><button>View Placement Coordinators</button></a></br>
			<a href="viewpo.php"><button>View Placement Officer</button></a>
		</div>
		<script type="text/javascript">
			function uname()
			{
				var x=prompt("Please enter the username of the PC to be updated");
				window.location.href='uppc.php?uname='+x;
			}
			function cname()
			{
				var x=prompt("Please enter the company to register");
				window.location.href='regcomp.php?cname='+x;
			}
		</script>
	</body>
	
	
	
</html>