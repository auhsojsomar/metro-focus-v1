<?php 
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = "SELECT * FROM accessories WHERE deleted = 1 ORDER BY id DESC";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    $actionButton = '<button style="width:50px" type="button" name="ar_restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="ar_delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $output['data'][] = array(
        $row['name'],
        $row['date_deleted'],
        $actionButton
    );
}
$con->close();
echo json_encode($output);
 ?>