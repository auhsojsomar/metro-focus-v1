<?php 
	include '../includes/db.php';
	$id = $_POST['uid'];
	$quantity = $_POST['quan'];
	mysqli_query($con,"UPDATE cart SET quantity = $quantity WHERE id = $id");
 ?>