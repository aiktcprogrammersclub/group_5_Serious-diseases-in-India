<?php

include('db.php');

$tagcode=$_POST['tagcode'];
$status="No";
if($tagcode == "")
{
	include('update_tag.html');
}
else
{
$sql="update login set status='$status' where tagcode='$tagcode'";
$query = mysql_query($sql);
	if($query)
	{
	echo"<script>alert('Tag Updated Successfully')</script>";
	include('update_tag.html');
	}
	else
	{
	echo"<script>alert('Connection Error. Please try again')</script>";
	include('update_tag.html');
	}
}
?>
