<?php
	include '../../../User/includes/db.php';
	$category = $_POST['category'];
	$id = $_POST['user_id'];
	if(mysqli_query($con,"UPDATE category SET category = '$category' WHERE id = $id")){
		echo "Not Exist";
	}
	else{
		echo $category;
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$category','Edited','$date','Category','$user')");
?>