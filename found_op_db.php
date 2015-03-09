<?php

include('db.php');

$tagcode=$_POST['tagcode'];
$found_loc=$_POST['found_loc'];
$cmp_name=$_POST['cmp_name'];
$con_info=$_POST['con_info'];
$req_detail=$_POST['req_detail'];
$lugg_desc=$_POST['lugg_desc'];
$email1=$_POST['email1'];
$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];
$address=$_POST['address'];

$status="No";
$status1="UnDeliverd";
$status2="Found";

if($tagcode == "" || $found_loc == "" || $lugg_desc == "" || $con_info == "" || $cmp_name == "")
{
include('found_op.html');
}
else
{
$sql="select * from login where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];
	if($count>0)
	{
	$sql1="insert into found_operator values(0,'$tagcode','$lugg_desc','$found_loc','$cmp_name','$con_info','$req_detail','$contact1','$contact2','$email1','$address','$status1')";
	$query1=mysql_query($sql1);
	
		if($query1)
		{
		$sql2="update lugg_lost set status='$status2' where tagcode='$tagcode'";
		$query2=mysql_query($sql2);
			if($query2)
			{
			echo "<script>alert('Information Updated Successfully')</script>";
			include('found_op.html');
			}
			else
			{
			echo "<script>alert('Problem in connection. Please Try again.')</script>";
			include('found_op.html');
			}
		}
		else
		{
		echo "<script>alert('Problem in connection. Please Try again.')</script>";
		include('found_op.html');
		}
	}
	else
	{
	echo "<script>alert('Tagcode incorrect Or information incorrect')</script>";
	include('found_op.html');
	}
}
?>
