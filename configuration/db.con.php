<?php


$con = mysqli_connect("localhost", "root", "", "payment") OR die("Could not connect to the DB");

// if(!$con){
//     $sql = "CREATE DATABASE IF NOT EXISTS payment USE";
//     $run = mysqli_query($conEmpty, $sql);
// }