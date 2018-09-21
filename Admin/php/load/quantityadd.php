<?php
	include '../../../User/includes/db.php';
	$quantity = $_POST['loadtext'];
	$id = $_POST['user_id2'];
	$query = mysqli_query($con,"UPDATE parts SET quantity = quantity + $quantity WHERE id = $id");	
?>