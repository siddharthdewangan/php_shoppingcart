<?php session_start(); ?>
<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
</head>
<style>
#welcome
{	width:500;
	position:absolute;
	top:170px;
	left:680;
	font-size:32px;
}
#updateinfo
{
	position:absolute;
	left:120;
	top:170;
}
#message
{
	position:absolute;
	margin-left:500px;
	margin-top:-40px;
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
<font face="Comic Sans MS, cursive" size="+2">
<a href="#" style="text-decoration:none;color:#666;">`wishlist</a>
</font>
</div>
<div id="similar2">
<font face="Comic Sans MS, cursive" size="+2">
<a href="#" style="text-decoration:none; color:#666;">`history</a>
</font>
</div>
<div id="similar3">
<font face="Comic Sans MS, cursive" size="+2">
<a href="cart.php" style="text-decoration:none; color:#666;">`cart</a>
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
if(isset($_SESSION['uid']))
{
	?>
<div id="welcome">
<p align="right">WELCOME <?php echo $_SESSION['uid']; ?> <a href="logout.php">logout</a>	</p>
</div><!--end of welcome div-->
<div id="updateinfo">
<a href="updateuser.php" style="font-family:'Comic Sans MS', cursive; font-size:24px;">UPDATE</a>
</div><!--end of update div-->


<?php
}
else
{
	header("location:login.php");
}
?>
</div><!--end of form div-->
<div id=message>
<font face="Comic Sans MS, cursive">

<a href="messagetouser.php" style="font-size:24px">Messages</a>

</font>
</div>
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>