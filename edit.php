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
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-body mt-2s">
                        <h3 class="bg-success p-2">Mise a jour</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-body shadow-sm">
                                    <form action="" method="post">
                                        <?php
                                        $id = $_GET['edit'];
                                        $sql = mysqli_query($con, "SELECT * FROM student WHERE id_student = ${id}");
                                        $out = '';
                                        if(@mysqli_num_rows($sql) > 0){
                                            
                                        $out .= '<div class="list-group">';
                                            while($row = mysqli_fetch_array($sql)){
                                                $out .= '
                                                <div class="form-group">
                                                    <label for="username" class="">Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" name="username" value="'.$row['username'].'">
                                                </div>

                                                <div class="form-group">
                                                    <label for="sname" class="">Second name</label>
                                                    <input type="text" class="form-control" placeholder="Second name" name="sname" value="'.$row['sname'].'">
                                                </div>
                                                ';
                                            }
                                        $out .= '</div>';
                                        }else{
                                            $out = '<p class="alert alert-danger">Mauvais Jeu :(</p>';
                                        }
                                        print $out;
                                    ?>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="<?= $_GET['edit']; ?>" id="editUser" class="form-control">
                                <div id="dataResult"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('./footer.php'); ?>