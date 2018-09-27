<?php 
	include '../../../User/includes/db.php';
	$category = $_POST['category'];
	$sql = mysqli_query($con,"INSERT INTO category (category)VALUES('$category')");
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$category','Added','$date','Category','$user')");
?>