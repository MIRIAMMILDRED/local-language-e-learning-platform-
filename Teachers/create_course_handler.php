<?php
require "userinfo.php";

$course_name = $_POST['title'];
$short_description = $_POST['description'];
$long_description = $_POST['long_description'];
$learning_points = $_POST['points'];
$requirements = $_POST['requirements'];
$class_level = $_POST['level'];
$language = $_POST['language'];


// Assuming $teacher_id and $time_added are already set
$time_added = $time;

// Prepare an INSERT statement
$query = "INSERT INTO courses (Name, teacher_id, time_added, short_description, long_description, learning_points, requirements, course_level, language) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = $mysqli->prepare($query)) {
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sisssssss", $course_name, $teacher_id, $time_added, $short_description, $long_description, $learning_points, $requirements, $class_level, $language);

    // Execute the query
    $stmt->execute();

    // Check for successful insertion
    if ($stmt->affected_rows > 0) {
        $time_order="SELECT * FROM courses  WHERE teacher_id='$teacher_id' ORDER BY time_added DESC LIMIT 1";
        $result = mysqli_query($conn, $time_order);
        $row = mysqli_fetch_array($result);
        $course_id = $row['ID'];

        header("Location:media.php?messsage=your course has been added successfully&course_id=".$course_id."");
    } else {
        $err= "Error: " . $stmt->error;
        header("Location:create_cource.php?err=".$err);
    }

    // Close statement
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

// Close connection
$conn->close();
?>



