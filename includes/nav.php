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

<nav class="navBar">
    <div class="Left">
        <span>Bisimwa</span>
    </div>
    <div class="Center">
        <form action="" method="post">
            <input type="search" name="search" id="search" placeholder="Search..." class="form-control">
        </form>
    </div>
    <div class="Right">
        <ul>
            <li>
                <a href="index">Dashbord</a>
            </li>
            <li>
                <a href="profil">Profil</a>
            </li>
            <li>
                <a href="loggout">Logout</a>
            </li>
        </ul>
    </div>
</nav>