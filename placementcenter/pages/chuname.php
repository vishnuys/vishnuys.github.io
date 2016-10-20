<?php
include "connect.php";

$cuser=$_POST['cuser'];
$pwd=$_POST['pwd'];
$nuser=$_POST['nuser'];
$sql=mysql_query("SELECT * FROM  users WHERE username = '$cuser' AND password='$pwd'");
$res=mysql_fetch_row($sql);
if ($res) 
{
	$check=mysql_query("SELECT * FROM  users WHERE username = '$nuser'");
	$checking=mysql_fetch_row($check);
	if ($checking) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Username already exists. Please use different Username.')
			window.location.href='changeusername.php'
			</SCRIPT>");
	}
	else
	{	
		$up=mysql_query("UPDATE users SET username='$nuser' WHERE username='$cuser'");
		if ($up) 
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Update successful.')
				window.location.href='login.php'
				</SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Update failed')
				window.location.href='changeusername.php'
				</SCRIPT>");
		}
	}	
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Invalid Username or Password. Try again.')
			window.location.href='changeusername.php'
			</SCRIPT>");
}
?>
