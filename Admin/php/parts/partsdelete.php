<?php 
include '../../../User/includes/db.php';
$id = $_POST['user_id'];
if(isset($_POST["user_id"]))
{
	if(mysqli_query($con,"UPDATE parts SET deleted = 1 WHERE id = $id")){
		echo "Data Deleted";
	}
}
$user = $_COOKIE['email'];
$sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $id");
$name = mysqli_fetch_array($sql);
date_default_timezone_set('Asia/Manila');
$date = date('n/j/Y g:i A');
mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name[0]','Deleted','$date','Parts','$user')");
?>