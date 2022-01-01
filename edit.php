<?php $get_std = false;
include("./includes/nav.php");
include("./db.con.php"); ?>
<?php
if (!isset($_SESSION['username'])) {

    $_SESSION['msg'] = "You must log in first to view this page";
    header('location: login.php');
}

if(!isset($_GET['edit'])){
    header("Location: student.php");
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
                                    <form action="" method="post" autocomplete="off" id="editForm">
                                        <?php
                                        $out = '';
                                        $id = $_GET['edit'];
                                        if(!$id){
                                            print '<p class="alert alert-danger">Qu\'est-ce que voulez-vous faire?</p>';
                                        }else{
                                            $sql = mysqli_query($con, "SELECT * FROM student WHERE id_student = $id");
                                        
                                            if(@mysqli_num_rows($sql) > 0){ 
                                            $out .= '
                                            <div id="error"></div>
                                            <form id="editBtnForm" action="#" method="POST" enctype="multipart/form-data">
                                            <div class="list-group">
                                            ';
                                                while($row = mysqli_fetch_array($sql)){
                                                    $out .= '
                                                    <div class="" id="error"></div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id" id="UserId" value="'.$row['id_student'].'">
                                                        <label for="username" class="">Prenom</label>
                                                        <input type="text" required class="form-control"  id="username" placeholder="Username" name="username" value="'.$row['username'].'">
                                                        <input type="hidden" required class="form-control"  id="action" placeholder="action" name="action" value="editBtn">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="sname" class="">Nom</label>
                                                        <input type="text" required class="form-control" id="name" placeholder="Second name" name="sname" value="'.$row['sname'].'">
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="sname">Classe <span class="badge badge-success">'.$row['class'].'</span></label>
                                                            <select class="form-control" name="class" id="class" required>
                                                                <option value="">-- Selectionne --</option>
                                                                <option value="P1">P1</option>
                                                                <option value="P2">P2</option>
                                                                <option value="P3">P3</option>
                                                                <option value="P4">P4</option>
                                                                <option value="P5">P5</option>
                                                                <option value="P6">P6</option>
                                                            </select>    
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label for="sex">Sexe <span class="badge badge-success">'.$row['sex'].'</span></label>
                                                            <select name="sex" id="sex" class="form-control" required>
                                                                <option>-- selectionne --</option>
                                                                <option value="Male">Masculin</option>
                                                                <option value="Female">Feminin</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label for="annee">Annee scolaire <span class="badge badge-succss">'.$row['AnneeScolaire'].'</span></label>
                                                            '.$AnneesScolaires.'
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="email">E-mail des parents</label>
                                                            <input type="email" class="form-control" required name="email" value="'.$row['email'].'" id="email" placeholder="Email des parents">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file" class="">Profil</label>
                                                            <input type="file" class="form-control" name="file" id="file">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-warning btn-sm" value="'.$row['id_student'].'" id="editBtn" type="button">Mettre a jour</button>
                                                    </div>
                                                    ';
                                                }
                                            $out .= '</div>
                                            </form>
                                            ';
                                        }else{
                                            $out = '<p class="alert alert-danger">Mauvais Jeu :(</p>';
                                        }
                                    }
                                        print $out;
                                    ?>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input type="hidden" value="<?= $_GET['edit']; ?>" id="GetStudentData"
                                    class="form-control">
                                <div id="dataResult">
                                    <h3>Chargement...</h3>
                                </div>
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

<script>
const GetStudentData = document.querySelector('#GetStudentData').value,
    dataResult = document.querySelector('#dataResult')
let http = new XMLHttpRequest()

http.onload = () => {
    if (http.readyState === XMLHttpRequest.DONE) {
        if (http.status === 200) {
            let data = http.response
            // console.log("Data >> " + data) for testing
            dataResult.innerHTML = data
        }
    }
}
http.open("POST", "./configuration/action3.php", true)
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
http.send("action='GetStudentData'&Id=" + GetStudentData)
</script>
<script>
const EditBtn = document.querySelector('#editBtn'),
    Form = document.getElementById('editBtnForm')

EditBtn.onclick = () => {
    let http = new XMLHttpRequest()
    http.onload = () => {
        if (http.readyState === XMLHttpRequest.DONE) {
            if (http.status === 200) {
                let data = http.response
                // console.log("Data >> " + data) for testing
                if (data === 'success') {
                    location.href = `edit.php?edit=${Id}`
                } else {
                    document.querySelector('#error').innerHTML = `<p>${data}</p>`
                }
            }
        }
    }
    http.open("POST", "./configuration/editStudent.php", true)
    let formData = new FormData(Form)
    http.send(formData)
}
</script>