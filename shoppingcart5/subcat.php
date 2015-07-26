<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	position:absolute;
	top:500;
	left:410;
}
#formdiv ul li a
{
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	color:#000;
}
#footer
{
	top:1000;
}
#mainwrapper
{
	height:1200;
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
$catid=$_REQUEST['st'];
$rscat=mysql_query("select * from cat_master where parentid=$catid");

//$count=mysql_num_rows($rsprod);

	if(mysql_num_rows($rscat)=='0')

{
	
	?>
<table align="center" cellspacing="15"  border="2" cellpadding="10" bordercolor="#999999" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
 <tr>
 <th>S.no</th>
 <th>Pid</th>
 <th>Image</th>
 <th>Name</th>
 <th>Price (in Rs.)</th>
  </tr>
 
 <?php
 $x=0;
 $rsitem=mysql_query("select pid,pname,price,stock ,catid,image from item_master where catid=$catid");
while($row=mysql_fetch_array($rsitem))
 { 
 	$pid=$row['pid'];
	$x++;
	$y=$row['image'];
	echo "<tr>";
	echo "<td>";
	echo $x;
	echo "</td><td>";
	echo $row['pid'];
	echo "</td><td>";
	echo "<a href='bigitem.php?st=$pid'><img src='ATTACHIMAGE//".$y."' width='100' height='100'></a>";
	echo "</td><td>";
	echo $row['pname'];
	echo "</td><td>";
	echo $row['price'];
	echo "</td></tr>";


	
//	    echo" <td><a href='addpurchase.php?st='$pid'&v='buy'>BUY NOW</a>";
  //  echo "<td><a href='addpurchase.php?st='$pid'&v='add'>ADD</a>";

     }
 ?>
 </table>

<?php
}

else
{
	

 $rscat=mysql_query("select catid,catname,parentid from cat_master where parentid='$catid'");
  echo  "<ul>";
	while($row=mysql_fetch_array($rscat))
	{
		$catname=$row['catname'];
		$cat=$row['catid'];
		echo "<li>";
		echo "<h1><a href='subcat.php?st=$cat'>$catname</a></h1>";		
		echo "</li><br>";
	}
  echo  "</ul>";

}
?>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>