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
            let action = 'Edit-Lecturer'

            $('#form').hide(200)
            
            $.ajax({
                    url: './actions/actions.php',
                    method: 'POST',
                    data: {Id, action},
                    beforeSend: function(){
                        $('#form').show(100)
                        $('#form').html('<p class="text-center alert alert-success">Chargement...</p>')
                    },
                    dataType: 'html',
                    success: function(data) {
                        $('#form').show(100)
                        // console.log(Id, EventL)
                        $('#form').html(data)
                    }
                })
        })
        $(document).on("click", ".Back", function(){
            $('#form').html('')
            let form = $('#form')
            $('#form').html(`
            <!-- error page -->
                        <?php include("./error.php"); ?>
                        <!-- include the total page -->
                <h3 class="text-center white p-2 bg-success">Enseignants</h3>
                    <form action="" method="post" id="lecturerForm" enctype="multipart/form-data">
                        <div id="error"></div>
                        <div class="form-group">
                            <label for="name"><i class="icon user"></i>Name</label>
                            <input type="text" name="name" value="<?php print $name; ?>" placeholder="Lecturer name"
                                class="form-control" id="name">
                            <input type="hidden" name="action" value="LecturerForm" id="action" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sname"><i class="icon user"></i>Second Name</label>
                                <input type="text" name="sname" value="<?php print $sname; ?>" placeholder="second name"
                                    class="form-control" id="sname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname"><i class="icon user"></i>Last Name</label>
                                <input type="text" name="lname" value="<?php print $lname; ?>" placeholder="Last name"
                                    class="form-control" id="lname">
                            </div>


                            <div class="form-group col-md-4">
                                <label for="cours"><i class="icon book"></i>Cours</label>
                                <input type="text" name="cours" value="<?php print $cours; ?>" placeholder="cours"
                                    class="form-control" id="cours">
                            </div>

                            <div class="form-group col-md-8">
                                <label for="location"><i class="icon map"></i>Location</label>
                                <input type="text" name="location" value="<?php print $location; ?>" placeholder="location"
                                    class="form-control" id="location">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email"><i class="icon map"></i>Email</label>
                                <input required type="email" name="email" placeholder="Email<?php print $email;?>"
                                    class="form-control" id="location">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="nationalite"><i class="icon flag"></i>Nationalite</label>
                                <input type="text" name="nationalite" value="<?php print $nationalite; ?>"
                                    placeholder="nationalite" class="form-control" id="nationalite">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="file"><i class="icon photo"></i>Photo de Profil</label>
                                <input type="file" name="file" class="form-control" id="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" id="lectureRegister" class="labeled button submit ui blue icon"><i
                                    class="icon save"></i>Register</button>
                        </div>
                    </form>
            `)
        })
    }) 

</script>