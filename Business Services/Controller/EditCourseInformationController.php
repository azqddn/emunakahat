<?php
include_once 'C:\xampp\htdocs\E-munakahat\Business Services\Model\marriageCourseInfoModel.php';

$course_id = $_GET['editCourseId'];
$row = getCourseById($course_id);

$course_id = $row['course_id'];
$course_location = $row['course_location'];
$course_date = $row['course_date'];


if (isset($_POST['submit'])) {
    $course_id = $_POST['course_id'];
    $course_location = $_POST['course_location'];
    $course_date = $_POST['course_date'];
    // $course_proof_of_payment = $_POST['course_proof_of_payment'];

    $result = updateCourse($course_id, $course_location, $course_date);
    if ($result) {
        header('location: marriageCourseDisplay.php');
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
