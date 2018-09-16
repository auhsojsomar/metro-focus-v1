<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM appointment WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		$output["username"] = $row["username"];
		$output["concern"] = $row["concern"];
		$output["datestart"] = $row["datestart"];
		$output["timestart"] = $row["timestart"];
		$output["cnumber"] = $row["cnumber"];
		$output["remarks"] = $row["remarks"];
		$output["status"] = $row["status"];
	}
	echo json_encode($output);
}
?>