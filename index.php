<?php $get_std = false;
include("./includes/nav.php");
include("./db.con.php"); ?>
<?php
if (!isset($_SESSION['username'])) {

    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

?>

<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php"); ?>
    <?php include("./header.php"); ?>
</div>
<div class="ui main">
    <div class="container-fluid m-0 ui">
        <!-- <div class="ui iu menu inverted">
            <a href="#" class="item"><i class="icon home"></i>Home</a>
            <a href="#" class="item"><i class="icon user"></i>profile</a>
            <a href="#" class="item"><i class="icon users"></i>Contacts</a>
            <a href="#" class="item"><i class="icon help"></i>Help</a>
        </div> -->

        <div class="container-fluid p-0">
            <div class="row ui py-3 justify-content-center">
                <div class="col-md-3 p-3 m-1 shadow-sm">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Students: </span>
                        <span class="badge badge-success">23</span>
                    </p>
                    <div class="btn-group">
                        <a href="studentAdd.php" class="btn btn-sm btn-primary">Add new</a>
                        <a href="student.php" class="btn btn-sm btn-success">View all</a>
                    </div>
                </div>
                <div class="col-md-3 p-3 m-1 shadow-sm">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Employees: </span>
                        <span class="badge badge-success">23</span>
                    </p>
                </div>
                <div class="col-md-3 p-3 m-1 shadow-sm">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Courses: </span>
                        <span class="badge badge-success">23</span>
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi modi fugit minima ab vero accusantium voluptatem minus doloribus culpa cumque dolorem consequatur eveniet delectus quos atque blanditiis, porro labore maxime?
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>