<?php
include 'config.php';
$sl_no = $_GET['sl_no'];

$sql = "SELECT * FROM `receiver_information` WHERE `sl_no` = '".$sl_no."';"; // Fetch all the records from the table address
$result=mysqli_query($con_db,$sql);


if($result)
{
  $row= mysqli_fetch_array($result); 
}

if(!$result)
{
  echo "NOOOOOOOO"; 
}

?>

<!DOCTYPE html>
<html>

<body>
<a href="show.php">Show</a>

<form action="update_process.php" method="post">
  <p>
    <input type="hidden" name="sl_no" value="<?php echo $row['sl_no']; ?>">
  </p>
              
                 <p>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value = "<?php echo $row['name']; ?>">
                </p>
            
                
                <p>
                    <label for="age">Age:</label>
                    <input type="text" name="age" id="age" value = "<?php echo $row['age']; ?>">
                </p>
    
    
        
                 <p>
                    <label for="blood_group">Blood Group:</label>
                    <input type="text" name="blood_group" id="blood_group" value = "<?php echo $row['blood_group']; ?>">
                </p>
                
                 <p>
                    <label for="bag_quantity">Bag Quantity: </label>
                    <input type="text" name="bag_quantity" id="bag_quantity" value = "<?php echo $row['bag_quantity']; ?>">
                </p>                

                 <p>
                    <label for="phone_number">Phone Number:</label>
                    <input type="number" name="phone_number" id="phone_number" value = "<?php echo $row['phone_number']; ?>">
                </p>

                 <p>
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" value = "<?php echo $row['address']; ?>">
                </p>

                 <p>
                    <label for="requirement_date">Requirement Date:</label>
                    <input type="date" name="requirement_date" id="requirement_date" value = "<?php echo $row['requirement_date']; ?>">
                </p>


                    <input type="submit" value="Submit">
</form>

</body>
</html>

