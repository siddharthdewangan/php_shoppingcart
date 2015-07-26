
<?php
  
	include("datalink.php");
	$id=$_REQUEST['st'];
	$value=$_REQUEST['v'];
	if($value=='enable')
	{
	$rs=mysql_query("select enable,cid from cust_master where cid='$id'");
	$row=mysql_fetch_array($rs);
	mysql_query("update cust_master set enable='0' where cid='$row[cid]'");
	header("location:showuser.php");
	}
	
	else if($value=='disable')
	{
		$rs=mysql_query("select enable,cid from cust_master where cid='$id'");
		$row=mysql_fetch_array($rs);
		mysql_query("update cust_master set enable='1' where cid='$row[cid]'");
		header("location:showuser.php");
	}
	
	else if($value=='Delete')
	{
				$rs=mysql_query("select cid from cart where cid='$id'");
				while($row=mysql_fetch_array($rs))
				{
						mysql_query("delete from cart where cid='$id'");
				}
			mysql_query("delete from cust_master where cid='$id'");
		
		header("location:showuser.php");

	}
?>
