<?php
    session_start();
    include '../config.php';

    // roombook
    $roombooksql ="Select * from roombook";
    $roombookre = mysqli_query($conn, $roombooksql);
    $roombookrow = mysqli_num_rows($roombookre);

    // staff
    $staffsql ="Select * from staff";
    $staffre = mysqli_query($conn, $staffsql);
    $staffrow = mysqli_num_rows($staffre);

    // room
    $roomsql ="Select * from room";
    $roomre = mysqli_query($conn, $roomsql);
    $roomrow = mysqli_num_rows($roomre);

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">


    <title>Homely Stay</title>
</head>
<body>
   <div class="databox">
        <div class="box roombookbox">
          <h2>Total Booked Room</h1>  
          <h1><?php echo $roombookrow ?> / <?php echo $roomrow ?></h1>
        </div>
        <div class="box guestbox">
        <h2>Total Staff</h1>  
          <h1><?php echo $staffrow ?></h1>
        </div>
</body>

</html>