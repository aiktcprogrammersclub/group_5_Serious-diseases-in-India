<?php

include('db.php');

$tagcode=$_POST['tagcode'];
$passwd=$_POST['passwd'];
$repass=$_POST['repass'];

$passwde=md5($passwd);

$avail='Yes';

if($tagcode == "" || $passwd == "" || $repass== "")
{
	include('add_info.html');
}
else
{
	if($passwd != $repass)
	{
		include('add_info.html');
	}
	else
	{
	$sql="select * from login where tagcode='$tagcode'";
	$query=mysql_query($sql);
	$ret=mysql_fetch_row($query);
	$count=$ret[0];
		if($count>0)
		{
		echo"<script>alert('Tagcode Already Exist!!!')</script>";
		include('add_info.html');		
		}
		else
		{
		$sql1="insert into login values('$tagcode','$passwde','$avail')";
		$query1=mysql_query($sql1);
			if($query1)
			{
			echo"<script>alert('Tagcode Added Successfully')</script>";		
			include('add_info.html');
			}
			else
			{
			echo "<script>alert('Problem with Connection. Please try again.')</script>";
			include('add_info.html');
			}
		}
	}
}
?>
