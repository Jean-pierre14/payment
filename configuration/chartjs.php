<?php
include './db.con.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'chartjs1') {
        $output = [];

        $sql = mysqli_query($con, "SELECT COUNT(*) AS idCount FROM student");
        // $sql1 = mysqli_query($con, "SELECT COUNT(id) AS idCount2 FROM `admin`");
        $row = mysqli_fetch_array($sql);
        // $row1 = mysqli_fetch_array($sql1);

        $output['studentNum'] = $row['idCount'];
        // $output['studentNum1'] = $row1['idCount1'];
        print json_encode($output);
    }
}