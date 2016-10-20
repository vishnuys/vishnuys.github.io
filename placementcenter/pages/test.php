<?php
include "connect.php";

$sql=mysql_query("SELECT * FROM users ");
while ($row = mysql_fetch_assoc($sql)) 
{
	echo $row['username']."     ".$row['password']."     ";
}


?>