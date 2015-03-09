<?php
include_once('db.php');
session_start();

$tagcode=$_SESSION['u_prof_tag'];
$travel_loc=$_POST['travel_loc'];
$lugg_desc=$_POST['lugg_desc'];
$con_det=$_POST['con_details'];
$status="No";

if($tagcode == "" || $travel_loc == "" || $lugg_desc=="" || $con_det=="")
{
include('travel.php');
}
else
{
$sql="select * from login where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];
	if($count>0)
	{
	$sql1="insert into travel_plan values(0,'$tagcode','$lugg_desc','$travel_loc','$con_det')";	
	$query1=mysql_query($sql1);
		if($query1)
		{
		echo "<script>alert('Information Added Successfully')</script>";
		include('travel.php');
		}
		else
		{
		echo "<script>alert('Problem in connection. Please Try again.')</script>";
		include('travel.php');
		}
	}
	else
	{
	echo "<script>alert('Tagcode incorrect')</script>";
	include('travel.php');
	}
}



?>
