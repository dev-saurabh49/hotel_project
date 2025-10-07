<?php

include("./db_connection.php");



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $checkin_date = mysqli_real_escape_string($conn, $_POST['checkin']);
    $room_type = mysqli_real_escape_string($conn, $_POST['roomType']);
    $special_requests = mysqli_real_escape_string($conn, $_POST['requests']);

    $sql = "INSERT INTO bookings (full_name, email, checkin_date, room_type, special_requests)
            VALUES ('$full_name', '$email', '$checkin_date', '$room_type', '$special_requests')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Thanks for booking ")</script>';
        header("Location: ../../index.php");
    } else {
        echo '<script>alert("Failed to booking. ")</script>';
    }
}

$conn->close();
