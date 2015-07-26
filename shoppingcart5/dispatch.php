<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#feedback
{
	position:absolute;
	font-size:36px;
	margin-top:-115px;
}
#formdiv
{
	position:absolute;
	margin-left:100px;
	margin-top:200px;
	font-size:36px;
}
</style>
</head>
<body>
<div id="similar">
<font face="Comic Sans MS, cursive" size="+6">
<h3 style="color:#FFC; text-shadow:#B4CBDB 3px 3px;">E shoppers</h3>
<h6 style="color:#FFF">Bring <font style="color:#B4CBE4; font-style:italic;">Fashion </font>To Your Lifestyle!!</h6>
</font>
</div>
<div id="search">
<form>
<input type="text" placeholder="search by name,product or company" size="50" style="height:28; border-bottom-left-radius:10;border-bottom-right-radius:10;border-top-left-radius:10;border-top-right-radius:10">
<input type="button"  value="search" style="background-image:url(images/Capture13.PNG); width:60; height:34; font-family:'Comic Sans MS', cursive;">
</form>
</div><!--end of search div-->
<div id="similar1">
<font face="Comic Sans MS, cursive" size="+3">
<a href="login.php" style="text-decoration:none;color:#666;">`login</a>
</font>
</div>
<div id="similar2">
<font face="Comic Sans MS, cursive" size="+3">
<a href="signup.php" style="text-decoration:none; color:#666;">signup</a>
</font>
</div>
<div id="similar3">
<font face="Comic Sans MS, cursive" size="+3">
<a href="#" style="text-decoration:none; color:#666;">`cart</a>
</font>
</div>
<div id="mainwrapper">
<div id="navigation">
<ul>
<li><a href="mainpage.php">Home</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="#">Categories</a>
<div id=feedback>
<?php
if(isset($_REQUEST['st']))
{
	$z=$_REQUEST['st'];
if($z=='3')
{
	echo "Feedback Send";
}
}
?>
</div>
<?php
/*include("datalink.php");
$rscat=mysql_query("select catid,catname,parentid from cat_master where parentid='0'");
  echo  "<ul>";
	while($row=mysql_fetch_array($rscat))
	{
		$catname=$row['catname'];
		$catid=$row['catid'];
		echo "<li>";
		echo "<a href='subcat.php?st=$catid'>$catname</a>";		
		echo "</li><br>";
	}
  echo  "</ul>";
*/?>
</li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id="formdiv">
<?php

include("datalink.php");
$rsdispatch=mysql_query("select * from cart where dispatch_status='0'");
?>
<table>
<tr><th>Sno</th><th>Select</th><th>Customer Id</th><th>Customer Name</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Price</th></tr>
<form name="dispatch" method="get" action="dispatchupdate.php">
<?php
$x='0';
$sum='0';
while($rowdispatch=mysql_fetch_array($rsdispatch))
{	
	$tid=$rowdispatch['tid'];
	$pid=$rowdispatch['pid'];
	$cid=$rowdispatch['cid'];
	$rsitem=mysql_query("select * from item_master where pid=$pid");
	$rowpname=mysql_fetch_array($rsitem);
	$rscust=mysql_query("select * from cust_master where cid=$cid");
	$rowcust=mysql_fetch_array($rscust);
	$x++;	
	
	echo "<tr><td>$x</td>";
	echo "<td>";
	echo "<input type='checkbox' name='chkselect[]' value='$tid'>";
	echo "</td>";
	echo "<td>";
	echo $cid;
	echo "</td>";
	echo "<td>";
	echo $rowcust['cname'];
	echo "</td>";
	echo "<td>";
	echo $pid;
	echo "</td>";
	echo "<td>";
	echo $rowpname['pname'];
	echo "</td><td>";
	echo $rowdispatch['qty'];
	echo "</td><td>";
	$price=$rowdispatch['qty']*$rowpname['price'];
	echo $price;
	echo "</td></tr>";
	
}
?>
</table>
<input type="submit" value="Dispatch" name="dispatch">
</form>

</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>