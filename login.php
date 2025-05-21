<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #b8d2bb;
}

.container {
    background: #d1ded2;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 420px;
}

.logo {
    display: block;
    margin: 0 auto 2rem;
    max-width: 180px;
}

.container h1 {
    margin-bottom: 2rem;
    font-size: 2rem;
    color: #2e7d32;
    text-align: center;
    font-weight: 700;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.75rem;
    color: #555555;
    font-weight: 500;
    font-size: 1rem;
}

.form-group input {
    width: 95%;
    padding: 0.8rem;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
    color: #333;
    transition: border-color 0.3s ease;
}

.form-group input:focus {
    border-color: #2e7d32;
    outline: none;
    box-shadow: 0 0 4px rgba(46, 125, 50, 0.2);
}

.btn {
    width: 100%;
    padding: 0.9rem;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-btn {
    background-color: #2e7d32;
    color: #ffffff;
}

.login-btn:hover {
    background-color: #1b5e20;
}

.toggle-password {
    margin-top: 0.5rem;
    cursor: pointer;
    color: #2e7d32;
    font-size: 0.9rem;
    text-align: right;
}

.footer {
    margin-top: 2rem;
    text-align: center;
    font-size: 0.95rem;
    color: #666666;
    line-height: 1.5;
}

.footer a {
    color: #2e7d32;
    text-decoration: none;
    font-weight: 500;
}

.footer a:hover {
    text-decoration: underline;
}

@media (max-width: 480px) {
    .container {
        padding: 2rem;
    }

    .container h1 {
        font-size: 1.8rem;
    }

    .btn {
        font-size: 0.9rem;
        padding: 0.8rem;
    }
}

  </style>
</head>
<body>
  <div class="container">
    <img src="newlogo.png" alt="LifeAlign Logo" class="logo">
    <h1>Sign in</h1>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <div class="toggle-password" id="togglePassword">Show Password</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn login-btn" name="login_user">Login</button>
        </div>
        <p class="footer">
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
        <p class="footer">
            Forgot your password? <a href="reset.html">Reset it here</a>
        </p>
    </form>
  </div>

  <script>
    // Show/Hide Password functionality
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    
    togglePassword.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.textContent = 'Hide Password';
        } else {
            passwordInput.type = 'password';
            togglePassword.textContent = 'Show Password';
        }
    });
  </script>
</body>
</html>
