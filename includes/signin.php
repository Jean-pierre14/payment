<?php

// include('./db.con.php');
$con = mysqli_connect("localhost", "root", "", "payment");

$error = array();


if(isset($_POST['login'])){
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    
    if(empty($username)){array_push($error, "Username is required");}
    if(empty($password)){array_push($error, "The password is required");}

    if(count($error) == 0){

        $password = md5($password);

        $query = "SELECT * FROM admin WHERE username='$username' AND pass='$password'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result)){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfuly";
            header('location: index.php');
        }else {
            array_push($error, "Wrong username/password combination. please try again!!!");
        }
    }
}
