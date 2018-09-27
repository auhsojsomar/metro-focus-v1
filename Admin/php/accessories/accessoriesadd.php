<?php 
	include '../../../User/includes/db.php';
	$new_name = rand(). '.' ."jpeg";
	$destination = 'upload/' . $new_name;
	move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];
	if(mysqli_query($con,"INSERT INTO accessories (image,name,brand,category,price,description,quantity)VALUES('$new_name','$name','$brand','$category','$price','$description','$quantity')")){
		echo "Success";
	}
	else{
		echo $name;
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name','Added','$date','Accessories','$user')");
 ?>