<?php
    include_once "./db.con.php";
    
    $name = mysqli_real_escape_string($con, htmlentities(trim($_POST['name'])));
    $sname = mysqli_real_escape_string($con, htmlentities(trim($_POST['sname'])));
    $lname = mysqli_real_escape_string($con, htmlentities(trim($_POST['lname'])));
    $cours = mysqli_real_escape_string($con, htmlentities(trim($_POST['cours'])));
    $location = mysqli_real_escape_string($con, htmlentities(trim($_POST['location'])));
    $nationalite = mysqli_real_escape_string($con, htmlentities(trim($_POST['nationalite'])));

    if(!empty($name) && !empty($sname) && !empty($lname) && !empty($cours) && !empty($location) &&!empty($nationalite)){

    }else{
        print "Veillez remplire tous les champs";
    }
?>