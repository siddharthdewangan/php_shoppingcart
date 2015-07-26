<html>
<head>
<link href="c.css" rel="stylesheet" type="text/css">
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
<div id="adddiv">
<marquee direction="left" behavior="slide" scrollamount="16" loop="10">
<img src="marquee/Cap14.JPG">
<img src="marquee/Cap13.JPG">
<img src="marquee/cap6.PNG">
<img src="marquee/Cap7.PNG">
<img src="marquee/Cap11.JPG">
<img src="marquee/cap8.PNG">
</marquee>
</div><!--end of adddiv-->
<div id="adddiv1">
<img src="images/Capture18.PNG">
</div><!--end of adddiv1-->
<div id="adddiv2">
<img src="images/Capture16.PNG">
</div><!--end of adddiv2-->
<!--<div id="adddiv3">
</div>end of adddiv3-->
<div id="contents">
<div class="table">
<img src="products/clothings/womens/w1.PNG">
</div><!--end of table-->
<div class="table">
<img src="products/clothings/womens/w6.PNG">
</div><!--end of table-->
<div class="table">
<img src="products/clothings/womens/w2.PNG">
</div><!--end of table-->
<div class="table">
<img src="products/clothings/womens/w3.PNG" style="padding:20">
</div><!--end of table-->
</div><!--end of contents-->
<div id="contentnext">
<div class="tablenext">
<img src="products/accesories/glasses/g3.PNG">
</div>
<div class="tablenext">
<img src="products/shoes/a1.PNG">
</div>
<div class="tablenext">
<img src="products/accesories/bags/b3.PNG">
</div>
<div class="tablenext">
<img src="products/shoes/s2.PNG">
</div>
</div>
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>