<?php 
	include '../../../User/includes/db.php';
	$new_name = rand(). '.' ."jpeg";
	$destination = 'upload/' . $new_name;
	move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	if(mysqli_query($con,"INSERT INTO parts (image,name,brand,category,price,quantity,description)VALUES('$new_name','$name','$brand','$category','$price','$quantity','$description')")){
		echo "Success";
	}
	else{
		echo $name;
	}
 ?>