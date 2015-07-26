<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	position:absolute;
	top:350;
	left:450;
}
#footer
{
	position:absolute;
	top:750;
}
#mainwrapper
{
	height:900;
}
</style>
<script>
function check()
{
	
if(document.signup.txtname.value=="")
{
		alert("name cannot be empty");
		document.signup.txtname.focus();
}
else if(document.signup.txtaddress.value=="")
{
		alert("address cannot be empty");
		document.signup.txtaddress.focus();
}
else if(document.signup.txtcno.value=="")
{
		alert("contact number cannot be empty");
		document.signup.txtcno.focus();
}
else if(document.signup.txtemailid.value=="")
{
		alert("email id cannot be empty");
		document.signup.txtemailid.focus();
}
else if(document.signup.txtuser.value=="")
{
		alert("username cannot be empty");
		document.signup.txtuser.focus();
}
else if(document.signup.txtpassword.value=="")
{
		alert("password cannot be empty");
		document.signup.txtpassword.focus();
}
else if(document.signup.txtrpassword.value=="")
{
		alert("confirmation of password required");
		document.signup.txtrpassword.focus();
}
/*else if(document.signup.txtcno.length<9)
{
		alert("enter atleast 10 digits of contact number");
		document.signup.txtcno.focus();
}*/

else
{
	document.signup.submit();
}

}
</script>
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
<a href="#" style="text-decoration:none; color:#666;">signup</a>
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
<form name="signup" method="get" action="adduser.php">
<table align="center" cellspacing="15" cellpadding="10" bordercolor="#999999" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<tr>
<input type="hidden" value="10" name="hide">
<td><font face="Comic Sans MS, cursive" size="+1">Enter Your Name</font></td><td><input type="text" name="txtname" size="38"/></td>
</tr>
<tr>
<td><font face="Comic Sans MS, cursive" size="+1">Enter Your Address</font></td><td><textarea name="txtaddress" rows="2" cols="30" ></textarea></td>
</tr>
<tr><td><font face="Comic Sans MS, cursive" size="+1">Enter Your Contact No.</font></td><td><input type="text" name="txtcno" size="38" /></td>
</tr>
<tr><td><font face="Comic Sans MS, cursive" size="+1">Enter Your EmailId</font></td><td><input type="text" name="txtemailid" size="38" /></td>
</tr>
<tr><td><font face="Comic Sans MS, cursive" size="+1">Enter Your UserName</font></td><td><input type="text"  size="38"name="txtuser" /></td>
</tr>
<tr><td><font face="Comic Sans MS, cursive" size="+1">Enter Your Password</font></td><td><input type="password" name="txtpassword" /></td>
</tr>
<tr><td><font face="Comic Sans MS, cursive" size="+1">Re-enter your Password</font></td><td><input type="password" name="txtrpassword" /></td>
</tr>
<tr><td><input type="button" value="signup" onClick="check();" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);" /></td><td><input type="reset" value="reset"  style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);" /></td>
</tr>
</table>
</form>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>