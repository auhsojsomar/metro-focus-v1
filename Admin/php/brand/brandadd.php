<?php 
	include '../../../User/includes/db.php';
	$brand = $_POST['brand'];
	$sql = mysqli_query($con,"INSERT INTO brand (brand)VALUES('$brand')");
?>