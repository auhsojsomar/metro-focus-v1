<?php 
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = "SELECT reservation.id AS id,reservation.username AS username,reservation.reservationdate AS reservedate,parts.name AS itemname,reservation.itemquantity AS itemquantity,reservation.status AS status FROM reservation,parts WHERE reservation.deleted = 0 AND reservation.category = 'Parts' AND itemid = parts.id ORDER BY reservation.id DESC";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    $actionButton = '<button type="button" style="padding:2px 19.5px" name="show" id="'.$row["id"].'" class="button is-info is-small"><i class="fal fa-eye"></i>Show</button><button type="button" style="padding:2px 14px" name="confirm" id="'.$row["id"].'" class="button is-success is-small"><i class="fal fa-check"></i> Confirm</button>';
    $output['data'][] = array(
        $row['username'],
        $row['reservedate'],
        $row['itemname'],
        $row['itemquantity'],
        $row['status'],
        $actionButton
    );
}
$con->close();
echo json_encode($output);
 ?>