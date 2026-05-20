<?php
// 1. Connection settings
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "hostel reserve"; // Keep it lowercase to match your screenshot exactly

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Get data from form
$email = $_POST['email'];
$password = $_POST['password'];

// 3. The Query (Fixed "students" to "student")
$sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

// 4. Error handling: check if the query actually worked
if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

if(mysqli_num_rows($result) > 0)
{
    // Success! Start a session so the dashboard knows who this is
    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['student_id'] = $row['stdid'];
    
    header("Location: student_dashboard.php");
}
else
{
    echo "Invalid Email or Password";
}
?>