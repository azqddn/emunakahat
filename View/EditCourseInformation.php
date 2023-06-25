<?php
// include_once "templatestaff.php";
include 'C:\xampp\htdocs\E-munakahat\Business Services\Controller\EditCourseInformationController.php';
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
    <title>Course Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Course ID</label>
            <input type="text" class="form-control" placeholder="Enter course ID" name="course_id" autocomplete="off"
                   value="<?php echo $course_id; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Course Address</label>
            <input type="text" class="form-control" placeholder="Enter course address" name="course_location"
                   autocomplete="off" value="<?php echo $course_location; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Course Date</label>
            <input type="text" class="form-control" placeholder="Enter course date" name="course_date"
                   autocomplete="off" value="<?php echo $course_date; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    </form>
</div>
</body>
</html>

<!-- <?php
include_once "footer.php";
?> -->
