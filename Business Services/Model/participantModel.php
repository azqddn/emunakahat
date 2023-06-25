<?php
include 'C:\xampp\htdocs\E-munakahat\index.php';

$sql = "SELECT partner.partner_ic AS partner_ic, partner.partner_name AS partner_name,
        applicant.applicant_ic AS applicant_ic, applicant.applicant_name AS applicant_name
        FROM `partner` JOIN `applicant` ON partner.partner_ic = applicant.applicant_ic";

$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $applicant_ic = $row['applicant_ic'];
        $applicant_name = $row['applicant_name'];
        $partner_ic = $row['partner_ic'];
        $partner_name = $row['partner_name'];

        echo '<tr>
                <th scope="row">' . $applicant_ic . '</th>
                <td>' . $applicant_name . '</td>
                <td>' . $partner_ic . '</td>
                <td>' . $partner_name . '</td>
                <td>
                    <button class="btn btn-danger">
                        <a href="deleteRequestMarriageController.php?deleteApplicantIc=' . $applicant_ic . '" class="text-light">Delete</a>
                    </button>
                </td>
            </tr>';
    }
} else {
    die(mysqli_error($con));
}
?>
