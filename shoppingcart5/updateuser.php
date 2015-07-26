<?php session_start(); ?>
<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	width:600;
	height:400;
	position:absolute;
	top:380;
	left:380;
}
#formdiv form table
{
	font-family:"Comic Sans MS", cursive;
	font-size:20px;
}
#footer
{
	top:870;
}
#mainwrapper
{
	height:1000;
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
<input type="button"  value="search"style="background-image:url(images/Capture13.PNG);width:60; height:30;">
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
<li><a href="#">Home</a></li>
<li><a href="#">Feedback</a></li>
<li><a href="#">Categories</a>
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
<li><a href="#">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id="formdiv">
<?php
include("datalink.php");
$cusername=$_SESSION['uid'];
$rsuser=mysql_query("select cname,caddress,ccno,cemailid,cusername,cpassword,cid from cust_master where cusername='$cusername'");
$row=mysql_fetch_array($rsuser);
?>
<form name="signup" method="get" action="adduser.php">
<table align="center" cellspacing="15" cellpadding="10" bordercolor="#999999" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<tr>
<input type="hidden" value="20" name="hide">
<td>Enter Your Name</td><td><input type="text" name="txtname" value="<?php  echo $row['cname']; ?>" /></td>
</tr>
<tr>
<td>Enter Your Address</td><td><textarea  name="txtaddress"  cols="40"  rows="4"><?php echo $row['caddress']; ?></textarea></td>
</tr>
<tr><td>Enter Your Contact Number</td><td><input type="text" name="txtcno"  value="<?php  echo $row['ccno']; ?>" /></td>
</tr>
<tr><td>Enter Your Email Id</td><td><input type="text" name="txtemailid" size="30"  value="<?php  echo $row['cemailid']; ?>" /></td>
</tr>
<!--<tr><td>Enter Your Username</td><td><input type="text" name="txtuser"  value="<?php  echo $row['cusername']; ?>" /></td>
</tr>-->
<tr><td>Enter Your Password</td><td><input type="password" name="txtpassword"  value="<?php  echo $row['cpassword']; ?>" /></td>
</tr>
<tr><td>Re-enter Password</td><td><input type="password" name="txtrpassword"  value="<?php  echo $row['cpassword']; ?>"/></td>
</tr>
<tr><td><input type="submit" value="update" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);" /></td>
<td><input type="submit" value="submit" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);" /></td>
</tr>
</table>
</form>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>