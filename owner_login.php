<?php

session_start();

include('config.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM owner
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);

    $_SESSION['owner_id'] = $row['ownerid'];

    header("Location: owner_dash.php");
    exit();
}
else
{
    echo "Invalid Email or Password";
}

?>