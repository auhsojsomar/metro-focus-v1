<?php 
include '../../../User/includes/db.php';
$category = $_POST['category'];
$sql = mysqli_query($con,"SELECT category FROM category WHERE category = '$category'");
$row = mysqli_num_rows($sql);
$fetch = mysqli_fetch_assoc($sql);
if($row > 0){
	echo $fetch['category'];
}
else{
	echo "Not Exist";
}
?>