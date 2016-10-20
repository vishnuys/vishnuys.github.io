<?php
	include "connect.php";
	session_start();
	if(!isset($_SESSION['login']) AND $_SESSION['login']!=1)
	{	
		header('location:login.php');		
	}
	$cname=$_POST['cname'];
	$ctc=$_POST['ctc'];
	$handler=$_POST['handler'];
	$criteria=$_POST['criteria'];
	$live=$_POST['live'];
	$dead=$_POST['dead'];
	$date=$_POST['date'];

	if (is_null($cname) OR is_null($ctc) OR is_null($handler) OR is_null($criteria) OR is_null($live) OR is_null($dead) OR is_null($date)) 
	{
		echo '<script type="text/javascript">
		window.alert("Please fill all the details.")
		window.history.back()
		</script>';
	}
	$sql=mysql_query("UPDATE company SET ctc=$ctc,handler='$handler',criteria=$criteria,livebacks=$live,deadbacks=$dead,lastdate='$date' WHERE name='$cname'");
	if ($sql) 
	{
		echo '<script type="text/javascript">
		window.alert("Update Successful.")
		window.history.back()
		window.history.back()
		</script>';
	}
	else
	{
		die(mysql_error());
		echo '<script type="text/javascript">
		window.alert("Update Unsuccessful. Please try again.")		
		window.history.back()
		</script>';
	}

?>
