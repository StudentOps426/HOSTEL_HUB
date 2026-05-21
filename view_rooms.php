<?php
session_start();
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Rooms</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:0;
            padding:20px;
        }

        .container{
            width:90%;
            margin:auto;
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            margin-top:20px;
        }

        th, td{
            padding:12px;
            border:1px solid #ddd;
            text-align:center;
        }

        th{
            background:#333;
            color:white;
        }

        .available{
            color:green;
            font-weight:bold;
        }

        .occupied{
            color:red;
            font-weight:bold;
        }

        .msg{
            padding:10px;
            margin:10px 0;
            background:#d4edda;
            color:#155724;
            border-radius:5px;
        }
    </style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>

<div class="container">

    <h2>Available Hostel Rooms</h2>

    <!-- SUCCESS MESSAGE -->
    <?php
    if(isset($_SESSION['success_message'])){
        echo "<div class='msg'>".$_SESSION['success_message']."</div>";
        unset($_SESSION['success_message']);
    }
    ?>

    <table>
        <tr>
            <th>Room Number</th>
            <th>Room Type</th>
            <th>Price</th>
            <th>Status</th>
        </tr>

        <?php
        $query = "SELECT * FROM room";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td><?php echo $row['roomnumber']; ?></td>
            <td><?php echo $row['roomtype']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <?php
                if($row['availabilitystatus'] == "Available"){
                    echo "<span class='available'>Available</span>";
                } else {
                    echo "<span class='occupied'>Occupied</span>";
                }
                ?>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
