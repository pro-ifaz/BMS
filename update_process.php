<?php
require_once 'config.php'; 
$sl_no = $_POST['sl_no'];
$new_name = $_POST['name'];
$new_age = $_POST['age'];
$new_blood_group = $_POST['blood_group'];
$new_bag_quantity = $_POST['bag_quantity'];
$new_phone_number = $_POST['phone_number'];
$new_address = $_POST['address'];
$new_requirement_date = $_POST['requirement_date'];

$sql = "UPDATE `receiver_information` SET `name` = '".$new_name."', `age` = '".$new_age."', `blood_group` = '".$new_blood_group."' ,`bag_quantity` = '".$new_bag_quantity."' , `phone_number` = '".$new_phone_number."' ,`address` = '".$new_address."' ,`requirement_date` = '".$new_requirement_date."'
WHERE `sl_no` = '".$sl_no."';";

$result = mysqli_query($con_db, $sql); 

echo "Result: ".$result."\n";

if($result)
{
    
    header("Location: show.php");

}


?>