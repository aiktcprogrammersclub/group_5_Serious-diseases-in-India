<?php
include('db.php');

$tagcode=$_POST['tagcode'];
$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$emailid=$_POST['email'];
$contact1=$_POST['con1'];
$contact2=$_POST['con2'];
$post_addr=$_POST['postadd'];
$perm_addr=$_POST['permadd'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob="$day/$month/$year";

$status="No";
 
if($tagcode == "" || $title == "" || $fname == "" || $emailid=="" || $contact1=="" || $perm_addr=="" || $day=="" || $month=="" || $year=="")
{
	include('register.html');
}
else
{
$sql="select * from login where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];

	if($count>0)
	{
	$sql1="insert into acc_info values('$tagcode','$title','$fname','$lname','$emailid','$contact1','$contact2','$post_addr','$perm_addr','$dob')";
	$query1=mysql_query($sql1);
	
		if($query1)
		{
			session_start();
			$sql2="insert into session values('$tagcode')";
			$query2=mysql_query($sql2);
				if($query2)
				{
					$_SESSION['u_prof_tag']=$tagcode;
					include('user_profile.php');
				}else{
					include('index.php');
				}
		}
		else
		{
		echo"<script>alert('Please Enter correct information')</script>";
		include('register.html');
		#echo"Not Done";
		}
	}
	else
	{
	echo"<script>alert('Please Enter correct Tagcode')</script>";
	include('register.html');
	}
}

?>

