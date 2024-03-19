<?php
session_start(); // Start the session
include 'datacon.php'; // Include your database configuration file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, email, password FROM teachers WHERE email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['teachers_id'] = $user['id'];

        // Redirect to dashboard or desired page
        header("Location: index.php");
    } else {
        // notify("Invalid username or password.", "danger");
    header("Location: login.php? message = Invalid username or password.");
        // Include login form or redirect
    }

    $stmt->close();
    $conn->close();
} else {
    // Show the login form
    header("Location: login.php"); // Assuming you have an HTML form in this file
}
?>
