<?php

include'../connection.php';
 
$userEmail=$_POST['user_email'];
$sqlQuery="select user_email from user_table where user_email='$userEmail'";
$result=$connect->query($sqlQuery);
if($result->num_rows > 0){
    echo json_encode(array("EmailFound"=>true));
    }else{
        echo json_encode(array("EmailFound"=>false));
    }


?>