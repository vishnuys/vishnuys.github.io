<?php
	
include "connect.php";

$pname=$_POST['pname'];
$rno=$_POST['rno'];
$branch=$_POST['branch'];
$uname=$_POST['uname'];

if (is_null($pname) OR is_null($rno) OR is_null($branch)) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill all details.')
			window.location.href='pcdetails.php'
			</SCRIPT>");
}
else
{
	$sql=mysql_query("INSERT INTO pc (name,reg_no,branch,username) VALUES ('$pname','$rno','$branch','$uname')");
	if ($sql) 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
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
					</SCRIPT>");
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('PC details could not be updated. Try again.')
					window.location.href='pcdetails.php'
					</SCRIPT>");
	}
}
?>