<html>
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

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
</script>
<h1><center>USER</h1></center>
</head>
<form method=post action=register.html>
<body><table align="center" >
  <tr>
    <td>

<div id="main_body">
  <div id="navigation">
<ul>
<li><a class="active" href="user_profile.php" title="home">Home</li>

<!--<li><a href="login.html" class="home" title="network">Register</a></li>-->

<li><a href="passwd.php" class="home" title="archives">Password</a></li>
		
<li><a href="acc_updt.php" class="home" title="archives">Update Acc</a></li>
									
<li><a href="logout.php" class="con" title="contact us">Logout</a></li>

</ul>
</div>
</div>
<br>
 
  <div id="image_1_ptag"><h1></h1>
<?
echo "<h1>$session</h1>";
?>
<div id="content_area">
 
    <p>This is Colour Line template for your website design which is under Holiday and Travel Template category you can add. You can customize the layout of the html page any way you like.</p><br class="bank">
    <p>The entire website templates are pre-designed websites all  you need to do is adding your own personal content and start your own website.  You can customize these layouts any way you like.</p>
    <p>These professional web site templates are built using XHTML  and CSS.</p>
    <p>The site is free to use, and registration lets you submit  ideas and post to a forum.</p>
    <p>Start with a creative design from <strong>FreeDesignerTemplates.com</strong> and jump-start your development process.</p>
  </div>
</body>
</form>
<?
}
?>
</html>

