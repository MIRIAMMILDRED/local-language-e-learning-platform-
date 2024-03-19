<?php
session_start(); // Start the session
include 'datacon.php'; // Include your database configuration file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Consider using password_hash() for security

    // Check if username or email already exists
    $stmt = $conn->prepare("SELECT id FROM teachers WHERE  email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // notify("Username or Email already exists. Choose another one.", "info");
        // Redirect or include the registration form page
        header("Location: signup.php?message = Email already exists. Choose another one.");
    } else {
        // Insert new user
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $insertStmt = $conn->prepare("INSERT INTO teachers (names, email, password) VALUES (?, ?, ?)");
        $insertStmt->bind_param("sss", $name, $email, $passwordHash);
        if ($insertStmt->execute()) {
            $_SESSION['username'] = $username;
            // notify("Your account has been created, Log in.", "success");
            // Redirect to login page or wherever
            header("Location: login.php?message=Your account has been created, Log in.");
        } else {
            echo "Error: " . $insertStmt->error;
        }
        $insertStmt->close();
    }
    $stmt->close();
    $conn->close();
} else {
    // Show the registration form
    header("Location: login.php"); // Assuming you have an HTML form in this file
}
