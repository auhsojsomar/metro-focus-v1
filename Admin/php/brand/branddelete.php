<?php 
	include '../../../User/includes/db.php';
	if(isset($_POST['user_id'])){
		$id = $_POST['user_id'];
		date_default_timezone_set('Asia/Kuala_Lumpur');
		$date = date('n/j/Y g:i A');
		if(mysqli_query($con,"UPDATE brand SET deleted = 1, date_deleted = '$date' WHERE id = $id")){
			echo "Data Deleted";
		}
	}
 ?>