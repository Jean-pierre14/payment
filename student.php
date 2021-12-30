<?php include("./includes/nav.php"); ?>
<div class="side-bar ui bg-dark white">
    <?php include("./includes/sideBar.php");?>
</div>
<div class="side-bar ui bg-dark white">
    <!-- include the sideBar -->
    <?php include("./includes/sideBar.php"); ?>
</div>

<div class="ui main">
    <!-- add dashboard ui -->
    <?php include("./includes/student_Add.php");?>
    <!-- and dashboard -->
</div>

<?php include("./footer.php");?>

<script>
const search = document.querySelector('#searchTextStudent')

search.onkeyup = () => {
    let txt = search.value
    let text = txt.trim()

    if (text !== '') {
        results.innerHTML = ''
        let xhr = new XMLHttpRequest()
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response
                    // console.log("Data >> " + data) for testing
                    results.innerHTML = data
                }
            }
        }
        xhr.open("POST", "././configuration/action3.php", true)
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send("seach=" + text)
    } else {
        Fetch()
    }
}
Fetch()
const results = document.querySelector('#results')

function Fetch() {

    let xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response
                // console.log("Data >> " + data) for testing
                results.innerHTML = data
            }
        }
    }
    xhr.open("POST", "./configuration/action2.php", true)
    xhr.send()
}
</script>