<?php
$connection = new PDO( 'mysql:host=localhost;dbname=metrofocus', 'root', '' );
$output = array();
$query = "SELECT * FROM appointment  WHERE deleted = 0 ORDER BY id DESC";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
    $sub_array = array();
    $sub_array[] = $row["username"];
    $sub_array[] = $row["concern"];
    $sub_array[] = $row["datestart"];
    $sub_array[] = $row["timestart"];
    $sub_array[] = $row["cnumber"];
    $sub_array[] = $row["remarks"];
    $sub_array[] = $row["status"];
    $sub_array[] = '<button type="button" style="padding:2px 19.5px" name="show" id="'.$row["id"].'" class="button is-info is-small"><i class="fal fa-eye"></i>Show</button><button type="button" style="padding:2px 14px" name="confirm" id="'.$row["id"].'" class="button is-success is-small"><i class="fal fa-check"></i> Confirm</button>';
    $data[] = $sub_array;
}
$output = array(
    "data" => $data
);
echo json_encode($output);
?>