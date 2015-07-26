<?php
include("datalink.php");
$rspass=mysql_query("select cpassword from cust_master where usertype='admin'");
$row=mysql_fetch_array($rspass);
$old=$_REQUEST['txt1'];
$new=$_REQUEST['txt2'];
$x=$row['cpassword'];
if($old==$x)
{
	mysql_query("update cust_master set cpassword='$new' where usertype='admin'");
	header("location:adminchoice.php?st=2");
}
else
{
	header("location:changepassword.php?st=1");
}
?>