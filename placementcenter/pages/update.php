<?php
include "connect.php";

$name=$_POST['name'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

if ($pwd!=$cpwd) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Passwords do not match. Please enter again.')
			window.location.href='new.php'
			</SCRIPT>");
}
else
{
	 $sql=mysql_query("INSERT INTO users (name,username,password,usertype) VALUES ('$name','$uname','$pwd',2)");
	 if ($sql) 
	 {
	 	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('New user created successfully.')
			window.location.href='studetails.php'
			</SCRIPT>");
	 }
	 else
	 {
	 	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('New user could not be created. Try again.')
			window.location.href='new.php'
			</SCRIPT>");
	 }
}