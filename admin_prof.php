<html>

<?php
session_start();
include('db.php');
$session=$_SESSION['adm_tag'];
$sql="select * from session where session_id='$session'";
$query=mysql_query($sql);
if($session=='' && $query)
{
include('index.php');
}
else{
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
</script>
<h1><center>ADMIN</center></h1>

</head>
<form method=post action=register.html>
<body><table align="center" >
  <tr>
    <td>

<div id="main_body">
  <div id="navigation">
<ul>
<li><a class="active" href="admin_prof.php" title="home">Home</li>
<li><a class="active" href="add_info.html" title="home">Add Tags</li>
<li><a href="tags_avail_db.php" class="home" title="about us">Tags avail</a></li>
<!--<li><a href="login.html" class="home" title="network">Register</a></li>-->
<li><a href="update_tag.html" class="sub" title="submission">Update Tag</a></li>
<li><a href="lost_hist_db.php" class="home" title="archives">Lost History</a></li>
<li><a href="found_histdb.php" class="home" title="archives">Found History</a></li>
<li><a href="update_found.html" class="con" title="contact us">Update Found</a></li>		
<li><a href="admin_passwd.html" class="home" title="archives">Password</a></li>		
<li><a href="adm_logout.php" class="con" title="contact us">Logout</a></li>

</ul>
</div>
</div>
<br>
 
  <div id="image_1_ptag"><h1></h1>


 
<div id="content_area">
 
    <p>This is Colour Line template for your website design which is under Holiday and Travel Template category you can add. You can customize the layout of the html page any way you like.</p><br class="bank">
    <p>The entire website templates are pre-designed websites all  you need to do is adding your own personal content and start your own website.  You can customize these layouts any way you like.</p>
    <p>These professional web site templates are built using XHTML  and CSS.</p>
    <p>The site is free to use, and registration lets you submit  ideas and post to a forum.</p>
    <p>Start with a creative design from <strong>FreeDesignerTemplates.com</strong> and jump-start your development process.</p>
  </div>

  <?
}
?>   

</html>
