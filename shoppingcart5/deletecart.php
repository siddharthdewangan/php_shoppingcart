<?php	
$x=$_REQUEST['chktid'];
include("datalink.php");

for($i=0;$i<count($x);$i++)
{
	mysql_query("delete from cartproducts where tid=$x[$i]");
}

?>