<?php session_start(); ?>
<?php include("datalink.php");
if(st=='createitem')
{
	$y='createitem';
	
}
if(isset($_SESSION['delcart']))
{
	$y='deletecart';
}
function deletecart()
{

	$x=$_REQUEST['chktid']; 
	for($i=0;$i<count($x);$i++)
{
	mysql_query("delete from cart where tid=$x[$i]");
}	

 header("location:cart.php");
}
function createitem()
{
	
	
	
	
	
}
function insertcart()
{
	
	
	
}



function updatecart()
{
	
	
}
switch($y)
{
	case 'deletecart' :
							deletecart();
							break;
	case 'insertcart' : 
							insertcart();
							break;
	case 'updatecart' :
							updatecart();
							break;

	case 'createitem' :
							createitem();
							break;
							


}



?>