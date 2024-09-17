<?php
include 'connection.php';

$type = isset($_GET['type']) ? $_GET['type'] : '';
$fdate = isset($_GET['fdate']) ? $_GET['fdate'] : '';
$tdate = isset($_GET['tdate']) ? $_GET['tdate'] : '';

if ($type == 'bidder') {
    if (!empty($fdate) && !empty($tdate)) {
        $qu = "SELECT * FROM tblbidders WHERE created_date BETWEEN '$fdate' AND '$tdate'";
    } else {
        $qu = "SELECT * FROM tblbidders";
    }

    $q = mysqli_query($conn, $qu);
    if (!$q) {
        die("Error: " . mysqli_error($conn));
    } else {
        echo '<table class="purchasing-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody>';
        while ($r = mysqli_fetch_assoc($q)) {
            echo '<tr>
                    <td data-purchase="Name" style="padding-right: 4px;">' . $r['firstname'] . ' ' . $r['lastname'] . '</td>
                    <td data-purchase="Contact" style="padding-right: 4px;">' . $r['contact'] . '</td>
                    <td data-purchase="Email" style="padding-right: 4px;">' . $r['email'] . '</td>
                    <td data-purchase="Date Of Birth" style="padding-right: 4px;">' . $r['date_of_birth'] . '</td>
                    <td data-purchase="Address" style="padding-right: 4px;">' . $r['address'] . '</td>
                    <td data-purchase="Created Date" style="padding-right: 4px;">' . $r['created_date'] . '</td>
                </tr>';
        }
        echo '</tbody></table>';
    }
} elseif ($type == 'seller') {
    if (!empty($fdate) && !empty($tdate)) {
        $qu = "SELECT * FROM tblsellers WHERE created_date BETWEEN '$fdate' AND '$tdate'";
    } else {
        $qu = "SELECT * FROM tblsellers";
    }

    $q = mysqli_query($conn, $qu);
    if (!$q) {
        die("Error: " . mysqli_error($conn));
    } else {
        echo '<table class="purchasing-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Aadhar Number</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody>';
        while ($r = mysqli_fetch_assoc($q)) {
            echo '<tr>
                    <td data-purchase="Name" style="padding-right: 4px;">' . $r['firstname'] . ' ' . $r['lastname'] . '</td>
                    <td data-purchase="Contact" style="padding-right: 4px;">' . $r['contact'] . '</td>
                    <td data-purchase="Email" style="padding-right: 4px;">' . $r['email'] . '</td>
                    <td data-purchase="Date Of Birth" style="padding-right: 4px;">' . $r['date_of_birth'] . '</td>
                    <td data-purchase="Address" style="padding-right: 4px;">' . $r['address'] . '</td>
                    <td data-purchase="Adhar Number" style="padding-right: 4px;">' . $r['adhar_number'] . '</td>
                    <td data-purchase="Created Date" style="padding-right: 4px;">' . $r['created_date'] . '</td>
                </tr>';
        }
        echo '</tbody></table>';
    }
}
?>
