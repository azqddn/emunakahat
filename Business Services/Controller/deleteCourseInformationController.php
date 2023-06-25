<?php
include 'C:\xampp\htdocs\E-munakahat\index.php';
if(isset($_GET['deleteCourseId'])){
    $course_id=$_GET['deleteCourseId'];

    $sql="delete from `marriage_course` where course_id='$course_id'";
    $result=mysqli_query($con,$sql);

    if($result){
        // echo "Delete Successfull";
        header('location:marriageCourseDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>