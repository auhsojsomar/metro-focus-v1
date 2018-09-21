<?php 
	session_start();
	$concern = $_POST['concern'];
	$schedule = $_POST['schedule'];
	$cnumber = $_POST['cnumber'];
	$remarks = $_POST['remarks'];
	include '../includes/db.php';
	if(mysqli_query($con,"INSERT INTO appointment (username,concern,schedule,cnumber,remarks)VALUES('{$_COOKIE['email']}','$concern','$schedule','$cnumber','$remarks')")){
		echo "Success";
	}
	else{
		echo "Not available";
	}
 ?>