<?php
$connection = mysql_connect("localhost", "root","");
or die(mysql_error());
}
else
{
echo "You are Succesfully connected!!!";
}

$db_select = mysql_select_db("student",$connection);
or die(mysql_error());
}

?>
