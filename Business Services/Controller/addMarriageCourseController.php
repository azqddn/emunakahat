<?php
include 'C:\xampp\htdocs\E-munakahat\index.php';
if (isset($_POST['submit'])) {
    $applicant_name = $_POST['applicant_name'];
    $applicant_ic = $_POST['applicant_ic'];
    $partner_ic = $_POST['partner_ic'];
    $partner_name = $_POST['partner_name'];
    $course_proof_of_payment = $_POST['course_proof_of_payment'];


    $sql = "INSERT INTO `applicant` (applicant_ic, applicant_name) VALUES ('$applicant_ic', '$applicant_name'); 
          INSERT INTO `partner` (partner_ic, partner_name) VALUES ('$partner_ic', '$partner_name');
          INSERT INTO `marriage_course` (course_proof_of_payment) VALUES ('$course_proof_of_payment')";
    $result = mysqli_multi_query($con, $sql);
    if ($result) {
        echo "Data inserted successfully";
        header('location:registerCourseDisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
