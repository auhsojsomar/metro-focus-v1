<?php 
	include '../../../User/includes/db.php';
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	if(mysqli_query($con,"INSERT INTO faq (question,answer)VALUES('$question','$answer')")){
		echo "Success";
	}
	else{
		echo "Error";
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$question','Added','$date','FAQ','$user')");
 ?>