<?php

include("./db.con.php");

// variables
    $user_get = '';
    $edit_sname = '';
    $edit_email = '';
    $error = array();

    $stud_username = '';
    $stud_sname = '';
    $stud_em = '';
    $stud_class = '';
    $stud_depart = '';
    $stud_sex = '';

    // to the button update 
    $update = false;

    $classN = '';$syear = '';$eyear = '';


// Total of admin 
$query = "SELECT COUNT(*) AS mount FROM admin";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);
    $mount = $row['mount'];
// Admin list 

// Total of student 
$query = "SELECT COUNT(*) AS mount_std FROM student";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);
    $mount_Student = $row['mount_std'];

//  Total of Lecturers
$query = "SELECT COUNT(*) AS mount_lecturer FROM lecturer";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);
    $mount_Lecturer = $row['mount_lecturer'];
    

//  Total of Employees
    $query = "SELECT COUNT(*) AS mount_Employees FROM employees";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);
    $mount_Employees = $row['mount_Employees'];
// Admin student


$Admin = "SELECT * FROM admin";
$admin_run = mysqli_query($con, $Admin);

// get Edit
// if(isset($_GET['edit'])){

//     $id = $_GET['edit'];
//     $update = true;

//     $get_edit = "SELECT * FROM admin WHERE id_admin = '$id'";
//     $run = mysqli_query($con, $get_edit);
//     $row = mysqli_fetch_array($run);

//     $user_get = $row['username'];
//     $edit_sname = $row['sname'];
//     $edit_email = $row['email'];

// }
// Update student

if(isset($_POST['update'])) {

    $id = $_GET['edit'];
    $user_get = $_POST['username'];
    $edit_sname = $_POST['sname'];
    $edit_email = $_POST['email'];

    if(empty($user_get)){array_push($error, "The username is empty");}
    if(empty($edit_sname)){array_push($error, "The second name is empty");}
    if(empty($edit_email)){array_push($error, "The username is empty");}

    if(count($error) == 0){
        $query = "UPDATE admin SET username='$user_get',sname='$edit_sname',email='$edit_email' WHERE id_admin='$id'";
        $run = mysqli_query($con, $query);
        
        $id = $_GET['edit'];
        $user_get = '';
        $edit_sname = '';
        $edit_email = '';
        header("location: adm.php");
    }
}
// get delete
if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $query = "DELETE FROM admin WHERE id_admin = '$id'";
    $run = mysqli_query($con, $query);

}
// student save
if(isset($_POST['register'])){

    $user_name = mysqli_real_escape_string($con, $_POST['username']);
    $sname = mysqli_real_escape_string($con, $_POST['sname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $depart = mysqli_real_escape_string($con, $_POST['depart']);
    
    $sex = mysqli_real_escape_string($con, $_POST['sex']);

    if(empty($user_name)){array_push($error, "The username field is empty");}
    if(empty($sname)){array_push($error, "The second name field is empty");}

    if(empty($email)){array_push($error, "The Email field is empty");}
    if(empty($class)){array_push($error, "The class field is empty");}
    if(empty($depart)){array_push($error, "The Depart field is empty");}

    $check_email = "SELECT * FROM student WHERE email = '$email'";
    $run_chk_mail = mysqli_query($con, $check_email);
    
    $fetch_mail = mysqli_fetch_array($run_chk_mail);


    //  Check the email webmaster chiruzabisimwa@outlook.fr
    // if(@mysqli_num_rows($fetch_mail) > 0){array_push($error, "This email is used :-(");}

    // check the username
    // $checkUsername = mysqli_query($con, "SELECT username FROM student");
    // $rowCheck = @mysqli_fetch_array($checkUsername);

    // if($rowcheck['username'] == $user_name){ array_push($error, "This Username is taken :( ");}

    // $stud_username = $_POST['username'];
    // $stud_sname = $_POST['sname'];
    // $stud_em = $_POST['email'];
    // $stud_class = $_POST['class'];
    // $stud_depart = $_POST['depart'];
    // $stud_sex = $_POST['sex'];

    if(count($error) == 0){
        $save = "INSERT INTO `student`(`username`,`sname`,`email`,`class`,`depart`,`sex`,`create_at`) 
        VALUES('$user_name','$sname','$email','$class','$depart','$sex',now())";
        $run_save = mysqli_query($con, $save);
        $pay = "INSERT INTO stud_pay(email) VALUE('$email')";
        $run_pay = mysqli_query($con, $pay);

        $stud_username = '';
        $stud_sname = '';
        $stud_em = '';
        $stud_class = '';
        $stud_depart = '';
        $stud_sex = '';
    }
}
// select student

$student = "SELECT * FROM `student` ORDER BY `student`.`id_student` DESC";
$run_student = mysqli_query($con, $student);
// end select student

$email_edit = false;

// edit student
if(isset($_GET['edt'])){
    $id = $_GET['edt'];
    $update = true;
    $email_edit = true;

    $query = "SELECT * FROM student WHERE id_student = '$id'";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);

    $stud_username = $row['username'];
    $stud_sname = $row['sname'];
    $stud_em = $row['email'];
    $stud_class = $row['class'];
    $stud_depart = $row['depart'];
    $stud_sex = $row['sex'];
}
// update student
if(isset($_POST['student_update'])){

    $stud_username = $_POST['username'];
    $stud_sname = $_POST['sname'];
    $stud_em = $_POST['email'];
    $stud_class = $_POST['class'];
    $stud_depart = $_POST['depart'];
    $stud_sex = $_POST['sex'];

    if(empty($stud_username)){array_push($error, "The username field is empty");}
    if(empty($stud_sname)){array_push($error, "The Second name field is empty");}
    if(empty($stud_em)){array_push($error, "The Email field is empty");}
    if(empty($stud_class)){array_push($error, "The class field is empty");}
    if(empty($stud_depart)){array_push($error, "The department field is empty");}
    if(empty($stud_sex)){array_push($error, "The sex selection is empty");}

    if(count($error) == 0){
        $query = "UPDATE student SET username='$stud_username',sname='$stud_sname',email='$stud_em',class='$stud_class', depart='$stud_depart', sex='$stud_sex' WHERE id_student = '$id'";
        $run = mysqli_query($con, $query);

        
        $pay = "INSERT INTO stud_pay(email) VALUE('$stud_em')";
        $run_pay = mysqli_query($con, $pay);

        $stud_username = '';
        $stud_sname = '';
        $stud_em = '';
        $stud_class = '';
        $stud_depart = '';
        $stud_sex = '';
        header("location: student.php");
    }
}

// delete student
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = "DELETE FROM student WHERE id_student = '$id'";
    $run = mysqli_query($con, $query);

    header("Location: student.php");
}
// Value of lecture record
    $name = '';
    $sname = '';
    $lname = '';
    $cours = '';
    $location = '';
    $nationalite = '';

