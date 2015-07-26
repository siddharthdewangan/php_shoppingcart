<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<script>
 function setcontrols(x)
 {
	 if(x.value=="prim")
	 {
		 document.cat.cmbparenttype.disabled=true;
	 }
	 else if(x.value=="sec")
	 {
		  document.cat.cmbparenttype.disabled=false;
	 }
 }
</script>
<style>
#formdiv
{
	width:400;
	height:200;
	position:absolute;
	top:350;
	left:500;;	
}
#formdiv form table
{
	font-family:"Comic Sans MS", cursive;
	font-size:24px;
}
#footer
{
	top:650;
}
#mainwrapper
{
	height:800;
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
<form method="get" name="cat" action="insertcat.php">
<table cellspacing="7" bordercolor="#333333" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<tr>
<td colspan="3">Category Name :</td><td><input type="textbox" name="txtname"></td></tr>
<tr><td colspan="3">Category Type :</td><td> <select name="cmbcattype" onBlur="setcontrols(this);" >
<option value="prim">Primary</option>
<option value="sec">Secondary</option></select></td></tr>
<tr><td colspan="3">Parent Category:</td>
<td>
<?php
include("datalink.php");
echo "<select name='cmbparenttype'>";
$rscat=mysql_query("select catname,catid,cattype,parentid from cat_master order by parentid,catid");
while($cat=mysql_fetch_array($rscat))
{
	$catid=$cat['catid'];
	echo "<option value='$catid'>";
	echo $cat['catname'];
	echo "</option>";
}
    echo "</select>";
?>
</td></tr>

<tr><td><br><input type="submit" value="create" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);"></td></tr>
</table>
</form>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>