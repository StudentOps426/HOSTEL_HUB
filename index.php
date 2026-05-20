<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HostelHub | Smart Hostel Reservation System</title>

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
    background:#f5f7fb;
    color:#1e293b;
}

/* NAVBAR */
.navbar{
    width:100%;
    background:white;
    padding:20px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:fixed;
    top:0;
    z-index:1000;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
}

.logo{
    font-size:28px;
    font-weight:700;
    color:#2563eb;
}

.nav-links a{
    text-decoration:none;
    margin-left:25px;
    color:#334155;
    font-weight:500;
    transition:0.3s;
}

.nav-links a:hover{
    color:#2563eb;
}

/* HERO SECTION */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:120px 8% 80px;
    background:linear-gradient(
    rgba(15,23,42,0.8),
    rgba(15,23,42,0.8)),
    url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?q=80&w=2070&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
    color:white;
}

.hero-content{
    max-width:700px;
}

.hero-content h1{
    font-size:60px;
    line-height:1.2;
    margin-bottom:20px;
}

.hero-content p{
    font-size:18px;
    line-height:1.8;
    color:#cbd5e1;
    margin-bottom:35px;
}

/* BUTTONS */
.hero-buttons{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.btn{
    padding:15px 30px;
    border-radius:8px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.btn-primary{
    background:#2563eb;
    color:white;
}

.btn-primary:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

.btn-secondary{
    border:2px solid white;
    color:white;
}

.btn-secondary:hover{
    background:white;
    color:#0f172a;
}

/* FEATURES SECTION */
.features{
    padding:90px 8%;
    text-align:center;
}

.section-title{
    font-size:38px;
    margin-bottom:15px;
    color:#0f172a;
}

.section-subtitle{
    color:#64748b;
    margin-bottom:50px;
    font-size:17px;
}

.feature-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

.feature-card{
    background:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
    transition:0.3s;
}

.feature-card:hover{
    transform:translateY(-8px);
}

.feature-card h3{
    margin:20px 0 15px;
    color:#0f172a;
}

.feature-card p{
    color:#64748b;
    line-height:1.7;
}

.icon{
    font-size:50px;
}

/* PORTAL SECTION */
.portal-section{
    padding:90px 8%;
    background:#eef4ff;
}

.portal-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:35px;
}

.portal-card{
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
    text-align:center;
    transition:0.3s;
}

.portal-card:hover{
    transform:translateY(-8px);
}

.portal-card h2{
    margin-bottom:15px;
    color:#0f172a;
}

.portal-card p{
    color:#64748b;
    margin-bottom:25px;
    line-height:1.7;
}

/* STATS */
.stats{
    padding:80px 8%;
    background:#0f172a;
    color:white;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:30px;
    text-align:center;
}

.stat-box h2{
    font-size:50px;
    margin-bottom:10px;
    color:#3b82f6;
}

.stat-box p{
    color:#cbd5e1;
}

/* FOOTER */
footer{
    background:#020617;
    color:#cbd5e1;
    text-align:center;
    padding:25px;
}

/* RESPONSIVE */
@media(max-width:768px){

    .hero-content h1{
        font-size:40px;
    }

    .navbar{
        flex-direction:column;
        gap:15px;
    }

    .nav-links a{
        margin:0 10px;
    }

}

</style>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">

    <div class="logo">HostelHub</div>

</nav>

<!-- HERO SECTION -->
<section class="hero">

    <div class="hero-content">

        <h1>Find Your Perfect Student Hostel Easily</h1>

        <p>
            Discover affordable, secure and comfortable student hostels.
            Reserve rooms online and manage bookings seamlessly through our modern hostel reservation platform.
        </p>

        <div class="hero-buttons">

            <a href="student_login.php" class="btn btn-primary">
                Student Portal
            </a>

            <a href="owner_login.html" class="btn btn-secondary">
                Hostel Owner Portal
            </a>

        </div>

    </div>

</section>

<!-- FEATURES -->
<section class="features">

    <h2 class="section-title">Why Choose HostelHub?</h2>

    <p class="section-subtitle">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">

    <div class="logo">HostelHub</div>

</nav>

<!-- HERO SECTION -->
<section class="hero">

    <div class="hero-content">

        <h1>Find Your Perfect Student Hostel Easily</h1>

        <p>
            Discover affordable, secure and comfortable student hostels.
            Reserve rooms online and manage bookings seamlessly through our modern hostel reservation platform.
        </p>

        <div class="hero-buttons">

            <a href="student_login.php" class="btn btn-primary">
                Student Portal
            </a>

            <a href="owner_login.html" class="btn btn-secondary">
                Hostel Owner Portal
            </a>

        </div>

    </div>

</section>

<!-- FEATURES -->
<section class="features">

    <h2 class="section-title">Why Choose HostelHub?</h2>

    <p class="section-subtitle">
        A smarter and easier way to connect students with hostel owners.
    </p>

    <div class="feature-grid">

        <div class="feature-card">
            <div class="icon">🏠</div>
            <h3>Verified Hostels</h3>
            <p>
                Browse trusted and approved hostels around your campus with confidence.
            </p>
        </div>

        <div class="feature-card">
            <div class="icon">📅</div>
            <h3>Easy Reservations</h3>
            <p>
                Book hostel rooms instantly without unnecessary paperwork or delays.
            </p>
        </div>

        <div class="feature-card">
            <div class="icon">💳</div>
            <h3>Affordable Pricing</h3>
            <p>
                Compare hostel pricing and room types before making your reservation.
            </p>
        </div>

    </div>

</section>

<!-- PORTAL SECTION -->
<section class="portal-section">

    <h2 class="section-title">Access Your Portal</h2>

    <p class="section-subtitle">
        Choose how you want to use the platform.
    </p>

    <div class="portal-grid">

        <!-- STUDENT -->
        <div class="portal-card">

            <h2>Student Portal</h2>

            <p>
                Browse hostels, compare rooms, make reservations and manage your bookings.
            </p>

            <a href="student_login.php" class="btn btn-primary">
                Student Login
            </a>

        </div>

        <!-- OWNER -->
        <div class="portal-card">

            <h2>Hostel Owner Portal</h2>

            <p>
                Add hostels, manage rooms, track reservations and monitor occupancy.
            </p>

            <a href="owner.php" class="btn btn-primary">
                Owner Login
            </a>

        </div>

    </div>

</section>

<!-- STATS -->
<section class="stats">

    <div class="stats-grid">

        <div class="stat-box">
            <h2>150+</h2>
            <p>Rooms Available</p>
        </div>

        <div class="stat-box">
            <h2>80+</h2>
            <p>Registered Students</p>
        </div>

        <div class="stat-box">
            <h2>25+</h2>
            <p>Verified Hostels</p>
        </div>

        <div class="stat-box">
            <h2>99%</h2>
            <p>Reservation Success</p>
        </div>

    </div>

</section>

<!-- FOOTER -->
<footer>

    <p>
        &copy; 2026 HostelHub Reservation System. All Rights Reserved.
    </p>

</footer>

</body>
</html>
