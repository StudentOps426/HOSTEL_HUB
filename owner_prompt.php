<?php
include('config.php');

if(isset($_POST['register_all'])) {
    // Collect Hostel Data
    $hname = $_POST['hostel_name'];
    $location = $_POST['location'];

    // Collect Owner Data
    $oname = $_POST['owner_name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // STEP 1: Insert into the 'hostel' table first
    $sql1 = "INSERT INTO hostel (hostelname, location) VALUES ('$hname', '$location')";
    
    if(mysqli_query($conn, $sql1)) {
        // STEP 2: Capture the ID that was just created for this hostel
        $new_hostel_id = mysqli_insert_id($conn);

        // STEP 3: Insert into the 'owner' table using that new ID
        $sql2 = "INSERT INTO owner (ownername, ownercontact, email, password, hostelid) 
                 VALUES ('$oname', '$contact', '$email', '$pass', '$new_hostel_id')";

        if(mysqli_query($conn, $sql2)) {
            echo "<script>alert('Registration Successful! Please Login.'); window.location='owner_dash.php';</script>";
        } else {
            // If owner fails, you might want to delete the orphaned hostel record here
            echo "Error creating owner: " . mysqli_error($conn);
        }
    } else {
        echo "Error creating hostel: " . mysqli_error($conn);
    }
}
?>