<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#contact
{
	position:absolute;
	font-size:24px;
	margin-top:100px;
	margin-left:100px;		
	
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
<div id="mainwrappercontact">
<div id="navigation">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="feedback.php">Feedback</a></li>
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
<li><a href="contact.php">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id=contact>
<font face="Comic Sans MS, cursive">

For More Informations Or The Complaints Regarding The Site Please Contact :
<table style="font-size:24px" cellspacing="30">
<tr><td>Name</td><td>Contact number</td></tr>
<tr><td>SOUMYA JAIN</td><td>8109288827</td></tr>
<tr><td>ARUN PATHAK</td><td>8109330014</td></tr>
<tr><td>SIDDHARTH DEWANGAN</td><td>7509081838</td></tr>
</table>
<br>
<br>
You Can Also Contact Through Our Email:<br><br>
sidsoumsarun@eshoppers.com
</font>
</div>
<div id="formdiv">
</div><!--end of form div-->
<div id="footercontact">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>