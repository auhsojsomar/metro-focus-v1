<?php
include '../../../User/includes/db.php';
if(isset($_POST["user_id"]))
{
	$output = array();
	$id = $_POST['user_id'];
	$query = mysqli_query($con,"SELECT reservation.username AS username,reservation.reservationdate AS reservedate,accessories.name AS itemname,reservation.itemquantity AS itemquantity,reservation.status AS status FROM reservation,accessories WHERE reservation.deleted = 0 AND reservation.category = 'Accessories' AND reservation.id = $id AND itemid = accessories.id");
	while($row = mysqli_fetch_assoc($query))
	{
		$output["username"] = $row["username"];
		$output["reservedate"] = $row["reservedate"];
		$output["itemname"] = $row["itemname"];
		$output["itemquantity"] = $row["itemquantity"];
		$output["status"] = $row["status"];
	}
	echo json_encode($output);
}
?>