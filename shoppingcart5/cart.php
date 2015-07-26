<?php session_start(); ?>
<html>
<head>
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#formdiv
{
	position:absolute;
	top:400;
	left:480;
}
#footer
{
	top:800;
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
if(isset($_SESSION['uid']))
{
	?>
 <html>
 <body>  
 <h1>CART</h1> 
 <form name="cart" method="get" action="process.php">
<table  align="center" cellspacing="15" cellpadding="10" bordercolor="#999999" style="border-bottom-left-radius:20;border-bottom-right-radius:20;border-top-left-radius:20;border-top-right-radius:20;">
<tr>
<th>Select All</th>
<th>Product Id</th>
<th>Product Name</th>
<th>quantity</th>
<th>Date</th>
</tr>
<?php
include("datalink.php");
$cust=$_SESSION['uid'];	  
    $rsshowcart=mysql_query("select flag,tid,p.pid,pname,cartdate,qty from cust_master as u,cart as c,item_master as p where u.cid=c.cid and p.pid=c.pid and cusername='$cust'");
	while($row=mysql_fetch_array($rsshowcart))
	{
		if($row['flag']==1)
		{   $tid=$row['tid'];
		    $pid=$row['pid'];
			echo"<tr> <td>";
			echo"<input type='checkbox' name='chktid[]' value='$tid'></td>";
			echo"<td> ";
			echo $row['pid'];
			echo " </td>";
			echo"<td> <a href='product.php?prod=$pid'>";
			echo $row['pname'];
			echo "</a> </td>";
			echo "<td>";
			echo $row['qty'];
			echo "</td>";
			echo"<td>";
			echo $row['cartdate'];
			echo" </td></tr>";
			}
		} 
$_SESSION['delcart']='';


?>
<tr><td>
<input type="submit"  value="delete" style="height:40; width:70; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG);"></td></tr>
</table>
</form>
</body>
</html>
<?php
}
else
{
	header("location:login.php");
	}
	?>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>