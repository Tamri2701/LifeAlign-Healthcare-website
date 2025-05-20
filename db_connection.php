<?php
// Database connection details
$servername = "localhost"; // XAMPP default
$username = "root"; // XAMPP default username
$password = ""; // XAMPP default password (empty)
$dbname = "lifealign"; // Ensure this is your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
