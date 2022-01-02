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
                    <h3 class="text-center">Enregistre un nouveau eleve*</h3>
                    <div id="error"></div>
                    <form autocomplete="off" action="" enctype="multipart/form-data" method="post"
                        id="register_studentForm">
                        <input type="hidden" value="register_studentForm" name="action"/>
                        <div class="form-group">
                            <label for="username">Prenom<span class="text-bod text-danger">*</span></label>
                            <input type="text" name="username" value="<?= $stud_username; ?>" id="username"
                                placeholder="Username" class="form-control">
                            <input type="hidden" name="action" value="register_studentForm" id="action"
                                placeholder="Username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="sname">Nom<span class="text-bod text-danger">*</span></label>
                            <input type="text" name="sname" value="<?= $stud_sname; ?>" id="sname" placeholder="Nom"
                                class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="class">Classe <span class="text-bod text-danger">*</span></label>

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
                                <label for="depart">Annee scolaire<span class="text-bod text-danger">*</span></label>
                                <?php echo $AnneesScolaires;?>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="sex">Sexe<span class="text-bod text-danger">*</span></label>
                                <select name="sex" value="<?php print $stud_sex; ?>" id="sex" class="form-control"
                                    require>
                                    <option value="">-- select --</option>
                                    <option value="Male">Masculin</option>
                                    <option value="Female">Feminin</option>
                                </select>
                            </div>

                            <div class="form-group col-md-9">

                                <?php if($email_edit == true):?>
                                <label for="email">E-mail des parents<span class="text-bod text-danger">*</span></label>
                                <input type="email" value="<?php print $stud_em; ?>" name="email" id="email"
                                    placeholder="Email" class="form-control" readonly>
                                <?php else: ?>
                                <label for="email">E-mail des parents <span
                                        class="text-bod text-danger">*</span></label>
                                <input type="email" value="<?php print $stud_em; ?>" name="email" id="email"
                                    placeholder="Email" class="form-control">
                                <?php endif;?>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="file">Photo de l'eleve<span class="text-bod text-danger">*</span></label>
                                <input type="file" name="file" id="file" placeholder="File" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <?php if($update == true): ?>
                            <button type="submit" name="student_update" class="icon ui labeled button green"><i
                                    class="icon record"></i>UPDATE</button>
                            <?php else:?>
                            <button type="button" id="register_student" name="register"
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
<script src="./js/jquery-3.4.0.min.js"></script>
<script>
document.getElementById('go-back').addEventListener('click', () => {
    history.back();
});

$(document).ready(function() {
    // $('#register_student').click(function() {
    //     $.ajax({
    //         url: './configuration/action.php',
    //         method: 'POST',
    //         data: $('#register_studentForm').serialize(),
    //         success: function(data) {
    //             if (data === 'success') {
    //                 // alert(data)
    //                 $('#register_studentForm')[0].reset()
    //             } else {
    //                 $('#error').html(data)
    //             }
    //         }
    //     })
    // })
})

const BtnCreate = document.querySelector('#register_student')
const reg = document.querySelector('#register_studentForm')
BtnCreate.onclick = () =>{
    let xhr = new XMLHttpRequest()
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response
                alert(data)
            }
        }
    }
    xhr.open("POST", "./configuration/action12.php", true)
    const createData = new createData(reg)

    xhr.send(create)
}
</script>