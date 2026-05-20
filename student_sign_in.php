<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Portal | Hostel Management</title>
<style type="text/css">
/* Base Reset */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f9;
    color: #333;
}

/* Header Styling */
.header-banner {
    background-color: #0056b3; /* Pro Blue */
    color: #ffffff;
    padding: 30px;
    text-align: center;
    font-size: 32px;
    font-weight: bold;
    letter-spacing: 2px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Layout Container */
.main-wrapper {
    display: flex;
    max-width: 1200px;
    margin: 30px auto;
    gap: 30px;
    padding: 0 20px;
}

/* Sidebar Styling */
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

/* Form Area Styling */
.content-area {
    flex: 3;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

/* Form Element Styling - Keeping your original tags */
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

/* Styling your textareas to look like sleek input fields */
textarea {
    width: 100%;
    height: 40px; /* Forces textarea to look like a single line */
    padding: 10px;
    border: 1px solid #d1d9e6;
    border-radius: 6px;
    font-family: inherit;
    font-size: 14px;
    resize: none; /* Prevents user from stretching it and breaking layout */
    box-sizing: border-box;
}

textarea:focus {
    outline: none;
    border-color: #0056b3;
    background-color: #f9fbff;
}

/* Button Styling */
.button-container {
    margin-top: 30px;
    display: flex;
    gap: 15px;
}

input[type="submit"], input[type="reset"] {
    padding: 12px 30px;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

input[type="submit"] {
    background-color: #0056b3;
    color: white;
}

input[type="submit"]:hover {
    background-color: #003d82;
}

input[type="reset"] {
    background-color: #eef2f7;
    color: #5a7184;
}

input[type="reset"]:hover {
    background-color: #d1d9e6;
}
</style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>

<div class="header-banner">
    STUDENT REGISTRATION PORTAL
</div>

<div class="main-wrapper">
    <!-- Navigation Sidebar -->
    <div class="sidebar">
        <h3>QUICK LINKS</h3>
        <p><a href="Available_hostels.php">Hostels</a></p>
        <p><a href="reservation.html">Reservations</a></p>
    </div>

    <!-- Main Form Content -->
    <div class="content-area">
        <form id="form1" name="form1" method="post" action="student.php">
            <p>
                <label>Student ID</label>
                <textarea name="studentid"></textarea>
            </p>
            
            <p>
                <label>Full Name</label>
                <textarea name="name"></textarea>
            </p>
            
            <p>
                <label>Contact Number</label>
                <textarea name="contact"></textarea>
            </p>
            
            <p>
                <label>Email Address</label>
                <textarea name="email"></textarea>
            </p>
            
            <p>
                <label>Password</label>
                <textarea name="password"></textarea>
            </p>

            <div class="button-container">
                <input type="submit" name="Submit" value="Register Now" />
                <input type="reset" name="Submit2" value="Clear Form" />
            </div>
        </form>
    </div>
</div>

</body>
</html>
