<?php 
	include '../../../User/includes/db.php';
	$brands = $_POST['brand'];
	$brand = addcslashes($brands, "'");
	$sql = mysqli_query($con,"INSERT INTO brand (brand)VALUES('$brand')");
?>