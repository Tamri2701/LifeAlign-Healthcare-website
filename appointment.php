<?php 
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 5%;
            background-color: #2aaf42;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 80px;
            margin-right: 15px;
        }
        .logo-text {
            font-size: 28px;
            font-weight: bold;
            color: white;
        }
        .tagline {
            font-size: 14px;
            color: white;
        }
        .nav-title {
            font-size: 40px;
            font-weight: bold;
            color: white;
            margin: 0 20px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: 0.3s;
        }
        .nav-links a:hover {
            color: black;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .appointments-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .appointment-card {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .appointment-doctor {
            font-weight: bold;
            color: #333;
        }
        .appointment-details {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }
        .button-container {
            margin-top: 10px;
        }
        .button-container button {
            background-color: #2aaf42;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .button-container button:hover {
            background-color: #1f8b33;
        }
    </style>
    <style>
        .navbarr {
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
        <div class="logo-container">
            <div class="logo">
                <img src="logo .png" alt="LifeAlign Logo">
            </div>
        </div>
        <div class="nav-title">Appointments</div>
        <div class="auth">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="logout.php" class="logout">Logout</a>
            <?php else: ?>
                <a href="login.php" class="user">Sign up / Log in</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="appointments-list" id="doctor-appointments"></div>
        <
    </div>

    <script>
        const doctors = [
            { name: 'Dr. Smith', details: 'General Physician' },
            { name: 'Dr. Johnson', details: 'Ophthalmologist' },
            { name: 'Dr. Williams', details: 'Dentist' },
            { name: 'Dr. Lee', details: 'Dermatologist' },
            { name: 'Dr. Brown', details: 'Cardiologist' },
            { name: 'Dr. Davis', details: 'Neurologist' },
            { name: 'Dr. Miller', details: 'Orthopedic Surgeon' },
            { name: 'Dr. Wilson', details: 'Pediatrician' },
            { name: 'Dr. Moore', details: 'Psychiatrist' },
            { name: 'Dr. Taylor', details: 'ENT Specialist' },
            { name: 'Dr. Anderson', details: 'Urologist' },
            { name: 'Dr. Thomas', details: 'Endocrinologist' },
            { name: 'Dr. Jackson', details: 'Oncologist' },
            { name: 'Dr. White', details: 'Gastroenterologist' }
        ];

        function displayDoctors() {
            const doctorContainer = document.getElementById('doctor-appointments');
            doctorContainer.innerHTML = '';
            
            doctors.forEach(doctor => {
                const card = document.createElement('div');
                card.classList.add('appointment-card');
                card.innerHTML = `
                    <div class="appointment-doctor">${doctor.name}</div>
                    <div class="appointment-details">${doctor.details}</div>
                    <div class="button-container">
                        <button onclick="bookAppointment('${doctor.name}')">Book Now</button>
                    </div>
                `;
                doctorContainer.appendChild(card);
            });
        }

        function bookAppointment(doctorName) {
            window.location.href = `booking.php?doctor=${encodeURIComponent(doctorName)}`;
        }

        displayDoctors();
    </script>
</body>
<script src="./assets/js/chatbot.js"></script>
</html>