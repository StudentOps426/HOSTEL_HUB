<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manager Portal | Hostel System</title>
<style type="text/css">
    body, html { height: 100%; margin: 0; font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f0f4f8; display: flex; align-items: center; justify-content: center; }
    
    .login-container { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 450px; border-top: 6px solid #0056b3; margin: 20px; }
    
    h2 { color: #003366; text-align: center; margin-bottom: 5px; }
    h3 { color: #0056b3; font-size: 16px; margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 5px; }
    p.subtitle { text-align: center; color: #666; font-size: 14px; margin-bottom: 25px; }

    /* Form Styling */
    label { display: block; font-weight: 600; margin-bottom: 5px; color: #333; font-size: 13px; }
    input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; font-size: 14px; }
    input:focus { border-color: #0056b3; outline: none; background-color: #f9fbff; }

    .btn-action { width: 100%; background: #0056b3; color: white; padding: 12px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 16px; transition: 0.3s; margin-top: 10px; }
    .btn-action:hover { background: #003d82; }

    .toggle-link { text-align: center; margin-top: 20px; font-size: 14px; color: #555; }
    .toggle-link a { color: #0056b3; text-decoration: none; font-weight: bold; }

    /* Hidden by default */
    #signup-form { display: none; }
</style>

<script type="text/javascript">
    function toggleForm(showSignUp) {
        if(showSignUp) {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('signup-form').style.display = 'block';
            document.getElementById('page-title').innerHTML = 'Manager Registration';
        } else {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('signup-form').style.display = 'none';
            document.getElementById('page-title').innerHTML = 'Hostel Owner Login';
        }
    }
</script>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>
<body>

<div class="login-container">
    <h2 id="page-title">Hostel Owner Login</h2>
    <p class="subtitle">Access your hostel management dashboard</p>

    <!-- LOGIN FORM -->
    <div id="login-form">
        <form action="owner_login.php" method="post">
            <label>Email Address</label>
            <input type="email" name="email" required placeholder="Enter your email" />
            
            <label>Password</label>
            <input type="password" name="password" required placeholder="Enter your password" />
            
            <button type="submit" name="login" class="btn-action">Login</button>
        </form>
        <div class="toggle-link">
            Need to register your hostel? <a href="javascript:void(0)" onClick="toggleForm(true)">Sign Up Now</a>
        </div>
    </div>

    <!-- SIGNUP FORM (Hidden initially) -->
    <div id="signup-form">
        <form action="owner_prompt.php" method="POST">
            
            <h3>Hostel Information</h3>
            <label>Hostel Name</label>
            <input type="text" name="hostel_name" placeholder="e.g. Skyline Apartments" required>
            
            <label>Location / Address</label>
            <input type="text" name="location" placeholder="e.g. Banda, Kyambogo" required>

            <h3>Owner Account</h3>
            <label>Full Name</label>
            <input type="text" name="owner_name" required>
            
            <label>Phone Contact</label>
            <input type="text" name="contact" placeholder="07..." required>
            
            <label>Email Address</label>
            <input type="email" name="email" required>
            
            <label>Create Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="register_all" class="btn-action">Create Account & Hostel</button>
        </form>
        <div class="toggle-link">
            Already registered? <a href="javascript:void(0)" onClick="toggleForm(false)">Back to Login</a>
        </div>
    </div>
</div>

</body>
</html>
