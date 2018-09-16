<?php
$connection = new PDO( 'mysql:host=localhost;dbname=metrofocus', 'root', '' );
$output = array();
$query = "SELECT * FROM parts WHERE deleted = 0 ORDER BY id DESC";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
        $image = '<img class="image is-48x48" src="php/parts/upload/'.$row["image"].'">';
		// $image = '<img class="image is-48x48" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'">';
	}
	else
	{
		$image = '';
	}
    $sub_array = array();
    $sub_array[] = $image;
    $sub_array[] = $row["name"];
    $sub_array[] = $row["brand"];
    $sub_array[] = $row["category"];
    $sub_array[] = $row["price"];
    $sub_array[] = $row["quantity"].'&nbsp&nbsp<button style="font-size: .55rem;" type="button" class="button is-small is-primary" name="load" id='.$row["id"].'> Load</button>';
    $sub_array[] = '<button style="" type="button" name="update" id="'.$row["id"].'" class="button is-info is-small"><i class="fal fa-edit"></i> Edit</button><button style="" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $data[] = $sub_array;
}
$output = array(
    "data" => $data
);
echo json_encode($output);
?>