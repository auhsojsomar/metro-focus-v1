<?php 
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = "SELECT * FROM parts WHERE deleted = 1";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    $actionButton = '<button type="button" name="pr_restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button type="button" name="pr_delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $output['data'][] = array(
        $row['name'],
        $row['date_deleted'],
        $actionButton
    );
}
$con->close();
echo json_encode($output);
 ?>