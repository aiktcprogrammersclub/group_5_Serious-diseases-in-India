
xxx
<?php

include('db.php');
$tagcode=$_POST['tagcode'];
$passwd=$_POST['passwd'];
$passwde=md5($passwd);
$status="No";
//$admin="admin";

/*if($tagcode==$admin)
{
	echo"Tagcode admin1";
}
else
{
	echo"Not working";
}
if($tagcode=="admin")
{
	echo"Tagcode admin2";
}
else
{
	echo"Not working";
}
*/

if($tagcode=="" || $passwd =="")
{
	include('index1.html');
}
else
{
	$sql="select * from login where tagcode='$tagcode'and passwd='$passwde' and status='$status'";
	$query = mysql_query($sql);
	$ret=mysql_fetch_row($query);
	$count = $ret[0];
		if($count>0)
		{
			session_start();
			//echo"Query successfully executed";
			if($tagcode == '1')
			{
			
			$_SESSION['adm_tag']=$tagcode;
			include('admin_prof.php');
			}
			else
			{
			
			$sql1="select * from acc_info where tagcode='$tagcode'";
			$query1=mysql_query($sql1);
			$ret1=mysql_fetch_row($query1);
			$count1=$ret1[0];
				if($count1>0)
				{
				
				$_SESSION['u_prof_tag']=$tagcode;
				$sql2="insert into session values('$tagcode')";
				$query2=mysql_query($sql2);
					if($query2)
					{

					include('user_profile.php');
						
					}
					else
					{
					include('user_profile.php');
					}
				}
				else
				{
				$_SESSION['u_reg_tag']=$tagcode;
				include('register.html');	
				}
			}
		}		
		else
		{
		echo"<script>alert('Please Enter correct information')</script>";
		//echo"Query not successfully executed";
		include('index.html');
		}
	
	
}
?>
