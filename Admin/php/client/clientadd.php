<?php 
	include '../../../User/includes/db.php';
	$datenow = date('F d, Y');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cnumber = $_POST['cnumber'];
	$password = md5($_POST['password']);
	$sql = mysqli_query($con,"INSERT INTO loginform (username,password,status,firstname,lastname,cnumber,created)VALUES('$email','$password','Client','$fname','$lname','$cnumber','$datenow')");
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$email','Added','$date','User','$user')");
 ?>