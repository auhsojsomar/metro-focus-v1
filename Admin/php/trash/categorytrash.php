<?php 
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = "SELECT * FROM category WHERE deleted = 1 ORDER BY id DESC";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    $actionButton = '<button style="width:50px" type="button" name="cr_restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="cr_delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $output['data'][] = array(
        $row['category'],
        $row['date_deleted'],
        $actionButton
    );
}
$con->close();
echo json_encode($output);
 ?>