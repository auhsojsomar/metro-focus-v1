<?php 
	include '../includes/db.php';
	$itemid = $_POST['uid'];
	session_start();
	$user = $_COOKIE['email'];
	$quantity = $_POST['quantity'];
	$datee = date('m/d/Y');
	$category = $_POST['category'];
	if($category == 'Parts')
	{
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$user','$datee',$itemid,'Parts',$quantity)");
		mysqli_query($con,"UPDATE parts SET quantity = quantity - $quantity WHERE id = $itemid");
	}
	else if($category == 'Accessories')
	{
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$user','$datee',$itemid,'Accessories',$quantity)");
		mysqli_query($con,"UPDATE accessories SET quantity = quantity - $quantity WHERE id = $itemid");
	}
?>