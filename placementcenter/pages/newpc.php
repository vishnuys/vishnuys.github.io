<?php
	
include "connect.php";

$pname=$_POST['pname'];
$puname=$_POST['puname'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$yname=$_POST['yname'];
$ypwd=$_POST['ypwd'];

if ($pwd!=$cpwd) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Passwords do not match. Please enter again.')
			window.location.href='addpc.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("SELECT * FROM  users WHERE username='$puname' ");
	$res=mysql_fetch_row($sql);
	if ($res) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Username already exists. Please try different one.')
			window.location.href='addpc.php'
			</SCRIPT>");
	}
	else
	{
		$sql=mysql_query("SELECT * FROM  users WHERE username = '$yname' AND password='$ypwd' AND (usertype=0 OR usertype=1)");
		$res=mysql_fetch_row($sql);
		if ($res) 
		{
			$sql=mysql_query("INSERT INTO users (name,username,password,usertype) VALUES ('$pname','$puname','$pwd',1)");
			 if ($sql) 
			 {
			 	header('location:pcdetails.php');
			 	/*echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('New PC added successfully.');
					x=window.confirm('Do you want to add more?');
					if(x==true)
					{
						window.location.href='addpc.php'
					}
					else 
					{
						window.history.back()
					}
					</SCRIPT>");*/
			 }
			 else
			 {
			 	echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('New PC could not be added. Try again.')
					window.location.href='addpc.php'
					</SCRIPT>");
			 }
		}
		else
		{
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Username or password is incorrect. Please Try again.')
					window.location.href='addpc.php'
					</SCRIPT>");
		}
	}
}
?>