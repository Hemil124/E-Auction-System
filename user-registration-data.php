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
                    <td>' . $r['firstname'] . ' ' . $r['lastname'] . '</td>
                    <td>' . $r['contact'] . '</td>
                    <td>' . $r['email'] . '</td>
                    <td>' . $r['date_of_birth'] . '</td>
                    <td>' . $r['address'] . '</td>
                    <td>' . $r['created_date'] . '</td>
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
                    <td>' . $r['firstname'] . ' ' . $r['lastname'] . '</td>
                    <td>' . $r['contact'] . '</td>
                    <td>' . $r['email'] . '</td>
                    <td>' . $r['date_of_birth'] . '</td>
                    <td>' . $r['address'] . '</td>
                    <td>' . $r['adhar_number'] . '</td>
                    <td>' . $r['created_date'] . '</td>
                </tr>';
        }
        echo '</tbody></table>';
    }
}
?>
