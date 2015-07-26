<?php
include("datalink.php");
$fb=$_REQUEST['txt1'];
$rscid=mysql_query("select * from cust_master where usertype='admin'");
$row=mysql_fetch_array($rscid);
$cid=$row['cid'];

mysql_query("insert into msg (message,cid) value('$fb','$cid')");

	header("location:mainpage.php?st=3");
	





?>