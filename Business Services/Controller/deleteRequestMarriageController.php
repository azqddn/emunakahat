<?php
include 'C:\xampp\htdocs\E-munakahat\index.php';

if(isset($_GET['deleteApplicantIc'])){
    $applicant_ic=$_GET['deleteApplicantIc'];

    $sql="delete from `applicant` where applicant_ic='$applicant_ic'";
    $result=mysqli_query($con,$sql);


    if($result){
        // echo "Delete Successfull";
        header('location:requestMarriageDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<?php
include 'footer.php';
?>
