<?php session_start(); ?>
<?php
if(isset($_SESSION['uid']))
{
	?>
 <html>
 <body>  
 <h1>WISHLISTS</h1> 
 <form name="cart" method="get" action="process.php">
<table>
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
		if($row['flag']==2)
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
<input type="submit"  value="delete"></td></tr>
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