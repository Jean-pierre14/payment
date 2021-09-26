<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add class</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div id="msg" class="msg"></div>
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="classN">Class Name</label>
                            <input type="text" name="classN" id="classN" placeholder="Class Name" value="<?= $classN;?>"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="syear">Start Year</label>
                            <input type="number" id="syear" name="syear" placeholder="Starting year"
                                value="<?= $syear;?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="eyear">End Year</label>
                            <input type="number" placeholder="End year" id="eyear" name="eyear" value="<?= $eyear;?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="EventAddClass" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="myCours">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Cours</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div id="msg1" class="msg"></div>
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="coursN">Cours name</label>
                            <input type="text" name="coursN" id="coursN" placeholder="Cours Name" value="<?= $coursN;?>"
                                class="form-control">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <div id="classess">
                                <!-- Data comes from Ajax url -->
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" id="EventAddCours" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="myRegister">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Student</h4>
                <button type="button" class="close btn-sm" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div id="msg"></div>
                <form autocomplete="off" action="" method="post">

                    <?php include("./error.php");?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php print $stud_username; ?>" id="username"
                            placeholder="Username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="sname">Second name</label>
                        <input type="text" name="sname" value="<?php print $stud_sname; ?>" id="sname"
                            placeholder="Second name" class="form-control">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="class">Class</label>

                            <div class="ui" id="classess">
                                <select name="class" value="<?php print $stud_class; ?>" id="class" class="form-control"
                                    require>
                                    <option value="">-- select --</option>
                                    <option value="YEAR 1">Year 1</option>
                                    <option value="YEAR 2">Year 2</option>
                                    <option value="YEAR 3">Year 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="depart">Department</label>
                            <select name="depart" value="<?php print $stud_depart; ?>" id="depart" class="form-control"
                                require>
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
                            <input type="email" value="<?php print $stud_em; ?>" name="email" id="email"
                                placeholder="Email" class="form-control" readonly>
                            <?php else: ?>
                            <label for="email">Email</label>
                            <input type="email" value="<?php print $stud_em; ?>" name="email" id="email"
                                placeholder="Email" class="form-control">
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">`
                        <?php if($update == true): ?>
                        <button type="submit" name="student_update" class="icon ui labeled button green"><i
                                class="icon record"></i>UPDATE</button>
                        <?php else:?>
                        <button type="submit" id="register_student" name="register"
                            class="icon ui labeled button blue"><i class="icon save"></i>Register</button>
                        <?php endif;?>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- <script src="./js/jquery-3.4.0.min.js"></script> -->
<!-- <script src="./js/jqmodal.js"></script> -->
<script src="./js/lightbox-plus-jquery.min.js"></script>
<script src="./js/main.modal.js"></script>
<script src="./js/jquery-3.4.0.min.js"></script>
<script src="./js/dist/Chart.bundle.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
    let urls = './configuration/action.php'
    function EventAddClass() {
        let className = $('#classN').val();
        let syear = $('#syear').val();
        let eyear = $('#eyear').val();
        let action = 'EventAddClass';

        if (!className || !syear || !eyear) {
            alert('check all fields if there field')
        } else {
            // alert(className + + syear + + eyear)
            $.ajax({
                url: urls,
                method: 'post',
                data: { action, className, syear, eyear },
                success: function (data) {
                    // alert(data)
                    if (data == 'success') {
                        $('#msg').html('<p class="alert alert-success">Class added! </p>')
                        let className = $('#classN').val('');
                        let syear = $('#syear').val('');
                        let eyear = $('#eyear').val('');
                    } else {
                        $('#msg').html('<p class="alert alert-danger">Your class didn\'t added! :(</p>')
                    }
                }
            })
        }
    }

    
    function Hide(){
        $('.msg').hide()
    }
    
    function GetStudent() {
        let Id = $('#getStudent').val();
        let action = 'getStudent';
        $.ajax({
            url: urls,
            method: 'POST',
            data: { Id, action },
            success: function (data) {
                $('#resultGetstudent').html(data)
            }
        })
    }
    function GetClasses() {
        // alert("Classes")
        let action = 'getClasse'
        $.ajax({
            url: './configuration/action.php',
            method: 'POST',
            data: { action },
            success: function (data) {
                $('#allClass').html(data)
            }
        })
        setTimeout('GetClasses()', 5000)
    }
    function classess() {
        let action = 'classess'
        $.ajax({
            url: './configuration/action.php',
            method: 'post',
            data: { action },
            success: function (data) {
                $('#classess').html(data)
            }
        })
    }
    function adminResult(){
        let action = 'adminResult'
        $.ajax({
            url: './configuration/action.php',
            method: 'POST',
            data: {action},
            success: function(data){
                $('#adminResult').html(data)
            }
        })
    }
    $(document).ready(function () {
        GetClasses();
        adminResult();
        FetchAllStudent();
        let Url = './configuration/action.php';

        

        $('#EventAddClass').click(function () {
            EventAddClass();
        })
        function Hide(){
            $('.msg').delay(5000).hide('blind', 500)
        }
        $('#EventAddCours').click(function() {
            let coursName = $('#coursN').val();
            let classId = $('#class').val();
            let action = 'EventAddCours';

            // alert("Add")

            if(!coursName || !classId){
                $('#msg1').html('<p class="alert alert-warning">fields are not set</p>')
            }else{
                // onkeyup() on cours name field to check if the cours is not yet registered.
                // insert data into the database or table.
                $.ajax({
                    url: './configuration/action.php',
                    method: 'POST',
                    data: {action, coursName, classId},
                    success: function(data){
                        if(data == 'success'){
                            $('#msg1').html('<p class="alert alert-success">Data Regitered</p>')
                            $('#msg1').delay(300).hide()
                            
                        }else{
                            $('#msg1').html('<p class="alert alert-warning">' + data + '</p>')
                            setTimeout(function(){
                                $('.msg').hide({},300)
                            }, 3000)
                            $('#coursN').val('')
                            $('#class').val('--select--')
                        }
                        // console.log(data)
                    }
                })
                // $('#msg1').html('')
            }
        })
        GetStudent();
        classess();
        $('#search_txt').keyup(function () {
            let txt = $(this).val();
            if (txt != '') {
                $.ajax({
                    url: 'search.php',
                    method: 'post',
                    data: {
                        search: txt
                    },
                    dataType: 'text',
                    success: function (data) {
                        $('#result').html(data);
                        $('#normal-list').hide(300)
                    }
                });
            } else {
                $('#result').html('');
                $('#normal-list').show(250)
            }
        });

        $('#addStudent').click(() => {
            alert('It\'s works');
        });
        allStudents();
    });

    function allStudents() {
        let action = 'allStudents';

        $.ajax({
            url: './configuration/action.php',
            method: 'post',
            data: { action },
            success: function (data) {
                $('#allStudents').html(data)
            }
        })
        setTimeout('allStudents()', 1000);
    }
</script>
</body>

</html>