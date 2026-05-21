<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Room Management | Hostel System</title>
<style type="text/css">
/* Base Setup */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f9;
    color: #333;
}

/* Professional Header Banner */
.header-banner {
    background-color: #0056b3;
    color: #ffffff;
    padding: 30px;
    text-align: center;
    font-size: 32px;
    font-weight: bold;
    letter-spacing: 2px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Main Content Layout */
.main-wrapper {
    display: flex;
    max-width: 1200px;
    margin: 30px auto;
    gap: 30px;
    padding: 0 20px;
}

/* Sidebar Navigation */
.sidebar {
    flex: 1;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    height: fit-content;
}

.sidebar h3 {
    color: #0056b3;
    font-size: 18px;
    border-bottom: 2px solid #eef2f7;
    padding-bottom: 10px;
    margin-top: 0;
}

.sidebar p a {
    display: block;
    padding: 12px;
    color: #5a7184;
    text-decoration: none;
    font-weight: 600;
    border-radius: 6px;
    transition: 0.3s;
}

.sidebar p a:hover {
    background-color: #f0f7ff;
    color: #0056b3;
    padding-left: 20px;
}

/* Form Area */
.content-area {
    flex: 3;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.content-area h2 {
    color: #003366;
    margin-top: 0;
    margin-bottom: 25px;
    font-size: 24px;
}

/* Form Elements */
form p {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #003366;
    text-transform: capitalize;
}

/* Professional Input Styling for Textareas */
textarea {
    width: 100%;
    height: 42px; /* Set height to look like a standard input */
    padding: 10px 15px;
    border: 1px solid #d1d9e6;
    border-radius: 6px;
    font-family: inherit;
    font-size: 14px;
    resize: none; /* Prevents resizing and keeps the pro look */
    box-sizing: border-box;
}

textarea:focus {
    outline: none;
    border-color: #0056b3;
    background-color: #f9fbff;
    box-shadow: 0 0 5px rgba(0, 86, 179, 0.1);
}

/* Action Buttons */
.button-container {
    margin-top: 30px;
    display: flex;
    gap: 15px;
}

input[type="submit"], input[type="reset"] {
    padding: 12px 35px;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    font-size: 15px;
}

input[type="submit"] {
    background-color: #0056b3;
    color: white;
}

input[type="submit"]:hover {
    background-color: #003d82;
    transform: translateY(-2px);
}

input[type="reset"] {
    background-color: #eef2f7;
    color: #5a7184;
}

input[type="reset"]:hover {
    background-color: #d1d9e6;
}
/* Inputs and Select */
input[type="text"],
input[type="number"],
select {
    width: 100%;
    height: 45px;
    padding: 10px 15px;
    border: 1px solid #d1d9e6;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
    background-color: #fff;
}

input:focus,
select:focus {
    outline: none;
    border-color: #0056b3;
    background-color: #f9fbff;
    box-shadow: 0 0 5px rgba(0, 86, 179, 0.1);
}
</style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>

    <div class="header-banner">
        ROOM MANAGEMENT
    </div>

    <div class="main-wrapper">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <h3>QUICK LINKS</h3>
            <a href="owner_dash.php">Dashboard Home</a>
            <a href="rooms.php">Rooms & Pricing</a>
            <a href="view_bookings.php">Pending Bookings</a>
            <hr/>
            <a href="owner.php" style="color:red;">Logout</a>
        </div>

        <!-- Main Form Area -->
<div class="content-area">

    <h2>Add New Room</h2>

    <form id="form1" name="form1" method="post" action="insert_room.php">

        <p>
            <label>Room Number</label>
            <input type="text" name="roomnumber" placeholder="Enter Room Number" required />
        </p>

        <p>
            <label>Room Type</label>
            <select name="roomtype" required>
                <option value="">Select Room Type</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Self Contained">Self Contained</option>
            </select>
        </p>

        <p>
            <label>Price</label>
            <input type="number" name="price" placeholder="Enter Room Price" required />
        </p>

        <p>
            <label>Availability Status</label>
            <select name="availabilitystatus" required>
                <option value="Available">Available</option>
                <option value="Occupied">Occupied</option>
            </select>
        </p>

        <div class="button-container">
            <input type="submit" name="Submit" value="Save Room" />
            <input type="reset" name="Submit2" value="Reset Form" />
        </div>

    </form>

</div>
    </div>

</body>
</html>
