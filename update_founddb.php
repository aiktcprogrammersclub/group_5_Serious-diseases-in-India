<?php

include('db.php');

$tagcode=$_POST['tagcode'];
$status="Delivered";
if($tagcode == "")
{
	include('update_found.html');
}
else
{
$sql="update found_operator set status='$status' where tagcode='$tagcode'";
$query = mysql_query($sql);

$sql1="update found_other set status='$status' where tagcode='$tagcode'";
$query1 = mysql_query($sql1);
	if($query || $query1)
	{
	echo"<script>alert('Tag Updated Successfully')</script>";
	include('update_found.html');
	}
	else
	{
	echo"<script>alert('Connection Error. Please try again')</script>";
	include('update_found.html');
	}
}
?>
