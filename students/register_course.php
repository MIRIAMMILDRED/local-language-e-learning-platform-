<?php 
include("userinfo.php");
$course_id = $_GET['course_id'];

// Check if the user is already registered for the course
$checkQuery = mysqli_prepare($conn, "SELECT * FROM course_registration WHERE student_id = ? AND course_id = ?");
mysqli_stmt_bind_param($checkQuery, "ss", $student_id, $course_id);
mysqli_stmt_execute($checkQuery);
$result = mysqli_stmt_get_result($checkQuery);

if(mysqli_num_rows($result) > 0){
    
    header("Location: explore.php?error=already_registered");
} else {
    // If not registered, proceed with registration
    $insertQuery = mysqli_prepare($conn, "INSERT INTO course_registration(student_id, course_id, date_registered) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($insertQuery, "sss", $student_id, $course_id, $time);
    
    if(mysqli_stmt_execute($insertQuery)){
        header("Location: enrolled_courses.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
