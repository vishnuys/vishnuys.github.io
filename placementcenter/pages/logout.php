<?php 
session_start();
$_SESSION['login']=-1;
$_SESSION['username']=NULL;
echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Logout Successful.')
			window.location.href='login.php'
			</SCRIPT>");
?>