<?php
session_start();

include('./configuration/db.con.php');
include('./includes/sql.php');

if(!isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

include('./header.php');

?>

    <?php
    if(isset($_SESSION['success'])) : ?>
    <div>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif; ?>

    <?php
        $username = $_SESSION['username'];                      

        $query = "SELECT * FROM admin WHERE username = '$username'";
        $run = mysqli_query($con, $query);
        $row = mysqli_fetch_array($run);

        $username = $row['username'];
        $sname = $row['sname'];
    ?>
<div class="ui menu bg-dark header fixed d-flex justify-content-between align-items-center p-0">
    <a href="#">
        <!-- user profile img -->
        <img src="./images/" alt="user images">
        <!-- user profile img -->
    </a>
    <a href="#<?php print $username; ?>" class="text-light">
        <?php print $username; ?>
    </a>
    <div class="navbar navbar-right">
        <a href="loggout.php" class="btn btn-success"><i class="icon sign-out"></i>Loggout</a>
    </div>
</div>