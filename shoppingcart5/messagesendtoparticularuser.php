<?php
include("datalink.php");
$msg=$_REQUEST['txt1'];
$usercid=$_REQUEST['cmbuser'];

mysql_query("insert into msg (message,cid) value('$msg','$usercid')");

	header("location:adminchoice.php?st=5");





?>