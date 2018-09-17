<?php 
	include '../../../User/includes/admin.php';
	$output = ('data' => array());
	$query = mysqli_query($con,"SELECT * FROM brand,category WHERE deleted = 1");
	while(mysqli_fetch_assoc($query)){
		$button = '<button type="button" name="restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';

	}

 ?>