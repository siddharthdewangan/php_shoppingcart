<?php session_start(); ?>

<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	width:500;
	height:600;
	position:absolute;
	left:450;
	top:320;
	font-family:"Comic Sans MS", cursive;
	font-size:24px;
}
#formdiv a
{
	text-decoration:none;
	color:#000;
}
#formdiv a:hover
{
	font-size:28px;
}
#footer
{
	top:1000;
}
#mainwrapper
{
	height:1150;
}
#logout
{
	height:60;
	width:110;
	position:absolute;
	left:700;
	top:-167;
}
#correct
{
	position:absolute;
	margin-top:-125px;
}
#seefeedback
{
	position:absolute;
	margin-left:1000px;
	margin-top:100px;
}
#allmessage
{
	position:absolute;
	margin-top:-235px;
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
<li><a href="#">Home</a></li>
<li><a href="#">Feedback</a></li>
<li><a href="#">Categories</a>
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
<li><a href="#">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id=seefeedback>
<font face="Comic Sans MS, cursive">
<a href="seefeedbacks.php" style="color:#766767; font-size:36px;">See Feedbacks</a>
</div>
<div id="formdiv">
<?php if(isset($_REQUEST['st']))
{$x=$_REQUEST['st'];
	if($x==1)
	{
		echo "<h3>1 CATEGORY HAS BEEN ADDED</h3>";
	}
}
?>
<?php
if(isset($_SESSION['uid']))
{
	?>
<p align="right"><h2>WELCOME ADMIN <?php echo $_SESSION['uid']; ?></h2></p>
<div id="logout"><a href="logout.php" style="color:#766767; font-size:36px;">logout</a></div>	
<h3>this is your home page</h3> 

<div id=correct>
<?php
if(isset($_REQUEST['st']))
{
	$z=$_REQUEST['st'];
if($z=='2')
{
	echo "Password Changed";
}
}
?>
</div>
<div id=allmessage>
<font face="Comic Sans MS, cursive">
<?php
if(isset($_REQUEST['st']))
{
	$z=$_REQUEST['st'];
if($z=='4')
{
	echo "Message Send To All";
}
}
?>
</div>
<div id=allmessage>
<font face="Comic Sans MS, cursive">
<?php
if(isset($_REQUEST['st']))
{
	$z=$_REQUEST['st'];
if($z=='5')
{
	echo "Message Send To The User";
}
}
?>
</div>
<!--<?php
include("datalink.php");
$rsuser=mysql_query("select cname,cid,enable from cust_master where usertype='user' order by cname");
echo "<select name='cmbuser'>";
while($row=mysql_fetch_array($rsuser))
{

	$x=$row['cid'];
	echo "<option value=$x>";
	echo $row['cname'];
	if($row['enable']==0)
	{
		echo " (disabled)";
	}
	else
	{
		echo " (enabled)";
	}
		
	echo "<br>";
}
?>
<input type="submit" value="delete" name="dd">
<input type="submit"  name="dd" value="enable/disable">
</form>-->
<br>
<ul>
<li><a href="dispatch.php">Dispatch Order</a></li>
<li><a href="addcat.php">Add Category</a></li>
<li><a href="createitem.php">Add Product</a></li>
<li><a href="changepassword.php">Password Change</a></li>
<li><a href="allmessage.php">Send Message To All</a></li>
<li><a href="particularmessage.php">Send Message To Particular User</a></li>


<h1>Reports</h1>

<li><a href="showcategory.php">Show Category</a></li>
<li><a href="itemlist.php">Show Products</a></li>
<li><a href="showuser.php">Show User</a></li>
<!--
<li><a href="createitem.php">Sales Between Two Dates</a></li>
<li><a href="createitem.php">Sales Between Two Dates customer wise</a></li>
<li><a href="createitem.php">Sales Between Two Dates product wise</a></li>
<li><a href="createitem.php">Sales Between Two Dates category wise</a></li>-->
</ul>


<?php
}
else
{
	header("location:login.php");
}
?>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>