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
    <title>Course Location Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h4>Course Location Registration</h4>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="AddCourseInformation.php" class="text-light" style="text-decoration-line: none;">Add Registration</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course location</th>
                    <th scope="col">Course Date</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from `marriage_course`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $course_id = $row['course_id'];
                        $course_location = $row['course_location'];
                        $course_date = $row['course_date'];
                        // $course_proof_of_payment = $row['course_proof_of_payment'];

                        echo ' <tr>
                        <th scope="row">' . $course_id . '</th>
                        <td>' . $course_location . '</td>
                        <td>' . $course_date . '</td>
                        

                        <td>
                            <button class="btn btn-primary"><a href="EditCourseInformation.php? editCourseId='.$course_id.'" class="text-light">Edit</a></button>
                            <button class="btn btn-danger"><a href="C:\xampp\htdocs\E-munakahat\Business Services\Controller\deleteCourseInformationController.php? deleteCourseId='.$course_id.'" class="text-light">Delete</a></button>
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

<!-- <?php
include_once "footer.php";
?> -->