<?php
include "connect.php";
$cuser=$_POST['uname'];
$cpwd=$_POST['cpwd'];
$npwd=$_POST['npwd'];
$npwd2=$_POST['npwd2'];
if ($npwd!=$npwd2) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Passwords do not match. Try again.')
			window.location.href='changepwd.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("SELECT * FROM  users WHERE username = '$cuser' AND password='$cpwd'");
	$res=mysql_fetch_row($sql);
	if ($res) 
	{
		$up=mysql_query("UPDATE users SET password='$npwd' WHERE username='$cuser'");
		if ($up) 
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Password Changed.')
				window.location.href='login.php'
				</SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Password could not be changed.')
				window.location.href='changeusername.php'
				</SCRIPT>");
		}	
	}
}
?>
