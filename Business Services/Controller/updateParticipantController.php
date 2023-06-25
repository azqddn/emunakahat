<?php
include 'C:\xampp\htdocs\E-munakahat\Business Services\Model\participantModel.php';

$applicant_ic = $_GET['updateApplicantIc'];
$sql = "SELECT * FROM `applicant` INNER JOIN `marriage_course` ON applicant.applicant_ic=marriage_course.applicant_ic";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$applicant_ic = $row['applicant_ic'];
$applicant_name = $row['applicant_name'];
$course_certificate = $row['course_certificate'];

if (isset($_POST['submit'])) {
    $applicant_ic = $_POST['applicant_ic'];
    $applicant_name = $_POST['applicant_name'];
    $course_certificate = $_POST['course_certificate'];

    $sql = "UPDATE `marriage_course` SET applicant_ic='$applicant_ic', applicant_name='$applicant_name', course_certificate='$course_certificate' WHERE applicant_ic='$applicant_ic'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: marriageCourseDisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
