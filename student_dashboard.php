<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard | HostelHub</title>

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
    top:0;
    left:0;
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
    border-radius:10px;
    margin-bottom:10px;
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

/* TOPBAR */
.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.topbar h1{
    font-size:32px;
}

.student-profile{
    background:white;
    padding:12px 20px;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.05);
}

/* HERO CARD */
.hero-card{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:white;
    padding:40px;
    border-radius:25px;
    margin-bottom:40px;
    box-shadow:0 10px 30px rgba(37,99,235,0.2);
}

.hero-card h2{
    font-size:38px;
    margin-bottom:15px;
}

.hero-card p{
    color:#dbeafe;
    line-height:1.8;
    max-width:700px;
}

/* SEARCH BAR */
.search-bar{
    margin-top:25px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.search-bar input{
    flex:1;
    min-width:250px;
    padding:16px;
    border:none;
    border-radius:12px;
    font-size:15px;
}

.search-btn{
    padding:16px 25px;
    border:none;
    background:#0f172a;
    color:white;
    border-radius:12px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
}

.search-btn:hover{
    background:#1e293b;
}

/* SECTION TITLE */
.section-title{
    margin-bottom:25px;
}

.section-title h2{
    font-size:28px;
    margin-bottom:8px;
}

.section-title p{
    color:#64748b;
}

/* HOSTEL GRID */
.hostel-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:30px;
}

/* HOSTEL CARD */
.hostel-card{
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
    transition:0.3s;
}

.hostel-card:hover{
    transform:translateY(-8px);
}

.hostel-image{
    width:100%;
    height:220px;
    object-fit:cover;
}

.hostel-content{
    padding:25px;
}

.hostel-id{
    background:#dbeafe;
    color:#2563eb;
    display:inline-block;
    padding:6px 14px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
    margin-bottom:15px;
}

.hostel-content h3{
    font-size:24px;
    margin-bottom:12px;
}

.location{
    color:#64748b;
    margin-bottom:20px;
}

.card-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    font-size:22px;
    font-weight:700;
    color:#2563eb;
}

.btn-view{
    background:#2563eb;
    color:white;
    padding:12px 18px;
    text-decoration:none;
    border-radius:10px;
    font-weight:600;
    transition:0.3s;
}

.btn-view:hover{
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

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">HostelHub</div>

    <a href="student_dashboard.php">🏠 Dashboard</a>

    <a href="reservation.php">📅 My Reservations</a>

    <a href="#">❤️ Saved Hostels</a>

    <a href="#">⚙️ Account Settings</a>

    <a href="index.php" class="logout">Logout</a>

</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- TOPBAR -->
    <div class="topbar">

        <div>
            <h1>Student Dashboard</h1>
            <p>Explore and reserve the best student hostels.</p>
        </div>

        <div class="student-profile">
            Welcome Student
        </div>

    </div>

    <!-- HERO SECTION -->
    <div class="hero-card">

        <h2>Find Your Perfect Student Hostel</h2>

        <p>
            Browse modern, affordable and secure hostels around your campus.
            Compare rooms, pricing and reserve instantly through HostelHub.
        </p>

        <!-- SEARCH -->
        <form class="search-bar" action="student_dashboard.php" method="GET">

            <input type="text" name="search_query" placeholder="Search by hostel name or location" value="<?php echo isset($_GET['search_query']) ? htmlspecialchars($_GET['search_query']) : ''; ?>">

            <button type="submit" class="search-btn">
                Search Hostel
            </button>

        </form>

    </div>

    <!-- SECTION TITLE -->
    <div class="section-title">

        <h2>Available Hostels</h2>

        <p>
            Explore available student accommodations.
        </p>

    </div>

    <!-- HOSTEL GRID -->
    <div class="hostel-grid">

<?php

include('config.php');

$search_query = isset($_GET['search_query']) ? mysqli_real_escape_string($conn, trim($_GET['search_query'])) : '';

if (!empty($search_query)) {
    $query = "SELECT * FROM hostel WHERE hostelname LIKE '%$search_query%' OR location LIKE '%$search_query%'";
} else {
    $query = "SELECT * FROM hostel";
}

$result = mysqli_query($conn, $query);

if($result && mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {

?>

        <!-- CARD -->
        <div class="hostel-card">

            <img
            src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=2070&auto=format&fit=crop"
            class="hostel-image">

            <div class="hostel-content">

                <div class="hostel-id">
                    Hostel ID:
                    <?php echo $row['hostelid']; ?>
                </div>

                <h3>
                    <?php echo $row['hostelname']; ?>
                </h3>

                <p class="location">
                    📍 <?php echo $row['location']; ?>
                </p>

                <div class="card-footer">

                    <div class="price"> 
                        Available
                    </div>

                    <a href="view_rooms.php?id=<?php echo $row['hostelid']; ?>"
                    class="btn-view">

                    View Rooms

                    </a>

                </div>

            </div>

        </div>

<?php

    }
}
else
{
    echo "<h3>No hostels available yet.</h3>";
}

?>

    </div>

</div>

</body>
</html>
