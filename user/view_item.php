<?php
include'../connection.php';

//$result = $connect->query("SELECT * FROM house_condominium");


$result_image = $connect->query("SELECT * FROM item INNER JOIN image ON item.itemno = image.item_id");

$data = array();
while( $row = $result_image->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
$connect->close();
return;
?>