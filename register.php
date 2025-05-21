<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration system PHP and MySQL</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #b8d2bb; /* Original background color */
    }

    .container {
        background: #d1ded2;
        padding: 1.5rem 2rem;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 420px;
        text-align: center;
        height: 88%;
    }

    /* .logo {
        display: block;
        margin: 0 auto 2rem;
        max-width: 180px;
    } */

    .form-section {
        padding: 0;
    }

    .form-section h1 {
        margin-bottom: 1rem;
        font-size: 2rem;
        color: #2e7d32; /* Original color scheme */
        text-align: center;
        font-weight: 700;
    }

    .form-group {
        margin-bottom: .5rem;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #555555  ; /* Original color */
        font-weight: 500;
    }

    .form-group input {
        width: 100%;
        padding: 0.8rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        background-color: #fafafa;
        color: #333;
        box-sizing: border-box;
    }

    .form-group input:focus {
        outline: none;
        border-color: #2e7d32; /* Original color */
        box-shadow: 0 0 5px rgba(46, 125, 50, 0.5);
    }

    .btn {
        width: 100%;
        padding: 0.8rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        background-color: #2e7d32; /* Original color */
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #1b5e20; /* Original hover color */
    }

    .already-signed-up {
        margin-top: 1rem;
        font-size: 1rem;
        color: #555;
    }

    .already-signed-up a {
        color: #2e7d32; /* Original color */
        text-decoration: none;
        font-weight: 500;
    }

    .already-signed-up a:hover {
        text-decoration: underline;
    }

    .toggle-password {
        cursor: pointer;
        color: #2e7d32; /* Original color */
        font-size: 0.9rem;
        text-align: right;
        margin-top: 0.3rem;
    }

    .divider {
        margin: 0.8rem 0;
        font-size: 1rem;
        color: #555555;
    }

    .google-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 95%;
        padding: 0.8rem;
        border-radius: 8px;
        background-color: #ffffff;
        border: 2px solid #e0e0e0;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .google-btn:hover {
        transform: scale(1.05);
        border-color: #5be84c;
    }

    .google-btn i {
        font-size: 1.2rem;
        color: #db4437; /* Google Red color */
        margin-right: 1rem;
    }

    .google-btn span {
        font-size: 1rem;
        font-weight: 500;
        color: #555;
    }

  </style>
</head>
<body>
  <div class="container">
    <!-- <img src="newlog.png" alt="LifeAlign Logo" class="logo"> -->
    <div class="form-section">
      <h1>Create Your Account</h1>
      <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group">
          <label for="password_1">Password</label>
          <input type="password" name="password_1" id="password_1" placeholder="Enter your password" required>
          <div class="toggle-password" id="togglePassword1">Show Password</div>
        </div>
        
        <div class="form-group">
          <label for="password_2">Confirm Password</label>
          <input type="password" name="password_2" id="password_2" placeholder="Confirm your password" required>
          <div class="toggle-password" id="togglePassword2">Show Password</div>
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        
        <div class="already-signed-up">
          Already a member? <a href="login.php">Sign in</a>
        </div>
      </form>

      <div class="divider">or you can sign up with</div>
      <!-- Google Sign Up Button -->
      <div class="google-btn" onclick="window.location.href='/auth/google'">
        <i class="fab fa-google"></i>
        <span>Sign up with Google</span>
      </div>
    </div>
  </div>

  <script>
    // Show/Hide Password functionality for Password 1 (Password)
    const passwordInput1 = document.getElementById('password_1');
    const togglePassword1 = document.getElementById('togglePassword1');

    togglePassword1.addEventListener('click', () => {
        if (passwordInput1.type === 'password') {
            passwordInput1.type = 'text';
            togglePassword1.textContent = 'Hide Password';
        } else {
            passwordInput1.type = 'password';
            togglePassword1.textContent = 'Show Password';
        }
    });

    // Show/Hide Password functionality for Password 2 (Confirm Password)
    const passwordInput2 = document.getElementById('password_2');
    const togglePassword2 = document.getElementById('togglePassword2');

    togglePassword2.addEventListener('click', () => {
        if (passwordInput2.type === 'password') {
            passwordInput2.type = 'text';
            togglePassword2.textContent = 'Hide Password';
        } else {
            passwordInput2.type = 'password';
            togglePassword2.textContent = 'Show Password';
        }
    });
  </script>
</body>
</html>
