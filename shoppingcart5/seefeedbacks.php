<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#seefeedback
{
	position:absolute;
	font-size:36px;
	margin-top:80px;
	margin-left:500px;
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
</div><!--end of form div-->
<div id=seefeedback>
<font face="Comic Sans MS, cursive">
<?php
include("datalink.php");
$rsadmin=mysql_query("select cid from cust_master where usertype='admin'");
$row=mysql_fetch_array($rsadmin);
$cid=$row['cid'];
$rsmsg=mysql_query("select mid,message from msg where cid=$cid");
?>
<table style="font-size:24px" cellspacing="30">
<tr><th>mid</th><th>message</th></tr>

<?php
while($fetch=mysql_fetch_array($rsmsg))
{
$mid=$fetch['mid'];
$message=$fetch['message'];

echo "<tr>";
echo "<td>";
echo $mid;
echo "</td>";
echo "<td>";
echo $message;
echo "</td>";
echo "</tr>";
}
?>
</table>

</div>
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>