<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Room Reservation</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            padding:0;
            background:#eaf2ff; /* light blue background */
        }

        /* HEADER */
        .header{
            background:#0d47a1;
            color:white;
            padding:20px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
            letter-spacing:1px;
        }

        /* CONTAINER */
        .container{
            width:85%;
            margin:30px auto;
        }

        /* ROOM CARD */
        .card{
            background:white;
            padding:20px;
            margin:15px 0;
            border-radius:10px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-3px);
        }

        /* ROOM TITLE */
        .card h3{
            margin:0;
            color:#0d47a1;
        }

        .card p{
            margin:6px 0;
            color:#333;
        }

        /* INPUT FIELDS */
        input[type="text"]{
            width:100%;
            padding:10px;
            margin:6px 0;
            border:1px solid #ccc;
            border-radius:6px;
            outline:none;
        }

        input[type="text"]:focus{
            border-color:#0d47a1;
        }

        /* BUTTON */
        .btn{
            background:#0d47a1;
            color:white;
            padding:10px 15px;
            border:none;
            border-radius:6px;
            cursor:pointer;
            width:100%;
            font-size:15px;
        }

        .btn:hover{
            background:#08306b;
        }

        /* SECTION TITLE */
        h2{
            text-align:center;
            color:#0d47a1;
        }

    </style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>

<div class="header">
    Hostel Room Reservation System
</div>

<div class="container">

    <h2>Available Rooms</h2>

    <?php
    $sql = "SELECT room.*, hostel.hostelname 
            FROM room 
            JOIN hostel ON room.hostelid = hostel.hostelid 
            WHERE room.availabilitystatus='Available'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="card">
        <h3><?php echo $row['hostelname']; ?> - Room <?php echo $row['roomnumber']; ?></h3>
        <p><b>Hostel:</b> <?php echo $row['hostelname']; ?></p>
        <p><b>Type:</b> <?php echo $row['roomtype']; ?></p>
        <p><b>Price:</b> UGX <?php echo $row['price']; ?></p>

        <form method="POST" action="reserve_room.php">
            <input type="hidden" name="roomid" value="<?php echo $row['roomid']; ?>">

            <input type="text" name="studentname" placeholder="Your Name" required>

            <input type="text" name="studentcontact" placeholder="Contact Number" required>

            <button class="btn" type="submit">Reserve Room</button>
        </form>
    </div>

    <?php } ?>

</div>

</body>
</html>
