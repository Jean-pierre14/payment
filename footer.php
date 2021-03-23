<!-- <script src="./js/jquery-3.4.0.min.js"></script> -->
<!-- <script src="./js/jqmodal.js"></script> -->
<script src="./js/lightbox-plus-jquery.min.js"></script>
<script src="./js/main.modal.js"></script>
<script src="./js/jquery-3.4.0.min.js"></script>
<script src="./js/dist/Chart.bundle.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
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