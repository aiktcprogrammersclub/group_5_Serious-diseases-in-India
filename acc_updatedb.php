<?php
include_once('db.php');

$tagcode=$_POST['tagcode'];
$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$emailid=$_POST['email'];
$contact1=$_POST['con1'];
$contact2=$_POST['con2'];
$post_addr=$_POST['postadd'];
$perm_addr=$_POST['permadd'];
$dob=$_POST['dob'];

if($tagcode == "" || $title == "" || $fname == "" || $emailid=="" || $contact1=="" || $perm_addr=="" || $dob == "")
{
	echo "<script>alert('Incorrect Information')</script>";
	include('acc_updt.php');
}
else
{
$sql="update acc_info set title='$title',fname='$fname',lname='$lname',emailid='$emailid',contact1='$contact1',contact2='$contact2',post_addr='$post_addr',perm_addr='$perm_addr',dob='$dob' where tagcode='$tagcode'";
$query=mysql_query($sql);
	if($query)
	{
	echo "<script>alert('Information Updated Successfully')</script>";
	include('acc_updt.php');
	}
	else
	{
	echo "<script>alert('Incorrect Information')</script>";
	include('acc_updt.php');
	}
}
?>
