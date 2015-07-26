
<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	width:500;
	height:200;
	position:absolute;
	left:470;
	top:400;
}

#footer
{
	top:700;
}
#mainwrapper
{
	height:850;
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
<a href="#" style="text-decoration:none; color:#666;">`login</a>
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
<li><a href="#">Categories</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">About</a></li>
</ul>
</div><!--end of navigation-->
<div id="formdiv">
<?php
if(isset($_REQUEST['st']))
{
$x=$_REQUEST['st'];
if($x==1)
{
	echo "<h2>wrong username</h2>";
}
else if($x==2)
{
	echo "<h2>wrong password</h2>";
}
else if($x==3)
{
	echo "<h2>you are disabled<h2>";
}

}
?>
<form name="login" method="get" action="checklogin.php">
<table cellspacing="20" bordercolor="#333333" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<tr><td><font face="Comic Sans MS, cursive" size="+2">Enter your Username:</font> </td><td><input type="text" name="txtusername"></td></tr>
<tr><td><font face="Comic Sans MS, cursive" size="+2">Enter your password:</font> </td><td><input type="password" name="txtpassword"></td></tr>
<tr><td><input type="submit" value="login"  style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);"></td>
<td><input type="reset" value="cancel"  style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);"></td></tr>
</table>
</form>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->

</body>
</html>