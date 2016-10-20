<?php
include "connect.php";

$name=$_POST['name'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$aname=$_POST['aname'];
$apwd=$_POST['apwd'];

if ($pwd!=$cpwd) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Passwords do not match. Please enter again.')
			window.location.href='new.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("SELECT * FROM  users WHERE username = '$aname' AND password='$apwd' AND usertype=0");
	$res=mysql_fetch_row($sql);
	if ($res) 
	{
		$sql=mysql_query("INSERT INTO users (name,username,password,usertype) VALUES ('$name','$uname','$pwd',0)");
		 if ($sql) 
		 {
		 	echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('New admin created successfully.')
				window.location.href='admin.php'
				</SCRIPT>");
		 }
		 else
		 {
		 	echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('New admin could not be created. Try again.')
				window.location.href='addadmin.php'
				</SCRIPT>");
		 }
	}
	else
	{
		 echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Admin username or password is incorrect. PLease Try again.')
				window.location.href='addadmin.php'
				</SCRIPT>");
	}
}
?>