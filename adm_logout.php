<?php
session_start();
include('db.php');
$session=$_SESSION['adm_tag'];
$sql="delete from session where session_id='$session'";
$query=mysql_query($sql);
$_SESSION['adm_tag']='';
unset($_SESSION['adm_tag']);
session_destroy();

if($query)
{
include('index.html');
}
else
{
include('admin_prof.php');
}
?>
