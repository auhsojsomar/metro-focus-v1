<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM loginform WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		$output["firstname"] = $row["firstname"];
		$output["lastname"] = $row["lastname"];
		$output["username"] = $row["username"];
		$output["cnumber"] = $row["cnumber"];
		$output["password"] = $row["password"];
	}
	echo json_encode($output);
}
?>