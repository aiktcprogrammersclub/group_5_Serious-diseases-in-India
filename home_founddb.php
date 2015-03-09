<?php

include('db.php');

$tagcode=$_POST['tagcode'];
$found_loc=$_POST['found_loc'];
$lugg_desc=$_POST['lugg_desc'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];
$contact3=$_POST['contact3'];
$address=$_POST['address'];

$status="No";
$status1="UnDeliverd";
$status2="Found";

if($tagcode == "" || $found_loc == "" || $lugg_desc == "" || $contact1 == "")
{
include('home_found.html');
}
else
{
$sql="select * from login where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];
	if($count>0)
	{
	$sql1="insert into found_other values(0,'$tagcode','$found_loc','$lugg_desc','$email1','$email2','$contact1','$contact2','$contact3','$address','$status1')";
	$query1=mysql_query($sql1);
	
		if($query1)
		{
		$sql2="update lugg_lost set status='$status2' where tagcode='$tagcode'";
		$query2=mysql_query($sql2);
			if($query2)
			{
			echo "<script>alert('Information Updated Successfully')</script>";
			include('home_found.html');
			}
			else
			{
			echo "<script>alert('Problem in connection. Please Try again.')</script>";
			include('home_found.html');
			}
		}
		else
		{
		echo "<script>alert('Problem in connection. Please Try again.')</script>";
		include('home_found.html');
		}
	}
	else
	{
	echo "<script>alert('Tagcode incorrect Or information incorrect')</script>";
	include('home_found.html');
	}
}
?>
