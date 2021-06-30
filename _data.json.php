<?php

include './configuration/db.con.php';

$action = '';
$output = '';
$error = '';

// POST EVENT

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'student') {
        $sql = sprintf("SELECT * FROM student ORDER BY id_student DESC");
        $query = mysqli_query($con, $sql);
        if (@mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_array($query)) {
                print json_encode($row);
            }
        } else {
            print json_encode("there is no data");
        }
    }

    if ($_POST['action'] == 'getStudent') {
        $Id = mysqli_real_escape_string($con, trim(htmlentities($_POST['id'])));

        $sql = mysqli_query($con, sprintf("SELECT * FROM student WHERE student_id"));
        if (@mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_array($sql)) {
                $output[] = $row;
            }
        } else {
            $output = 'there no data';
        }
        print json_encode($output);
    }
}

// Get method

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'student') {
        $sql = sprintf("SELECT * FROM student ORDER BY id_student DESC");
        $query = mysqli_query($con, $sql);
        if (@mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_array($query)) {
                print json_encode($row);
            }
        } else {
            print json_encode("there is no data");
        }
    }

    if ($_GET['action'] == 'getStudent') {
        $Id = mysqli_real_escape_string($con, trim(htmlentities($_POST['id'])));

        $sql = mysqli_query($con, sprintf("SELECT * FROM student WHERE student_id"));
        if (@mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_array($sql)) {
                $datas[] = $row;
            }
        } else {
            $output = 'there no data';
        }
        print json_encode($datas);
    }
}
