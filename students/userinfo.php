<?php require "datacon.php";
session_start();

if(isset($_SESSION["student_id"])){
    $student_id = $_SESSION["student_id"];
}
else{
    header("Location:login.php");
}



?>

 