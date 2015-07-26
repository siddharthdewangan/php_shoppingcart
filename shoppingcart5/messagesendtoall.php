<?php
include("datalink.php");
$msg=$_REQUEST['txt1'];


mysql_query("insert into msg (message,cid) value('$msg','0')");

	header("location:adminchoice.php?st=4");






?>