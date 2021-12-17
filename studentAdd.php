<?php $get_std = false;
include("./includes/nav.php");

include("./db.con.php");

if (!isset($_SESSION['username'])) {

    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

?>

<div class="container-fluid mt-5" style="margin-top: 50px">
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-10">
            <div class="card my-5">
                <div class="card-body">
                    <h3 class="text-center">Registration of new student</h3>
                    <form autocomplete="off" action="" method="post">
                        <?php include "./error.php";?>
                        <div class="form-group">
                            <label for="username">Prenom</label>
                            <input type="text" name="username" value="<?= $stud_username; ?>" id="username"
                                placeholder="Username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="sname">Nom</label>
                            <input type="text" name="sname" value="<?= $stud_sname; ?>" id="sname" placeholder="Nom"
                                class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="class">Classe </label>

                                <div class="ui" id="classess">
                                    <select name="class" value="<?= $stud_class; ?>" id="class" class="form-control"
                                        require>
                                        <option value="">-- select --</option>
                                        <option value="P1">P1</option>
                                        <option value="P2">P2</option>
                                        <option value="P3">P3</option>
                                        <option value="P4">P4</option>
                                        <option value="P5">P5</option>
                                        <option value="P6">P6</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-8">
                                <label for="depart">Annee scolaire</label>
                                <select name="AnneScolaire" value="<?= $stud_depart; ?>" id="AnneeScolaire"
                                    class="form-control" require>
                                    <option value="">-- select --</option>
                                    <option value="computer science">Computer Science</option>
                                    <option value="Law">Law</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Economy">Economy</option>
                                    <option value="Accounting">Accounting</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="sex">Sexe</label>
                                <select name="sex" value="<?php print $stud_sex; ?>" id="sex" class="form-control"
                                    require>
                                    <option value="">-- select --</option>
                                    <option value="Male">Masculin</option>
                                    <option value="Female">Feminin</option>
                                </select>
                            </div>

                            <div class="form-group col-md-9">

                                <?php if($email_edit == true):?>
                                <label for="email">E-mail des parents</label>
                                <input type="email" value="<?php print $stud_em; ?>" name="email" id="email"
                                    placeholder="Email" class="form-control" readonly>
                                <?php else: ?>
                                <label for="email">E-mail des parents</label>
                                <input type="email" value="<?php print $stud_em; ?>" name="email" id="email"
                                    placeholder="Email" class="form-control">
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php if($update == true): ?>
                            <button type="submit" name="student_update" class="icon ui labeled button green"><i
                                    class="icon record"></i>UPDATE</button>
                            <?php else:?>
                            <button type="submit" id="register_student" name="register"
                                class="icon ui labeled button blue"><i class="icon save"></i>Register</button>
                            <?php endif;?>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0)" id="go-back" class="btn btn-sm btn-danger">close</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('go-back').addEventListener('click', () => {
    history.back();
});
</script>