if(isset($_POST['lectureRegister'])){
    $name = $_POST['name'];
    $sname = $_POST['sname'];
    $lname = $_POST['lname'];
    $cours = $_POST['cours'];
    $location = $_POST['location'];
    $nationalite = $_POST['nationalite'];

    

    if(empty($name)){array_push($error, "The Lecture name is empty :(");}
    if(empty($sname)){array_push($error, "The Second name is empty :(");}
    if(empty($lname)){array_push($error, "The Last name is empty :(");}
    if(empty($cours)){array_push($error, "The Lecture Cours is empty :(");}
    if(empty($location)){array_push($error, "The Lecture Location is empty :(");}
    if(empty($nationalite)){array_push($error, "The Nationalite is empty :(");}

    if(count($error) == 0){
        $sql = "INSERT INTO `lecturer`(`name`,`sname`,`lname`,`cours`,`location`,`nationalite`, `adm_at`, `status`) VALUES('$name','$sname','$lname','$cours','$location','$nationalite', now(), ''";
        $run = mysqli_query($con, $sql);

        header("Location: lecturer.php");
    }
}

$lecturer = "SELECT * FROM lecturer";
$run_lecturer = mysqli_query($con, $lecturer);

    // $username = $r['name'];
    // $sname = $r['sname'];
    // $lname = $r['lname'];
    // $specialized = $r['cours'];
    // $location = $r['location'];
    // $nationalite = $r['nationalite'];
    // $damin_at = $r['adm_at'];

// Payment
    



// end payment

// Details
$sqlMale = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM student WHERE sex = 'Male'");
$rowMale = mysqli_fetch_assoc($sqlMale);
$sqlFemale = mysqli_query($con, "SELECT COUNT(*) AS countItem FROM student WHERE sex = 'Female'");
$rowFemale = mysqli_fetch_assoc($sqlFemale);