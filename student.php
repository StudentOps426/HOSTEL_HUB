<?php
// 1. Connection Details
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "HOSTEL RESERVE";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Collect data from your HTML textareas
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
// 3. The SQL Query to insert data
$sql = "INSERT INTO student (name,contact,email,password)
VALUES ('$name', '$contact', '$email', '$password')";

// 4. Execution
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Student record saved successfully!'); window.location='student_dashboard.php';</script>";
} else {
    // This will show an error if the HostelID doesn't exist (because of your FK link!)
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>