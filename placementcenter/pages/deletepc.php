<?php
include "connect.php";
$user=$_POST['user'];
$pwd=$_POST['password'];
$deluser=$_POST['deluser'];
$sql=mysql_query("SELECT * FROM  users WHERE username = '$user' AND password='$pwd' AND usertype=0");
$res=mysql_fetch_row($sql);
if ($res) 
{
	$del=mysql_query("DELETE FROM users WHERE username='$deluser'");
	if ($del) 
	{
		$del2=mysql_query("DELETE FROM pc WHERE username='$deluser'");
		if ($del2) 
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Delete Successful.')
			window.location.href='admin.php'
			</SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Delete Unsuccessful. Try again.')
				window.location.href='delpc.php'
				</SCRIPT>");
		}
		
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Delete Unsuccessful. Try again.')
			window.location.href='delpc.php'
			</SCRIPT>");
	}
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Invalid Username or Password. Try again.')
			window.location.href='delpc.php'
			</SCRIPT>");
}