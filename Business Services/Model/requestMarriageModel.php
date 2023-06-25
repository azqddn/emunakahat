<?php
include_once 'C:\xampp\htdocs\E-munakahat\index.php';
function getRequestMarriageDetails($con, $applicantIc) {
    $sql = "SELECT partner.partner_ic AS partner_ic, partner.partner_name AS partner_name,
            applicant.applicant_ic AS applicant_ic, applicant.applicant_name AS applicant_name
            FROM `partner` JOIN `applicant` ON partner.partner_ic = applicant.partner_ic";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    
    return $row;
}

function updateRequestMarriage($con, $applicantIc, $applicantName, $partnerIc, $partnerName) {
    $sql = "UPDATE `marriage_course` SET applicant_ic='$applicantIc', applicant_name='$applicantName',
            partner_ic='$partnerIc', partner_name='$partnerName' WHERE applicant_ic='$applicantIc'";
    $result = mysqli_query($con, $sql);
    
    return $result;
}
?>
