<?php
include 'C:\xampp\htdocs\E-munakahat\index.php';

function getCourseById($course_id) {
    global $con;
    $sql = "SELECT * FROM `marriage_course` WHERE course_id='$course_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function updateCourse($course_id, $course_location, $course_date) {
    global $con;
    $sql = "UPDATE `marriage_course` SET course_location='$course_location', course_date='$course_date' WHERE course_id='$course_id'";
    $result = mysqli_query($con, $sql);
    return $result;
}
?>
