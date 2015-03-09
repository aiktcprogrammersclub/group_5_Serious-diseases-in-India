<?php

include('db.php');
session_start();
//$tagcode=$_POST['tagcode'];
$tagcode=$_SESSION['u_prof_tag'];
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
$status3="Lost";

if($tagcode == "" || $found_loc == "" || $lugg_desc == "" || $contact1 == "")
{
include('found.php');
}
else
{
$sql="select * from login where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];
	if($count>0)
	{
	$sql3="select * from lugg_lost where tagcode='$tagcode' and status='$status3'";
	$query3=mysql_query($sql3);
	$ret3=mysql_fetch_row($query3);
	$count3=$ret3[0];
	if($count3>0)
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
			include('found.php');
			}
			else
			{
			echo "<script>alert('Problem in connection. Please Try again.')</script>";
			include('found.php');
			}
		}
		else
		{
		echo "<script>alert('Problem in connection. Please Try again.')</script>";
		include('found.php');
		}
	}
	else
	{
	echo "<script>alert('Please insert luggage lost info first')</script>";
	include('found.php');
	}
	}
	else
	{
	echo "<script>alert('Tagcode incorrect Or information incorrect')</script>";
	include('found.php');
	}
}
?>
