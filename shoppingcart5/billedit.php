<html>
<body>
<?php
include("datalink.php");
$value=$_REQUEST['delcon'];
if($value=='Delete')
{

	$x=$_REQUEST['chkselect'];
	
	for($i=0;$i<count($x);$i++)
	{
		mysql_query("delete from cart_temp where pid=$x[$i]");
		header("location:bill.php");
		
	}




}
else if($value=='Confirm')
{
	
	header("location:confirm.php");

}
?>
</body>
</html>