 <?php
    if (!isset($_SESSION['admin_username'])) {
        header("Location: index.php");
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Get form inputs
        $name    = trim($_POST['name'] ?? '');
        $email   = trim($_POST['email'] ?? '');
        $phone   = trim($_POST['phone'] ?? '');
        $message = trim($_POST['message'] ?? '');

        // Basic validation
        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            die("All fields are required.");
        }

        // DB connection
        include 'db_connection.php';

        // Prepared statement
        $stmt = $conn->prepare("INSERT INTO contact_requests (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Thank you, your message has been sent!')</script>";
            header("Location: ../../index.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        header("Location: index.php");
        exit;
    }
    ?>