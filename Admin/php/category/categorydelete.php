<?php 
	include '../../../User/includes/db.php';
	if(isset($_POST['user_id'])){
		$id = $_POST['user_id'];
		date_default_timezone_set('Asia/Manila');
		$date = date('n/j/Y g:i A');
		if(mysqli_query($con,"UPDATE category SET deleted = 1, date_deleted = '$date' WHERE id = $id")){
			echo "Data Deleted";
		}
		$user = $_COOKIE['email'];
		$sql = mysqli_query($con,"SELECT category FROM category WHERE id = $id");
		$row = mysqli_fetch_array($sql);
		mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Deleted','$date','Category','$user')");
	}
 
 ?>