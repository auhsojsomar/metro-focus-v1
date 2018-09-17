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
 ?>