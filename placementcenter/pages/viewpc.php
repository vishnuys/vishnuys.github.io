<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" />
		<title>View Placement Coordinator</title> 
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
		<h2 id="pc">Placement Coordinators 2016</h2>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Branch</th>
				</tr>
			</thead>
			<?php
			include "connect.php";


			$sql=mysql_query("SELECT * FROM pc ");

			while ($row = mysql_fetch_assoc($sql)) 
			{
				echo "<tr class='light'>
			        <td>".$row['name']."</td>
			        <td>".$row['branch']."</td>
			      </tr>";
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