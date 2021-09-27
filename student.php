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
    $(document).ready(function(){
        FetchAllStudent()
        Fetch()
    })
    let url = 'http://localhost/payment/configuration/action.php'
    function Fetch(){
        action = 'fetch'
        $.get(`${url}?action=${action}`, function(data){
            console.log(data)
        })
    }
    function FetchAllStudent(){
        let action = 'fetch'
        $.ajax({
            url: './configuration/action.php',
            method: 'get',
            dataType: 'JSON',
            data: {action},
            success: function(data){
                // render(data)
                console.log(data)
            }
        })
        }
        function render(data){
            console.log("Cool "+data)
        }
</script>