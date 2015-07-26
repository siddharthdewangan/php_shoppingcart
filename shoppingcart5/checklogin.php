<?php session_start(); ?>
<html>
<body>
<?php
include("datalink.php");
$user=$_REQUEST['txtusername'];
$password=$_REQUEST['txtpassword'];
$rsuser=mysql_query("select * from cust_master where cusername='$user'");
$pid=$_SESSION['pid'];

if(mysql_num_rows($rsuser)==0)
{
	header("location:login.php?st=1");
}
else
{
	$row=mysql_fetch_array($rsuser);
	if($row['cpassword']==$password)
	{	
		$_SESSION['uid']=$user;
		if($row['usertype']=="user")
		{
			 if($row['enable']==1)
			 {
			 	if(isset($_SESSION['pid']))
				{
					header("location:bigitem.php?st=$pid");
				
				}
				else
				{
						header("location:userchoice.php");
				}
			 }
			 else
			 {
				 header("location:login.php?st=3");
			 }
		}
		else
		{
			header("location:adminchoice.php");
		}
		
	}
	else
	{
		header("location:login.php?st=2");
	}
}
?>
</body>
</html>