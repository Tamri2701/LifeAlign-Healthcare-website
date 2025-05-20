<?php
session_start();
include 'db_connect.php'; 

header('Content-Type: application/json');

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "User not logged in."]);
    exit();
}

// Check for POST request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit();
}

// Validate and sanitize inputs
$user_id = $_SESSION['user_id'];
$category = isset($_POST['category']) ? trim($_POST['category']) : '';
$amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;

// Define allowed categories
$allowed_categories = ["food", "shelter", "clothing", "health"];

if (!in_array($category, $allowed_categories)) {
    echo json_encode(["status" => "error", "message" => "Invalid category."]);
    exit();
}

if ($amount <= 0) {
    echo json_encode(["status" => "error", "message" => "Donation amount must be greater than zero."]);
    exit();
}

// Ensure database connection
if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Database connection failed."]);
    exit();
}

// Insert donation into the database
$stmt = $conn->prepare("INSERT INTO donations (user_id, category, amount) VALUES (?, ?, ?)");
if (!$stmt) {
    echo json_encode(["status" => "error", "message" => "Database error: " . $conn->error]);
    exit();
}

$stmt->bind_param("isd", $user_id, $category, $amount);
if ($stmt->execute()) {
    $stmt->close();

    // Fetch updated total donations for the user
    $stmt = $conn->prepare("SELECT SUM(amount) AS total_donated FROM donations WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($total_donated);
    $stmt->fetch();
    $stmt->close();

    // Fetch global donation total
    $stmt = $conn->prepare("SELECT SUM(amount) AS global_total FROM donations");
    $stmt->execute();
    $stmt->bind_result($global_total);
    $stmt->fetch();
    $stmt->close();

    // Fetch category-wise total
    $stmt = $conn->prepare("SELECT SUM(amount) FROM donations WHERE category = ?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $stmt->bind_result($category_total);
    $stmt->fetch();
    $stmt->close();

    echo json_encode([
        "status" => "success",
        "total_donated" => $total_donated ?? 0,
        "global_total" => $global_total ?? 0,
        "category_total" => $category_total ?? 0,
        "category" => $category
    ]);
} else {
    echo json_encode(["status" => "error", "message" => "Database error: " . $stmt->error]);
}
?>
