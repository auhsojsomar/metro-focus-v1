<?php 
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = "SELECT * FROM brand WHERE deleted = 1 ORDER BY id DESC";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    $actionButton = '<button style="width:50px" type="button" name="br_restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="br_delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $output['data'][] = array(
        $row['brand'],
        $row['date_deleted'],
        $actionButton
    );
}
$con->close();
echo json_encode($output);
 ?>