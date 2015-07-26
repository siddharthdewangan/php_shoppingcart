<?php
include("datalink.php");
$itemid=$_REQUEST['st'];
$rsitem=mysql_query("select pid,pname,price,catid,image from item_master where catid=$itemid");

	while($row=mysql_fetch_array($rsitem))
	{
		$image=$row[''];
		$name=$row['pname'];
		$price=$row['price'];
		
		echo $name;
		echo $price;
		echo "<br>";
	}




?>