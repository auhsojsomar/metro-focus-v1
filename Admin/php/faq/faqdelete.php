<?php 
	include '../../../User/includes/db.php';
	$id = $_POST['id'];
	if(mysqli_query($con,"UPDATE faq SET deleted = 1 WHERE id = $id")){
		echo "Success";
	}
	else{
		echo "Error";
	}
 ?>