<?php
include "connect.php";
session_start();
if (!isset($_SESSION['login']) AND $_SESSION['login']!=1) 
{
	header('location:login.php');		
}
$cname=$_POST['cname'];
$ctc=$_POST['ctc'];
$handler=$_POST['handler'];
$perc=$_POST['percri'];
$live=$_POST['live'];
$dead=$_POST['dead'];
$date=$_POST['date'];


$sql=mysql_query("INSERT INTO company VALUES ('$cname',$ctc,'$handler',$perc,$live,$dead,'$date')");
if ($sql) 
{
	$com=mysql_query("CREATE TABLE $cname (name varchar(30), reg_no varchar(10), branch varchar(5))");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		x=window.confirm('New Company added. Do you want to add more?')
		if (x==true) 
		{
			window.location.href='addcomp.php'
		}
		else
		{
			window.history.back()
			window.history.back()
		}		
		</SCRIPT>");
}	
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('New company could not be added. Try again.')
			window.location.href='addcomp.php'
			</SCRIPT>");
}
?>