<?php
include'../connection.php';

//$result = $connect->query("SELECT * FROM house_condominium");


$result_user = $connect->query("SELECT * FROM user");

$data = array();
while( $row = $result_user->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
$connect->close();
return;
?>