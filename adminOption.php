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

        <div class="row">
            <div class="col-md-10">
                <h2>Admin</h2>
                <p>
                    Dans cette partie je vais ajouter toute les options que l'administrateur aura besoin d'ajouter.
                </p>
                <ol>
                    <li>La classe</li>
                    <li>Les cours</li>
                    <li>Et Bien d'autres choses viendront avec les temps</li>
                </ol>
                <h1>
                    Je vais utilise le popup model pour eveiter plus d'interface...
                </h1>    
            </div>
        </div>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>