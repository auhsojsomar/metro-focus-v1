<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id2"]))
{
	$output = array();
	$id = $_POST['user_id2'];
	$query = mysqli_query($con,"SELECT quantity FROM accessories WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		$output["quantity"] = $row["quantity"];
	}
	echo json_encode($output);
}
?>