<?php
   $mysql_id = mysql_connect('localhost', 'root', 'nazneen');
$db=mysql_select_db('luggagetrack', $mysql_id);
if(!$db)
{
//echo "Db not connected";
}
else
{
//echo "Db connected";
}
?>
