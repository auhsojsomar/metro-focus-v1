<?php
	//session_start();
	include '../includes/db.php';
	$user = $_POST['email'];
	$pass = md5($_POST['pass']);
	$sql = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user' AND password = '$pass' AND deleted = 0");
	$row = mysqli_fetch_assoc($sql);
	if($row['status'] == 'Admin'){
		echo 'Admin';
		// $_COOKIE['role'] = 'Admin';
		// $_COOKIE['username'] = $row['firstname'] .' '. $row['lastname'];
		// $_COOKIE['email'] = $row['username'];
		// $_COOKIE['created'] = $row['created'];
		setcookie("role", 'Admin', time() + (86400 * 30), '/');
		setcookie("username", $row['firstname'] .' '. $row['lastname'], time() + (86400 * 30), '/');
		setcookie("email", $row['username'], time() + (86400 * 30), '/');
		setcookie("created", $row['created'], time() + (86400 * 30), '/');
	}
	else if($row['status'] == 'User'){
		echo 'User';
		// $_COOKIE['role'] = 'User';
		// $_COOKIE['username'] = $row['firstname'] .' '. $row['lastname'];
		// $_COOKIE['email'] = $row['username'];
		// $_COOKIE['created'] = $row['created'];
		setcookie("role", 'User', time() + (86400 * 30), '/');
		setcookie("username", $row['firstname'] .' '. $row['lastname'], time() + (86400 * 30), '/');
		setcookie("email", $row['username'], time() + (86400 * 30), '/');
		setcookie("created", $row['created'], time() + (86400 * 30), '/');
	}
	else {
		echo "Invalid Username or Password";
	}
 ?>