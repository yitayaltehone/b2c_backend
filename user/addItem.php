<?php
include'../connection.php';

// $image1 = $_FILES['image1']['name'];
// $image2 = $_FILES['image2']['name'];
$city = $_POST['city'];
$site = $_POST['site'];
$No_Class =(int) $_POST['No_Class'];
$service_year =(int) $_POST['service_year'];
//$status = (int) $_POST['status'];
$desc = $_POST['Other_description'];
$service_type = $_POST['service_type'];
$user_id = (int) $_POST['user_id'];
//$cat_id = (int) $_POST['catagory_id'];

//echo "user id". $user_id;
//echo "cat id". $user_id;
// $imagePath1 = 'condominium/'.$image1;
// $tmp_name1 = $_FILES['image1']['tmp_name'];

// move_uploaded_file($tmp_name1, $imagePath1);

// $imagePath2 = 'condominium/'.$image2;
// $tmp_name2 = $_FILES['image2']['tmp_name'];

// move_uploaded_file($tmp_name2, $imagePath2);

$connect->query("INSERT INTO item (user_id,city,site,No_Class,service_year,Other_description,service_type,Cond_reg_date) values('".$user_id."','".$city."','".$site."', '".$No_Class."','".$service_year."','".$desc."','".$service_type."', now())");

// $insert = mysqli_query($db, $query);
// if($insert) {
//     echo json_encode("Success");
// }
// else {
//     echo  (mysqli_error($db));
// }

?>