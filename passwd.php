<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
function validate(oldpasswd,passwd,repass)
{
	if(oldpasswd.value == "")
		{
		alert("Please Enter Old Password");
		}
		else
		{
			if(passwd.value == "")
			{
			alert("Please Enter Password");
			}
			else
			{
				if(repass.value == "")
				{
				alert("Please Enter Re-type Password");
				}
				else
				{
					if(passwd.value != repass.value)
					{
					alert("New Password Does not Match");
					}
				}
			}
		}
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
<h1><center>USER</h1></center>
</head>
<form name="passwd" method="post" action="passwddb.php">
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
<br>

<h3><center>Change Password</center></h3>

<table align="center" cellpadding = "10">

<!--<tr>
<td>Tag code</td>
<td><input type="text" name="tagcode" maxlength="15" /></td>
</tr>-->

<tr>
<td>Old password</td>
<td><input type="password" name="oldpasswd" maxlength="30" />

</td>
</tr>

<tr>
<td>Enter password</td>
<td><input type="password" name="passwd" maxlength="30" />

</td>
</tr>

<tr>
<td>RE-Enter Password</td>
<td><input type="password" name="repass" maxlength="30" />

</td>
</tr>


<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" onClick="JavaScript:validate(oldpasswd,passwd,repass)">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</body>
<?
}
?>
</form>
