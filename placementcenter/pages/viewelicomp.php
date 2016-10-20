<?php
	session_start();
	if (!isset($_SESSION['login']) OR $_SESSION['login']==-1) 
	{
	  	header('location:login.php');
	}  
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>View Companies</title> 
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
		<h2 id="pc">Companies 2016</h2>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>CTC</th>
					<th>Handler</th>
					<th>Criteria</th>
					<th>Livebacks</th>
					<th>Deadbacks</th>
				</tr>
			</thead>
			<?php
			include "connect.php";
			$uname=$_SESSION['username'];			
			$sql=mysql_query("SELECT c.name,c.ctc,c.handler,c.criteria,c.livebacks,c.deadbacks FROM company c,student s WHERE s.username='$uname' AND s.`b.e_aggr`>=c.criteria AND s.livebacks<=c.livebacks AND s.deadbacks<=c.deadbacks");
			if ($sql) 
			{
				while ($row = mysql_fetch_array($sql)) 
				{
					echo "<tr class='light'>
				        <td>".$row[0]."</td>
				        <td>".$row[1]."</td>
				        <td>".$row[2]."</td>
				        <td>".$row[3]."</td>
				        <td>".$row[4]."</td>
				        <td>".$row[5]."</td>
				      </tr>";
				}
			}
			else
			{
				echo "<h4>No eligible companies or Username doesn't exist</h4>";
			}
			

			/*<tr class='light'>
			        <td></td>
			        <td></td>
			      </tr>
			      <tr class='dark'>
			        <td></td>
			        <td></td>        
			      </tr>*/
			?>
		</table>
		
	</body>
</html>