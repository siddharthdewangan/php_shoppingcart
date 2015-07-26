<?php session_start();?>
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
	margin-top:100px;
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
include("datalink.php");
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
?>
</li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id="formdiv">
<?php

include("datalink.php");
$username=$_SESSION['uid'];
$rscid=mysql_query("select * from cust_master where cusername='$username'");
$row=mysql_fetch_array($rscid);
$cid=$row['cid'];
$rsbill=mysql_query("select * from cart_temp where cid=$cid");


while($rowbill=mysql_fetch_array($rsbill))
{	
	$pid=$rowbill['pid'];
	$qty=$rowbill['qty'];
	
	$rsitem=mysql_query("select * from item_master where pid=$pid");
	$rowpname=mysql_fetch_array($rsitem);
	mysql_query("insert into cart (cid,pid,qty,cartdate) values($cid,$pid,$qty,now())");
}
	mysql_query("delete from cart_temp where cid=$cid");
?>
<h2>Your Placed Order Is</h2>
<table>
<tr><th>Sno</th><th>Product Name</th><th>Quantity</th><th>Rate</th><th>Price</th></tr>
<form name="placedorder" method="get" action="userchoice.php">
<?php
$x='0';
$sum='0';
$rsorder=mysql_query("select * from cart where cid=$cid");
while($order=mysql_fetch_array($rsorder))
{	
	$pid=$order['pid'];
	$rsitem=mysql_query("select * from item_master where pid=$pid");
	$rowpname=mysql_fetch_array($rsitem);
	$x++;	
	
	echo "<tr><td>$x</td>";
	echo "<td>";
	echo $rowpname['pname'];
	echo "</td><td>";
	echo $order['qty'];
	echo "</td><td>";
	echo $rowpname['price'];
	echo "</td>";
	$price=$order['qty']*$rowpname['price'];
	echo "<td>";
	echo $price;
	echo "</td></tr>";
	$sum=$sum+$price;
	$oldstock=$rowpname['stock'];
	$qty=$order['qty'];
	$newstock=$oldstock-$qty;
	mysql_query("update item_master set stock=$newstock where pid=$pid");
	
}

echo "<tr><td></td><td></td><td></td><td>Total</td><td>";
echo $sum;
echo "</td></tr>";

?>
</table>
<h2>Thank You!</h2>
<input type="submit" value="OK" name="ok">
</form>


</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>

