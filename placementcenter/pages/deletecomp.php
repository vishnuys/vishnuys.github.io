<?php
include "connect.php";
$user=$_POST['user'];
$pwd=$_POST['password'];
$delcomp=$_POST['delcomp'];
$sql=mysql_query("SELECT * FROM  users WHERE username = '$user' AND password='$pwd' AND usertype=1");
$res=mysql_fetch_row($sql);
if ($res) 
{
	$del=mysql_query("DELETE FROM company WHERE name='$delcomp'");
	if ($del) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Delete Successful.')
			window.location.href='pc.php'
			</SCRIPT>");		
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Delete Unsuccessful. Try again.')
			window.location.href='delcomp.php'
			</SCRIPT>");
	}
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Invalid Username or Password. Try again.')
			window.location.href='delcomp.php'
			</SCRIPT>");
}