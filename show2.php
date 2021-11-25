<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/insert_form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Showing Donor Information</title>
</head>
<body>
<center>

<h2>Showing Donor Information</h2>

Html Table: 

<table border="2">
      <tr>
        <td>SL_NO.</td>
        <td>Name</td>
        <td>Age</td>
        <td>Blood Group</td>
        <td>Phone Number</td>
        <td>Address</td>
        <td>Last Donated</td>
        <td>Actions</td>
      </tr>

    <?php

        include "config.php"; 
   
        $sql = "SELECT * FROM `donor_information`;"; 

        $result = mysqli_query($con_db,$sql); 


        while($data = mysqli_fetch_array($result)) 
        {
    ?>
        <tr>
            <td><?php echo $data['sl_no']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['age'];   ?> </td>
            <td><?php echo $data['blood_group']; ?></td>
            <td><?php echo $data['phone_number']; ?></td>
            <td><?php echo $data['address']; ?></td>
            <td><?php echo $data['last_donated']; ?></td>
            <td><a href="update_process_form2.php?sl_no=<?php echo $data['sl_no'];?>">Update</a> 
            <a href="delete.php?sl_no=<?php echo $data['sl_no'];?>"> Delete</a> </td>
        </tr>	

        
      <?php
    }
    ?>
</table>
<p>Return to <a href="home.php">Home</a></p>
</center>

<?php mysqli_close($con_db);  ?>

</body>
</html>
