<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<titlerity></title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
</script>
<h1><center>ADMIN</center></h1>
</head>

<body><table align="center" >
<form>
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

<?php
include('db.php');
echo "<h3><center>Found History</center></h3>";
//echo "<h4><center>Found Others</center></h4>";
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

$sql="select * from found_other";
$query=mysql_query($sql);
echo mysql_error();
while($row=mysql_fetch_array($query)){
echo "<tr> <td><font color=red>$row[sr_no]</font></td> <td><font color=red>$row[tagcode]</font></td> <td><font color=red>$row[found_loc]</td><td><font color=red>$row[lugg_desc]</td><td><font color=red>$row[emailid1]</td><td><font color=red>$row[emailid2]</td><td><font color=red>$row[contact1]</td><td><font color=red>$row[contact2]</td><td><font color=red>$row[contact3]</td><td><font color=red>$row[address]</td><td><font color=red>$row[status]</td></font></tr> <br>";
}

//echo "<h4><center>Found Operators</center></h4>";
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

$sql="select * from found_operator";
$query=mysql_query($sql);
echo mysql_error();
while($row=mysql_fetch_array($query)){
echo "<tr> <td><font color=red>$row[sr_no]</font></td> <td><font color=red>$row[tagcode]</font></td> <td><font color=red>$row[lugg_desc]</td><td><font color=red>$row[found_loc]</td><td><font color=red>$row[cmp_name]</td><td><font color=red>$row[contact_info]</td><td><font color=red>$row[req_details]</td><td><font color=red>$row[contact1]</td><td><font color=red>$row[contact2]</td><td><font color=red>$row[email1]</td><td><font color=red>$row[address]</td><td><font color=red>$row[status]</td></font></tr> <br>";
}

// End if form submitted

?>
</form>
</body>
</html>
