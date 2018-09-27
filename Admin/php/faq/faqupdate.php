<?php 
	include '../../../User/includes/db.php';
	$id = $_POST['user_id'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	if(mysqli_query($con,"UPDATE faq SET question = '$question', answer = '$answer' WHERE id = $id")){
		echo "Success";
	}
	else{
		echo "Error";
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$question','Edited','$date','FAQ','$user')");
 ?>