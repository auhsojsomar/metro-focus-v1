<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM category WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		$output["category"] = $row["category"];
	}
	echo json_encode($output);
}
?>