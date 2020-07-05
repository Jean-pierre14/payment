<?php session_start();
$adm = $_SESSION['username'];
if(!isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<?php include("./header.php");include("./includes/sql.php");?>

<div class="ui menu bg-dark header fixed">
    <a href="#">
        <!-- user profile img -->
        <img src="" alt="">
        <!-- user profile img -->
    </a>
    <a href="" class="item white"><?php print $adm; ?></a>
    
    <div class="navbar navbar-right">
        <a href="loggout.php" class="btn btn-success"><i class="icon cog"></i>Loggout</a>
    </div>
    
</div>

<div class="side-bar ui bg-dark white">
    <!-- include the sideBar -->
    <?php include("./includes/sideBar.php"); ?>
</div>

<div class="ui main">
    <!-- add dashboard ui -->
    <?php include("./includes/student_Add.php");?>
    <!-- and dashboard -->
</div>

<?php include("./footer.php");?>