<?php
include 'config.php';
$sl_no = $_GET['sl_no'];

$sql = "SELECT * FROM `donor_information` WHERE `sl_no` = '".$sl_no."';"; 
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
<a href="show2.php">Show</a>

<form action="update_process2.php" method="post">
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
                    <label for="phone_number">Phone Number:</label>
                    <input type="number" name="phone_number" id="phone_number" value = "<?php echo $row['phone_number']; ?>">
                </p>

                 <p>
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" value = "<?php echo $row['address']; ?>">
                </p>

                 <p>
                    <label for="last_donated">Last Donated:</label>
                    <input type="date" name="last_donated" id="last_donated" value = "<?php echo $row['last_donated']; ?>">
                </p>


                    <input type="submit" value="Submit">
</form>

</body>
</html>

