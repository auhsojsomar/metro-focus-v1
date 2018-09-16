<?php 
include '../../../User/includes/db.php';
$brand = $_POST['brand'];
$sql = mysqli_query($con,"SELECT brand FROM brand WHERE brand = '$brand'");
$row = mysqli_num_rows($sql);
$fetch = mysqli_fetch_assoc($sql);
if($row > 0){
	echo $fetch['brand'];
}
else{
	echo "Not Exist";
}
?>