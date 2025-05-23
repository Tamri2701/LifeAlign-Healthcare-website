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
    // Get user input from the login form
    $email = $_POST['Email'];
    $password = $_POST['password'];

    // Query the database to check if the email exists
    $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, now check the password
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            // Password is correct, login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            echo "Login successful! Welcome, " . $user['email'];
            header("Location: dashboard.php"); // Redirect to dashboard or homepage
        } else {
            // Password is incorrect
            echo "Invalid password!";
        }
    } else {
        // Email not found in the database
        echo "No account found with that email!";
    }

    $stmt->close();
    $conn->close();
}
?>
