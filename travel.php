<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/JavaScript">
function validation(travel_loc,lugg_desc,con_details)
{
	if(travel_loc.value =="" || lugg_desc.value =="" || con_details.value =="")
	{
	alert("Information Missing, Please Enter mandatory Information");
	}
}
</script>

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
</head>

<body><h1><center>USER</h1></center><table align="center" >
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


<style type="text/css">


</style>
</head>

<body>
<h3><center>Update Travel Details</center></h3>
<form name ="travel" action="traveldb.php" method="POST">

<table align="center" cellpadding = "10">

<!--<tr>
<td>Tag Code *</td>
<td><input type="text" name="tagcode" maxlength="15"/>

</td>
</tr>-->


<tr>
<td>Luggage Description *<br /><br /><br /></td>
<td><textarea name="lugg_desc" rows="4" cols="30"></textarea></td>
</tr>

<tr>
<td>Travel Location *</td>
<td><input type="text" name="travel_loc" maxlength="30"/>

</td>
</tr>


<tr>
<td>Contact Details *<br /><br /><br /></td>
<td><textarea name="con_details" rows="4" cols="30"></textarea></td>
</tr>



<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" onClick="JavaScript:validation(travel_loc,lugg_desc,con_details)">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</form>

</body>
<?
}
?>
</html>
