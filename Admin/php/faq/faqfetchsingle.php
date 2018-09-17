<?php 
	include '../../../User/includes/db.php';
	$output = array();
	$id = $_POST['id'];
	$query = mysqli_query($con,"SELECT * FROM faq WHERE deleted = 0 AND id=$id");
	while($row = mysqli_fetch_array($query)){
		$output["question"] = $row[1];
		$output["answer"] = $row[2];
	}
	echo json_encode($output);
 ?>