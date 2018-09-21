<?php
include '../../../User/includes/db.php';
$output = array();
$query = "SELECT * FROM brand WHERE deleted = 0 ORDER BY id DESC";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
foreach($result as $row)
{
    $sub_array = array();
    $sub_array[] = $row["brand"];
    $sub_array[] = '<button style="" type="button" name="update" id="'.$row["id"].'" class="button is-info is-small"><i class="fal fa-edit"></i> Edit</button><button style="" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $data[] = $sub_array;
}
$output = array(
    "data" => $data
);
echo json_encode($output);
?>