<?php 
include '../../../User/includes/db.php';
$id = $_POST['id'];
mysqli_query($con,"DELETE FROM parts WHERE id = $id");
 ?>