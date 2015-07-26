<html>
<body>
<table  cellpadding="10" cellspacing="10" border="2" align="center">
<tr><th>S.No</th>
<th>category ID</th>
<th>Category Name</th>
<th colspan="2"> category Operate</th>
<th>sub-category name</th>
<th colspan="2"> sub-category Operate</th>
</tr>
<?php
include("datalink.php");
$rscat=mysql_query("select catid,catname,parentid from cat_master where parentid='0'");


$y=0;
while($cat=mysql_fetch_array($rscat))
{
	$parentid=$cat['catid'];
	$rssubcat=mysql_query("select catid,catname,parentid from cat_master where parentid='$parentid' ");
	$x=mysql_num_rows($rssubcat);
	$y++;
	$x=$x+1;
	echo "<tr><td rowspan='$x'>$y</td>";
	echo "<td rowspan='$x'>";
	echo $cat['catid'];
	echo "</td>";
	echo "<td rowspan='$x'>";
	echo $cat['catname'];
	echo "</td>";
	echo "<td rowspan='$x'><a href='#'>Delete</a></td>";
	echo "<td rowspan='$x'><a href='#'>Edit</a></td>";
 	echo "</tr>";

	while($subcat=mysql_fetch_array($rssubcat))
	{	
		if($subcat['parentid']==$cat['catid'])
		{
		echo "<tr><td>";
		echo $subcat['catname'];
		echo "</td>";
	    echo "<td><a href='#'>Delete</a></td>";
	    echo "<td><a href='#'>Edit</a></td></tr>";
	    }
	}
}
?>
</table>
</body>
</html>