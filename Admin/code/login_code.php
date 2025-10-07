<?php
session_start();
include 'db_connection.php'; // your MySQL connection script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        echo "Please enter both username and password.";
        exit;
    }

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT id, username, password, full_name, status FROM admin WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $dbUsername, $dbPassword, $fullName, $status);
        $stmt->fetch();

        // Compare plain text passwords directly
        if ($status == 1 && $password === $dbPassword) {
            // Set session variables
            $_SESSION['admin_id'] = $id;
            $_SESSION['admin_username'] = $username;
            // $_SESSION['admin_name'] = $fullName;

            // Redirect to dashboard
            header("Location: ../dashboard.php");
            exit;
        } else {
            echo "Invalid credentials or inactive account.";
            header("Location: ../index.php");
        }
    } else {
        echo "Username not found.";
         header("Location: ../index.php");
    }

    $stmt->close();
} else {
    header("Location: index.php");
    exit;
}
?>
