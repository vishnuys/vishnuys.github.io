<?php
	
include "connect.php";

$regno=$_POST['regno'];
$name=$_POST['name'];

if (is_null($regno) OR is_null($name)) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill all details.')
			window.location.href='pcdetails.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("INSERT INTO `tpo`.`placed` (`reg_no`, `name`) VALUES ('$regno', '$name')");
	if ($sql) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Successfully Updated.');
					x=window.confirm('Do you want to add more?');
					if(x==true)
					{
						window.location.href='uppla.php'
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
		die(mysql_error());
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Update Unsuccessfull')
					window.location.href='uppla.php'
					</SCRIPT>");
	}
}
?>