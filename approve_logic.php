<?php
include('config.php');
$id = $_GET['id'];

$sql = "UPDATE reservation SET status = 'Approved' WHERE reservationid = '$id'";

if(mysqli_query($conn, $sql)) {
    header("Location: view_bookings.php?msg=success");
} else {
    echo "Error: " . mysqli_error($conn);
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>
</body>
</html>

