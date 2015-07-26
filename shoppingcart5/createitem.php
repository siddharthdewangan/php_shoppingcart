<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	position:absolute;
	left:370;
	top:350;
	height:300;
}
#formdiv form table
{
	font-family:"Comic Sans MS", cursive;
	font-size:18px;
}
#footer
{
	top:770;
}
#mainwrapper
{
	height:940;
}
#logout
{
	margin-top:10px;
	margin-left:1100px;
	position:absolute;
	
}
#back
{
	margin-top:10px;
	position:absolute;
	margin-left:70px;
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
<div id="back"><a href="adminchoice.php" style="color:#766767; font-size:36px;">Back To Admin Page</a></div>

<div id="logout"><a href="logout.php" style="color:#766767; font-size:36px;">Logout</a></div>

<div id="navigation">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Feedback</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id="formdiv">

<form name="additem" method="post" enctype="multipart/form-data" action="insertitem.php">
<table  align="center" cellspacing="15" cellpadding="10" bordercolor="#999999" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<h1 align="center">ENTER ITEMS</h1>
<tr><td>Enter the name of the product</td><td><input type="text" name="txtname"></td></tr>
<tr><td>Enter the Company Name of the product</td>
<td>
<?php

include("datalink.php");
	echo "<select name='cmbcat'>";
$rscat=mysql_query("select catid,catname,parentid from cat_master where catid not in(select distinct (parentid ) from cat_master)");
while($row=mysql_fetch_array($rscat))
{
	$id=$row['catid'];
	echo"<option value='$id'>";
	echo $row['catname'];
	echo"</option>";
}
echo "</select>";
?>
</td>
</tr>
<tr><td>Enter the price of the product</td><td><input type="text" name="txtprice"></td></tr>
<tr><td>
Enter the stock</td><td><input type="text" name="txtstock"></td></tr>
<tr><td>Select the image path</td><td><input type="file" name="txtimg"></td></tr>
<tr><td><input type="submit" value="add" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);"></td>
<td><input type="reset" name="reset" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);"></td></tr>
</table>
</form>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>