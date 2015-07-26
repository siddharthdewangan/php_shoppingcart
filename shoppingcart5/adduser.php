<?php session_start(); ?>
<html>
<body>
<?php
include("datalink.php");

$name=$_REQUEST['txtname'];
$address=$_REQUEST['txtaddress'];
$cno=$_REQUEST['txtcno'];
$emailid=$_REQUEST['txtemailid'];
$username=$_REQUEST['txtuser'];
$password=$_REQUEST['txtpassword'];
$rpassword=$_REQUEST['txtrpassword'];
$hide=$_REQUEST['hide'];


if($rpassword==$password)
{
	
	if($hide=='10')
	{
		
		mysql_query("insert into cust_master(cname,caddress,ccno,cemailid,cusername,cpassword) 													         values('$name','$address','$cno','$emailid','$username','$password')");
	}
	else if($hide=='20')
	{
	   $cusername=$_SESSION['uid'];
		mysql_query("update cust_master set cname='$name',caddress='$address',ccno='$cno',cemailid='$emailid',cpassword='$password' where cusername='$cusername'");
	}
	if(isset($_SESSION['pid']))
	{
		header("location:bigitem.php");
	}
		
	else
	{
 		header("location:userchoice.php");
	}
	
}
else
{
	header("location:signup.php");
}
?>
</body>
</html>
