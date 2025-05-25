<?php
// Ensure the database connection file is included correctly
include_once("../db_connection.php"); // Ensure the path is correct

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = (int) $_POST['age']; // Ensure age is an integer
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $slot = mysqli_real_escape_string($conn, $_POST['slot']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // SQL query using prepared statements (to prevent SQL injection)
    $sql = "INSERT INTO slot_bookings (name, age, email, contact, slot, date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissss", $name, $age, $email, $contact, $slot, $date);

    // Execute the query and check for success
    if ($stmt->execute()) {
        // Show SweetAlert success message and redirect
        echo "<script>
                setTimeout(() => {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Booking Confirmed!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'vacci.html'; // Change to your desired page
                    });
                }, 500);
              </script>";
    } else {
        // Show SweetAlert error message
        echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong: " . $stmt->error . "',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
              </script>";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>

<!-- Include SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
