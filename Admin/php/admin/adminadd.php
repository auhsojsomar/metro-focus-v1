<?php 
	include '../../../User/includes/db.php';
	$datenow = date('F d, Y');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cnumber = $_POST['cnumber'];
	$password = md5($_POST['password']);
	$sql = mysqli_query($con,"INSERT INTO loginform (username,password,status,firstname,lastname,cnumber,created)VALUES('$email','$password','Admin','$fname','$lname','$cnumber','$datenow')");
 ?>