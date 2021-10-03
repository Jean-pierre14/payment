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

        <?php if(isset($_GET['action'])):?>
            <?php if($_GET['action'] == 'Classe'):?>
                <div class="row">
                    <div class="col-md-4">
                    <div class="card card-body">
                    <h2>Classe</h2>
                </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-body">
                            <h2>Data...</h2>
                        </div>
                    </div>
                </div>
            <?php elseif($_GET['action'] == 'Cours'):?>
                <div class="card card-body">
                    <h2>Cours</h2>
                </div>
            <?php else:?>
                <div class="card card-body my-5">
                    <h2 class="text-center">
                        Sorry guy but you need bad things
                    </h2>
                    <a href="adminOption.php" class="text-center btn btn-lg btn-block btn-primary">Back</a>
                </div>
            <?php endif;?>
        <?php else:?>
            <div class="row justify-content-center">
            <div class="col-md-12 mb-2">
                <div class="card card-body">
                    <form action="" method="get">
                        <input type="search" name="search" id="search" placeholder="Search..." class="form-control">
                    </form>
                </div>
            </div>

            <div class="col-md-12 my-1">
                <div class="card card-body">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Classe</span>
                        <span class="badge badge-success">nombre des classe</span>
                        <a href="adminOption.php?action=Classe" class="btn btn-sm btn-success" type="button">Add</a>
                    </p>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <div class="card card-body">
                    <p class="d-flex justify-content-between align-items-center">
                        <span>Cours</span>
                        <span class="badge badge-success">nombre des cours</span>
                        <a href="adminOption.php?action=Cours" class="btn btn-sm btn-success" type="button">Add</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>