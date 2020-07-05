<?php

session_start();
// Connection to Database
include('./db.con.php');

// Errors array
$error = array();


// Registration Event
if(isset($_POST['register'])) {
    
    $username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
    $sname = htmlentities(mysqli_real_escape_string($con, $_POST['sname']));
    $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
    $pass_1 = htmlentities(mysqli_real_escape_string($con, $_POST['password_1']));
    $pass_2 = htmlentities(mysqli_real_escape_string($con, $_POST['password_2']));

    if(empty($username)){array_push($error, "Username name is empty");}
    if(empty($sname)){array_push($error, "Second name name is empty");}
    if(empty($email)){array_push($error, "Email field name is empty");}
    if(empty($pass_1)){array_push($error, "password field name is empty");}
    if(empty($pass_2)){array_push($error, "password field name is empty");}

    // check the password

    if($pass_1 != $pass_2){array_push($error, "The Password are not match");}

    // end if password


    // Check if the email is not yet used

    $sql = "SELECT * FROM admin  WHERE email = '$email'";
    $run_sql = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($run_sql);
    $em = $row['email'];

    if($email == $row['email']) {array_push($error, "Email is already used! ");}

    // end check

    if(count($error) == 0){
        
        $username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
        $sname = htmlentities(mysqli_real_escape_string($con, $_POST['sname']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
        $pass_1 = htmlentities(mysqli_real_escape_string($con, $_POST['password_1']));
        $pass_2 = htmlentities(mysqli_real_escape_string($con, $_POST['password_2']));

        $password = md5($pass_1);
        $query = "INSERT INTO admin (username, sname, email, pass) VALUES('$username','$sname','$email','$password')";
        $run_sql = mysqli_query($con, $query);
        
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You're logged in";
        header('Location: index.php');
        
    }


}