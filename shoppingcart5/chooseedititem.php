<html>
<head>
<script>
function chooseitem()
{	
	var x;
	x=document.getElementsByName("cmbcat");
	return x;
}

</script>
</head>
<body>
<form name="chooseitemedit" method="get" action="edititem.php">
Choose the Sub-Category
<?php
$y='';
include("datalink.php");
echo "<select name='cmbcat' onFocus='$y=chooseitem();'>";
$rscat=mysql_query("select catname,catid,cattype,parentid from cat_master where parentid!='0'");
while($cat=mysql_fetch_array($rscat))
{
	$catid=$cat['catid'];
	echo "<option value='$catid'>";
	echo $cat['catname'];
	echo "</option>";
}
 echo "</select>";
?>
Choose the Item
<?php
echo "<select name='cmbitem'>";
$rsitem=mysql_query("select pname,pid,catid from item_master where catid=$y");
while($item=mysql_fetch_array($rsitem))
{
	$itemid=$item['catid'];
	echo "<option value='$itemid'>";
	echo $item['pname'];
	echo "</option>";
}
 echo "</select>";
?>

</form>
</body>
</html>