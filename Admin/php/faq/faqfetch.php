<?php 
	include '../../../User/includes/db.php';
	$output = array('data' => array());
	$query = mysqli_query($con,"SELECT * FROM faq WHERE deleted = 0 ORDER BY id DESC");
	while($row = mysqli_fetch_array($query)){
		$button = '<button type="button" name="update" id="'.$row[0].'" class="button is-info is-small"><i class="fal fa-edit"></i> Edit</button><button type="button" name="delete" id="'.$row[0].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
		$output['data'][] = array(
			$row[1],
			$row[2],
			$button
		);
	}
	echo json_encode($output);
 ?>