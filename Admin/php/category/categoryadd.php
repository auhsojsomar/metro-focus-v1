<?php 
	include '../../../User/includes/db.php';
	$category = $_POST['category'];
	$sql = mysqli_query($con,"INSERT INTO category (category)VALUES('$category')");
?>