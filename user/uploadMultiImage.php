<?php
include'../connection.php';
//$cid = (int) $_POST['catagory_id'];
$user_id = (int) $_POST['user_id'];
$image[] = $_FILES['image']['name'];
$tmpFile[] = $_FILES['image']['tmp_name'];
$item_id = 0;
//$date = $today = date("Y-m-d H:i:s");;

    $sql = "SELECT ItemNo  FROM item where user_id = $user_id order by ItemNo ";
   $result = $connect->query($sql);
    while($row = $result->fetch_assoc()) {
        $item_id = $row['ItemNo'];
    }

foreach ($image as $key => $value) {
    foreach ($tmpFile as $key => $tmpFileValue) {
        if(move_uploaded_file($tmpFileValue, 'img/'.$value)) {
        $save = $connect->query("INSERT INTO image(item_id,image) VALUES('".$item_id."','".$value."')");
     
        if ($save) {
          echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("message" => "Error ".mysqli_error($connect)));
        }
    }
}
}

?>