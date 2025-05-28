<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $captchaInput = $_POST['captcha'];

    // Debugging - Check if the POST data is received
    echo "Email: " . $email . "<br>";
    echo "Password: " . $_POST['password'] . "<br>";
    echo "Captcha: " . $captchaInput . "<br>";

    // Check captcha
    if ($captchaInput !== $_SESSION['captcha']) {
        echo "Captcha incorrect!";
        exit;
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO signup (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        die("Error: " . $stmt->error); // Output the error
    }

    $stmt->close();
    $conn->close();
}
?>
