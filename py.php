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
            <div class="col-md-4">
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
            <div class="col-md-8">
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
            </div>
        </div>
    </div>
</div>
</div>

<script>
const results = document.getElementById('results')
window.onload = () => {

    FetchAll()
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