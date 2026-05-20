<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include('config.php');

if (!isset($_SESSION['owner_id'])) {
    header("Location: owner_login.php");
    exit();
}

$oid = $_SESSION['owner_id'];

$owner_query = mysqli_query($conn,
"SELECT hostelid FROM owner WHERE ownerid = '$oid'");

if (!$owner_query) {
    die("Database Error: " . mysqli_error($conn));
}

$owner_data = mysqli_fetch_assoc($owner_query);

$my_hostel_id = $owner_data['hostelid'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Bookings</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f9; padding: 20px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background: #003366; color: white; padding: 10px; text-align: left; }
        td { padding: 10px; border-bottom: 1px solid #ddd; }
        .btn { background: green; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; }
    </style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>
<body>

<div class="container">
    <h2>Hostel Bookings</h2>
    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Room</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
           $sql = "SELECT reservation.studentname, reservation.studentcontact, room.roomnumber, room.roomtype, reservation.reservationid, reservation.status 
                    FROM reservation 
                    JOIN room ON reservation.roomid = room.roomid 
                    WHERE room.hostelid = '$my_hostel_id'";

            $res = mysqli_query($conn, $sql);

            if ($res && mysqli_num_rows($res) > 0) {
                while($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>
                            <td>".$row['studentname']."<br><small>".$row['studentcontact']."</small></td>
                            <td>Room ".$row['roomnumber']." (".$row['roomtype'].")</td>
                            <td>".$row['status']."</td>
                            <td>";
                    if ($row['status'] == 'Approved') {
                        echo "<span style='color: green; font-weight: bold;'>Approved</span>";
                    } else {
                        echo "<a href='approve_logic.php?id=".$row['reservationid']."' class='btn'>Approve</a>";
                    }
                    echo "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No bookings found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="owner_dash.php">Back to Dashboard</a>
</div>

</body>
</html>
