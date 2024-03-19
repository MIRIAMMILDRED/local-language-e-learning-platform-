<?php 
include ('datacon.php');
//get form data
$course_id = $_POST['course_id'];
$section_name = $_POST['sectionadd'];

// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare SQL statement to insert data
    $sql = "INSERT INTO curriculum (course_id, section_name) VALUES (?, ?)";
    
    // Prepare and bind
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("is", $course_id, $section_name);

    // Execute and check
    if ($stmt->execute()) {
        echo "New section created successfully";
        header("Location:curriculum.php?message=New section created successfully.&course_id=$course_id.");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and mysqlisection
    $stmt->close();
    $mysqli->close();
}
?>



