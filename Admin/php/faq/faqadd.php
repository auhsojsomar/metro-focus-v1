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
 ?>