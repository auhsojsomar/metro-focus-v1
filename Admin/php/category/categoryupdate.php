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
?>