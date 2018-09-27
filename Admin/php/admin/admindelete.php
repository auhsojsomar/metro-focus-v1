<?php 
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM loginform WHERE status = 'Admin' AND deleted = 0");
	$row = mysqli_num_rows($query);
	if($row <= 1){
		echo "Error";
	}
	else{
		mysqli_query($con,"UPDATE loginform SET deleted = 1 WHERE id = $id");
		echo "Data Deleted";
	}
}
$user = $_COOKIE['email'];
$sql = mysqli_query($con,"SELECT username FROM loginform WHERE id = $id");
$name = mysqli_fetch_array($sql);
date_default_timezone_set('Asia/Manila');
$date = date('n/j/Y g:i A');
mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name[0]','Deleted','$date','Admin','$user')");
?>