<?php 
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navbar {
            display: flex;
            align-items: center;
            padding: 10px 5%;
            background-color: #2aaf42;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo img {
            height: 80px;
        }
        .header {
            background-color: #2aaf42;
            padding: 15px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            margin: 20px auto;
            width: 60%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .date-picker {
            padding: 10px 15px;
            font-size: 16px;
            border: 2px solid #2aaf42;
            border-radius: 8px;
            background: white;
            color: #2aaf42;
            cursor: pointer;
            transition: 0.3s;
        }
        .date-picker:hover {
            background: #2aaf42;
            color: white;
        }
        .time-slot {
            display: inline-block;
            padding: 10px 15px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
        }
        .available {
            background-color: #2aaf42;
            color: white;
        }
        .booked {
            background-color: red;
            color: white;
            cursor: not-allowed;
        }
        .selected {
            background-color: #004d00 !important;
        }
        .confirmation {
            display: none;
            margin-top: 20px;
            font-size: 18px;
            color: green;
            font-weight: bold;
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
            margin-left: auto;
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
        <div class="logo">
            <img src="logo .png" alt="LifeAlign Logo">

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
       
    <div class="header">Booking for <span id="doctor-name"></span></div>
    <div class="container">
        <h2>Select a Date</h2>
        <input type="date" id="booking-date" class="date-picker" onchange="loadSlots()">
        
        <h2>Select a Time Slot</h2>
        <div id="time-slots"></div>
        
        <div class="confirmation" id="confirmation-message"></div>
        
    </div>
    
    <script>
        let bookedSlots = {};
        const schedule = {
            "2025-02-20": {
                available: ["9:00 AM", "1:00 PM", "3:30 PM"],
                booked: ["10:30 AM"]
            },
            "2025-02-21": {
                available: ["8:30 AM", "2:00 PM", "4:30 PM"],
                booked: ["11:00 AM"]
            },
            "2025-02-22": {
                available: ["9:15 AM", "12:00 PM", "5:00 PM"],
                booked: ["1:45 PM"]
            },
            "default": {
                available: ["10:00 AM", "2:30 PM", "4:00 PM"],
                booked: ["11:30 AM"]
            }
        };

        function confirmBooking(slot) {
            const selectedDate = document.getElementById('booking-date').value;
            if (!selectedDate) {
                alert("Please select a date first!");
                return;
            }

            if (bookedSlots[selectedDate]) {
                alert(`You have already booked a slot for this date: ${bookedSlots[selectedDate]}`);
                return;
            }

            if (!slot.classList.contains('booked')) {
                slot.classList.add('selected');
                bookedSlots[selectedDate] = slot.textContent.trim();
                document.getElementById('confirmation-message').innerHTML = 
                    `Booking Confirmed for <b>${selectedDate}</b> at <b>${slot.textContent.trim()}</b> ✅`;
                document.getElementById('confirmation-message').style.display = 'block';
            }
        }

        function loadSlots() {
            document.getElementById('confirmation-message').style.display = 'none';
            const selectedDate = document.getElementById('booking-date').value;
            const timeSlotsData = schedule[selectedDate] || schedule["default"];
            const timeSlotsContainer = document.getElementById('time-slots');
            
            timeSlotsContainer.innerHTML = "";
            
            timeSlotsData.available.forEach(time => {
                let slotDiv = document.createElement("div");
                slotDiv.classList.add("time-slot", "available");
                slotDiv.innerHTML = time;
                slotDiv.onclick = function () { confirmBooking(this); };
                timeSlotsContainer.appendChild(slotDiv);
            });

            timeSlotsData.booked.forEach(time => {
                let slotDiv = document.createElement("div");
                slotDiv.classList.add("time-slot", "booked");
                slotDiv.innerHTML = time;
                slotDiv.onclick = null;
                timeSlotsContainer.appendChild(slotDiv);
            });
        }

        const urlParams = new URLSearchParams(window.location.search);
        const doctorName = urlParams.get('doctor');
        document.getElementById('doctor-name').textContent = doctorName || 'Doctor';
    </script>
    <script src="./assets/js/chatbot.js"></script>
</body>
</html>
