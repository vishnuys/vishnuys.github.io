<?php
include 'connect.php';
session_start();

if (!$_POST['user']|!$_POST['password'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill up all the required fields')
			window.location.href='login.php'
			</SCRIPT>");
	}
else
{
	$user=$_POST['user'];
	$pwd=$_POST['password'];
	
	$sql=mysql_query("SELECT * FROM  users WHERE username = '$user' AND password='$pwd'");
	$res=mysql_fetch_row($sql);
	if ($res) 
	{
		$a=mysql_query("SELECT usertype FROM  users WHERE username = '$user' AND password='$pwd'");
		$typ=mysql_result($a,0);

		if ($typ==0) 
		{
			$_SESSION['login']=5;
			header('location:admin.php');
		}		
		else if ($typ==1) 
		{
			$_SESSION['login']=1;
			header('location:pc.php');
		}
		else if ($typ==2) 
		{
			$_SESSION['login']=2;
			header('location:student.php');
		}
		$_SESSION['username']=$user;		
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Invalid Credentials. Please re-enter')
			window.location.href='login.php'
			</SCRIPT>");
	}
}
?>