<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Owner Dashboard | HostelHub</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins', sans-serif;
    background:#f1f5f9;
    color:#0f172a;
}

/* SIDEBAR */
.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:260px;
    height:100vh;
    background:#0f172a;
    padding:30px 20px;
}

.logo{
    color:white;
    font-size:28px;
    font-weight:700;
    margin-bottom:50px;
}

.sidebar a{
    display:block;
    color:#cbd5e1;
    text-decoration:none;
    padding:15px;
    margin-bottom:10px;
    border-radius:10px;
    transition:0.3s;
    font-weight:500;
}

.sidebar a:hover{
    background:#1e293b;
    color:white;
    padding-left:20px;
}

.logout{
    background:#dc2626;
    color:white !important;
    margin-top:30px;
}

/* MAIN CONTENT */
.main-content{
    margin-left:260px;
    padding:30px;
}

/* TOP BAR */
.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.topbar h1{
    font-size:32px;
}

.owner-profile{
    background:white;
    padding:12px 20px;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.05);
}

/* HOSTEL CARD */
.hostel-card{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:white;
    padding:35px;
    border-radius:25px;
    margin-bottom:35px;
    box-shadow:0 10px 30px rgba(37,99,235,0.2);
}

.hostel-card h2{
    font-size:35px;
    margin-bottom:10px;
}

.hostel-card p{
    color:#dbeafe;
    line-height:1.8;
}

/* STATISTICS */
.stats-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:25px;
    margin-bottom:40px;
}

.stat-card{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
    transition:0.3s;
}

.stat-card:hover{
    transform:translateY(-5px);
}

.stat-card h3{
    font-size:40px;
    margin-bottom:10px;
    color:#2563eb;
}

.stat-card p{
    color:#64748b;
    font-size:16px;
}

/* SECTION */
.section{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
}

.section-title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.section-title h2{
    font-size:24px;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
}

th{
    text-align:left;
    padding:18px;
    background:#f8fafc;
    color:#334155;
}

td{
    padding:18px;
    border-bottom:1px solid #e2e8f0;
}

.status{
    padding:8px 14px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
}

.pending{
    background:#fef3c7;
    color:#92400e;
}

.approved{
    background:#dcfce7;
    color:#166534;
}

/* BUTTONS */
.action-btn{
    padding:10px 18px;
    border:none;
    border-radius:8px;
    background:#2563eb;
    color:white;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
}

.action-btn:hover{
    background:#1d4ed8;
}

/* RESPONSIVE */
@media(max-width:900px){

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

    .main-content{
        margin-left:0;
    }

    .topbar{
        flex-direction:column;
        align-items:flex-start;
        gap:20px;
    }

}

</style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>

<?php

session_start();

include('config.php');

if(!isset($_SESSION['owner_id']))
{
    header("Location: owner_login.html");
    exit();
}

$oid = $_SESSION['owner_id'];

/* OWNER + HOSTEL */
$query = "SELECT owner.*, hostel.hostelname, hostel.hostelid
          FROM owner
          JOIN hostel ON owner.hostelid = hostel.hostelid
          WHERE owner.ownerid = '$oid'";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);

$hostelid = $data['hostelid'];

/* TOTAL ROOMS */
$room_query = mysqli_query($conn,
"SELECT COUNT(*) AS totalrooms
 FROM room
 WHERE hostelid='$hostelid'");

$room_data = mysqli_fetch_assoc($room_query);

$total_rooms = $room_data['totalrooms'];

/* PENDING BOOKINGS */
$pending_query = mysqli_query($conn,
"SELECT COUNT(*) AS pendingrequests
 FROM reservation
 JOIN room ON reservation.roomid = room.roomid
 WHERE room.hostelid='$hostelid'
 AND reservation.status='Pending'");

$pending_data = mysqli_fetch_assoc($pending_query);

$pending_requests = $pending_data['pendingrequests'];

/* OCCUPIED ROOMS */
$occupied_query = mysqli_query($conn,
"SELECT COUNT(*) AS occupiedrooms
 FROM room
 WHERE hostelid='$hostelid'
 AND availabilitystatus='Occupied'");

$occupied_data = mysqli_fetch_assoc($occupied_query);

$occupied_rooms = $occupied_data['occupiedrooms'];

?>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">HostelHub</div>

    <a href="owner_dash.php">🏠 Dashboard</a>

    <a href="room.php">🛏️ Rooms & Pricing</a>

    <a href="view_bookings.php">📅 Reservations</a>

    <a href="#">📊 Analytics</a>

    <a href="#">⚙️ Settings</a>

    <a href="index.php" class="logout">Logout</a>

</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- TOPBAR -->
    <div class="topbar">

        <div>
            <h1>Owner Dashboard</h1>
            <p>Monitor your hostel performance and bookings.</p>
        </div>

        <div class="owner-profile">
            Welcome, <strong><?php echo $data['ownername']; ?></strong>
        </div>

    </div>

    <!-- HOSTEL CARD -->
    <div class="hostel-card">

        <h2><?php echo $data['hostelname']; ?></h2>

        <p>
            Manage your rooms, reservations and hostel operations through your modern dashboard.
        </p>

    </div>

    <!-- STATS -->
    <div class="stats-grid">

        <div class="stat-card">
            <h3><?php echo $total_rooms; ?></h3>
            <p>Total Rooms</p>
        </div>

        <div class="stat-card">
            <h3><?php echo $pending_requests; ?></h3>
            <p>Pending Requests</p>
        </div>

        <div class="stat-card">
            <h3><?php echo $occupied_rooms; ?></h3>
            <p>Occupied Rooms</p>
        </div>

    </div>

    <!-- RECENT BOOKINGS -->
    <div class="section">

        <div class="section-title">
            <h2>Recent Reservations</h2>
        </div>

        <table>

            <tr>
                <th>Student</th>
                <th>Room</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php
            $recent_sql = "SELECT reservation.studentname, reservation.studentcontact, room.roomnumber, room.roomtype, reservation.reservationid, reservation.status 
                    FROM reservation 
                    JOIN room ON reservation.roomid = room.roomid 
                    WHERE room.hostelid = '$hostelid'
                    ORDER BY reservation.reservationid DESC LIMIT 5";
            $recent_res = mysqli_query($conn, $recent_sql);

            if ($recent_res && mysqli_num_rows($recent_res) > 0) {
                while($row = mysqli_fetch_assoc($recent_res)) {
                    echo "<tr>
                            <td>".$row['studentname']."<br><small>".$row['studentcontact']."</small></td>
                            <td>Room ".$row['roomnumber']." (".$row['roomtype'].")</td>
                            <td>";
                    if ($row['status'] == 'Approved') {
                        echo "<span class='status approved'>Approved</span>";
                    } else {
                        echo "<span class='status pending'>Pending</span>";
                    }
                    echo "</td>
                            <td><a href='view_bookings.php' class='action-btn' style='text-decoration:none;'>Manage</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No recent reservations found.</td></tr>";
            }
            ?>

        </table>

    </div>

</div>

</body>
</html>
