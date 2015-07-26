<?php session_start(); ?>
<?php
if(isset($_SESSION['uid']))
{
	?>
 <html>
 <body>   
<table>
<tr>
<th>Select All</th>
<th>Product Id</th>
<th>Product Name</th>
<th>Date</th>
</tr>
<?php
include("datalink.php");
$cust=$_SESSION['uid'];	  
    $rsshowcart=mysql_query("select pid,pname,cartdate from userinfo as u,cartproducts as c,products as p where u.cid=c.cid and p.pid=c.pid and cname=&cust");
	while($row=mysql_fetch_array($rsshowcart))
	{
		if($row['flag']==1)
		{   $tid=$row['tid'];
			echo"<tr> <td>";
			echo"<input type='checkbox' name='chktid[]' value='$tid'></td>";
			echo"";
			}
		} 
?>
</body>
</html>
<?php
}
else
{
	header("location:login.php");
	}
	?>