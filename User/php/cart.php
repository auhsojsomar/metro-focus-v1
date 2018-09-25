<?php 
	include '../includes/db.php';
	$itemid = $_POST['uid'];
	$user = $_COOKIE['email'];
	$quantity = $_POST['quantity'];
	$type = $_POST['category'];
	if($type == 'Parts'){
		$exist = mysqli_query($con,"SELECT user,item_id FROM cart WHERE user = '$user' AND item_id = $itemid AND type = 'Parts'");
		if(mysqli_num_rows($exist) > 0){
			mysqli_query($con,"UPDATE cart SET quantity = quantity + $quantity WHERE item_id = $itemid AND type = 'Parts'");
		}
		else{
			mysqli_query($con,"INSERT INTO cart (user,item_id,quantity,type)VALUES('$user',$itemid,$quantity,'Parts')");
		}
	}
	else if($type == 'Accessories'){
		$exist = mysqli_query($con,"SELECT user,item_id FROM cart WHERE user = '$user' AND item_id = $itemid AND type='Accessories'");
		if(mysqli_num_rows($exist) > 0){
			mysqli_query($con,"UPDATE cart SET quantity = quantity + $quantity WHERE item_id = $itemid AND type='Accessories'");
		}
		else{
			mysqli_query($con,"INSERT INTO cart (user,item_id,quantity,type)VALUES('$user',$itemid,$quantity,'Accessories')");;
		}
	}
?>