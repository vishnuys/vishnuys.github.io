<?php
	session_start();
	if (isset($_SESSION['login'])) 
	{
		if ($_SESSION['login']!=1) 
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
		<title>PC Login</title>
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
		                <a href="#" class="nav2">PC Settings<span class="arrow">&#9660;</span></a>
		 
		                <ul class="sub-menu" id="xyz">
		                    <li><a href="addpc.php">Add PC</a></li>		       
		                    <li><a href="<?php $x=$_SESSION['username']; echo 'uppc.php?uname='.$x; ?> ">Update PC</a></li>
		                </ul>
		            </li>
		            <li><a href="#" class="nav2">Account Settings<span class="arrow">&#9660;</span></a>
		            	<ul class="sub-menu" id="xyz">
		                    <li><a href="changeusername.php">Change username</a></li>
		                    <li><a href="changepwd.php">Change password</a></li>
		                </ul>
		            </li>
		            <li><a href="logout.php" class="nav2">Log Out</a></li>
		        </ul>
		    </nav>
		</div>
		<?php
			include "connect.php";

			echo "<marquee behavior='alternate' scrollamount='8'><h4> Welcome ".$_SESSION['username']."</h4></marquee>";
		?>
		<div class="buttons2">
			<a href="newstu.php"><button>Add Student</button></a></br>
			<a href="delstu.php"><button>Delete Student</button></a></br>
			<a href="#"><button onclick="uname();">Update Student</button></a></br>
			<a href="#"><button onclick="sname();">View Student Details</button></a></br>
			<a href="viewpla.php"><button>View Placed Students</button></a></br>
			<a href="uppla.php"><button>Update Placed Students</button></a></br>
		</div>
		<div class="buttons3">
			<a href="addcomp.php"><button>Add Company</button></a></br>
			<a href="delcomp.php"><button>Delete Company</button></a></br>
			<a href="#"><button onclick="cname();">Update Company</button></a></br>
			<a href="viewcomp.php"><button>View all Companies</button></a></br>
			<a href="#"><button onclick="ename();">View eligible students for Company</button></a></br>
			<a href="#"><button onclick="vname();">View registered students</button></a></br>
		</div>
		<script type="text/javascript">
			function uname()
			{
				var x=prompt("Please enter the username of the Student to be updated");
				window.location.href='upstu.php?uname='+x;
			}
			function sname()
			{
				var x=prompt("Please enter the Name or Username of the Student to view");
				window.location.href='viewstu.php?sname='+x;
			}
			function ename()
			{
				var x=prompt("Please enter the Company name.");
				window.location.href='vieweli.php?cname='+x;
			}
			function cname()
			{
				var x=prompt("Please enter the Company name.");
				window.location.href='upcomp.php?cname='+x;
			}
			function vname()
			{
				var x=prompt("Please enter the Company name.");
				window.location.href='viewreg.php?vname='+x;
			}
		</script>
		
	</body>
	
	
	
</html>