<?php
session_start();
include('config.php');

/* 1. CHECK LOGIN */
if(!isset($_SESSION['owner_id'])){
    die("Please login first.");
}

$ownerid = $_SESSION['owner_id'];

/* 2. GET HOSTELID FROM OWNER TABLE (FIXED) */
$get_owner = mysqli_query($conn,
"SELECT hostelid FROM owner WHERE ownerid='$ownerid' LIMIT 1");

if(!$get_owner){
    die("Query error: " . mysqli_error($conn));
}

$owner_data = mysqli_fetch_assoc($get_owner);

if(!$owner_data || !$owner_data['hostelid']){
    die("No hostel linked to this owner.");
}

$hostelid = $owner_data['hostelid'];

/* 3. GET FORM DATA */
$roomnumber = $_POST['roomnumber'];
$roomtype = $_POST['roomtype'];
$price = $_POST['price'];
$availabilitystatus = $_POST['availabilitystatus'];

/* 4. INSERT ROOM */
$sql = "INSERT INTO room 
(hostelid, roomnumber, roomtype, price, availabilitystatus)
VALUES 
('$hostelid','$roomnumber','$roomtype','$price','$availabilitystatus')";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("Insert failed: " . mysqli_error($conn));
}

/* 5. SUCCESS */
$_SESSION['success_message'] = "Room has been successfully added!";
header("Location: view_rooms.php");
exit();

?>