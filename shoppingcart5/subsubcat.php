<?php
include("datalink.php");
$catid=$_REQUEST['st'];
$rscat=mysql_query("select catid,catname,parentid from cat_master where parentid='$catid'");
  echo  "<ul>";
	while($row=mysql_fetch_array($rscat))
	{
		$catname=$row['catname'];
		$cat=$row['catid'];
		echo "<li>";
		echo "<a href='showitem.php?st='$cat'>$catname</a>";		
		echo "</li><br>";
	}
  echo  "</ul>";
?>
