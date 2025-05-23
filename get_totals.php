<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lifealign";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

// Get the total donation of the user
$sql_user = "SELECT SUM(amount) AS user_total FROM donations WHERE user_id = '$user_id'";
$result_user = $conn->query($sql_user);
$row_user = $result_user->fetch_assoc();
$user_total = $row_user['user_total'] ?? 0;

// Get the overall total donations
$sql_total = "SELECT SUM(amount) AS total_donations FROM donations";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_donations = $row_total['total_donations'] ?? 0;

echo json_encode(["user_total" => $user_total, "total_donations" => $total_donations]);

$conn->close();
?>
