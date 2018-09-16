<?php 
include '../../../User/includes/db.php';
$id = $_POST['id'];
mysqli_query($con,"UPDATE brand SET deleted = 0,date_deleted = null WHERE id = $id");
 ?>