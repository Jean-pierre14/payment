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
    <div class="container-fluid">
        <div class="ui row">
            <div class="col-md-3">
                <div class="card card-body">
                    <form action="" autocomplete="off" method="post">
                        <input type="search" name="search" id="searchText" placeholder="Recherche..."
                            class="form-control">
                    </form>
                </div>
                <div id="results" class="card mt-2 card-body">
                    <p>Chargment... <img src="./images/loader.gif" width="32px" height="32px" alt="loading..."></p>
                </div>
            </div>
            <div class="col-md-9">
                <?php if(isset($_GET['get'])):?>
                <input type="hidden" id="id" name="id_student" value="<?= $_GET['get']?>" class="form-control">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header p-2">
                                <h4>Ajouter payement</h4>
                            </div>
                            <div class="card-body">
                                <div id="error"></div>
                                <div id="editPy">
                                    <form action="" id="FormData" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="unique_id" id="unique_id"
                                                value="<?= $_GET['get'];?>" class="form-control">
                                            <label for="mount">Montant</label>
                                            <input type="number" name="mount" id="mount" placeholder="Montant"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="bank">Banque</label>
                                            <select name="bank" id="bank" class="form-control">
                                                <option value="">-- seectionner --</option>
                                                <option value="Bank of Kigali">Bank of Kigali</option>
                                                <option value="Unguka Bank">Unguka Bank</option>
                                                <option value="Irembo">Irembos</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="pyBtn" class="btn btn-sm btn-success"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="dataStudent">
                            <p>Chargement...</p>
                        </div>
                    </div>
                </div>
                <?php else:?>
                <div class="card card-body">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe nobis et harum. Voluptatem non
                        accusamus libero quos voluptas est dolorem nam, officia veritatis rem esse dolore explicabo
                        voluptatum debitis corrupti vitae ex animi amet, aliquid itaque commodi obcaecati sed temporibus
                        reiciendis? Eligendi dolores officiis repellat, veritatis veniam corrupti ullam, officia
                        praesentium ratione et aliquid sit nobis accusamus atque velit adipisci magni est, architecto
                        vitae. Repudiandae, nostrum id tempore a repellat, eligendi dolorum, odio eveniet voluptatibus
                        aperiam fuga totam explicabo labore nemo quibusdam mollitia commodi. Assumenda eius, sunt ut
                        atque, enim a fugit cum itaque aliquam eos delectus dignissimos facilis laborum laboriosam unde,
                        aliquid dolore hic. Doloremque ea a quae vel quasi illum iure minima repellat unde harum nam
                        quas, labore voluptate? Aut a repellendus aliquid maiores atque aspernatur alias autem maxime
                        magni earum officiis corrupti repudiandae vitae consequuntur error praesentium amet numquam,
                        neque voluptatum odio cupiditate! Provident dolore, porro ipsum quas aliquid quam necessitatibus
                        id, atque perferendis obcaecati officiis repellendus hic. Sunt, provident voluptates sed vel
                        distinctio nostrum possimus consequatur nam commodi tempora minus. Asperiores accusamus quam
                        necessitatibus explicabo, soluta quibusdam at quod nulla aperiam reprehenderit, molestias
                        tempora quos beatae voluptate velit architecto, atque maiores est facilis accusantium. Ducimus,
                        numquam?
                    </p>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
</div>

<script>
const results = document.getElementById('results')
window.onload = () => {

    FetchAll()
    Datastudent()


    const pyBtn = document.getElementById('pyBtn'),
        form = document.getElementById('FormData'),
        error = document.getElementById('error')

    pyBtn.textContent = 'Enregistre'

    pyBtn.onclick = () => {

        const mount = document.getElementById('mount').value
        const id = document.getElementById('unique_id').value
        let bank = document.getElementById('bank').value

        let mountTrim = mount.trim()
        if (!mountTrim || !id || !bank) {
            console.log('Remplissez tout champs svp :) &&&&&&&&&&&&&&&&&&&')
            error.innerHTML = '<p class="alert alert-danger">Remplissez tout champs svp :)</p>'
        } else {
            error.innerHTML = '<p>Chargement...</p>'
            let xhr = new XMLHttpRequest()
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response
                        console.log(data)

                        if (data !== 'error') {
                            location.href = `py.php?get=${id}`
                        } else {
                            error.innerHTML = '<p class="Verifier si tout vos donnees* sont la*"></p>'
                        }
                    }
                }
            }
            xhr.open("POST", "./configuration/enregistrement.php", true)
            // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
            let formData = new FormData(form)
            xhr.send(formData)
        }
    }
}


const dataStudent = document.getElementById('dataStudent')

function Datastudent() {
    let id = document.getElementById('id'),
        Id = id.value


    let xhr = new XMLHttpRequest()
    xhr.onload = () => {

        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response
                dataStudent.innerHTML = data
            }
        }

    }
    xhr.open("POST", "./configuration/action3.php", true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("Action=dataStudent&Id=" + Id)
}

const search = document.querySelector('#searchText')
search.onkeyup = () => {
    let txt = search.value,
        text = txt.trim()

    if (text != '') {
        results.innerHTML = ''
        // console.log('Ed ' + text)
        let xhr = new XMLHttpRequest()
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response
                    results.innerHTML = data
                }
            }
        }
        xhr.open("POST", "./configuration/action3.php", true)
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send(`searchpy=${text}`)
    } else {
        FetchAll()
    }
}

function FetchAll() {

    let xhr = new XMLHttpRequest()

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response
                results.innerHTML = data
            }
        }
    }

    xhr.open("POST", "./configuration/payement.php", true)

    xhr.send()
}
</script>


<?php include('./footer.php'); ?>

<script>
$(document).ready(function() {

    $(document).on("click", ".reduire", function() {
        $('#studentCard').hide(500)
    })

    $('document').on("click", "#edit", function() {
        alert("Edit")
    })

})
</script>