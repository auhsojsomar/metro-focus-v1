<?php 
	include '../includes/db.php';
	$id = $_POST['uid'];
	mysqli_query($con,"DELETE FROM cart WHERE id = $id");
 ?>