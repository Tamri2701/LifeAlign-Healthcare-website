<?php 
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeAlign</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .auth {
            display: flex;
            align-items: center;
        }
        .user {
            background: #1b5e20;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout {
            background: red;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>
            <img src="newlogo.png" alt="LifeAlign Logo" style="height: 50px;">
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="donation.php">Donation</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="auth">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="logout.php" class="logout">Logout</a>
            <?php else: ?>
                <a href="login.php" class="user">Sign up / Log in</a>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
