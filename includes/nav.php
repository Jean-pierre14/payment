<?php
session_start();

include_once('./configuration/db.con.php');
include_once('./includes/sql.php');

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

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><?= $_SESSION['username'];?></a>
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
      <li class="nav-item">
        <a class="nav-link" href="loggout.php">Logout</a>
      </li>    
    </ul>
  </div>  
</nav>