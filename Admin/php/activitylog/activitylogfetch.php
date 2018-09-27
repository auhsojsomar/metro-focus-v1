<?php 
	include '../../../User/includes/db.php';
	$output = array('data' => array());
	$query = mysqli_query($con,"SELECT * FROM activitylogs ORDER BY id DESC");
	while($row = mysqli_fetch_array($query)){
		$output['data'][] = array(
			$row[1],
			$row[2],
			$row[3],
			$row[4],
			$row[5],
			$row[6]
		);
	}
	echo json_encode($output)
 ?>