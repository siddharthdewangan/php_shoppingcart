<?php session_start(); ?>
<?php 
include("datalink.php");
$name=$_REQUEST['txtname'];
$cattype=$_REQUEST['cmbcattype'];
$parentcat=$_REQUEST['cmbparenttype'];
mysql_query("insert into cat_master (catname,cattype,parentid) values('$name','$cattype','$parentcat')");

 
header("location:adminchoice.php?st=1");

?>