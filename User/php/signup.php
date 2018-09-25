<?php 
	include '../includes/db.php';
	session_start();
	$date = date('F d, Y');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cn = $_POST['cnum'];
	$password = md5($_POST['password']);
	if($sql = mysqli_query($con,"INSERT INTO loginform (firstname,lastname,username,password,cnumber,created)VALUES('$fname','$lname','$email','$password','$cn','$date')")){
		echo "Success";
	}
 ?>