<?php 
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$id = $_POST['user_id'];
	if(mysqli_query($con,"UPDATE parts SET deleted = 1 WHERE id = $id")){
		echo "Data Deleted";
	}
}
?>