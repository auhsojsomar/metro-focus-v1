<?php
	include '../../../User/includes/db.php';
	$brand = $_POST['brand'];
	$id = $_POST['user_id'];
	if(mysqli_query($con,"UPDATE brand SET brand = '$brand' WHERE id = $id")){
		echo "Not Exist";
	}
	else{
		echo $brand;
	}
?>