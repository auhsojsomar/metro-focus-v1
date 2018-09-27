<?php 
	include '../../../User/includes/db.php';
	$brand = $_POST['brand'];
	$sql = mysqli_query($con,"INSERT INTO brand (brand)VALUES('$brand')");
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$brand','Added','$date','Brand','$user')");
?>