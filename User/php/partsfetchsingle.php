<?php
include '../includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM parts WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		$quantity = '';
		$class = '';
		if($row["quantity"] == 0){
			$quantity = 'Out of stock';
			$class = 'has-text-danger';
		}
		else{
			$quantity = 'Available';
			$class = 'has-text-success';
		}
		$output["quantity"] = $quantity;
		$output["class"] = $class;
		$output["image"] = $row["image"];
		$output["partsname"] = $row["name"];
		$output["brandname"] = $row["brand"];
		$output["description"] = $row["description"];
		$output["price"] = $row["price"];
	}
	echo json_encode($output);
}
?>