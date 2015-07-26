<?php session_start();?>
<?php


include("datalink.php");
$pid=$_SESSION['pid'];
//$pid=$_REQUEST['txtpid'];
$rsstk=mysql_query("select * from item_master where pid=$pid");
$row=mysql_fetch_array($rsstk);
$stk=$row['stock'];

$qty=$_REQUEST["txtqty"];

if($qty=="")
{
	header("location:bigitem.php?sj=10");
}
else 
{
	if($qty>$stk)
	{
		header("location:bigitem.php?sj=11&st=$pid");
	}
	else
	{
		header("location:addpurchase.php?txtqty=$qty");
		
	}

}


?>