<?php 
include '../../../User/includes/db.php';
$id = $_POST['id'];
mysqli_query($con,"DELETE FROM loginform WHERE id = $id");
 ?>