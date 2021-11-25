<?php
require_once 'config.php'; 
$sl_no = $_POST['sl_no'];
$new_name = $_POST['name'];
$new_age = $_POST['age'];
$new_blood_group = $_POST['blood_group'];
$new_phone_number = $_POST['phone_number'];
$new_address = $_POST['address'];
$new_last_donated = $_POST['last_donated'];

$sql = "UPDATE `donor_information` SET `name` = '".$new_name."', `age` = '".$new_age."', `blood_group` = '".$new_blood_group."' , `phone_number` = '".$new_phone_number."' ,`address` = '".$new_address."' ,`last_donated` = '".$new_last_donated."'
WHERE `sl_no` = '".$sl_no."';";

$result = mysqli_query($con_db, $sql); 

echo "Result: ".$result."\n";

if($result)
{
    
    header("Location: show2.php");

}


?>