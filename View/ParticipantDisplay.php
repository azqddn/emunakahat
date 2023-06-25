<?php
include 'C:\xampp\htdocs\E-munakahat\index.php';
// include_once "templatestaff.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template user</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .title{
            padding: 10px;
            font-family:"lucida console", monospace;
            background-color: #6DA740;
            color: #f2f2f2;
        }
        
        .body{
            background-color:#cfe2f3;
        }

        /* CSS styles for the navigation bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

    </style>

</head>
<body>
    <div class="title">
        <h1><b>e-Munakahat</b></h1>
        <h2>SISTEM MAKLUMAT PERKAHWINAN PAHANG</H2>
    </div>

    <div class="navbar">
        <a href="#">Profil pengguna</a>
        <a href="">Kursus Perkahwinan</a>
        <a href="#">Perkahwinan</a>
        <a href="#">Khidmat Nasihat</a>
        <a href="#">Insentif</a>
        <!-- <a href="#">Salinan Document</a>
        <a href="#">Pembetulan Dokumen</a> -->
    </div>

</body>
</html>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Participant Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h4>Participant Update</h4>
    <div class="container">
        <!-- <button class="btn btn-primary my-5"><a href="marriageCourse.php" class="text-light" style="text-decoration-line: none;">Add Registration</a></button> -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Applicant IC</th>
                    <th scope="col">Applicant Name</th>
                    <th scope="col">Course Certificate</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql ="SELECT * FROM `applicant` INNER JOIN `marriage_course` ON applicant.applicant_ic=marriage_course.applicant_ic";

                $result = mysqli_query($con,$sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $applicant_ic = $row['applicant_ic'];
                        $applicant_name = $row['applicant_name'];

                        $course_certificate = $row['course_certificate'];

                        echo ' <tr>
                        <th scope="row">' . $applicant_ic . '</th>
                        <td>' . $applicant_name . '</td>

                        <td>' . $course_certificate . '</td>

                        <td>
                            <button class="btn btn-primary"><a href="updateParticipantController.php? updateApplicantIc='.$applicant_ic.'" class="text-light">Edit</a></button>
                            <button class="btn btn-danger"><a href="deleteCourseInformation.php? deleteApplicantIc='.$applicant_ic.'" class="text-light">Delete</a></button>
                        </td>

                        </tr>';
                    }
                }

                ?>


            </tbody>
        </table>


    </div>

</body>

</html>

<?php
include 'footer.php';
?>