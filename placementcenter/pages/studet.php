<?php
	
include "connect.php";

$sname=$_POST['sname'];
$rno=$_POST['rno'];
$dob=$_POST['dob'];
$branch=$_POST['branch'];
$tenth=$_POST['tperc'];
$twelth=$_POST['twperc'];
$be=$_POST['bperc'];
$live=$_POST['lbl'];
$dead=$_POST['dbl'];
$caste=$_POST['caste'];
$uname=$_POST['uname'];

if (is_null($sname) OR is_null($rno) OR is_null($branch) OR is_null($dob) OR is_null($tenth) OR is_null($twelth) OR is_null($be) OR is_null($live) OR is_null($dead) OR is_null($caste) OR is_null($uname)) 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill all details correctly.')
			window.location.href='studetails.php'
			</SCRIPT>");
}

else
{
	if ($caste=='Other') 
	{
		$caste=NULL;
	}

	$check=mysql_query("SELECT username FROM users WHERE username='$uname'");
	$it=mysql_fetch_array($check);
	if ($it) 
	{
		$sql=mysql_query("INSERT INTO student (`name`, `reg_no`, `dob`, `branch`, `10th_percentage`, `12th_percentage`, `b.e_aggr`, `livebacks`, `deadbacks`, `Caste`, `username`) VALUES ('$sname','$rno','$dob','$branch',$tenth,$twelth,$be,$live,$dead,'$caste','$uname')");
		if ($sql) 
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('New Student added successfully.');
						x=window.confirm('Do you want to add more?');
						if(x==true)
						{
							window.location.href='new.php'
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
						window.alert('PC details could not be updated. Try again.')
						window.location.href='studetails.php'
						</SCRIPT>");
		}
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Username doesn't exist. Try again.')
						window.location.href='studetails.php'
						</SCRIPT>");
	}
	
}
?>