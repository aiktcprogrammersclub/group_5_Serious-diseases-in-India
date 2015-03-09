<?php
include('db.php');
session_start();
$tagcode=$_SESSION['u_prof_tag'];
$oldpasswd=$_POST['oldpasswd'];
$passwd=$_POST['passwd'];
$repass=$_POST['repass'];
$passwde=md5($passwd);
$oldpasswde=md5($oldpasswd);

if($tagcode == "" || $oldpasswd == "" || $passwd == "" || $repass == "")
{
include('passwd.php');
}
else
{
	if($passwd != $repass)
	{
	include('passwd.php');
	}
	else
	{
	$sql="select * from login where tagcode='$tagcode' and passwd='$oldpasswde'";
	$query=mysql_query($sql);
	$ret=mysql_fetch_row($query);
	$count=$ret[0];
		if($count>0)
		{
		$sql1="update login set passwd='$passwde' where tagcode='$tagcode'";
		$query1=mysql_query($sql1);
			if($query1)
			{
			echo "<script>alert('Password Updated Successfull')</script>";
			include('passwd.php');
			}
			else
			{
			echo "<script>alert('Connect Problem. Please Try again')</script>";
			include('passwd.php');
			}
		}
		else	
		{
		echo"<script>alert('Old Password Did not match')</script>";
		include('passwd.php');
		}
	}
}



?>
