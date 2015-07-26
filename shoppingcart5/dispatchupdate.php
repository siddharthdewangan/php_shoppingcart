<?php
include("datalink.php");

	$x=$_REQUEST['chkselect'];
	
	for($i=0;$i<count($x);$i++)
	{
		mysql_query("update cart set dispatch_status='1' where tid=$x[$i]");
		
	}

	header("location:adminchoice.php");

?>