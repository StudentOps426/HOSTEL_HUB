<?php
include('config.php');

$roomid = $_POST['roomid'];
$studentname = $_POST['studentname'];
$studentcontact = $_POST['studentcontact'];

/* Insert reservation */
$sql = "INSERT INTO reservation (roomid, studentname, studentcontact)
VALUES ('$roomid','$studentname','$studentcontact')";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("Reservation failed: " . mysqli_error($conn));
}

/* Optional: mark room as occupied */
mysqli_query($conn,
"UPDATE room SET availabilitystatus='Occupied' WHERE roomid='$roomid'");

header("Location: reservation.php");
exit();
?>