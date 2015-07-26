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
	top:900;
}
#mainwrapper
{
	height:1050;
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
<table cellspacing="16" border="2" style="border-bottom-left-radius:30;border-bottom-right-radius:30;border-top-left-radius:30;border-top-right-radius:30;">
<tr>
<th>S.no</th>
<th>Customer Id</th>
<th>Customer Name</th>
<th>Contact No</th>
<th>Emailid</th>
<th>Username</th>
<th>Enable/Disable</th>
<th>Delete</th>
</tr>
<?php
include("datalink.php");
$y=0;
$rscust=mysql_query("select cname, caddress,cemailid,ccno,cusername,cid,enable,usertype from cust_master where usertype='user'");
while($row=mysql_fetch_array($rscust))
{ 
 	$y++;
	echo "<tr><td>$y</td>";
	echo "<td>";
	echo $row['cid'];
	echo "</td>";
	echo "<td>";
	echo $row['cname'];
	echo "</td>";
	echo "<td>";
	echo $row['ccno'];
	echo "</td>";
	echo "<td>";
	echo $row['cemailid'];
	echo "</td>";
	echo "<td>";
	echo $row['cusername'];
	echo "</td>";
	echo "<td>";
	$id=$row['cid'];
	if($row['enable']=='1')
	{	
		$enable='enable';
		echo "<a href='useredit.php?st=$id&v=$enable'>disable</a>";
	}
	else
	{
		$disable='disable';
	echo "<a href='useredit.php?st=$id&v=$disable'>enable</a>";
	}
	echo "</td>";
	echo "<td>";
	$Delete='Delete';
	$qr="st=$id&v=Delete";
	echo "<a href='useredit.php?$qr'>Delete</a>";
	echo "</td>";
	echo "</tr>";
}
?>
</table>
</div><!--end of form div-->
<div id="footer">
</div><!--end of footer-->
</div><!--end of mainwrapper-->
</body>
</html> 