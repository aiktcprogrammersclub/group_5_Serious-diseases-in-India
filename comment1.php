<?php
include("db.php");
if(isset($_POST['submit']))
{
 $name=$_POST['namename'];
 $job=$_POST['job'];
 $message=$_POST['message'];
 $insert=mysql_query("insert into commenttable
                (name,job,message)values
                ('$name','$job','$message')")or die(mysql_error());
 header("Location:comment.php");
 }
?>

<?php
include("db.php");
$select=mysql_query("select * from commenttable");
while($row=mysql_fetch_array($select))
{
 echo "<div id='sty'>";
 echo "<img src='files/fav icon.png'"."' width='50px' 
                                                height='50px' 
                                                align='left' />";
 echo "<div id='nameid'>".$row['name']."</div>";
 echo "<div id='msgid'>".$row['message']."</div>";
 echo "</div><br />";
}
?>
