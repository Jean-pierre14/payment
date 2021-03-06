<?php
include './db.con.php';

$output = '';
$errors = [];

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'GetCours') {
        $sql = "SELECT * FROM cours_tb ORDER BY cours_name ASC";
        $query = mysqli_query($con, $sql);

        if (@mysqli_num_rows($query) > 0) {
            $output .= '<ul lass="list-group shadow-sm">';

            while ($row = mysqli_fetch_assoc($sql)) {
                $output .= '
                    <li class="list-group-item list-group-success list-group-item-action">
                        <a href="?cours=' . $row['cours_id'] . '">' . $row['cours_name'] . '</a>
                    </li>
                ';
            }
            $output .= '</ul>';
        } else {
            $output .= '<p class="alert alert-danger">There is no course registered</p>';
        }
        print $output;
    }

    if ($_POST['action'] == 'classess') {
        $sql = "SELECT * FROM class_tb ORDER BY class_name ASC";
        $query = mysqli_query($con, $sql);

        if (@mysqli_num_rows($query) > 0) {
            $output .= '<select id="class" name="class" class="form-control"><option>-- select --</option>';
            while ($row = mysqli_fetch_assoc($query)) {
                $output .= '<option value="' . $row['class_id'] . '">' . $row['class_name'] . '</option>';
            }
            $output .= '</select>';
        } else {
            $output .= '
            <p class="alert alert-danger">There is no class record</p>
            <button class="btn btn-sm btn-success btn-block shadow-sm" data-toggle="modal" data-target="#myModal">Add class</button>
            ';
        }
        sleep(2);
        print $output;
    }

    if($_POST['action'] == 'adminResult'){
        $sql = mysqli_query($con, "SELECT * FROM `admin` ORDER BY id_admin DESC");
        if(@mysqli_num_rows($sql) > 0){
            $CounT = mysqli_num_rows($sql);
            $output .= '
            <table class="table table-active table-success table-bordered table-sm table-responsive-sm table-striped">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Second Name </th>
                    <th> Email </th>
                    <th> Status </th>
                    <th> Level </th>
                    <th> Actions </th>
                </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($sql)):
                $output .= '
                <tr class="text-bold">
                    <td>'.$row['username'].'</td>
                    <td>'.$row['sname'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['status'].'</td>
                    <td>'.$row['auth'].'</td>
                    <td>
                        <div class="btn-group event">
                            <button type="button" id="'.$row['id_admin'].'" class="btn btn-sm btn-info"><i class="icon edit"></i></button>
                            <button type="button" id="'.$row['id_admin'].'" class="btn btn-sm btn-danger"><i class="icon trash"></i></button>
                        </div>
                    </td>
                </tr>
                ';
            endwhile;
            $output .= '
                </tbody>
            </table>
            <div class="my-2 shadow-sm p-3">
                <p class="d-flex justify-content-between align-items-center">
                    <span>Admin number: </span>
                    <span class="badge badge-success">'.$CounT.'</span>
                </p>
            </div>
            ';
        }else{
            header("Location: ../login.php");
        }
        print $output;
    }

    if ($_POST['action'] == 'allStudents') {

        $sql = mysqli_query($con, "SELECT * FROM student ORDER BY id_student DESC");
        if (@mysqli_num_rows($sql) > 0) {
            $output .= '<ul lass="list-group shadow-sm">';
            while ($row = mysqli_fetch_assoc($sql)) {
                $output .= '
                    <li class="list-group-item list-group-item-action">
                        <a href="?student=' . $row['id_student'] . '">' . $row['sname'] . '</a>
                    </li>
                ';
            }
            $output .= '</ul>';
        } else {
            $output .= '<p class="alert alert-warning">There is no data!</p>';
        }
        sleep(1);
        print $output;
    }

    if ($_POST['action'] == 'getStudent') {
        $id = $_POST['Id'];
        $sql = "SELECT * FROM student WHERE id_student = '$id'";
        $query = mysqli_query($con, $sql);

        if (@mysqli_num_rows($query) > 0) {
            $output .= '<h2 class="bg-success text-white text-center p-2">Student</h2>';
            while ($row = mysqli_fetch_assoc($query)) {
                $output .= '
                <div class="card">
                    <div class="card-header p-1">
                        <h3>Student ' . $row['sname'] . ' ' . $row['username'] . '</h3>
                    </div>
                    <div class="card-body">
                        <h3>Data of the student</h3>
                    </div>
                    <div class="card-footer">
                        <h3>footer of the card</h3>
                    </div>
                </div>';
            }
        } else {
            $output .= '<p class="alert alert-danger">Sorry there is no data found!</p>';
        }
        print $output;
    }

    if ($_POST['action'] == 'getClasse') {

        $query = mysqli_query($con, "SELECT * FROM class_tb ORDER BY class_name ASC");

        if (@mysqli_num_rows($query) > 0) {
            $output .= '<ul lass="list-group shadow-sm">';
            while ($row = mysqli_fetch_assoc($query)) {
                $output .= '
                    <li class="list-group-item list-group-item-action">
                        <a href="?class=' . $row['class_id'] . '">' . $row['class_name'] . '</a>
                    </li>
                ';
            }
            $output .= '</ul>';
        } else {
            $output .= '<p class="alert aler-danger my-2">There no class registered :(</p>';
        }
        print $output;
    }

    if ($_POST['action'] == 'EventAddClass') {
        $clsN = mysqli_real_escape_string($con, trim($_POST['className']));
        $sy = mysqli_real_escape_string($con, trim($_POST['syear']));
        $ey = mysqli_real_escape_string($con, trim($_POST['eyear']));

        if (empty($clsN)) {
            array_push($errors, "These no class name");
        }
        if (empty($sy)) {
            array_push($errors, "Start year");
        }
        if (empty($ey)) {
            array_push($errors, "End year");
        }

        if (count($errors) == 0) {
            // Check informations.
            $sql = "INSERT INTO class_tb(`class_name`, `start_year`, `end_year`) VALUES('$clsN','$sy','$ey')";
            $query = mysqli_query($con, $sql);
            print 'success';
        } else {
            print 'error';
        }
        // Table added into my own PC
    }

    if ($_POST['action'] == 'EventAddCours') {
        $coursName = mysqli_real_escape_string($con, trim($_POST['coursName']));
        $classId = mysqli_real_escape_string($con, trim($_POST['classId']));

        if (empty($coursName)) {
            array_push($errors, "Cours name is empty");
            $output .= 'error';
        }
        if (empty($classId)) {
            array_push($errors, "Id class is empty");
            $output .= 'error';
        }

        if (count($errors) == 0) {
            $check = mysqli_query($con, "SELECT cours_name FROM cours_tb WHERE cours_name = '$coursName'");
            if (@mysqli_num_rows($check) == 0) {
                $sql = "INSERT INTO cours_tb(cours_name, class_id) VALUES('$coursName', '$classId')";
                $query = mysqli_query($con, $sql);
                $output .= 'Data registered successfully <b>' . $coursName . '</b>';
            } else {
                $output .= 'This cours it\'s already added';
            }
        }
        print $output;
    }
}