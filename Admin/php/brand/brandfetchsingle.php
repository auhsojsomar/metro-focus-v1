<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM brand WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		$output["brand"] = $row["brand"];
	}
	echo json_encode($output);
}
?>