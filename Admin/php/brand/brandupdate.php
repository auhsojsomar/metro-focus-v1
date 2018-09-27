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
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$brand','Edited','$date','Brand','$user')");
?>