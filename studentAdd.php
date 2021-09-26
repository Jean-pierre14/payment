
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
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?= $stud_username; ?>" id="username" placeholder="Username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="sname">Second name</label>
                            <input type="text" name="sname" value="<?= $stud_sname; ?>" id="sname" placeholder="Second name" class="form-control">
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="class">Class </label>

                                        <div class="ui" id="classess">
                                            <select name="class" value="<?= $stud_class; ?>" id="class" class="form-control" require>
                                                <option value="">-- select --</option>
                                                <option value="YEAR 1">Year 1</option>
                                                <option value="YEAR 2">Year 2</option>
                                                <option value="YEAR 3">Year 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <label for="depart">Department</label>
                                        <select name="depart" value="<?= $stud_depart; ?>" id="depart" class="form-control" require>
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
                                <label for="sex">Sex</label>
                                <select name="sex" value="<?php print $stud_sex; ?>" id="sex" class="form-control" require>
                                    <option value="">-- select --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group col-md-9">
                                
                                <?php if($email_edit == true):?>
                                    <label for="email">Email</label>
                                    <input type="email" value="<?php print $stud_em; ?>" name="email" id="email" placeholder="Email" class="form-control" readonly>
                                <?php else: ?>
                                    <label for="email">Email</label>
                                    <input type="email" value="<?php print $stud_em; ?>" name="email" id="email" placeholder="Email" class="form-control"> 
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="form-group">   
                            <?php if($update == true): ?>
                                <button type="submit" name="student_update" class="icon ui labeled button green"><i class="icon record"></i>UPDATE</button>
                            <?php else:?>
                                <button type="submit" id="register_student" name="register" class="icon ui labeled button blue"><i class="icon save"></i>Register</button>
                            <?php endif;?>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0)" onclick="functionBack()" class="btn btn-sm btn-danger">close</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function functionBack(){
        window:location.href = 'index.php'
    }
</script>