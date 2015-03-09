<?php
include('db.php');

$tagcode=$_POST['tagcode'];
$oldpasswd=$_POST['oldpasswd'];
$passwd=$_POST['passwd'];
$repass=$_POST['repass'];
$passwde=md5($passwd);
$oldpasswde=md5($oldpasswd);

if($tagcode == "" || $oldpasswd == "" || $passwd == "" || $repass == "")
{
include('admin_passwd.html');
}
else
{
	if($passwd != $repass)
	{
	include('admin_passwd.html');
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
			include('admin_passwd.html');
			}
			else
			{
			echo "<script>alert('Connect Problem. Please Try again')</script>";
			include('admin_passwd.html');
			}
		}
		else	
		{
		echo"<script>alert('Old Password Did not match')</script>";
		include('admin_passwd.html');
		}
	}
}



?>
