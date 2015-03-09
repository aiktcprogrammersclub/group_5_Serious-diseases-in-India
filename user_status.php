<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php
session_start();
include('db.php');
$session=$_SESSION['u_prof_tag'];
$sql="select * from session where session_id='$session'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];
if($session=='' && $count<=0)
{
echo "<script>alert('Please Login Again')</script>";
include('index.php');
}
else{
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
</script>
<h1><center>USER</h1></center>
</head>

<body><table align="center" >
<form>
  <tr>
    <td>


<div id="main_body">
  <div id="navigation">
<ul>

<li><a class="active" href="user_profile.php" title="home">Home</li>
<li><a href="lost.php" class="home" title="about us">Lost</a></li>
<!--<li><a href="login.html" class="home" title="network">Register</a></li>-->
<li><a href="found.php" class="sub" title="submission">Found</a></li>
<li><a href="passwd.php" class="home" title="archives">Password</a></li>
<li><a href="travel.php" class="home" title="archives">Update Travel</a></li>		
<li><a href="acc_updt.php" class="home" title="archives">Update Acc</a></li>
<li><a href="user_status.php" class="home" title="archives">Status</a></li>									
<li><a href="logout.php" class="con" title="contact us">Logout</a></li>
</ul>
</div>
</div>
<br>

<?
include('db.php');
session_start();
$tagcode=$_SESSION['u_prof_tag'];
$counter=0;
$status="UnDeliverd";
echo "<h3><center>User Status</center></h3>";
//echo "<h4><center>Found Others</center></h4>";
$sql="select * from found_other where tagcode='$tagcode' and status='$status'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$count=$ret[0];

if($count>0)
{
	$counter=$counter+1;
	echo "<center><table border='1'>";
	echo "<tr><br><th><font color=black>Serial No</th>
		<th><font color=black>Tagcode</th> 
		<th><font color=black>Found Location</th>
		<th><font color=black>Luggage Description</th>
		<th><font color=black>Email id1</th> 
		<th><font color=black>Email id2</th>
		<th><font color=black>Contact 1</th>
		<th><font color=black>Contact 2</th>
		<th><font color=black>Contact 3</th>
		<th><font color=black>Address</th> 
		<th><font color=black>Status</th>
		</tr>";
	echo "<br>";

	$sql1="select * from found_other where tagcode='$tagcode' and status='$status'";
	$query1=mysql_query($sql1);

	echo mysql_error();
	while($row=mysql_fetch_array($query1)){
	echo "<tr> <td><font color=red>$row[sr_no]</font></td> <td><font color=red>$row[tagcode]</font></td> <td><font color=red>$row[found_loc]</td><td><font color=red>$row[lugg_desc]</td><td><font color=red>$row[emailid1]</td><td><font color=red>$row[emailid2]</td><td><font color=red>$row[contact1]</td><td><font color=red>$row[contact2]</td><td><font color=red>$row[contact3]</td><td><font color=red>$row[address]</td><td><font color=red>$row[status]</td></font></tr> <br>";
	}
}

//echo "<h4><center>Found Operators</center></h4>";

$sql2="select * from found_operator where tagcode='$tagcode' and status='$status'";
$query2=mysql_query($sql2);
$ret2=mysql_fetch_row($query2);
$count2=$ret2[0];

if($count2>0)
{
	$counter=$counter+1;
	echo "<center><table border='1'>";
	echo "<tr><br><th><font color=black>Serial No</th>
	<th><font color=black>Tagcode</th> 
	<th><font color=black>Luggage Description</th>
	<th><font color=black>Found Location</th>
	<th><font color=black>Company name</th>
	<th><font color=black>Contact info</th>
	<th><font color=black>Required detail</th> 
	<th><font color=black>Contact 1</th>
	<th><font color=black>Contact 2</th>
	<th><font color=black>Email id1</th>
	<th><font color=black>Address</th> 
	<th><font color=black>Status</th>
	</tr>";
	echo "<br>";
	$sql3="select * from found_operator where tagcode='$tagcode' and status='$status'";
	$query3=mysql_query($sql3);
	echo mysql_error();
	while($row=mysql_fetch_array($query3)){
	echo "<tr> <td><font color=red>$row[sr_no]</font></td> <td><font color=red>$row[tagcode]</font></td> <td><font color=red>$row[lugg_desc]</td><td><font color=red>$row[found_loc]</td><td><font color=red>$row[cmp_name]</td><td><font color=red>$row[contact_info]</td><td><font color=red>$row[req_details]</td><td><font color=red>$row[contact1]</td><td><font color=red>$row[contact2]</td><td><font color=red>$row[email1]</td><td><font color=red>$row[address]</td><td><font color=red>$row[status]</td></font></tr> <br>";
	}

}

if($counter==0)
{
	echo"<br><br>";
	echo"<center><h1>NOT YET FOUND</h1></center>";
}
// End if form submitted
}
?>
</form>
</body>

</html>
