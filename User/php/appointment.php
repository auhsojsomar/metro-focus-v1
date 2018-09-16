<?php 
	//session_start();
	$concern = $_POST['concern'];
	$datestart = $_POST['datestart'];
	$timestart = $_POST['timestart'];
	$cnumber = $_POST['cnumber'];
	$remarks = $_POST['remarks'];
	include '../includes/db.php';
	$query = mysqli_query($con,"INSERT INTO appointment (username,concern,datestart,timestart,cnumber,remarks)VALUES('{$_COOKIE['email']}','$concern','$datestart','$timestart','$cnumber','$remarks')");
 ?>