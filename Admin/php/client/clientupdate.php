<?php
	include '../../../User/includes/db.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$cnumber = $_POST['cnumber'];
	$id = $_POST['user_id'];
	$sql = mysqli_query($con,"SELECT username,password FROM loginform WHERE deleted = 0 AND id = $id");
	$row = mysqli_fetch_array($sql);
	if($_POST['password'] == '')
	{
		$password = $row[1];
	}
	else{
		$password = md5($_POST['password']);
	}
	if($_POST['email'] == $row[0]){
		$email = $row[0];
	}
	else{
		$email = $_POST['email'];
	}
	if(mysqli_query($con,"UPDATE loginform SET firstname = '$fname',lastname = '$lname',username = '$email',cnumber = '$cnumber',password = '$password' WHERE id = $id")){
		echo "Success";
	}
	else{
		echo $row[0];
	}
?>