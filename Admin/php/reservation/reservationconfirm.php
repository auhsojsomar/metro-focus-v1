<?php
	include '../../../User/includes/db.php';
	$id = $_POST['user_id2'];
	$query = mysqli_query($con,"UPDATE reservation SET status='Confirmed' WHERE id = $id");
?>