<?php
    include_once "./db.con.php";

    $output = '';
    $username = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $sname = mysqli_real_escape_string($con, htmlentities(trim($_POST['sname'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $class = mysqli_real_escape_string($con, htmlentities(trim($_POST['class'])));
    $sex = mysqli_real_escape_string($con, htmlentities(trim($_POST['sex'])));
    $annee = mysqli_real_escape_string($con, htmlentities(trim($_POST['annee'])));

    if(!$username || !$sname || !$email || !$class || !$sex || !$annee){
        print "Les champs de saisi sont vides";
    }else{
        print 'success';
    }

?>