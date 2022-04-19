<?php
    $email = '';
    include("./header.php");
    include("./includes/nav.php");
?>
<div class="side-bar ui bg-dark white" style="top:0">
    <?php include("./includes/sideBar.php");?>
</div>

<div class="ui main">
    <!-- Lecturers pages lecturerStatus -->
    <?php include("./includes/lecturerStatus.php") ?>
    <!-- End pages lecturerStatus -->
</div>

<script>
const BtnRegistration = document.getElementById('lectureRegister')

const form = document.querySelector('#lecturerForm')

// To preventDefault Event
form.onsubmit = (e) => {
    e.preventDefault()
}
BtnRegistration.onclick = () => {
    // alert("Good job") Test
    // Start the XHR 
    let xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response
                let error = document.querySelector('#error')
                if (data === 'success') {
                    error.innerHTML = '<p class="alert alert-success">Registration success</p>'
                    form.reset()
                    Select()
                } else {
                    error.innerHTML = `<p class="alert alert-danger">${data}</p>`
                }
            }
        }
    }

    xhr.open('POST', './configuration/Lecturer.php', true)
    // Let us now send data to the backend side
    const formData = new FormData(form)
    xhr.send(formData)
}
const Results = document.querySelector('#Resutls')
Select()

function Select() {
    let xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response
                Results.innerHTML = data
            }
        }
    }
    xhr.open("GET", "./configuration/Lecturers.php", true)
    xhr.send()
}


const text = document.querySelector('#search_lecturer')

text.onkeyup = ()=>{
    text = search.value
    let txt = text.trim();
    alert(txt)

    if (txt !== '') {
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
        xhr.open("POST", "./actions/searchLecturer.php", true)
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send("search=" + text)
    } else {
        Select()
    }
}

</script>

<?php include("./footer.php");?>
<script>
$(document).ready(function() {
    $(document).on("click", ".Edit-Lecturer", function() {
        let Id = $(this).attr('id')
        let action = "GetLecturer"
        $.ajax({
            url: './configuration/action.php',
            method: 'POST',
            dataType: 'JSON',
            data: {
                action,
                Id
            },
            success: function(data) {
                alert(data)
            }
        })
        // let xhr = new XMLHttpRequest()
        // xhr.onload = () => {
        //     if (xhr.readyState === XMLHttpRequest.DONE) {
        //         if (xhr.status === 200) {
        //             let data = xhr.response
        //             alert("ghjjk" + data)
        //         }
        //     }
        // }
        // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        // xhr.open("POST", "./configuration/GetLecturer.php", true)
        // xhr.send(`Id=${Id}`)
    })
    // alert("Good job")
})
</script>