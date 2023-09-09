<?php

session_start();

include_once('./configuration/db.con.php');

$status = $_SESSION['status'];

if(!isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in first to view this page";
    $username = $_SESSION['username'];

    $User = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username'");

    $data = @mysqli_fetch_assoc($User);
    
    $_SESSION['email'] = $data['email'];
    $status = $data['status'];
    
    header('location: login.php');

}

?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark d-flex justify-content-between align-items-center">
    <a class="navbar-brand" href="profil.php"><?= $_SESSION['username'];?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Dashbord</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <?php if($status == 1):?>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Student</a>
            </li>
            <?php endif;?>

            <li class="nav-item">
                <a class="nav-link" href="loggout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>