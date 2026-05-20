<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('config.php');

echo "Reservations:\n";
$res = mysqli_query($conn, "SELECT * FROM reservation");
if (!$res) echo "Error: " . mysqli_error($conn) . "\n";
while($r = mysqli_fetch_assoc($res)) print_r($r);

echo "\nRooms:\n";
$res = mysqli_query($conn, "SELECT * FROM room");
while($r = mysqli_fetch_assoc($res)) print_r($r);

echo "\nOwners:\n";
$res = mysqli_query($conn, "SELECT * FROM owner");
while($r = mysqli_fetch_assoc($res)) print_r($r);
?>
