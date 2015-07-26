
<html>
<head>

<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	position:absolute;
	top:350;
	left:230;
	width:800;
	height:300;
}
#footer
{
	top:600;
}
#mainwrapper
{
	height:750;
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
#wrong
{
	position:absolute;
	font-size:36px;
	margin-top:80px;
	margin-left:250px;
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
<div id=wrong>
<?php
if(isset($_REQUEST['st']))
{
	$z=$_REQUEST['st'];
if($z=='1')
{
	echo "Re Enter Again";
}
}
?>
</div>
<div id="formdiv">
<table  align="center" cellspacing="15" cellpadding="10" bordercolor="#999999" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<form name="changepassword" method="get" action="newpassword.php">
<tr><td>
Enter your Current password</td><td><input type="password" name="txt1"></td>
</tr>
<tr>
<td>
Enter Your New Password</td><td><input type="password" name="txt2"></td></tr>
<tr><td><input type="submit" value="OK"></td><td>
<input type="reset" value="CANCEL"></td></tr>
</div>


</form>
</table>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->

</body>
</html>