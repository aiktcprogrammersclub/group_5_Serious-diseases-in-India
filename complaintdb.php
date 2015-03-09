<?php

include('db.php');

$name=$_POST['name'];
$emailid=$_POST['emailid'];
$query=$_POST['query'];

if($name=="" || $emailid=="" || $query=="")
{
include('complaint.html');
}
else
{
$sql="insert into complaint values(0,'$name','$emailid','$query')";
$query=mysql_query($sql);
	if($query)
	{
		echo"<Script>alert('your complaint has been successfully added')</Script>";
		include('complaint.html');
	}
	else
	{
		echo"<Script>alert('Connection problem.Please try again later')</Script>";
		include('complaint.html');
	}
}
