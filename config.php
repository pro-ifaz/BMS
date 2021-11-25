<?php
    $host = "localhost";
	$user ="root";
	$password = "";
	$databases_name= "blood_bank_management";
	$con_db = mysqli_connect($host,$user,$password,$databases_name);

if($con_db)
{
	 echo "Connected to Database";
}

if (!$con_db)
{
    echo "Couldn't Connect to Database: " . mysqli_connect_error();
}

?>