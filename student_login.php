<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login & Sign Up | Hostel System</title>
<style type="text/css">
    body, html { height: 100%; margin: 0; font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f0f4f8; display: flex; align-items: center; justify-content: center; }
    
    .login-container { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 400px; border-top: 6px solid #0056b3; }
    
    h2 { color: #003366; text-align: center; margin-bottom: 10px; }
    p.subtitle { text-align: center; color: #666; font-size: 14px; margin-bottom: 30px; }

    /* Form Styling */
    label { display: block; font-weight: 600; margin-bottom: 5px; color: #333; font-size: 13px; }
    input[type="email"], input[type="password"], input[type="text"] { 
        width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; font-size: 14px; 
    }
    input:focus { border-color: #0056b3; outline: none; background-color: #f9fbff; }

    .btn-login { width: 100%; background: #0056b3; color: white; padding: 12px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 16px; transition: 0.3s; }
    .btn-login:hover { background: #003d82; }

    .toggle-link { text-align: center; margin-top: 20px; font-size: 14px; color: #555; }
    .toggle-link a { color: #0056b3; text-decoration: none; font-weight: bold; }

    /* Hidden by default */
    #signup-form { display: none; }
</style>
<script type="text/javascript">
    // Simple function to switch between Login and Sign Up without leaving the page
    function toggleForm(showSignUp) {
        if(showSignUp) {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('signup-form').style.display = 'block';
            document.getElementById('page-title').innerHTML = 'Create Account';
        } else {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('signup-form').style.display = 'none';
            document.getElementById('page-title').innerHTML = 'Student Login';
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
    <h2 id="page-title">Student Login</h2>
    <p class="subtitle">Access your hostel reservation dashboard</p>

    <div id="login-form">
        <form action="login_student.php" method="post">
            <label>Email Address</label>
            <input type="email" name="email" required placeholder="Enter your email" />
            
            <label>Password</label>
            <input type="password" name="password" required placeholder="Enter your password" />
            
            <button type="submit" name="login" class="btn-login">Login</button>
        </form>
        <div class="toggle-link">
            First time here? <a href="javascript:void(0)" onClick="toggleForm(true)">Sign Up Now</a>
        </div>
    </div>

    <div id="signup-form">
        <form action="student.php" method="post">
                
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
			            <button type="submit" name="signup" class="btn-login">Create Account</button>
        </form>
        <div class="toggle-link">
            Already have an account? <a href="javascript:void(0)" onClick="toggleForm(false)">Login Here</a>
        </div>
    </div>
</div>

</body>
</html>
