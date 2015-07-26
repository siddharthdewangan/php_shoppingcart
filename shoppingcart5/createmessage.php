<html>
<body>
<?php
$receiver=$_REQUEST['st'];
if($receiver=='part')
{
?>
<form name="frm1" method="get" action="sendmessage.php">
select receiver :
<?php
include("datalink.php");
echo "<select name='cmbuser'>";

$rs=mysql_query("select cid,cname from cust_master where usertype='user'");
while($row=mysql_fetch_array($rs))
{
	$cid=$row['cid'];
	echo "<option>";
	echo "($cid) "; 
	echo $row['cname'];	
	echo "</option>";
}
echo "</select>";
?>
<h4>write your msg: <br></h4>
<textarea name="txtmsg" rows="10" cols="40"></textarea>
<br>
<input type="submit" name="txtsubmit" value="Send">
<input type="reset" value="Reset" name="txtreset">
</form>
<?php
}
else if($receiver=='all')
{
?>

	<form name="frm2" method="get" action="sendmessage.php">
    <h4>write your msg: <br></h4>
	<textarea name="txtmsg" rows="10" cols="40"></textarea>
	<br>
	<input type="submit" name="txtsubmit" value="Send">
	<input type="reset" value="Reset" name="txtreset">

    </form>
<?php    
}
?>
</body>
</html>