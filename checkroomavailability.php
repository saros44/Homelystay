<?php

include 'config.php';
session_start();

// roombook
$roombooksql ="Select * from roombook";
$roombookre = mysqli_query($conn, $roombooksql);
$roombookrow = mysqli_num_rows($roombookre);



// room
$roomsql ="Select * from room";
$roomre = mysqli_query($conn, $roomsql);
$roomrow = mysqli_num_rows($roomre);

?>





        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homely Stay</title>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title></title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homely Stay</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            font-style: bold;
            /* text-shadow: var(--bg-text-shadow); */
        }

        /* Import Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400&display=swap');

        /* CSS Variables */
        :root {
            --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%), 0 8px 16px rgb(13 0 77 / 8%);
            --bg-box-shadow: 0px 0px 20px 6px rgba(8, 8, 15, 0.31);
        }

        /* Scrollbar Styling */
        *::-webkit-scrollbar {
            width: .4rem;
        }

        *::-webkit-scrollbar-track {
            background: rgb(6, 6, 44);
        }

        *::-webkit-scrollbar-thumb {
            background: #0040ff;
        }

     

        /* body {
            background-image: url(picture/bg1.jpg);
    background-size: 1650px;
    background-repeat: no-repeat;
    background-position: center;
  } */

     /* Data Box Styles */
     .databox {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
        }


        .databox .box {
            height: 200px;
            width: 380px;
            margin: 20px 0;
            background-color: #ccdff4;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .databox .box h1 {
            font-size: 80px;
            font-family: "Hind Siliguri", sans-serif;
            color: black;
        }

        .box:nth-child(1) {
            border-bottom: 8px solid red;
        }

        .box:nth-child(2) {
            border-bottom: 8px solid rgba(0, 255, 68, 0.814);
        }

        .box:nth-child(3) {
            border-bottom: 8px solid rgb(51, 0, 255);
        }

        /* Room Styles */
        .room {
            display: flex;
            position: relative;
            top: 60px;
            height: 85vh;
            overflow-y: scroll;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .roombox {
            height: 230px;
            width: 230px;
            margin: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #0a0d2d;
            text-shadow: var(--bg-text-shadow);
            border-radius: 10px;
        }

        .roomboxsuperior {
            background-color: #2407fc8e;
        }

        .roomboxdelux {
            background-color: #fa8393c8;
        }

        .roomboguest {
            background-color: #19cf1069;
        }

        .roomboxsingle {
            background-color: #07fcdb8e;
        }
    </style>

</head>
<body>
<a href="./home.php#secondsection"><button class="btn btn-danger">Back</button></a>


        <div class="room">
        <?php
        $sql = "select * from room";
        $re = mysqli_query($conn, $sql)
        ?>
        <?php
        while ($row = mysqli_fetch_array($re)) {
            $id = $row['type'];
            if ($id == "Superior Room") {
                echo "<div class='roombox roomboxsuperior'>
						<div class='text-center no-boder'>
                            <i class='fa-solid fa-bed fa-4x mb-2'></i>
							<h3>" . $row['type'] . "</h3>
                            <div class='mb-1'>" . $row['bedding'] . "</div>
                        
						</div>
                    </div>";
            } else if ($id == "Deluxe Room") {
                echo "<div class='roombox roomboxdelux'>
                        <div class='text-center no-boder'>
                        <i class='fa-solid fa-bed fa-4x mb-2'></i>
                        <h3>" . $row['type'] . "</h3>
                        <div class='mb-1'>" . $row['bedding'] . "</div>
             
                    </div>
                    </div>";
            } else if ($id == "Guest House") {
                echo "<div class='roombox roomboguest'>
                <div class='text-center no-boder'>
                <i class='fa-solid fa-bed fa-4x mb-2'></i>
							<h3>" . $row['type'] . "</h3>
                            <div class='mb-1'>" . $row['bedding'] . "</div>
                            
					</div>
            </div>";
            } else if ($id == "Single Room") {
                echo "<div class='roombox roomboxsingle'>
                        <div class='text-center no-boder'>
                        <i class='fa-solid fa-bed fa-4x mb-2'></i>
                        <h3>" . $row['type'] . "</h3>
                        <div class='mb-1'>" . $row['bedding'] . "</div>
                       
                    </div>
                    </div>";
            }
        }
        ?>
        <div class="databox">
        <div class="box roombookbox">
          <h2>Total Booked Room</h1>  
          <h1><?php echo $roombookrow ?> / <?php echo $roomrow ?></h1>
        </div>
    </div>
</body>
</html>

