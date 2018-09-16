<?php 
	include '../includes/db.php';
	$email = $_POST['email'];
	$sql = mysqli_query($con,"SELECT username FROM loginform WHERE username = '$email'");
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "Exist";
	}
	else{
		echo "Not Exist";
	}
 ?>