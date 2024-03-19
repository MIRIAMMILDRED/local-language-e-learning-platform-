<?php
include('datacon.php');

// Check if the form is submitted
$course_id = $_POST['course_id'];

if(isset($_POST['submit'])) {
    $uploadOk = 1;

    // Handle file upload for course media
    if(isset($_FILES['media'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["media"]["name"]);

        // Check if file already exists
        if (file_exists($target_file)) {
            header("Location:media.php?message=Sorry, media file already exists.&course_id=$course_id.");
            $uploadOk = 0;
            exit();
        }

        // Attempt to upload file
        if ($uploadOk && move_uploaded_file($_FILES["media"]["tmp_name"], $target_file)) {
            $mediaFileName = basename($_FILES["media"]["name"]);
            $sql = "UPDATE courses SET media = '$mediaFileName' WHERE id='$course_id'";

            if (!$mysqli->query($sql)) {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        } else {
            
            header("Location:media.php?message=Sorry, there was an error uploading your file.&course_id=$course_id.");
            exit();
        }
    }

    // Handle file upload for course thumbnail
    if(isset($_FILES['thumbnail'])) {
        $target_dir = "uploads/thumbnails/"; 
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);

        // Check if thumbnail file already exists
        if (file_exists($target_file)) {
            header("Location:media.php?message=Sorry, thumbnail file already exists.&course_id=$course_id.");
            $uploadOk = 0;
            exit();
        }

        // Attempt to upload thumbnail file
        if ($uploadOk && move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $thumbnailFileName = basename($_FILES["thumbnail"]["name"]);
            $sql = "UPDATE courses SET thumbnail = '$thumbnailFileName' WHERE id='$course_id'";

            if (!$mysqli->query($sql)) {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        } else {
          
            header("Location:media.php?message=Sorry, there was an error uploading your thumbnail.&course_id=$course_id.");
            exit();
        }
    }

    if($uploadOk) {
        
        header("Location:curriculum.php?message=Upload successful.&course_id=$course_id.");
    }
}
?>
