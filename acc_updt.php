<?php
include('db.php');
session_start();
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

$tagcode=$_SESSION['u_prof_tag'];

if($tagcode == "")
{
include('acc_updt.php');
}
else
{
$sql="select * from acc_info where tagcode='$tagcode'";
$query=mysql_query($sql);
$ret=mysql_fetch_row($query);
$tagcode1=$ret[0];
$title=$ret[1];
$fname=$ret[2];
$lname=$ret[3];
$emailid=$ret[4];
$con1=$ret[5];
$con2=$ret[6];
$post_addr=$ret[7];
$perm_addr=$ret[8];
$dob=$ret[9];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function validation(tagcode,title,fname,email,con1,dob,permadd)
{
	if(tagcode.value == "" || title.value =="" || fname.value =="" || email.value =="" || con1.value ==""
	 permadd.value =="" || dob.value=="")
	{
	alert("Information Missing, Please Enter mandatory Information");
	}
}
</script>
<h1><center>USER</h1></center>
</head>
<form name ="acc_update" method=post action=acc_updatedb.php>
<body><table align="center" >
  <tr>
    <td>


<div id="main_body">
  <div id="navigation">
<ul>
<li><a class="active" href="user_profile.php" title="home">Home</li>

<li><a href="passwd.php" class="home" title="archives">Password</a></li>
	
<li><a href="acc_updt.php" class="home" title="archives">Update Acc</a></li>
														
<li><a href="logout.php" class="con" title="contact us">Logout</a></li>

</ul>
</div>
</div>

<!--<div id="main_body">
  <div id="navigation">
<ul>
<li><a class="active" href="index.html" title="home">Home</li>
<li><a href="aboutus.html" class="home" title="about us">About Us</a></li>
<li><a href="login.html" class="home" title="network">Register</a></li>
<li><a href="lostbag.html" class="sub" title="submission">Lost</a></li>
<li><a href="found.html" class="home" title="archives">Found</a></li>

<li><a href="contact.html" class="con" title="contact us">Contact</a></li>
</ul>
</div>
</div>-->
<br>

<h3><center>Update Account Details</center></h3>

<table align="center" cellpadding = "10">

<?
echo "<tr>
<td>Username *</td>
<td><input type='text' name='tagcode' value='$tagcode1' maxlength='15'/>

</td>
</tr>
<tr>
<td>Title </td>
<td><input type='text' name='title' value='$title' maxlength='30'/>

</td>
</tr>



<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME </td>
<td><input type='text' name='fname' value='$fname' maxlength='30'/>

</td>
</tr>

<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME </td>
<td><input type='text' name='lname' value='$lname' maxlength='30'/>

</td>
</tr>

<tr>
<td>Email Id </td>
<td><input type='text' name='email' value='$emailid' maxlength='30'/>

</td>
</tr>

<tr>
<td>Contact no1 </td>
<td><input type='text' name='con1' value='$con1' maxlength='30'/>

</td>
</tr>

<tr>
<td>Contact no2 </td>
<td><input type='text' name='con2' value='$con2' maxlength='30'/>

</td> 
</tr>

<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH </td>
<td><input type='text' name='dob' value='$dob' maxlength='30'/>

</td>
</tr>

<!----- Address ---------------------------------------------------------->
<tr>
<td>Post Address <br /><br /><br /></td>
<td><textarea name='postadd' rows='4' cols='30'>$post_addr</textarea></td>
</tr>

<tr>
<td>Permanent Address <br /><br /><br /></td>
<td><textarea name='permadd' rows='4' cols='30'>$perm_addr</textarea></td>
</tr>";
}
?>



<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" onClick="JavaScript:validation(tagcode,title,fname,email,con1,dob,permadd)">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</body>
</form>
</html>
<?
}
?>


