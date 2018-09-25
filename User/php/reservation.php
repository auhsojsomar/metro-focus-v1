<?php 
	include '../includes/db.php';
	$itemid = $_POST['uid'];
	session_start();
	$user = $_COOKIE['email'];
	$quantity = $_POST['quantity'];
	date_default_timezone_set('Asia/Manila');
	$datee = date('m/d/Y H:i');
	$d = $_POST['rdate'];
	$category = $_POST['category'];
	$type = $_POST['categtype'];
	if($category == 'Parts')
	{
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$user','$d',$itemid,'Parts',$quantity)");
		mysqli_query($con,"UPDATE parts SET quantity = quantity - $quantity WHERE id = $itemid");
	}
	else if($category == 'Accessories')
	{
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$user','$d',$itemid,'Accessories',$quantity)");
		mysqli_query($con,"UPDATE accessories SET quantity = quantity - $quantity WHERE id = $itemid");
	}
	else if($category == 'Cart')
	{
		if($type == 'Parts'){
			mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$user','$datee',$itemid,'Parts',$quantity)");
			mysqli_query($con,"UPDATE parts SET quantity = quantity - $quantity WHERE id = $itemid");
		}
	}
?>