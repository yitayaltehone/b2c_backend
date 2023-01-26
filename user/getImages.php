<?php
include'../connection.php';
$id = (int) $_POST['id']; 
$result_image = $connect->query("SELECT image FROM image where item_id = $id");

$data = array();
while( $row = $result_image->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
$connect->close();
return;
?>
