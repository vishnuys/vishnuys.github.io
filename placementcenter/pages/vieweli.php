<?php
	session_start();
	if (!isset($_SESSION['login']) OR $_SESSION['login']!=1) 
	{
		header('location:login.php');		
	}
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>Eligible Students</title> 
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
		<div class="tint">
			<?php
				include "connect.php";
				$name=$_GET['cname'];
				echo "<h1 id='name'>".$name."</h1>";				
				$sql=mysql_query("SELECT s.name as name,s.reg_no as reg_no,s.branch as branch FROM student s,company c WHERE c.name='$name' AND s.`b.e_aggr`>=c.criteria AND s.livebacks<=c.livebacks AND s.deadbacks<=c.deadbacks ORDER BY s.name");
				$res=mysql_num_rows($sql);
				if ($res) 
				{				
					echo "<table>
							<thead>
								<tr>
									<th>Name</th>
									<th>Register Number</th>
									<th>Branch</th>
								</tr>
							</thead>";
					while ($row = mysql_fetch_array($sql)) 
					{
						echo "<tr class='light'>
			        		<td>".$row[0]."</td>
			        		<td>".$row[1]."</td>
			        		<td>".$row[2]."</td>
			      			</tr>";
					}
				}
				else
				{
					echo "<h4>No eligible students or No such company in Database.</h4>";
				}
			?>
		</div>
	</body>
</html>