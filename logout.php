<?php
session_start();
include('db.php');
$session=$_SESSION['u_prof_tag'];
$sql="delete from session where session_id='$session'";
$query=mysql_query($sql);
$_SESSION['u_prof_tag']='';
unset($_SESSION['u_prof_tag']);
session_destroy();

if($query)
{

include('index.html');
}
else
{
include('user_profile.php');
}
?>
