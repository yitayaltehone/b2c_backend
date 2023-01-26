<?php
include'../connection.php';
$id = (int) $_POST['id']; 
$result_image = $connect->query("SELECT image FROM   item INNER JOIN image ON item.itemno = image.item_id where item.itemno = $id");

$data = array();
while( $row = $result_image->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
$connect->close();
return;
?>
