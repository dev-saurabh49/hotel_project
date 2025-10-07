<?php
// Start session
session_start();
$sesid=$_SESSION['admin_username'];
// Destroy all session data
if(isset($_SESSION['admin_username']))
{
session_unset();
session_destroy();

// Optional: Add a short delay or flash message
// Redirect to login page
header("Location: ../index.php");
// exit();
}

?>
