<?php
include'../connection.php';
 $id=(int) $_POST['id'];
//$id=(int)"13";
$sqlQuery="UPDATE item SET status=2 where itemno=$id";
$result=$connect->query($sqlQuery);

if($result){
    echo json_encode(array("success"=>true));
    }
else{
   echo json_encode(array("success"=>false));
    }

?>