<?php
include'../connection.php';
 
$userEmail=$_POST['user_email'];
$userPassword=md5($_POST['user_password']);
 

$sqlQuery="SELECT * FROM user_table WHERE user_email='$userEmail' AND user_password='$userPassword'";
$result=$connect->query($sqlQuery);

if($result->num_rows > 0){
    $userRecord=array();
    while($rowFound=$result->fetch_assoc()){
        $userRecord[]=$rowFound;
    }
    echo json_encode(array("success"=>true,
      "userData"=>$userRecord[0],
));
    }
else{
   echo json_encode(array("success"=>false));
    }

?>