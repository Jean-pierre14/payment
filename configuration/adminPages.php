<?php
session_start();
include("./db.con.php");

$admin12 = "admin1";

$query = "SELECT * FROM admin WHERE status = '$admin12'";
$run = mysqli_query($con, $query);
$row = mysqli_fetch_array($run);

if($row['status']){
    print "You're allowed to use all";
}else {
    print "You're not allow to use all";
}

?>