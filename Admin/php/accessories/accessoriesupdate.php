<?php
	include '../../../User/includes/db.php';
	$image = '';
	if($_FILES["user_image"]["name"] != '')
	{
		$new_name = rand(). '.' ."jpeg";
		$destination = 'upload/' . $new_name;
		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
		$image = $new_name;
	}
	else
	{
		$image = $_POST["hidden_user_image"];
	}
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];
	$id = $_POST['user_id'];
	if(mysqli_query($con,"UPDATE accessories SET image = '$image',name = '$name',brand = '$brand',category = '$category',price = '$price',quantity = '$quantity', description = '$description' WHERE id = $id")){
		echo "Success";
	}
	else{
		echo $name;
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name','Updated','$date','Accessories','$user')");
?>