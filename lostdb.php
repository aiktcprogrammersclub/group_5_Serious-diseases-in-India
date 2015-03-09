<?php
include_once('db.php');
session_start();
//$tagcode=$_POST['tagcode'];
$tagcode=$_SESSION['u_prof_tag'];
$lost_loc=$_POST['lost_loc'];
$lugg_desc=$_POST['lugg_desc'];
$other_det=$_POST['other_det'];
$status="No";
$status1="Lost";
if($tagcode == "" || $lost_loc == "" || $lugg_desc=="")
{
include('lost.php');
}
else
{
$sql="select * from login where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];
	if($count>0)
	{
	$sql1="insert into lugg_lost values(0,'$tagcode','$lost_loc','$lugg_desc','$other_det','$status1')";	
	$query1=mysql_query($sql1);
		if($query1)
		{
		echo "<script>alert('Information Added Successfully')</script>";
		include('lost.php');
		}
		else
		{
		echo "<script>alert('Problem in connection. Please Try again.')</script>";
		include('lost.php');
		}
	}
	else
	{
	echo "<script>alert('Tagcode incorrect')</script>";
	include('lost.php');
	}
}



?>
