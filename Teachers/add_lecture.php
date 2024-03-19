<?php
// Include your database connection script
include 'datacon.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $course_id = $_POST['course_id'];
    $section_id = $_POST['section_id'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO curriculum_elements (section_id, type, title, description) VALUES (?, ?, ?, ?)";
    
    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $section_id, $type, $title, $description);

    // Execute and check
    if ($stmt->execute()) {
        echo "New lecture added successfully";
        header("Location: curriculum.php? message=New lecture added successfully.&course_id=$course_id");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
