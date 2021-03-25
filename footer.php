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
                <div id="msg"></div>
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

<!-- <script src="./js/jquery-3.4.0.min.js"></script> -->
<!-- <script src="./js/jqmodal.js"></script> -->
<script src="./js/lightbox-plus-jquery.min.js"></script>
<script src="./js/main.modal.js"></script>
<script src="./js/jquery-3.4.0.min.js"></script>
<script src="./js/dist/Chart.bundle.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
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
                url: './configuration/action.php',
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

    function GetStudent() {
        let Id = $('#getStudent').val();
        let action = 'getStudent';
        $.ajax({
            url: './configuration/action.php',
            method: 'POST',
            data: { Id, action },
            success: function (data) {
                $('#resultGetstudent').html(data)
            }
        })
    }
    $(document).ready(function () {
        $('#EventAddClass').click(function () {
            EventAddClass();
        })
        GetStudent();
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