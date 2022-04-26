<?php
    $email = '';
    include("./header.php");
    include("./includes/nav.php");
?>
<div class = "side-bar ui bg-dark white"
style = "top:0" >
    <?php include("./includes/sideBar.php");?> 
</div>

<div class="ui main" >
    <!-- Lecturers pages lecturerStatus -->
    <?php include("./includes/lecturerStatus.php") ?>
    <!-- End pages lecturerStatus -->
    
</div>

<div class="modalBoxLecturer">
    <div class="modalL" id="modalL">
        <!-- Data -->
        <p>Chargement...</p>
    </div>
</div>

<script>
    const BtnRegistration = document.getElementById('lectureRegister'),
        form = document.querySelector('#lecturerForm')

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
                    document.querySelector('#Results').innerHTML = ''
                } else {
                    error.innerHTML = `<p class="alert alert-danger">${data}</p>`
                }
            }
        }
        Select()
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

var searchEvent = document.getElementById('search_lecturer');

// const results = document.querySelector('#Results')

searchEvent.onkeyup = () => {
    let txt = searchEvent.value
    let text = txt.trim()


    // console.log(text)

    if (text !== '') {

        document.querySelector('#Resutls').innerHTML = ''

        let xhr = new XMLHttpRequest()

        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response
                    document.querySelector('#searchElements').innerHTML = data
                }
            }
        }

        xhr.open("POST", "./actions/searchLecture.php")
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send("search=" + text)


    } else {
        document.querySelector('#searchElements').innerHTML = ''
        Select()

    }
}

</script>

<?php include("./footer.php");?> 

<script>
    $(document).ready(function() {
        $(document).on('click', '.CloseEvent', function(){
            $('.modalBoxLecturer').hide(250)
            Select()
        })
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
        })

        $(document).on("click", ".View-Lecturer", function(){
            
            let Id = $(this).attr('id')
            let EventL = 'viewLecturer'

            // alert('Hello user: ' + Id)

            $('.modalBoxLecturer').show(500)

            $.ajax({
                    url: './actions/actions.php',
                    method: 'POST',
                    data: {Id, EventL},
                    success: function(data) {
                        // console.log(Id, EventL)
                        $('#modalL').html(data)
                    }
                })

        })

        // Edit Lecturer
        $(document).on("click", ".Edit-Lecturer", function(){
            let Id = $(this).attr('id')
            // alert('Id Edit ' +Id)

            $('#form').hide(200)
        })
    }) 

</script>