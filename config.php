<?php
$host = "localhost";
$user = "root";      // Your DB username
$pass = "";          // Your DB password
$dbname = "hostel reserve";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>