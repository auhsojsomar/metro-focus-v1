<?php 
include 'db.php';
if(isset($_COOKIE['email'])){
	$user = $_COOKIE['email'];
	$sql2 = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$user'");
	$badge = mysqli_fetch_array($sql2);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>MetroFocus</title>
	<link rel="icon" href="../icon.ico">
	<!-- bulma core css -->
	<link rel="stylesheet" href="./bulma/css/bulma.min.css">
	
	
	<!-- font awesome css + icons -->
	<link rel="stylesheet" href="./fontawesome/css/all.css">
	<link rel="stylesheet" href="./fontawesome/css/fontawesome.css">

	<!-- animate.css animation -->
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="./css/home.css">
	<link rel="stylesheet" href="node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">
</head>
