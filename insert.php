<?php
require_once 'config.php';
$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$bag_quantity = $_POST['bag_quantity'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$requirement_date = $_POST['requirement_date'];


$sql = "INSERT INTO `receiver_information` (`sl_no`, `name`, `age`, `blood_group`, `bag_quantity`, `phone_number`, `address`, `requirement_date`)
        VALUES(NULL, '".$name."', '".$age."', '".$blood_group."', '".$bag_quantity."', '".$phone_number."', '".$address."', '".$requirement_date."' );";

    
$result = mysqli_query($con_db, $sql); 

echo "Result: ".$result."\n";

if($result)
{
    header("Location: show.php");
}

else
{
   
}


?>
