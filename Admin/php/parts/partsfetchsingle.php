<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT * FROM parts WHERE id = $id");
	while($row = mysqli_fetch_assoc($query))
	{
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="php/parts/upload/'.$row["image"].'" class="image is-48x48"><input type="hidden" name="hidden_user_image" value="'.$row["image"].'">';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
		$output["pname"] = $row["name"];
		$output["brand"] = $row["brand"];
		$output["category"] = $row["category"];
		$output["price"] = $row["price"];
		$output["quantity"] = $row["quantity"];
		$output["description"] = $row["description"];
	}
	echo json_encode($output);
}
?>