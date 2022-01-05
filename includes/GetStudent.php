<input type="hidden" value="<?= $_GET['getStudent']; ?>" id="GetStudentData" class="form-control">
<div class="btn-group">

    <a href="javascript:void()" id="go-back" class="btn btn-sm btn-success my-2">Retour</a>
    <a href="edit.php?edit=<?= $_GET['getStudent']?>" class="btn btn-sm btn-warning my-2">Modifier</a>
    <a href="edit.php?delete=<?= $_GET['getStudent']?>" class="btn btn-sm btn-danger my-2">Efface</a>

</div>
<div id="dataResult">
    <h3>Chargement...</h3>
</div>
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