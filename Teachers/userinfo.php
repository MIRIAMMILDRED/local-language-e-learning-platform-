<?php require "datacon.php";
session_start();

if(isset($_SESSION["teachers_id"])){
    $teacher_id = $_SESSION["teachers_id"];
}
else{
    header("Location:login.php");
}



?>