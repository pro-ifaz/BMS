<?php
include 'config.php';
$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$last_donated = $_POST['last_donated'];


$sql = "INSERT INTO `donor_information` (`sl_no`, `name`, `age`, `blood_group`, `phone_number`, `address`, `last_donated`)
        VALUES(NULL, '".$name."', '".$age."', '".$blood_group."', '".$phone_number."', '".$address."', '".$last_donated."' );";

    
$result = mysqli_query($con_db, $sql); 

echo "Result: ".$result."\n";

if($result)
{
    header("Location: show2.php");
}

else
{
   
}


?>
