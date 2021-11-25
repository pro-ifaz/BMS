<?php
require_once 'config.php'; 
$sl_no = $_GET['sl_no'];

$sql = "DELETE FROM `receiver_information` WHERE `receiver_information`.`sl_no` = '".$sl_no."'";

$result = mysqli_query($con_db, $sql); 

if($result)
{   
    header("Location: show.php");

}

else
{
    echo "not deleted";
}


?>