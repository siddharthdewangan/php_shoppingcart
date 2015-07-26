<html>
<body>
<?php
include("datalink.php");
$rsedit=mysql_query("select pid,pname,price,stock,catid,image from item_master where ");
?>
<form name="additem" method="post" enctype="multipart/form-data" action="insertitem.php">
<table>
<h1>ENTER ITEMS</h1>
<tr><td>Enter the name of the product</td><td><input type="text" value=" name="txtname"></td></tr>
<tr><td>Enter the category of the product</td>
<td>
<?php

include("datalink.php");
	echo "<select name='cmbcat'>";
$rscat=mysql_query("select catid,catname,parentid from cat_master where parentid!='0'");
while($row=mysql_fetch_array($rscat))
{
	
	$id=$row['catid'];
	echo "<option value='$id'>";
	echo $row['catname'];
	echo"</option>";


}
echo "</select>";
?>
</td>
</tr>


<tr><td>Enter the price of the product</td><td><input type="text" name="txtprice"></td></tr>
<tr><td>
Enter the stock</td><td><input type="text" name="txtstock"></td></tr>
<tr><td>Select the image path</td><td><input type="file" name="txtimg"></td></tr>
<tr><td><input type="submit" value="add"></td></tr>
</table>
</form>
</body>
</html>