<?php
include("cat.php");
if($_GET['del']!=NULL)
{
	$d=$_GET['del'];
	mysqli_query($al, "DELETE FROM category WHERE id='$d'");
	header("location:category.php");
}elseif($_GET['d']!=NULL)
	{
		$d=$_GET['d'];
	mysqli_query($al, "DELETE FROM category WHERE id='$d'");
	header("location:book.php");
	}
	// elseif($_GET['dd'])
	// 	{
	// 	$dd=$_GET['dd'];
	// mysqli_query($al, "DELETE FROM bookings WHERE id='$dd'");
	// header("location:orders.php");
	// }
	
?>