<?php session_start(); ?>
<html>
<head>
<!--<script>
function show()
{
	if(document.qty.txtqty.value=="")
	{
		alert ("Please Enter The Quantity");
		document.qty.txtqty.focus();
	}
else
{
	var a=new XMLHttpRequest();
	var b=document.getElementById("txtqty").value;
	a.onreadystatechange=function()
	{
		if(a.readyState==4&&a.status==200)
		{
			document.getElementById(
		}
	}
	a.open("GET","stockcompare.php?cn="+b,true);
	a.send();

}
}
</script>-->
<link href="csss.css" rel="stylesheet" type="text/css">
<style>
#details
{
	float:left;
	margin-left:100px;
	position:absolute;
	top:460;
	left:620;
}
#bigimage
{
	float:left;
	position:absolute;
	left:100;
	top:350;
	
}

#designul li
{
	margin-left:15;
	float:left;
	opacity:.5;
}
#footer
{
	top:1000;
}
#mainwrapper
{
	height:1200;
}
#msg
{
	position:absolute;
	margin-left:100px;
	font-size:24px;
	color:#C00;
	
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
<?php
if(isset($_SESSION['uid']))
{
	$login='1';
}
else
{
	$login='0';
}
?>
<div id="bigitem">

<?php
include("datalink.php");

if(isset($_SESSION['pid']))
{
//$pid=$_SESSION['pid'];
unset($_SESSION['pid']);
}
//else
{
$pid=$_REQUEST['st'];
$_SESSION['pid']=$pid;
}
$rsitem=mysql_query("select * from item_master where pid=$pid");
$item=mysql_fetch_array($rsitem);
?>

<div  id="bigimage">
<h1 style="font-size:45px;">

<?php 
echo $item['pname'];
?></h1>
<br>
<?php
$y=$item['image'];
echo "<img src='ATTACHIMAGE//".$y."'>";
?>

</div>
<div id="details">
<?php
if($login=='0')
{
?>

   <h1>  Are u a regular customer?</h1>
     <form  name="form1" action="login.php" method="get">
     <input type="submit" value="yes">
     </form>
     <form  name="form2" action="signup.php" method="get">
     <input type="submit" value="No">
     </form>
<?php
}
?>

<?php
if(isset($_REQUEST['sj']))
{
	$z=$_REQUEST['sj'];
if($z=='10')
{
?>
<h1 style="font-size:45px; color:#F00">

Enter quantity
</h1>
 <?php
}
else if($z=='11')
{
	?>
	<h1 style="font-size:45px; color:#F00">

Enter A Less Quantity
</h1>
<?php
}
}
?>

<?php
echo "<h1>Product Price:";
echo"Rs. "; 
echo $item['price'];
echo "</h1>";
echo "<h4 style='opacity:.7;'>Free home delivery</H4>";

?>
<?php
if($login=='1')
{
echo "<br>";

?>
<form method="get" action="stockcompare.php" name="qty">
<h3 style="font-size:26px">Enter the Quantity: <input type="text" id="txtqty" name="txtqty" style="width:40; height:40; font-size:26px;" /></h3>
<input type="hidden" value="$pid" name="st">
<?php
echo "<br>";
echo "<input type='submit' value='AddToCart' name='cart' style='height:40; width:190; font-family:'Comic Sans MS', cursive; color:#FFF; font-size:18px; background-image:url(images/Capture2.PNG); text-align:center' />";

}
?>
</form>
<br>
<ul style="margin-left:15;">
<li>Cash on delivery</li>
<li>30 days exchange policy</li>
</ul>
<br>
<ul id="designul">
<li>*100% Original</li>
<li>*Brand NEW</li>
<li>*Pay Securely</li>
<li>*Easy Return</li>
</ul>

</div>
</div>
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html>