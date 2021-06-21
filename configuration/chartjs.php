<?php
include './db.con.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'chartjs1') {
        $output = [];

        $sql = mysqli_query($con, "SELECT COUNT(id) AS idCount FROM student");
        $row = mysqli_fetch_array($sql);

        $output['studentNum'] = 23;
        print json_encode($output);
    }
}